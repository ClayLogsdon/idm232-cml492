<?php
if(!isset($_COOKIE['token1']) || !isset($_COOKIE['token2'])) {
	
    header('Location: ' . DOMAIN . '/admin/login.php');
    exit;
} 

$token1 = $_COOKIE['token1'];
$token2 = $_COOKIE['token2'];

class Cookie extends database{
	public function getUser()
	{
		$sql = "SELECT u.*, st.cl_expiry_date AS expiry_date FROM tb_session_token st INNER JOIN tb_users u ON u.cl_code=st.cl_client_code WHERE st.cl_access_code=? AND  u.cl_code=?  AND u.deleted_at IS NULL  AND st.cl_expiry_date>='" . date("Y-m-d") . "' ORDER BY cl_expiry_date DESC";
		$where[] = $_COOKIE['token1'];
		$where[] = $_COOKIE['token2'];
		return $this->callQUery($sql, $where);
	}

	public function insertNewSession($authCode, $userCode)
	{
		$data['cl_access_code'] = $authCode;
		$data['cl_client_code'] = $userCode;
		$data['cl_expiry_date'] = date('Y-m-d', strtotime('+ 15 days'));
		return $this->insert('tb_session_token', $data);
	}
}

$objCookie = new Cookie();
$user = $objCookie->getUser();
if(empty($user))
{
	header('Location: ' . DOMAIN . '/admin/login.php');
    exit;
}

$user = $user[0];

$expiryDate = $user['expiry_date'];
$earlier = new DateTime('now');
$later = new DateTime($expiryDate);

$diff = $later->diff($earlier)->format("%a");
if($diff < 3)
{
	$res = $objCookie->insertNewSession($authCode, $userCode);
	if($res)
	{
		setcookie('token1',$authCode ,time() + (86400 * 30), "/");
		setcookie('token2',$user['cl_code'] ,time() + (86400 * 30), "/");
	}
}
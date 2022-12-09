<?php
function checkAuth($data, $user)
{
	foreach($data AS $key => $value)
	{
		if($value == $user['cl_type'])
		{
			return 1;
			exit;
		}
	}

	return 0;
	exit;
}
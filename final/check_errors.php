<?php
if(isset($_SESSION['error_message']) && isset($_SESSION['error_type']))
{
	?>
	<div class="alert alert-<?php echo htmlspecialchars($_SESSION['error_type'])?>"><?php echo $_SESSION['error_message'] ?></div>
	<?php
	unset($_SESSION['error_message']);
	unset($_SESSION['error_type']);
}
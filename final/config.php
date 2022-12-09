<?php
/* Basic Config Files */
DEFINE('DOMAIN', 'https://clayfarah.com/idm232/final');
DEFINE('TABLE_PREFIX', 'tb');
DEFINE('COLUMN_PREFIX', 'cl');
DEFINE('NO_OF_RECORDS', 20);
DEFINE('VERSION', 27);
DEFINE('GOOGLE_MAP_KEY', 'AIzaSyCvmHJs4LpBv4qf2QJapH7OHx4sRo_lV0U');


/* SMTP Email Details */
DEFINE('SMTP_HOST', '');
DEFINE('SMTP_EMAIL', '');
DEFINE('SMTP_PASSWORD', '');
DEFINE('SMTP_PORT', '465');
DEFINE('SMTP_ENCRYPTION', 'ssl');
DEFINE('SMTP_SET_FROM_EMAIL', '');
DEFINE('SMTP_SET_FROM_NAME', '');

DEFINE('DEBUG', 1);

if(DEBUG == 1)
{
	error_reporting(1);
	ini_set('display_errors', 1);
}
else
{
	error_reporting(0);
	ini_set('display_errors', 0);
} ?>

<?php 
// DB credentials.
define('DB_HOST','bbdms.cpfxm0zwrgsj.ap-south-1.rds.amazonaws.com:3306');
define('DB_USER','rootuser');
define('DB_PASS','useruser');
define('DB_NAME','bbdms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Errors : " . $e->getMessage());

}
?>
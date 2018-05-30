<?php
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "mysmartopinion");



$db = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);
if ($db->connect_error){
    die("non è possibile entrare nel database: ".$db->connect_error);
}
return $db;

?>
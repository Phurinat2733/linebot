<?php 
$host = "ec2-107-22-211-182.compute-1.amazonaws.com";
$user = "mmdkvvqziulstc";
$pass = "e10240d71df70c411f5201bc37491e9091491ff276b8d8b66f8e507ea5b7dc22";
$db = "dcv361109jo6fh";

$dbconn = pg_connect("host=" . $GLOBALS['host'] . " port=5432 dbname=" . $GLOBALS['db'] . " user=" . $GLOBALS['user'] . " password=" . $GLOBALS['pass']) or die('Could not connect: ' . pg_last_error());

$sqlgetlastrecord = "select * from weatherstation order by \"DATETIME\" desc limit 1";
$rs = pg_query($dbconn, $sqlgetlastrecord) or die("Cannot execute query: $query\n");
while ($row = pg_fetch_row($rs))
{//
    echo  $row[0]." ".$row[1];
}

?>
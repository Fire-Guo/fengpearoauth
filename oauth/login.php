<?php
//receive the data from client
$name=$_GET["username"];
$pwd=$_GET["password"];
require_once ("../config.inc.php");
//telnet mysql
$db=mysqli_connect($host,$dbname,$dbpw,$database);
//select the databases
$sql="select * from account where username ='$name'";
$res= mysqli_query($db,$sql);
$nub= mysqli_num_rows($res);
if($nub==0){
	echo "false";
}
//echo
while($rs=mysqli_fetch_object($res))
{
	if($rs->password!=$pwd)
	{
		echo "false";
	}
	else 
	{
        echo $rs->uid;
	}
}
?>

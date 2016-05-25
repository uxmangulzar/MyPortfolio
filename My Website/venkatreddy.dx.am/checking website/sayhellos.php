<?php 
define('DB_HOST', 'pdb3.awardspace.net');
define('DB_NAME', '1966971_venkat'); 
define('DB_USER','1966971_venkat');
define('DB_PASSWORD','Reddys2010@');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 
function NewUser() 
{
  $numberOfHellos = $_POST['counter']; 
  $query = "INSERT INTO sayhi (numberOfHellos) VALUES ('$numberOfHellos')";
  $data = mysql_query ($query)or die(mysql_error());
  if($data)
  {
    echo "YOUR REQUEST IS COMPLETED...";
  }
}
if(isset($_POST['submit']))
{ 
  NewUser(); 
}
?>

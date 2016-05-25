<?php 
define('DB_HOST', 'pdb3.awardspace.net');
define('DB_NAME', '1966971_venkat'); 
define('DB_USER','1966971_venkat');
define('DB_PASSWORD','Reddys2010@');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function Sign_Up() 
{
  $username = $_POST['username']; 
  if(!empty($_POST['username'])) 
  //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
  {
    
    $query = mysql_query("SELECT * FROM sys_user WHERE username = '$_POST[username]'") or die(mysql_error()); 
    
    if($row = mysql_fetch_array($query) )
      //or die(mysql_error())
    {
      header('Location: http://www.google.com');
   	}
    else if (!$row = mysql_fetch_array($query) or die(mysql_error()))
    { 
     	echo "Sorry Details You entered not matched";
    }
  }
  else
  {
   echo "Please enter credentials";
  }
}
if(isset($_POST['submit']))
{ 
  Sign_Up(); 
}
?>

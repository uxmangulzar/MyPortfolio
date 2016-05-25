<?php 
define('DB_HOST', 'pdb3.awardspace.net');
define('DB_NAME', '1966971_venkat'); 
define('DB_USER','1966971_venkat');
define('DB_PASSWORD','Reddys2010@');
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error()); 

function Sign_Up() 
{
  $securitycode = $_POST['securitycode']; 
  if(!empty($_POST['securitycode'])) 
  //checking the 'user' name which is from Sign-Up.html, is it empty or have some text 
  {
    
    $query = mysql_query("SELECT * FROM sys_user WHERE securitycode = '$_POST[securitycode]'") or die(mysql_error()); 
    
    if($row = mysql_fetch_array($query) )
      //or die(mysql_error())
    {
      
       header('Location: ExpCert.php');
      ?>
    <script type="text/javascript">
                    
                    

                    $(document).ready(function(){
                      $("#buttonHide").click(function(){
                                    $("#hideContent").hide();
                                   });
                      
                    
                      });
                    

                    
                    </script>
    <?php

   	}
    else if (!$row = mysql_fetch_array($query))
    { 
      
     	echo "Sorry Details You entered not matched";
      
    }
  }
  else
  {
    
   echo '<script language="javascript">';
    echo 'alert("Please Enter Credentials");';
    echo '</script>';

  }
}

if(isset($_POST['submit']))
{ 
  Sign_Up(); 
}
?>

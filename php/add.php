
<?php 
  mysql_connect('localhost', 'root', '') or die("Error establishing connection!"); 
  mysql_selectdb('test') or die("Can not select databese!"); 
   
  mysql_query("CREATE TABLE IF NOT EXISTS test( 
              user_name VARCHAR(100), 
              age       TINYINT)               
              ") or die("Can not create table!!!"); 
   
  $user_name = mysql_escape_string(@$_REQUEST['user_name'] or die("You have not entered USER NAME field!")); 
  $age = mysql_escape_string(@$_REQUEST['age'] or die("You have not entered AGE field!")); 
   
  mysql_query("INSERT INTO users SET 
              user_name = \"$user_name\", 
              age       = \"$age\" 
              ") or die("Can not execute insert!!!); 
?>
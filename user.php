<?php

  $host="localhost";
  $user="root";
  $password="";
  $db="login";


  mysql_connect($host, $user, $password);
  mysql_select_db($db);

  if (isset($_POST['username'])) {

      $un=$_POST['username'];
      $pw=$_POST['password'];

      $sql="SELECT * FROM `admin` WHERE UN='".$un."'AND PW='".$pw."' limit 3";

      $result=mysql_query($sql);

      if (mysql_num_rows($result)==3) {
        echo "welcome";
        exit();
      }
      else {
        echo "Please, try again";
        exit();
      }
  }

?>



<!-- $username = $_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($username);
$password = mysqli_real_escape_string($password);

mysql_connect('localhost','root', '');
mysql_select_db('admin');

$result = mysql_query("select * FROM user where username = '$username' AND password = '$password'")
or die("failed to query database ".mysql_error());

$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password ){
  echo "Welcome, Tanmay".$row['username'] ;
}
else {
  echo "Please, try again";
}-->

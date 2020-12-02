
<?php

	include("conn.php");

	session_start();

// get values from login.php
	$user=$_POST["user"];
	$pass=$_POST["pwd"];
	//echo $user;
	//echo $user;

$qry="select * from user where uname='$user' and pass='$pass'";
//echo "".$qry;
$result=mysql_query($qry);
$row=mysql_fetch_assoc($result);
$num=mysql_num_rows($result);
//echo $row['uname'];
//echo "".$num;

$qry2="select * from admin where username='$user' and password='$pass'";
//echo "".$qry;
$result2=mysql_query($qry2);
$row2=mysql_fetch_assoc($result2);
$num2=mysql_num_rows($result2);


if($num==1 || $num2==1)
{

   if($user=='hemal' && $pass=='1342000')
  {
    
    $_SESSION["admin"]="hemal";
    header("location:msg.php?msg2=1");
  }
	else
	{
	$_SESSION["fid"]=session_id();
	setcookie("user",$user);
	
	$id=$row['id'];
	$r=$_COOKIE["user"];
	

	//echo $r;
	setcookie("pwd",$pass);
	setcookie("id",$id);
		//echo "login sucessfully";
	header("location:afterlgn.php?msg1=1");
	}
}

else
{
	
	header("location:login.php?msg=1");

}

?>
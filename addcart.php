<?php if(isset($_GET['submit']))
{
  $fertiid=$_GET['id'];
 // echo $fertiid;
  $userid=$_COOKIE['id'];
 // echo $userid;
  include("conn.php");
  $qry="INSERT INTO  cart_tb(ferti_id,user_id) values ('$fertiid','$userid')";
  if(mysql_query($qry))
  {
   echo "<script>alert('add to cart');document.location='cart.php'</script>";
  }
}
?>
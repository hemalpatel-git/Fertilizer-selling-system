<?php 
include('header2.php');

 ?>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}
.continue{
	color: #222;
	font-size: 20px;
	font-family: Times New Roman;
	background-color: lightgreen;
	width: 15%;
	height: 5%;
}
.spinner {
  width: 70px;
}
.spinner input {
  text-align: right;
}
.input-group-btn-vertical {
  position: relative;
  white-space: nowrap;
  width: 1%;
  vertical-align: middle;
  display: table-cell;
}
.input-group-btn-vertical > .btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%;
  padding: 8px;
  margin-left: -1px;
  position: relative;
  border-radius: 0;
}
.input-group-btn-vertical > .btn:first-child {
  border-top-right-radius: 4px;
}
.input-group-btn-vertical > .btn:last-child {
  margin-top: -2px;
  border-bottom-right-radius: 4px;
}
.input-group-btn-vertical i{
  position: absolute;
  top: 0;
  left: 4px;
}
</style>
<script type="text/javascript">
(function ($) {
  $('.spinner .btn:first-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
  });
  $('.spinner .btn:last-of-type').on('click', function() {
    $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
  });
});
</script>
<div id="container">
<?php 
 if(isset($_COOKIE['id']))
  include("conn.php");
  $userid=$_COOKIE['id'];
  $qry="SELECT fertilizer.img as img,fertilizer.fename,fertilizer.id as fid,brand.brandname from cart_tb join fertilizer on cart_tb.ferti_id=fertilizer.id join brand on brand.brandname=fertilizer.bname where cart_tb.user_id='$userid'";
 // echo $qry;
  $rs=mysql_query($qry);
 //if(mysql_num_rows($rs)>0)
	// {
while ($rec=mysql_fetch_assoc($rs)) {
  //echo $rec['fename'];
 echo "<div class='table-responsive'>";         
 echo "<table class='table table-striped  table-bordered' style='color:#5D6D7E'>";
  echo  "<thead>";
   echo  "<tr style='background-color: #EB984E;color: white;font-family:initial;'>";
    echo "<th>Name</th>";
    echo "<th>Image</th>";
    echo  "<th>Quantity</th>";
    echo  "<th>Price</th>";
    echo   "<th>Cancel</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tr>";
		echo "<td><center><img src='upload/".$rec['img']."' style:height='110' width='90' '></center></td>";
		echo"<td>".$rec["fename"]."</td>";

		echo "<td align=center>"?>
  
  <div class="input-group spinner">
   <input type="text" class="form-control" value="1">
    <div class="input-group-btn-vertical">
      <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
      <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
    </div>
  </div>

<?php "</td>";
		echo "<td>".$rec["price"]."</td>";
		echo "<td><a href=#?id=".$rec["id"].">Cancel</a></td>";	
		echo "</tr>";
			echo "</table>";
	} 
?>
<hr>
<h1 align="right" style="font-family: Matura MT Script Capitals; margin-right: 35%; color:red;">Grand Total:</h1>
<br/>
<center><button class="continue"><a href="afterlgn.php"><b>Continue Shopping</b></a></button></center>
<hr>
</div>
<?php include('footer.php'); ?>
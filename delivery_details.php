<?php
include("header2.php");
include("conn.php");

 // echo "<pre>";
 // print_r($_POST);
 // echo "</pre>";



 
//echo "id is :".$_GET['id'];
 // for fertilizer
 $fid=$_GET['id'];
 //for user
 $id=$_COOKIE['id'];
 $qry="SELECT * from user where id=".$id;
 $qry2="SELECT * from fertilizer where id=".$fid;

 $rs=mysql_query($qry);
 $rs2=mysql_query($qry2);
 
 //echo "".$rs;
 //echo "".$rs2;
 $rec=mysql_fetch_assoc($rs); 
 $rec2=mysql_fetch_assoc($rs2);

 $_SESSION['id']=$rec2['id'];

//for qty subscription
setcookie('cookqty',$rec2["qty"]);


   

 
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript">
    $(document).ready(function(){
    $('#pprice').keyup(calculate);
    $('#pqty').keyup(calculate);
    
});
function calculate(e)
{
    $('#tot').val($('#pprice').val() * $('#pqty').val());

}
function isnum(ele)
                {
                    var r=/[^\u0ae6-\u0aef,0-9]+/i;
                     var qty=document.getElementById('pqty').value;
                     var rem_qty=document.getElementById('eqty').value;
                   // var r=/\D$/i;
                    if(r.test(ele.value))
                     {
                         alert("Quantity should be integer!!");
                         ele.value="";
                         ele.focus();
                     }else if(qty>rem_qty) {

                         alert("Quantity is Not Available.");
                         document.getElementById('pqty').value="";
                         pqty.focus();
                    }else if(qty==0)
                    {
                        alert("Choose atleast 1 Quantity!!");
                         ele.value="";
                         ele.focus();
                    }
   
     
    }
                
</script>


<style>
</style>
</head>
<body>
 
  <div class="container" style="border-style: solid; border-width: 5px;border-radius: 20px; max-width:1100px;border-color:darkred">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
  <h2  align="center" style="background-color: #FF5333;color: white;border-radius: 5px">Delivery Details</h2>
    <form action="delivery_details_db.php" method="POST">

    <div class="form-group"><label for="date"><b>Date:</b></label>
    <input type="text"  class="form-control input-group date" readonly="true" placeholder="Enter Date" name="date" value="<?php echo date('d-m-Y')?>" ></div>

    <div class="form-group"><label for="fname"><b>FullName:</b></label>
    <input type="text" class="form-control" placeholder="Enter FirstName" readonly="true" name="fname" value="<?php echo $rec['fname']?>"></div>

    <div class="form-group"><label for="no"><b>Mobile-No.</b></label>
    <input type="text" class="form-control" placeholder="Enter LastName" readonly="true" name="no" value="<?php echo $rec['mo']?>" ></div>

    <div class="form-group"><label for="add"><b>Address:</b></label>
    <textarea type="text" class="form-control" placeholder="Enter Address" readonly="true" name="add" ><?php echo $rec['address']?></textarea></div>

    <div class="form-group"><label for="email"><b>Email:</b></label>
    <input type="text" class="form-control" placeholder="Enter Email" readonly="true" name="email" value="<?php echo $rec['email']?>"></div>


    <div class="form-group"><label for="city"><b>City:</b></label>
    <input type="text" class="form-control" placeholder="Enter City" readonly="true" name="city"  value="<?php echo $rec['city']?>"></div>


    <div class="form-group"><label for="pc"><b>Pincode:</b></label>
    <input type="text" class="form-control"  placeholder="Enter Pincode" id="pc" readonly="true" name="pc" value="<?php echo $rec['pincode']?>" required></div>

    <div class="form-group"><label for="pname"><b>Fertilizer Name:</b></label>
    <input type="text" class="form-control" placeholder="Enter Number" name="pname" readonly="true" value="<?php echo $rec2['fename'];?>"></div>

    <div class="form-group"><label for="bname"><b>Company Name:</b></label>
    <input type="text" class="form-control" placeholder="Enter Number" name="bname" readonly="true" value="<?php echo $rec2['bname'];?>"></div>

    <div class="form-group"><label for="eqty"><b>Available Qty:</b></label>
    <input type="text" id="eqty" class="form-control"  style="text-align: right;"  name="eqty" readonly="true" value="<?php echo $rec2['qty'];?>"></div>
   
    <div class="form-group"><label for="pqty"><b>Fertilizer Qty(1 Bag=50 Kg.)</b></label>
    <input type="text" id="pqty" class="form-control" onChange="isnum(this);" value="<?php $i=1;
          if ($rec2['qty']==0) 
          {echo $rec2['qty'];}
          else
          echo $i;?>" placeholder="Enter Product Qty" style="text-align: right;"  name="pqty"  required></div>
 

    <div class="form-group"><label for="pprice"><b>Fertilizer Price(Rs.)</b></label>
    <input type="text" id="pprice" style="text-align: right;" value="<?php echo $rec2['price'];?>" class="form-control" name="pprice" readonly="true"></div>

    <div class="form-group"><label for="tot"><b>Total Amount(Rs.)</b></label>
    <input type="text" id="tot" class="form-control" readonly="true" style="color:  #FF0000;text-align: right;" value="<?php $i=0;
     if($rec2['qty']==0) 
     { echo $i; }
     else echo $rec2['price']; ?>"
     name="tot" required></div>
    
     <div><button type="submit" class="btn btn-primary" id="buy" name="buy" style="width: 100%;">Buy Now</button></div>
     <div>
         <marquee><font size="4" color="#1F618D"><b>Case on Delivery </b> </font></marquee>
     </div>

   
    </form>
</div>
<div class="col-md-3" align="left">
     <img  src="upload/<?php echo $rec2['img']?>" style="margin-top:200px;margin-left: 80px;" height="170" width="150"/>
 </div>
</div>
</div>


</body>
</html>
<?php
include("footer.php"); 
?>


<?php
//for PDF file
//ob_start();
include("header2.php");
?>
<?php
//session_start(); 
 include'conn.php';
    
              
       $qry= "select * from ferti_delivery order by d_id desc limit 1"; 
       $rs=mysql_query($qry);
       $rec=mysql_fetch_assoc($rs);
       $test1=date('Y-m-d H:i:s');
       $dt=date("d/m/Y",strtotime($test1));
       $delivery=date('d/m/Y', strtotime("+8 days"));

?>
<html>
<head>
    <title></title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
   <!-- <link href="css/main.css" rel="stylesheet">-->
    
    <script src="dist/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="dist/sweetalert.css">
    <script type="text/javascript">
        function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})
    </script>
</head>
<body>
     <?php
              if(isset($_GET["msg3"]))
               echo '<script>
    setTimeout(function() {
      
        swal({
            title: "Successfully !",
            text: "Your order has been placed successfully,THANK YOU !",
            type: "success"
        }, function() {
            window.location = "conorder.php";
        });
    }, 500);
</script>';
 ?>
    <form action="conorder.php" method="post" accept-charset="utf-8">
      
<?php

	# code...

echo $html='<section class="content content_content" style="width: 70%; margin: auto;">
                    <section class="invoice" id="printTable" >
                    
                        <!-- title row -->
                        <center><h2 class="text-primary">Order Summary</h2></center>
                        <div>Receipt-No:'.$rec['d_id'].'</div>
                        <div class="row">
                            <div class="col-xs-12">
                                <h2 class="page-header">
                                    <i class="glyphicon glyphicon-list-alt"></i>Fertilizer 
                                    
                                </h2>
                            </div><!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            
                            <div class="col-sm-4 invoice-col">
                                To
                                <address>
                                    <strong><font size=4 >'.$rec['fname'].'</font></strong><br>
                                    Address:'.$rec['address'].'<br>
                                    City:'.$rec['city'].'<br>
                                    Phone:'.$rec['mo'].'<br>
                                    Email:'.$rec['email'].'
                                </address>
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                               
                            </div><!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                Date:'.$dt.'
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Fertilizer</th>
                                            <th>Company</th>
                                            <th>Price</th>
                                             <th>Qty</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                      <tr>
                                            <td>'.$rec['fename'].'</td>
                                            <td>'.$rec['bname'].'</td>
                                            <td>'.$rec['price'].'</td>
                                            <td>'.$rec['qty'].'</td>
                                            <td>'.$rec['total_amt'].'</td>
                                        </tr>
                                   </tbody>
                                </table>
                            </div><!-- /.col -->
                        </div><!-- /.row -->

                        <div class="row">
                            <!-- accepted payments column -->
                            <div class="col-md-12">
                               
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            
                                            
                                            <tr>
                                                <th>Total Amount:</th>
                                                <td align="right"><font style="color:red"><b>Rs.'.$rec['total_amt'].'</b></font></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                 <p class="lead"><font style="color:#07b3f2">You will get your item at as per address your home on this Date: '.$delivery.'.</font></p>
                                  <div align="center">
                                 <p style="font-family: Matura MT Script Capitals;color:#d33f6e;font-size:30px" >Thank you</p>
                                 </div>
                                 </section>
                                 </section>
                                ';
                                ?><div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                    NOTE:<br>
                                    Payment Method:Case on Delivery<br>
                                    You have received your order status by email.<br>
                               
                            <!-- this row will not appear when printing -->                    
                            <button type="submit" id="print" onclick="printData();" name="print" value="print"  class="btn btn-primary"><i class="fa fa-print"></i> Print Order</button>
                                <center><a href="afterlgn.php" class="btn btn-info"> Continue Purchasing</a></center>
                                 </div>
                                  <div class="col-md-2"></div>
                           
                        </div>
                    
                </form>
            </body>
            </html>

                

<!--<?php
if(isset($_POST['print']))
{
  //  echo"hello";
    include("mpdf/mpdf.php");

$mpdf=new mPDF(''); 

$stylesheet1 = file_get_contents('mpdf\examples\mpdfstyleA4.css');
$mpdf->WriteHTML($stylesheet1,1);
    //$mpdf->WriteHTML($html);
// LOAD a stylesheet
$stylesheet = file_get_contents('mpdf\examples\mpdfstyletables.css');
$mpdf->WriteHTML($stylesheet,1);    // The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html);
$mpdf->Output(' Order.pdf','I');
exit;

}
?>-->
<?php include'footer.php';?>

<head>
    
 
  
  <link rel="stylesheet" href="./css/bootstrap.css">
  <link href="css/font-awesome.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
   
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

<?php
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
 $dt1=$_GET['y'];
 $dt2=$_GET['x'];
    include'conn.php'; 
     $qry="SELECT order_date,fename,qty,total_amt,fname,address FROM ferti_delivery 
           WHERE order_date BETWEEN '".$dt1."' AND '".$dt2."'";
  
           
  $rs=mysql_query($qry);
  //echo "".$qry;
  
  echo"<div class='container'>";
     echo"<center>";
  echo"<table border='1' class='table table-striped  table-bordered' id='printTable' >";
               echo"<tr style='background-color: #EB984E;color: white;font-family:initial;'>";
                 echo"<th>Date</th>";
                 echo"<th>Buyer Name</th>";
                 echo"<th>Address</th>";
                  echo"<th>Fertilizer</th>";
                 echo"<th>Sold Quantity</th>";
                  echo"<th>Price</th>";

               echo"</tr>";
               $con=0;
               $totprice=0;
  while($rec=mysql_fetch_assoc($rs))
         {
              $con=$con+$rec["qty"];
              $totprice=$totprice+$rec["total_amt"];
              echo"<tr>";
              echo"<td>".$rec["order_date"]."</td>";
              echo"<td>".$rec["fname"]."</td>";
              echo"<td>".$rec["address"]."</td>";
              echo"<td>".$rec["fename"]."</td>";
              echo"<td>".$rec["qty"]."</td>";
              echo"<td>".$rec["total_amt"]."</td>";
              echo"</tr>"; 
         }
         echo "<tr>";
              echo "<td></td>";
              echo "<td></td>";
              echo "<td></td>";
              echo "<td></td>";
              echo "<td>Total Quantity:<b>".$con."</b></td>";
              echo "<td>Total Money:<b>Rs.".$totprice."</b></td>";
        echo "</tr>";
         echo"</table>"; 
         echo "<br>";
         echo "<input type='submit' class='btn btn-info' value='Print' onclick='printData()'></input>";
         echo "<br>";
         echo "<br>";
        echo"</center>";
       echo"</div>"; 
?>

 
 
 
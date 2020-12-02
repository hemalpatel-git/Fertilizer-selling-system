  <html>
<head>
	<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
    <link href="css/responsive.css" rel="stylesheet">
     <link href="css/shold.css" rel="stylesheet">
      <link href="css/prettyPhoto.css" rel="stylesheet">
</head>
<body>
<?php
  

  include'conn.php';
 //session_start();

	$qry="select * from fertilizer ORDER BY fename";
  $rs=mysql_query($qry);  
  echo'<div class="container">';
  echo'<div class="col-sm-12">';
  while($rec=mysql_fetch_assoc($rs))
         {
         	 
           echo'<div class="col-md-4 new-collections-grid" style="border: 2px solid #005A9C;border-radius: 35px;border-style: solid;">';
							echo'<div class="special-info grid_1 simpleCart_shelfItem">';
								echo'<div class="single-products">';
                 echo "<br>";
									echo'<div class="productinfo text-center" data-toggle="tooltip" title='.$rec["fename"].'>';
										echo "<img  src='upload/".$rec['img']."' height='170' width='150'   />";
										echo "</br><h3>".$rec['fename']."</h3>";
                    
                    //condition of stock
            
										  if (   $rec['qty']==0)
                     {
                        echo "<span class='sold_out'>Out Of Stock</span>";
									   }
                   
										

										//................MODAL button.........................
					
                                       echo "<div>";
                                        echo "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#myModal".$rec['id']."' Name='mod'><i class='fa fa-eye' aria-hidden='true'></i>View Details</button>";
                                        echo"</div>";
                                        echo "<br>";
                                        echo"<div class='modal' id='myModal".$rec['id']."'>";
                                        echo"<div class='modal-dialog'>";
                                        echo"<div class='modal-content'>";
      
                                      // Modal Header 
                                       echo "<div class='modal-header'>";
                                       echo"<h2 class='modal-title'  style='color:green'><b>Fertilizer Details</b></h2>";
                                       echo"<button type='button' class='close' data-dismiss='modal'>&times;</button>";
                                       echo"</div>";
        
                                  // <!-- Modal body -->
                                       echo"<div class='modal-body'>";
                                       
										//echo"<p>".$rec  
                                       echo"<table align='center' border='0 '>";
                                       echo"<tr>";
                                       echo"<td>";
                                       echo "<h3>Fertilizer Name:</h3>";
                                       echo"</td>";
                                      
                                       echo"<td>";
                                       echo "<h3>".$rec['fename']."</h3>";
                                       echo"</td>";
                                       echo"</tr>";
										
									                     echo"<tr>";
                                       echo"<td>";
                                       echo "<h3>Fertilizer Company:</h3>";
                                       echo"</td>";

                                       echo"<td>";
                                       echo "<h3>".$rec['bname']."</h3>";
                                       echo"</td>";
                                       echo"</tr>";

                                        echo"<tr>";
                                       echo"<td>";
                                       echo "<h3>Fertilizer weight:</h3>";
                                       echo"</td>";

                                       echo"<td>";
                                       echo "<h3>50 KG (Bag=1)</h3>";
                                       echo"</td>";
                                       echo"</tr>";

                                       echo"<tr>";
                                       echo"<td>";
                                       echo "<h3>Fertilizer Price:</h3>";
                                       echo"</td>";

                                       echo"<td>";
                                       echo "<h3  style='color: red'>"."Rs.".$rec['price']."</h3>";
                                       echo"</td>";
                                       echo"</tr>";

                                       echo"</table>";
                      
                                   
                                       echo"</div>";
                            // <!-- Modal footer -->
                                      echo"<div class='modal-footer'>";
                                      
                                      echo "<form method='GET' action='delivery_details.php'>
                                      <input type='hidden' name='id' value='".$rec['id']."'>
                                       <input type='submit' class='btn btn-default add-to-cart' style='background: #36a044;color:white' value='Buy' name='submit'></form>";

                                                                       
                                      echo"<button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button>";       
                                      echo"</div>";
                                     
        
                                    echo"</div>";
                                echo"</div>";
                            echo"</div>";
                          
                          echo'</div>';
						echo'</div>';
					echo'</div>';

      	
									
		echo'</div>';
  }

 echo'</div>';
echo'</div>';
echo "</form>";
 ?>
 </body>
 </html>    
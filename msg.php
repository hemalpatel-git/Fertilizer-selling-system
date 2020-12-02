<?php

include("headeradm.php");
include("conn.php");
?>
&nbsp;
  <?php
              if(isset($_GET["msg2"]))
               echo "<div class='alert alert-success'   role='alert'><b>Login Successfully....</b></div>";
   ?>

  <div class="form-group" style="background-color:#F4D03F;border-radius: 5px;">
<center><label><font size="4" style="background-color:;font-family:initial;border-radius: 5px">Notification</font></label></center>
</div>


<?php
  $qry="select * from fertilizer";
  $rs=mysql_query($qry); 
   $tot=0;
  while($rec=mysql_fetch_assoc($rs))
  {
      if($rec['qty']<5)
            {
            	echo "<div class='row'>";
            	echo "<div class='col-md-2'></div>";
            	echo "<div class='col-md-8'>";
                echo "<div class='notice info alert alert-info fade in' >";
				echo "<a href='manage.php'>";
				echo "<strong> The quantity of ".$rec['fename']."(".$rec['bname'].") is less than five Please add it..!</strong>";
				echo "</a>";
				echo "</div>";
				echo "</div>";
				echo "<div class='col-md-2'></div>";
				echo "</div>";
                
				$tot=$tot+$rec['fename']=1;
	        }
	      
  }
  
//echo $tot;
?>
</div>
<div class="col-2-md"></div>
</div>
<?php

include("footer.php");
?>
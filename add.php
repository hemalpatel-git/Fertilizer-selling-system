<?php

include("headeradm.php");
include("conn.php");


if(isset($_POST['s1']))
{
$nm=$_POST['fname'];
$brand = $_POST['brand'];
$qty=$_POST['qty'];
$price=$_POST['price'];
$file=$_FILES['fpic']['tmp_name'];

if(!isset($file))
  echo"Please select an image";
else
 {
	$image=addslashes(file_get_contents($_FILES['fpic']['tmp_name']));
	$image_name=addslashes($_FILES['fpic']['name']);
	$image_size=getimagesize($_FILES['fpic']['tmp_name']);

	if($image_size==false)
		echo"This is not an image";
	else
	{
      if(!$insert=mysql_query("INSERT INTO fertilizer (fename,bname,img,qty,price) VALUES ('$nm', '$brand', '$image_name','$qty','$price')")) 
      	echo"Problem while uploading image";
       else
       {
       	 $action = move_uploaded_file($_FILES['fpic']['tmp_name'],"upload/".$image_name); 
       	 echo"<div class='alert alert-success'><strong> Details saved successfully.</strong></div>";
      
       	 
       }
	}
 }
}
?>

<html>
<head>
	
	<title></title>
	<script type="text/javascript" >

	</script>
</head>
<body>
 
 <form method="POST" action="" enctype="multipart/form-data">
	  <div class="container">
		    <div class="col-sm-12" style="font-family: serif;">
						</br>
						    <div class="form-group" style="background-color:#F4D03F;border-radius: 5px;">
								<center><label><font size="4" style="background-color:;font-family:initial;border-radius: 5px">Fertilizer</font></label></center>
								
							</div>
							<div class="form-group">
								<label>Select Fertilizer Name:</label>
								<select name="fname"  class="form-control" onchange="myfun(this.value)"  required>
									<option value="">----------Select Fertilizer Name----------</option>
							<?php
							   $sql = mysql_query("SELECT fertiname from ferti_name");
                                $row = mysql_num_rows($sql);


                             
                              while ($row = mysql_fetch_array($sql))
                              {
                                  echo "<option value='". $row['fertiname'] ."'>" .$row['fertiname'] ."</option>";
                              }
                          
                            ?>
                        </select>
								
							</div>
							
								 
							
						
							<div class="form-group">
								<label>Select Company name:</label>
							<select name="brand" class="form-control" id="no">
							 
								<option>----------Select Company name----------</option>
                            </select>
                            </div>
						<div class="row">
						
							<div class="col-md-6 form-group">
							<label>Image</label>
							<input type="file" id="fpic" name="fpic" accept="image/*" class="form-control" onchange="return ValidateFileUpload();" required="image is required">	
								
							</div>
							
							<div class="col-md-6 form-group">
								<label>Quantity(No of Bags)</label>
						    <input type="text" name="qty" maxlength="3" placeholder="Quantity Of FertilizerBags" class="form-control" onchange="isnum(this);" required>
							</div>
							
						</div>
						<div class="form-group">
								<label>Price(Per Bag):</label>
								<input type="text" name="price" maxlength="4" placeholder="Price" class="form-control" onchange="isnum(this);" required>
						</div>
					<div class="row">
			             <div class="col-md-12 form-group" align="right">
                           <button  type="submit" name="s1" id="s1" value="s1" class="btn btn-lg btn-info">Save</button>
				         </div>
				        
	                </div>
            </div>
           
        </div><br/><br/>
        
	</form>
	<script type="text/javascript">
		 function isnum(ele)
                {
					var r=/[^\u0ae6-\u0aef,0-9]+/i;
                   // var r=/\D$/i;
                    if(r.test(ele.value))
                     {
                         alert("Only Numbers are accepted!");
                         ele.value="";
                         ele.focus();
                     }
                }
  function myfun(data)
  {
    var req = new XMLHttpRequest();
    req.open("GET","../fss/viewbrand.php?datavalue="+data,true);
    req.send();

    req.onreadystatechange = function()
    {
      if(req.readyState==4 && req.status==200)
      {
        document.getElementById('no').innerHTML = req.responseText;
      }
    }
  }
   
   function ValidateFileUpload() {
        var fuData = document.getElementById('fpic');
        var FileUploadPath = fuData.value;

//To check if user upload any file
        if (FileUploadPath == '') {
            alert("Please upload an image");

        } else {
            var Extension = FileUploadPath.substring(
                    FileUploadPath.lastIndexOf('.') + 1).toLowerCase();

//The file uploaded is an image

if (Extension == "gif" || Extension == "png" || Extension == "bmp"
                    || Extension == "jpeg" || Extension == "jpg") {

// To Display
                if (fuData.files && fuData.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(fuData.files[0]);
                }

            } 

//The file upload is NOT an image
else {
                alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. ");

            }
        }
    }

</script>
 
</body>
</html>

<?php
include("footer.php");
?>
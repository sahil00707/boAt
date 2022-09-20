<?php  

require_once("../db_connect.php");

if(isset($_POST['add_item'])){
    
  $filename = $_FILES["image_product"]["name"];
  $tempname = $_FILES["image_product"]["tmp_name"];
  $folder = "../website-images/" . $filename; 
$name_product=$_POST['name_product'];
$price_product=$_POST['price_product'];
$category_product=$_POST['category_product'];
//$image_product=$_POST['image_product'];
$des_product=$_POST['des_product'];
    $insert="INSERT INTO allproductinformation(`product-name`,`product-price`,`product-category`,`product-image`,`product-description`)  VALUES('$name_product','$price_product','$category_product','$filename','$des_product')";
$i=mysqli_query($conn,$insert);
//move_uploaded_file($tempname, $folder);
if($i){
    echo "
    <script>
    alert('Data Updated Successfully')
   
    </script>
    ";
}
if (move_uploaded_file($tempname, $folder)) {
  echo "<h3>  Image uploaded successfully!</h3>";
} else {
  echo "<h3>  Failed to upload image!</h3>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify Item</title>
    <link rel="stylesheet" href="../css_files/modify_admin.css">
    <?php
     include "../common-links.php";
     ?>
</head>
<body>
  
    <div class="modify">
        <div class="head">
      
            <h1>Add Item</h1>
            <div class="border"></div>
        </div>
      
        <form action="#" method="POST" class="form" method="POST" enctype="multipart/form-data">
        
          <div class="iDiv">
            <p>Product  Name</p>
            <input type="text" name="name_product" placeholder="Enter Product Name">
          </div>
          <div class="iDiv">
            <p>Product  Price</p>
            <input type="number" name="price_product"  placeholder="Enter Product Price">
          </div>
          <div class="iDiv">
            <p>Product  Category</p>
            <input type="text"  name="category_product"  placeholder="Enter Product Category">
          </div>
          <div class="iDiv">
            <p>Product  Image</p>
            <input type="file" name="image_product"  placeholder="Enter Product Image">
          </div>
          <div class="iDiv">
            <p>Product  Description</p>
            <textarea name="des_product" id="" cols="30" rows="10"></textarea>
          </div>
          <input type="submit" value="Add" class="update" name="add_item">
        
        
        </form>
        <a href="index_admin.php"><button>Back</button></a>
        <?php  ?>
    </div>
</body>
</html>
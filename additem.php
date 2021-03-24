<?php  
include ("header.html");
include ("config.php");
 if(isset($_REQUEST["insert"]))  
 {  
      $name = $_FILES['image']['name'];
  $target_dir = "images/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);  
      $query = "INSERT INTO tbl_images(Name,Price,Type,image) VALUES ('" . $_REQUEST['name'] . "','" . $_REQUEST['price'] . "','" . $_REQUEST['type'] . "','$target_file')";  
      if(mysqli_query($conn, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <style>
                *{
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  
  }
  body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('images/add_food.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100vh;
    font-size: 20px;
    /* overflow: hidden;  */
    overflow-x: hidden;
    align-items: center;
} 
 
     .add{
     width: 350px;
	height: 500px;
     background: #fff;
	color: #000;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 30px 10px;
                }

     .add input,textarea,button{
          width: 250px;
          outline: none;
          padding: 10px 11px;
          border: 1px #000 solid;
          font-size: 15px;
          background: #fff;
          display: block;
          margin: 1px auto;

     }
     h1{
	padding: 0 0 10px;
	text-align: center;
	font-size: 22px;
     color: #000;
}
.button{
     background-color: #fc8019;
}
                </style>
                <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
      </head>  
      <body>  
           <br /><br />  
           <div class="add">  
                <form method="post" enctype="multipart/form-data" > 
               <h1>Add New Food Item</h1>
		<input type="text" id="name" required name="name" placeholder="Enter name">
          <br/>
          <input type="text" id="price" required name="price" placeholder="Enter Price">
          <br/>
          <input type="text" id="type" required name="type" placeholder="Enter type of food">
          <br/> 
          <textarea rows="3" type="text" id="desc" required name="desc" placeholder="Enter description"></textarea>
          <br/>
                     <input type="file" required name="image" id="image" />  
                     <br />  
                     <button class="button" type="submit" name="insert" id="insert" value="Add Item">Add Item</button>
                </form>  
                <br />  
                <br />  
           </div>  
      </body>  
 </html>  
 <script>  
 
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name != '')  
          {
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)  
                {  
                     window.alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  

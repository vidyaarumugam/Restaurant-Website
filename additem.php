<?php  
include ("header.html");
include ("config.php");
 if(isset($_REQUEST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tbl_images(Name,Price,Type,image) VALUES ('" . $_REQUEST['name'] . "','" . $_REQUEST['price'] . "','" . $_REQUEST['type'] . "','$file')";  
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
  body{
    font-size: 20px;
    overflow-x: hidden;
    color: #000;
    align-items: center;
  }  
 
     .add{
     width: 350px;
	height: 420px;
     background: rgba(0, 0 ,0,0.5);
	color: #000;
	top: 50%;
	left: 50%;
	position: absolute;
	transform: translate(-50%,-50%);
	box-sizing: border-box;
	padding: 50px 10px;
                }
                header{
    background-image:linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0)), url('../images/food_item.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height:100vh;
    }
     .add input,button{
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
	margin: 0;
	padding: 0 0 10px;
	text-align: center;
	font-size: 22px;
     color: #fff;
}
                </style>
      </head>  
      <body>  
           <br /><br />  
           <div class="add">  
                <form method="post" enctype="multipart/form-data" > 
               <h1>Addition Of New Food Item</h1>
		<input type="text" id="name" required name="name" placeholder="Enter name">
          <br/>
          <input type="text" id="price" required name="price" placeholder="Enter Price">
          <br/>
          <input type="text" id="type" required name="type" placeholder="Enter type of food">
          <br/> 
                     <input type="file" required name="image" id="image" />  
                     <br />  
                     <button type="submit" name="insert" id="insert" value="Add Item">Add Item</button>
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
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     window.alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
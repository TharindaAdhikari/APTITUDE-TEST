<?php  
 $connect = mysqli_connect("localhost", "root", "", "abccompany");  


 if(isset($_POST["insert"]))  
 {  
     $title = $_POST['title'];
     $amount= $_POST['amount'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO tablephoto(phototitle,amount,photoname) VALUES ('$title','$amount','$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Pohotograph details Inserted into Database")</script>';  
      }  
 } 
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>ABC Company Photography</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align ="center">ABC Company Photography </h3>  
                <br />  

                <form method="post" enctype="multipart/form-data" action="ABCCOmpany.php">  
                    Title :<br> <input type="text" name="title"> <br>
		          Amount:<br> <input type="text" name="amount"> <br>


                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" /> 
                     
               </form>

               <a href="homepage.php">
                    <button>View Data</button>
               </a>

                <br />  
                <br />  
           </div>
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  
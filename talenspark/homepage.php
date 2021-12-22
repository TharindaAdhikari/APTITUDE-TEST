<?php  
 $connect = mysqli_connect("localhost", "root", "", "abccompany");  

 $query = "SELECT * FROM tablephoto ORDER BY photoid DESC";  
$result = mysqli_query($connect, $query); 
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
         
          <form action = "payment.php" method ="post">
          <table class="table table-bordered">  
                     <tr>  
                          <th>Image</th>
                          <th>Photo Title</th>  
                          <th>Amount</th>  
                     </tr>  
                <?php  
                 
                while($row = mysqli_fetch_array($result))
                {
                   
                         echo ' <tr>  
                               <td>  
                                   <img src="data:image/jpeg;base64,'.base64_encode($row['photoname'] ).'" height="200" width="200" class="img-thumnail" /> 
                               </td> 
                     <td>'.$row['phototitle'].'</td> 
                    <td>'.$row['amount'].'</td> 
                    <td>  <button type="submit" class="btn btn-info" formaction="payment.php">BUY</button>  </td> 
                          </tr>  
                      ';
                }  
               ?>
            </table> 
           </form>
        
        </body>  
 </html>   

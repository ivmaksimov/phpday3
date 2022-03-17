<?php 
require_once 'actions/db_connect.php';


$sql = "SELECT * FROM dishes where dishId = $_GET[dishID]";
$result = mysqli_query($connect ,$sql);
$tbody='';
 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$tbody .=  "<tr>
    <td>" .$row['name']."</td>
    <td>" .$row['price']."€</td>
    <td>" .$row['special_offer']."</td>
    </tr>";

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>details</title>
       <?php require_once './components/boot.php'?>
       
       
       
   </head>
   <body >
       
           <p class="h1 text-center"><?php echo $row['name'] ?></p>
            <table class='table table-striped'>
               <thead>
                   <tr  >

                        
                       <th>Name</th>
                       <th>Price</th>
                       <th>Only Today</th>
                   </tr>
               </thead>
               <tbody class="text-white">
                    <?= $tbody;?>

                </tbody>
           </table>
           <main id="main" class=" ">
          <div class="float-start mx-xxl-4 " >
           <img src="<?php echo 'pictures/' .$row['image']; ?>" width="600px" alt="picture"  class=" img-fluid 
             " >
          </div>
          <div class=" mx-xxl-4 ">
           <p class="fs-2"><?php echo $row["description"];  ?> </p>
          </div>
</main>
</body>
</html>
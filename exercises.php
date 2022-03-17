<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title></title>
       
   </head>
   <body>
       <?php

     // exercise 1 
     //1.1
       $name = "Ivan Maksimov";
       
      for($i=0; $i<50; $i++)
       {
           echo  ($name);
        }

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//1.2
$i = 0;
 while($i < 50)
       {
           $name;
           $i++;
           echo ($name);
       }

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//1.3
$i = 0;
    do
       {   
          $name;
            $i++;
           echo ($name);
        } while ($i < 50);
 
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
    
//exercise 2   
 $day = array(1,11,13,21,23,25,2,6,9,2);

 foreach($day as $value)
       {
           echo "Value is $value <br/>";
       }
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

//exercise 3 
echo "the highest is ". max($day );

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>"; 

//exercise 4  
     $i=0;
for ($i = 1; $i <= 100; $i++)
{
  if ( $i%3 == 0 && $i%5 == 0 )
   {
     echo $i . "Full-Stack"."\n". "<br>" ;
   }
  else if ( $i%3 == 0 ) 
   {
     echo $i. "Back-End"."\n". "<br>" ;
   }
     else if ( $i%5 == 0 ) 
   {
     echo $i. "Front-End"."\n" . "<br>";
   }
     else
   {
     echo $i."\n" . "<br>";
   }
 }
       
       ?>
   </body>
</html>
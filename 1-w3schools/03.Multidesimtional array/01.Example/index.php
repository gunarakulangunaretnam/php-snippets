<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
      $car= array(
          
          array("Volvo","red",899),
          array("Bmw","White",364),
          array("LandOver","Yellow",986),
          array("sabb","Green",569)
          
      );
       
      echo "The name of the car is ".$car[0][0]." and the color is ".$car[0][1]." the number is ".$car[0][2]."<hr>";
      echo "The name of the car is ".$car[1][0]." and the color is ".$car[1][1]." the number is ".$car[1][2]."<hr>";
      echo "The name of the car is ".$car[2][0]." and the color is ".$car[2][1]." the number is ".$car[2][2]."<hr>";
      echo "The name of the car is ".$car[3][0]." and the color is ".$car[3][1]." the number is ".$car[3][2]."<hr>";
              
              
       
        ?>
        
        
    </body>
</html>

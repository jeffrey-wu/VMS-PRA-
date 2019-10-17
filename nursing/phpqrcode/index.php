<?php    

 
    include "qrlib.php";    

        QRcode::png("hellow","abc1.png",QR_ECLEVEL_L,4);    
        echo '<img src="abc1.png" />';  
         
        
  

    
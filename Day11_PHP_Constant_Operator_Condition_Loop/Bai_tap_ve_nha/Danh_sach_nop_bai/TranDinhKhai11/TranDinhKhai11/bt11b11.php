<html>
   
   <head>
      <title>Vẽ bàn cờ bằng PHP</title>
   </head>
   <body>
   
      <table cellspacing="0px" cellpadding="0px" border="1px">  
      
	  
      <?php  
      for($dong=1; $dong <= 8; $dong++)  
      {  
          echo "<tr>";  
          for($cot=1; $cot <=8; $cot++)  
          {  
            $t=$dong + $cot;  
            if($t%2 == 0)  
            {  
              echo "<td height=60px width=60px bgcolor=#FFFFFF></td>";  
            }  
            else  
            {  
              echo "<td height=60px width=60px bgcolor=#000000></td>";  
            }  
          }  
          echo "</tr>";  
      }  
      ?>  
     </table>
       
   </body>
</html>
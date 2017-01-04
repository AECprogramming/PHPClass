<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <table border="l">
            <?php /*  for statement to get table generated    */     ?>
            <?php for ( $tr = 1; $tr <= 10; $tr++) : ?>
            
            <?php /*  variable with function for a random number generator  */     ?>
            <?php  $randcolor = '#' . rand(0x00000, 0xfffff) ;?>
             <tr>
                 <?php /*  for statement to get table generated    */     ?>
                <?php for ( $td = 1; $td <= 10; $td++) : ?>
                 
                 <?php /*  variable with function for a random number generator  */     ?>
                <?php  $randcolor = '#' . rand(0x00000, 0xfffff) ;?>
                
                 <?php /*  sets background color and plain black text */     ?>
                 <td style='background-color: <?php echo $randcolor; ?>'>  <?php echo $randcolor  ;?> <br/>
                   
                     
                     <?php /*  outputs the text as white so you can read the text easier  */     ?>
                     <span style="color:#ffffff;"> <?php echo $randcolor; ?>  </span></td>
                    <?php endfor ;?>
            </tr> 
            <?php endfor ;?>
            
        </table>

    </body>
</html>

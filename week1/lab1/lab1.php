<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
        <table border="l">
            <?php /*      */     ?>
            <?php for ( $tr = 1; $tr <= 10; $tr++) : ?>
            <?php  $randcolor = '#' . rand(0x00000, 0xfffff) ;?>
             <tr>
                <?php for ( $td = 1; $td <= 10; $td++) : ?>
                <?php  $randcolor = '#' . rand(0x00000, 0xfffff) ;?>
                
                 <td style='background-color: <?php echo $randcolor; ?>'>  <?php echo $randcolor  ;?> <br/>
                     
                     <span style="color:#ffffff;"> <?php echo $randcolor; ?>  </span></td>
                    <?php endfor ;?>
            </tr> 
            <?php endfor ;?>
            
        </table>

    </body>
</html>

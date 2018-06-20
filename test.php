<!DOCTYPE html>
<html lang="ja">
    <body>
        <?php
        date_default_timezone_set('Asia/Tokyo');
        $i =  (int)date("H");
       ?>
        <P>今<?php print $i?>時です。</P>
        
        <?php
        for ($a=1; $a<=5; $a++){ ?>
        <p><?php print $a ?>回目のこんにちは</p>
        <?php } ?>
        
        
        <p><?php for ($b=1; $b<=5; $b++){
             print $b."回目のこんにちは"."<br>";
        }
        ?>
        </p>
        
        <?php 
        function aisatsu($c,$d){
            return $result=$c+$d;
        }
        ?>
        <p><?php print aisatsu(1,9) ?>回目のこんにちは</p>
        
        <?php
        function triangle($height,$base){
            return $result=$height*$base;
        } ?>
        <p>三角形の面積は<?php print triangle(2,4) ?></p>
        
        <p>
        <?php
        for ($num=1; $num<=10; $num++){
            if ($num % 2 == 0){
                print $num.".Juliet, I love you."."<br>";
            }
            else {
                print $num.".Romeo, I love you."."<br>";
            }
        }
        ?> 
        </p>
    </body>
    
    
    
</html>
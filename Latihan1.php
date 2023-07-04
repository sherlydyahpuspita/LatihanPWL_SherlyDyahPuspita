<?php
$a=3;//sesuai 2 digit npm terakhir contoh 202043501838
$b=8;
echo "$a==$b:".($a==$b); 
echo "<br>$a != $b:".($a != $b);
echo "<br>$a > $b:".($a > $b);
echo "<br>$a < $b:".($a < $b);
echo "<br>($a==$b)&&($a > $b):".(($a != $b)&&($a > $b));
echo "<br>($a==$b)||($a > $b):".(($a != $b)&&($a > $b));
?>
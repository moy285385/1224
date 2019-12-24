<?php
$imgcat=array('animals','architecture','nature','people','tech');
for ($x=0;$x<10;$x++){
    $imgurl="https://placeimg.com/30".($x%10)."/300/". $imgcat[rand(0,4)];
echo "<img src='".$imgurl."'>".PHP_EOL;
}
?>
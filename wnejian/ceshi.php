<?php
$arr=file('images.txt');
$n=count($arr)-1;
for ($i=1;$i<=1;$i++){
$x=rand(0,$n);
header("https://cdn.jsdelivr.net/gh/Daydayupdate/lyt/wnejian/".$arr[$x],"\n");
}
?>

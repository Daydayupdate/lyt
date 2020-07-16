<?php
$arr=file('https://cdn.jsdelivr.net/gh/Daydayupdate/lyt/wnejian/images.txt');
$n=count($arr)-1;
for ($i=1;$i<=1;$i++){
$x=rand(0,$n);
header($arr[$x],"\n");
}
?>

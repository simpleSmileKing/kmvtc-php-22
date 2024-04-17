<?php
function random_text( $count, $rm_similar=false){
$chars=array_flip(array_merge(range(0,9),range('A','Z')));
 //删除容易起混淆的相似单词
 if($rm_similar){
 unset($chars[0],$chars[1],$chars [2],$chars ['I'],$chars['O'],$chars['Z']);
 }
//生成随机字符文本
for($i=0,$text='';$i<$count;$i++){
    $text.=array_rand($chars);
}
return $text;
}
echo "<br>";
echo random_text(5,true);
?>
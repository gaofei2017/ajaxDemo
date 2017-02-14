<?php
/*php里边数组没有length属性
提供了一个方法统计数组长度
count()
*/
header("Content-Type:text/html;charset=utf-8");
//数组
/**
    1:普通数组
    2:关联数组

*/
//1）定义普通数组
$arr1=array("范冰冰","张三","李四","王五");
echo count($arr1);
//2)遍历数组
  for($i=0;$i<count($arr1);$i++){
               echo $arr1[$i];
               echo "<br>";
         }
//定义关联数组 key:value
$arr2=array(
    "username"=>"wangjiao",
    "age"=>18
);
echo $arr2["username"];
echo "<br>";
//二维数组
 $array3=array(
                array("username"=>"wangshanshan","age"=>"19"),
                array("username"=>"李楠","age"=>"17"),
                array("username"=>"小旋风","age"=>21)
         );
//二维数组的遍历
         for($i=0;$i<count($array3);$i++){
               echo $array3[$i]["username"];
               echo "<br/>";
         }

?>



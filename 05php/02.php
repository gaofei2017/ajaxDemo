<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>

         td{
            text-align:center;
            width: 150px;
            height: 20px;
            background-color: pink;
         }
    </style>
    <?php
            /*在这里从数据库里面获取数据 ，在一个数组里面*/
            /*把这些数据获取到之后动态输出到一个table 标签里面.*/
            $array=array(
                array("username"=>"张强","age"=>21,"desc"=>"太漂亮，没心思上课"),
                array("username"=>"王宁","age"=>22,"desc"=>"太美丽，心情不美丽"),
                array("username"=>"蒋会","age"=>23,"desc"=>"pink,ok ，这很pink")
            );
    ?>
</head>
<body>
          <table border="1">
                <tr>
                        <td>姓名</td>
                        <td>年龄</td>
                        <td>描述</td>
                </tr>
          <?php for($i=0;$i<count($array);$i++){?>
                <tr>
                    <td>
                        <?php echo $array[$i]["username"];?>
                    </td>
                    <td>
                        <?php echo $array[$i]["age"];?>
                    </td>
                    <td>
                        <?php echo $array[$i]["desc"]?>
                    </td>
                </tr>
          <?php } ?>
          </table>
</body>
</html>
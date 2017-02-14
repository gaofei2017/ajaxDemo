<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <style>
         div{
              width: 200px;
              height: 200px;
              background-color: pink;
              margin-top:10px;
         }
    </style>
</head>
<body>



    <div>
        <?php
 /*
            实际上开发，我是从数据库里面获取到数据.
            获取到数据之后，这个数据肯定是放在一个临时的存储区
            实际上是放在一个数组里面。
            然后从数组里面把数据遍历出来，然后放在页面上面的某个位置.
    */
            if(true){?>
                <div>你好！</div>
            <?php
            }
                for($i=0;$i<1000;$i++){?>
                <div class="box">张三</div>
                <?php echo $i; ?>
                </div>

            <?php }?>

    </div>
</body>
</html>
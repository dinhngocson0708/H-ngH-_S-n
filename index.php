<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .cn1{
            width: 50px;
            height: 50px;
            float: left;
            border: 1px solid ;
            margin-left: 5px;
            margin-bottom: 5px;
            background-color: green;
        }
        .cn2{
            width: 50px;
            height: 50px;
            float: left;
            border: 1px solid ;
            margin-left: 5px;
            margin-bottom: 5px;
            background-color: red;
        }
    </style>
    
</head>
<body>
    <?php 
      for(var $i=0;$i<=5;$i++){
        for(var $j=0;$j<=10;$j++){
            if($i%2==0){
                echo"<div class='cn1'></div></br>";
            }else{
                echo"<div class='cn2'></div></br>";
            }
        }}
    ?>
</body>
</html>
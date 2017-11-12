<!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <meta charset="utf-8">
    <style type="text/css">
        *{
    padding: 0;
    margin: 0;
}
.wrapper{
    width:1200px;
    height:auto;
    border:1px solid #000;
    margin:auto;
}
.header{
    width:100%;
    height:120px;
    border:1px solid #000;
}
.menu {
    width:100%;
    height:40px;
    border:1px solid #003;
    
}
.menu ul{
    width:100%;
    height:40px;
    list-style:none;
    margin-left: 0px;
    /*background-color: black;*/

}
.menu ul li{
    width:auto;
    height:40px;
    line-height:40px;
    float:left;
    /*width: 11%;*/
    border:1px solid #003;
}
.menu ul li a{
    margin: 7.8px;
    text-decoration:none;
    color:black;
    font-weight: bold;
}
.menu a:hover{
    color:#930;
}
.left{
   width: 330px;
   height: auto;
   border: 1px solid #000;
   float: left;
   /*background-color: black;*/
}
.right{
    width: 860px;
    height: auto;
    border: 1px solid #000;
    float: right;
    /*background-color: black;*/
}
.content{
    width:100%;
    height:auto;
    border:1px solid #000;
}

.clear{
    clear: both;
}
.footer{
    width:100%;
    /*height:80px;*/
    height: auto;
    border:1px solid #000;
    /*background-color: black;*/
}

    </style>
</head>
<body>
<div class="wrapper">
    <?php 
         include('modules/config.php');
         include('modules/header.php');
         include('modules/menu.php');
         include('modules/content.php');
         include('modules/footer.php');
     ?>
</div>
</body>
</html>
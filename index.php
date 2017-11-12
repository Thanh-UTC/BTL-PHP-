<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="css.css" /> -->
	<style type="text/css">
		*{
	padding: 0;
	margin: 0;
}
body{
	background: #131313;
}
.wrapper{
	width: 1000px;
	height: auto;
	border: 1px solid white;
	margin: auto;
	background: #131313;
}
.header{
	width: 100%;
	height: 120px;
	border: 1px solid white;
}
/*phan menu*/
.menu{
	width: 100%;
	height: 30px;
	border: 1px solid white;
}
.menu ul{
	width: 100%;
	height: 30px;
	list-style: none;
}
.menu ul li {
	float: left;
	line-height: 30px;
	margin-left: 10px;
}
.menu ul li a{
	margin-left: 40px;
	color: #fae68b;
	text-decoration: none;
}
.menu a:hover{
	text-decoration: underline;
}
/*menu phu*/
.menu_phu{
	width: 100%;
	height: 40px;
	margin-top: 10px;
	margin-bottom: 10px;
	border: 1px solid white;
}
/*phan content*/
.content{
	width: 100%;
	height:auto;
	border: 1px solid white;
}
/*phan content left*/
.left{
	width: 200px;
	height: auto;
	border: 1px solid white;
	float: left;
}
/*phan content right*/
.right{
	width: 790px;
	height: auto;
	border: 1px solid white;
	float: right;
}
/*danh muc sanpham*/
.danhmucsanpham ul{
	width: 100%;
	height: auto;
	list-style: none;
}
.danhmucsanpham ul li{
	margin-left: 10px;
	margin: 5px;
}
.danhmucsanpham ul li a{
    text-decoration: none;
    color: red;
}
.danhmucsanpham a:hover{
	text-decoration: underline;
}
/*tinhnangsanpham*/
.tinhnangsanpham{
	width: 100%;
	height: auto;
	list-style: none;
}
.tinhnangsanpham ul{
	width: 100%;
	height: auto;
	list-style: none;
}
.tinhnangsanpham ul li{
	margin-left: 10px;
	margin: 5px;
}
.tinhnangsanpham ul li a{
    text-decoration: none;
    color: red;
}
.tinhnangsanpham a:hover{
	text-decoration: underline;
}

/*sanphamall*/
.sanphamall ul{
   width: auto;
   list-style: none;
   margin-top: 10px;
   /*float: left;*/
}
.sanphamall ul li{
	float: left;
	width: 220px;
	height: 320px;
	border: 1px solid white;
	margin-left: 30px;
}
.sanphamall ul li a{
	float: left;
	text-decoration: none;
	padding-top: 2px;
}
/*.box_giohang{
	width:98%;
	height:auto;
	
	
	margin:2px;
}*/
/*phan clear*/
.clear{
	clear: both;
}
/*phan footer*/
.footer{
	width: 100%;
	height: 700px;
	border: 1px solid white;
}
/*css footer*/
/*.footer-main {
     width: 100%;
     float: left;
     height:auto;
     background: #888;
     border: 2px solid white;
}*/
/*.footer-copyright {
     width: 100%;
     float: left;
     min-height: 20px;
     background: #666;
}*/
/*.footer-column {
     width:33.333333%;
     float:left;
     height: auto;
     
}*/
 
	</style>
</head>
<body>
<div class="wrapper">
	<?php 
	session_start();
	    include('admincp/modules/config.php');
        include ('modules/header.php');
        include ('modules/menu.php');
        include ('modules/content.php');
        include ('modules/footer.php');
	 ?>	
</div>
</body>
</html>
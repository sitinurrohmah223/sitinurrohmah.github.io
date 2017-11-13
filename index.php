
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Web Siti Nur Rohmah</title>
  <style type ="text/css">
body{
	font-family: arial;
	font-size: 14px;
	background: url(img.jpg) no-repeat center;
	font-style: bold;
}

#canvas{
	width: 1000px;
	margin: 0 auto;
	border: 1px solid silver;
	

}

#header{
	font-size: 30px;
	height: 80px;
	color:#090;
	padding: 70px;
	background: #fff;
	overflow:hidden;
	background:url(nuy.png) no-repeat center;
	background-size:100% 100%;
}

#menu{
	background-color: #d2b48c;
}

#menu ul{
	list-style: none;
	margin:0;
	padding:0;
} 

#menu ul li.utama{
	display: inline-table;
}

#menu ul li:hover{
	background-color: #191970;
}

#menu ul li a{
	display: block;
	text-decoration: none;
	line-height: 40px;
	padding:0 30px;
	color: #fff;
	font-style: bold;
}

.utama ul{
	display: none;
	position: absolute;
	z-index: 2;
}

.utama:hover ul{
	display: block;
}

.utama ul li{
	display: block;
	background-color: #3C6;
	width: 140px;
}	
	
#isi{
	background:url(.jpg) no-repeat center;
	background-size:100% 150%;
	min-height: 400px;
	padding: 20px;
}


#footer{
	text-align: center;
	padding: 10px;
	background-color: #ccc;
}

</style>
</head>
<body>
<div id="canvas">
	<div id="header">

	</div>

	<div id="menu">
    	<ul>
        	
            <li class="utama"><a href="?page=home">BERANDA</a></li>
        
            <li class="utama"><a href="?page=profil">PROFIL</a></li>

            <li class="utama"><a href="?page=tugas">TUGAS</a></li>

           
         </ul>
	</div>

	

	
	<marquee>Welcome to Siti Nur Rohmah's Web</marquee>

	<div id="isi">
    <?php
	$page = @$_GET['page'];
	$action = @$_GET['action'];
	if($page == "home"){
		include "home.html";
	

	} else if($page == "profil"){
		include "profil.php";
		

	} else if($page == "tugas"){
		include "tugas.html";
		
	} else {
		echo "404! Halaman Tidak ditemukan";
	}
	?>

	</div>

	<div id="footer">
    Copyright 2017 - Siti Nur Rohmah

	</div>
</body>
</html>
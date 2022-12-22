<?php require_once("cart.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Distro</title> 
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: Facebook Open Graph -->
	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>
	<!-- end: Facebook Open Graph -->

    <!-- start: CSS --> 
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
	<!-- end: CSS -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    
	<!--start: Header -->
	<header>
		
		<!--start: Container -->
	<div class="container">
			
			<!--start: Row -->
			<div class="row">
					
				<!--start: Navigation -->
				<div class="span9">
					
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			            		<span class="icon-bar"></span>
			          		</a>
			          		<div class="nav-collapse collapse">
			            		<ul class="nav">
			              			<li class="active"><a href="index.php">Home</a></li>
                                    <li><a href="detail.php">Keranjang</a></li>
			            		</ul>
			          		</div>
			        	</div>
			      	</div>
					
				</div>	
				<!--end: Navigation -->
					
			</div>
			<!--end: Row -->
			
		</div>
		<!--end: Container-->			
			
	</header>
	<!--end: Header-->
	
	
	<!--start: Wrapper-->
	<div id="wrapper">
				
		<!-- start: Container -->
		<div class="container">

			<!-- start: Table -->
                 <div class="table-responsive">
                 <div class="title"><h3>Checkout Selesai</h3></div>
                 <div class="hero-unit">Selamat Anda telah berhasil checkout, silahkan catat info di bawah ini..</div>
                 <div class="hero-unit">
    <?php
			if($_POST['finish']){
				session_destroy();
				echo 'Terima kasih Anda sudah berbelanja di Toko Online kami dan berikut ini adalah data yang perlu Anda catat.';
				echo '<p>Total biaya untuk pembelian Produk adalah Rp. '.$_POST['total'].',- dan biaya bisa di kirimkan melalui Rekening Bank Mandiri cabang Cikarang dengan nomor rekening 123-234-56347-8 atas nama Hakko Bio Richard.</p>';
				echo '<p>Dan barang akan kami kirim ke alamat di bawah ini:</p>';
				echo '<p>Nama Lengkap : '.$_POST['nm_usr'].'<br>';
                echo 'Email : '.$_POST['email_usr'].'<br>';
                echo 'Alamat : '.$_POST['almt_usr'].'<br>';
                echo 'Kode Pos : '.$_POST['kp_usr'].'<br>';
                echo 'Kota : '.$_POST['kota_usr'].'<br>';
                echo 'No Telepon : '.$_POST['tlp'].'<br>';
                echo 'Total Belanja : Rp. '.$_POST['total'].',-</p>';
			}else{
				header("Location: index.php");
			}
			?>
                   </div>
				
			<!-- end: Table -->

		</div>
		<!-- end: Container -->
				
	</div>
	<!-- end: Wrapper  -->			

    
<!-- start: Java Script -->
<!-- Placed at the end of the document so the pages load faster -->

<script src="js/bootstrap.js"></script>


</body>
</html>
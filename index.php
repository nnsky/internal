<!DOCTYPE html>
<html>
<head>
	<title>Internal</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
</head>
<link rel="icon" type="image/x-icon" href="favck.png"/>
<body>
 

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login"><img src="logock.png" alt="Internal" width="200px"></p>
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="Login">
			<br><br>
			<center><a href="https://api.whatsapp.com/send?phone=6281290979905&text=Halo%20saya%20lupa%20password%20internal%20">Lupa Password</a></center>
		</form>
	</div>
 <div class="container">
		 <h2 class="text-center font-weight-bold">Our Partners</h2>
		 <section class="customer-logos slider center">
			 <div class="slide"><img src="image/1.png" alt="sponsor"></div>
			 <div class="slide"><img src="image/2.png" alt="sponsor"></div>
			 <div class="slide"><img src="image/3.png" alt="sponsor"></div>
			 <div class="slide"><img src="image/4.png" alt="sponsor"></div>
			 <div class="slide"><img src="image/5.png" alt="sponsor"></div>
			 <div class="slide"><img src="image/6.png" alt="sponsor"></div>
			 <div class="slide"><img src="image/7.png" alt="sponsor"></div>
			 <div class="slide"><img src="image/8.png" alt="sponsor"></div>
			
		 </section>                                                                                
	 </h2>
 </div>
 <script>
	 $(document).ready(function(){
		 $('.customer-logos').slick({
			 slidesToShow: 6,
			 slidesToScroll: 1,
			 autoplay: true,
			 autoplaySpeed: 1500,
			 arrows: false,
			 dots: false,
			 pauseOnHover: false,
			 responsive: [{
				 breakpoint: 768,
				 setting: {
					 slidesToShow:4
				 }
			 }, {
				 breakpoint: 520,
				 setting: {
					 slidesToShow:3
				 }
			 }]
		 })
	 })
 </script>
	<!--Start of Tawk.to Script-->
	<script src="//code.jivosite.com/widget/Ug6k8USPCY" async></script>
<!--End of Tawk.to Script-->
</body>
</html>
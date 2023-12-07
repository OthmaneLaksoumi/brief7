<?php

try {
	$conn = new PDO('mysql:host=localhost;dbname=brief7', 'root', '');
	$stmt = $conn->prepare("SELECT * FROM products WHERE isHide = 0");
	$stmt->execute();
	$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$stmt1 = $conn->prepare("SELECT * FROM categories WHERE isHide = 0");
	$stmt1->execute();
	$catgs = $stmt1->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
}
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />


	<style>
		#search-input {
			border-radius: 20px;
		}
	</style>

</head>

<body>
	<!-- HEADER -->
	<header>


		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="#" class="logo">
								<img src="./img/logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form>
								<!-- <select class="input-select">
									<option value="0">All Categories</option>
									<option value="1">Category 01</option>
									<option value="1">Category 02</option>
								</select> -->
								<input class="input" id="search-input" style="width: 35vw;" placeholder="Search here">
								<!-- <button class="search-btn">Search</button> -->
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div>
								<a href="#">
									<i class="fa fa-heart-o"></i>
									<span>Your Wishlist</span>
									<div class="qty">2</div>
								</a>
							</div>
							<!-- /Wishlist -->

							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<div class="qty">3</div>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>

										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product02.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">3x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
									</div>
									<div class="cart-summary">
										<small>3 Item(s) selected</small>
										<h5>SUBTOTAL: $2940.00</h5>
									</div>
									<div class="cart-btns">
										<a href="#">View Cart</a>
										<a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->

				<ul class="main-nav nav navbar-nav">
					<li class="li-padding">All Products</li>
					<?php foreach ($catgs as $catg) { ?>
						<li class="li-padding"><?php echo $catg['name']; ?></li>
					<?php } ?>
				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->


	<!-- SECTION -->

	<!-- /SECTION -->

	<!-- Section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row" id="menu-product">

				<div class="col-md-12">
					<div class="section-title text-center">
						<h3 class="title" id="title-catg">All Product</h3>
					</div>
				</div>


			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /Section -->

	<!-- NEWSLETTER -->

	<!-- FOOTER -->
	<footer id="footer">
		<!-- top footer -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">About Us</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
							<ul class="footer-links">
								<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
								<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
								<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
							</ul>
						</div>
					</div>



					<div class="clearfix visible-xs"></div>

					<div class="col-md-3 col-xs-6">
						<div class="footer">
							<h3 class="footer-title">Information</h3>
							<ul class="footer-links">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Orders and Returns</a></li>
								<li><a href="#">Terms & Conditions</a></li>
							</ul>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top footer -->

		<!-- bottom footer -->

		<!-- /bottom footer -->
	</footer>
	<!-- /FOOTER -->

	<!-- jQuery Plugins -->
	<!-- <script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script> -->

	<script>
		let listCatg = document.querySelectorAll('.li-padding');
		listCatg[0].style.color = '#D10024';

		function getData(tableName) {
			var result;
			let myRequest = new XMLHttpRequest();
			myRequest.open("GET", "admin/ajaxConn.php?table=" + tableName, false);
			myRequest.onreadystatechange = function() {
				if (this.readyState === 4 && this.status === 200) {
					result = JSON.parse(this.responseText);
				}
			}
			myRequest.send();
			return result;
		}

		let products = getData("products");


		let menu = document.getElementById('menu-product');

		function displayProducts(object) {
			let firstDiv = document.createElement('div');
			firstDiv.className = 'col-md-3 col-xs-6';
			firstDiv.innerHTML = `
				<div class="product">
					<div class="product-img">
						<img src="admin/${object['img']}" alt="">
						<div class="product-label">
									<span class="sale">${(object['prixOffre'] - object['prixFinal']) / object['prixFinal'] * 100}%</span>
						</div>
					</div>
					
					<div class="product-body">
						<p class="product-category">${object['catg']}</p>
						<h3 class="product-name"><a href="#">${object['etiquette']}</a></h3>
						<h4 class="product-price">${object['prixFinal']}DH <del class="product-old-price">${object['prixOffre']}DH</del></h4>
						<div class="product-rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star-o"></i>
						</div>
					</div>
					<div class="add-to-cart">
						<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
			`;
			menu.appendChild(firstDiv);
		}
		products.forEach(function(pro) {
			displayProducts(pro);
		});

		listCatg.forEach(function(catg) {
			catg.addEventListener('click', function() {
				listCatg.forEach(function(c) {
					c.style.color = 'black';
				})
				document.getElementById('title-catg').innerText = catg.textContent;
				catg.style.color = '#D10024';
				menu.innerHTML = `
					<div class="col-md-12">
						<div class="section-title text-center">
							<h3 class="title" id="title-catg">${catg.textContent}</h3>
						</div>
					</div>
				`;
				if (catg.textContent === 'All Products') {
					products.forEach(function(pro) {
						displayProducts(pro);
					});
				} else {
					products.forEach(function(pro) {
						if (pro['catg'] === catg.textContent) displayProducts(pro);
						console.log(pro['catg']);

					});
				}
			});
		});
	</script>

</body>

</html>
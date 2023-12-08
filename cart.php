<?php 
$conn = new PDO('mysql:host=localhost;dbname=brief7', 'root', ''); 
?>
<!DOCTYPE html>
<html>

<head>
	<title>Shopping Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"">
	<link href=" https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="css/cart.css">
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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<main class="page">
		<section class="shopping-cart dark">
			<div class="container">
				<div class="block-heading">
					<h2>Shopping Cart</h2>
					<p>Our Shopping Cart page is designed with your convenience in mind. It's a user-friendly space
						where you have full control over your selections and can proceed confidently to the next steps
						of your online shopping journey. Happy shopping!</p>
				</div>
				<div class="content">
					<div class="row">
						<div class="col-md-12 col-lg-8">
							<div class="items">
								<div class="product">
									<div class="row">
										<div class="col-md-3">
											<img class="img-fluid mx-auto d-block image" src="images/p9.png">
										</div>
										<div class="col-md-8">
											<div class="info">
												<div class="row">
													<div class="col-md-5 product-name">
														<div class="product-name">
															<a href="#">Lorem Ipsum dolor</a>
															<div class="product-info">
																<div>Display: <span class="value">5 inch</span></div>
																<div>RAM: <span class="value">4GB</span></div>
																<div>Memory: <span class="value">32GB</span></div>
															</div>
														</div>
													</div>
													<div class="col-md-4 quantity">
														<label for="quantity">Quantity:</label>
														<input id="quantity" type="number" value="1" class="form-control quantity-input">
													</div>
													<div class="col-md-3 price">
														<span>$120</span>
													</div>
													<div class="col-md-4 delete">
														<button type="button" class="btn btn-danger btn-block">
															Delete
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="product">
									<div class="row">
										<div class="col-md-3">
											<img class="img-fluid mx-auto d-block image" src="images/p7.png">
										</div>
										<div class="col-md-8">
											<div class="info">
												<div class="row">
													<div class="col-md-5 product-name">
														<div class="product-name">
															<a href="#">Lorem Ipsum dolor</a>
															<div class="product-info">
																<div>Display: <span class="value">5 inch</span></div>
																<div>RAM: <span class="value">4GB</span></div>
																<div>Memory: <span class="value">32GB</span></div>
															</div>
														</div>
													</div>
													<div class="col-md-4 quantity">
														<label for="quantity">Quantity:</label>
														<input id="quantity" type="number" value="1" class="form-control quantity-input">
													</div>
													<div class="col-md-3 price">
														<span>$120</span>
													</div>
													<div class="col-md-4 delete">
														<button type="button" class="btn btn-danger btn-block">
															Delete
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="product">
									<div class="row">
										<div class="col-md-3">
											<img class="img-fluid mx-auto d-block image" src="images/p3.png">
										</div>
										<div class="col-md-8">
											<div class="info">
												<div class="row">
													<div class="col-md-5 product-name">
														<div class="product-name">
															<a href="#">Lorem Ipsum dolor</a>
															<div class="product-info">
																<div>Display: <span class="value">5 inch</span></div>
																<div>RAM: <span class="value">4GB</span></div>
																<div>Memory: <span class="value">32GB</span></div>

															</div>
														</div>
													</div>
													<div class="col-md-4 quantity">
														<label for="quantity">Quantity:</label>
														<input id="quantity" type="number" value="1" class="form-control quantity-input">
													</div>
													<div class="col-md-3 price">
														<span>$120</span>
													</div>
													<div class="col-md-4 delete">
														<button type="button" class="btn btn-danger btn-block">
															Delete
														</button>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-4">
							<div class="summary">
								<h3>Summary</h3>
								<div class="summary-item"><span class="text">Subtotal</span><span class="price">$360</span></div>
								<div class="summary-item"><span class="text">Discount</span><span class="price">$0</span></div>
								<div class="summary-item"><span class="text">Shipping</span><span class="price">$0</span></div>
								<div class="summary-item"><span class="text">Total</span><span class="price">$360</span>
								</div>
								<button type="button" class="btn btn-success btn-lg btn-block">Confirm the order</button>
								<button type="button" class="btn btn-warning  btn-lg btn-block">Continue my shopping</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>
<?php
if(!isset($_SESSION)) session_start();


?>
<div class="header">
<div class="container">
		<div class="head">
			<div class=" logo">
				<a href="index.php"><img src="image/logo2.png" alt=""></a>	
			</div>
		</div>
	</div>
	<div class="header-top">
		<div class="container">
		<div class="col-sm-5 col-md-offset-2  header-login">
					<ul >
					<li>
							<?php
							if(isset($_SESSION['user']))
							{
								?>
								<a href="logout.php">Logout</a>
								<?php
							}else
							{
								?>
								<a href="login.php">Login</a>
								<?php
							}
							?>
						</li>
						<li>
						<?php
							if(!isset($_SESSION['user']))
							{
								?>
								<a href="register.php">Register</a>
								<?php
							}
							?>
						</li>
						<li><a href="checkout.php">Checkout</a></li>
					</ul>
				</div>
				
			<div class="col-sm-5 header-social">		
					<ul >
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
						<li><a href="#"><i class="ic4"></i></a></li>
					</ul>
					
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		
		<div class="container">
		
			<div class="head-top">
			
		 <div class="col-sm-8 col-md-offset-2 h_menu4">
				<nav class="navbar nav_bottom" role="navigation">
 
 <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
            <li><a class="color" href="index.php">Home</a></li>
            
    		<li class="dropdown mega-dropdown active">
			    <a class="color1" href="#" class="dropdown-toggle" data-toggle="dropdown">Women<span class="caret"></span></a>				
				<div class="dropdown-menu ">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu1</h4>
									<ul>
										<li><a href="product.php">Accessories</a></li>
										<li><a href="product.php">Bags</a></li>
										<li><a href="product.php">Caps & Hats</a></li>
										<li><a href="product.php">Hoodies & Sweatshirts</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu2</h4>
								<ul>
										<li><a href="product.php">Jackets & Coats</a></li>
										<li><a href="product.php">Jeans</a></li>
										<li><a href="product.php">Jewellery</a></li>
										<li><a href="product.php">Jumpers & Cardigans</a></li>
										<li><a href="product.php">Leather Jackets</a></li>
										<li><a href="product.php">Long Sleeve T-Shirts</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu3</h4>
									<ul>
										<li><a href="product.php">Shirts</a></li>
										<li><a href="product.php">Shoes, Boots & Trainers</a></li>
										<li><a href="product.php">Sunglasses</a></li>
										<li><a href="product.php">Sweatpants</a></li>
										<li><a href="product.php">Swimwear</a></li>
										<li><a href="product.php">Trousers & Chinos</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu4</h4>
								<ul>
									<li><a href="product.php">T-Shirts</a></li>
									<li><a href="product.php">Underwear & Socks</a></li>
									<li><a href="product.php">Vests</a></li>
									<li><a href="product.php">Jackets & Coats</a></li>
									<li><a href="product.php">Jeans</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1 col5">
						<img src="images/me.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li class="dropdown mega-dropdown active">
			    <a class="color2" href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>				
				<div class="dropdown-menu mega-dropdown-menu">
                    <div class="menu-top">
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu1</h4>
									<ul>
										<li><a href="product.php">Accessories</a></li>
										<li><a href="product.php">Bags</a></li>
										<li><a href="product.php">Caps & Hats</a></li>
										<li><a href="product.php">Hoodies & Sweatshirts</a></li>
										
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu2</h4>
								<ul>
										<li><a href="product.php">Jackets & Coats</a></li>
										<li><a href="product.php">Jeans</a></li>
										<li><a href="product.php">Jewellery</a></li>
										<li><a href="product.php">Jumpers & Cardigans</a></li>
										<li><a href="product.php">Leather Jackets</a></li>
										<li><a href="product.php">Long Sleeve T-Shirts</a></li>
									</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu3</h4>
								
<ul>
										<li><a href="product.php">Shirts</a></li>
										<li><a href="product.php">Shoes, Boots & Trainers</a></li>
										<li><a href="product.php">Sunglasses</a></li>
										<li><a href="product.php">Sweatpants</a></li>
										<li><a href="product.php">Swimwear</a></li>
										<li><a href="product.php">Trousers & Chinos</a></li>
										
									</ul>	
								
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Submenu4</h4>
								<ul>
									<li><a href="product.php">T-Shirts</a></li>
									<li><a href="product.php">Underwear & Socks</a></li>
									<li><a href="product.php">Vests</a></li>
									<li><a href="product.php">Jackets & Coats</a></li>
									<li><a href="product.php">Jeans</a></li>
									<li><a href="product.php">Jewellery</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1 col5">
						<img src="images/me1.png" class="img-responsive" alt="">
						</div>
						<div class="clearfix"></div>
					</div>                  
				</div>				
			</li>
			<li><a class="color3" href="product.php">Sale</a></li>
			
           
        </ul>
     </div><!-- /.navbar-collapse -->

</nav>
			</div>
			<div class="col-sm-2 search-right">
				<ul class="heart">
				<li>
				<a href="wishlist.php" >
				<span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
				</a></li>
				<li><a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i></a></li>
				<li>
                          <?php
						       if(isset($_SESSION['user'])){
								$sql='select * from user where email =?';
								$a=[$_SESSION['user']];
								$tam=$objPDO->prepare($sql);
								$tam->execute($a);
								$data=$tam->fetch(PDO::FETCH_OBJ);
								echo $data->tenuser;
							}
							else{
								echo '';
							}

						  ?>	
				</li>
					</ul>
					<div class="cart box_1">
						<a href="checkout.php">
						<h3> <div class="total">
							<span class="simpleCart_total"></span></div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
						<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
					
						<!----->

						<!---pop-up-box---->					  
			<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
			    <div class="search-top">
					<form action="index.php" method="get">
					<div class="login-search">
						<input type="submit" value="">
						<input type="text" value="" name="dh51801707_kw" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search..';}">		
					</div>
					<p><input type="submit" value="Search"></p>
					</form>
				</div>			
			</div>
		 <script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
			});
																						
			});
		</script>		
						<!----->
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>	
</div>
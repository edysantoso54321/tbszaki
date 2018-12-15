<div class="w3ls-header"><!--header-one-->
	    <div class="w3ls-header-left">
	      <p><a href="#">UPTO $50 OFF ON LAPTOPS | USE COUPON CODE LAPPY </a></p>
	    </div>
	    <div class="w3ls-header-right">
	      <ul>
	        <li class="dropdown head-dpdn">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> My Account<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	          	<?php if(isset($_SESSION['user'])) {
	          		echo "<li><a href='profil.php'>".$_SESSION['user']."</a></li> <li><a href='control/logout.php'>logout</a></li>"; 
	          	}else {echo '<li><a href="login.php">Login </a></li><li><a href="signup.php">Sign Up</a></li>';

	          	} 
	          	
	          	?>
	            <li><a href="login.php">My Orders</a></li>
	            <li><a href="login.php">Wallet</a></li>
	          </ul>
	        </li>
	        <li class="dropdown head-dpdn">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-percent" aria-hidden="true"></i> Today's Deals<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="offers.php">Cash Back Offers</a></li>
	            <li><a href="offers.php">Product Discounts</a></li>
	            <li><a href="offers.php">Special Offers</a></li>
	          </ul>
	        </li>
	        <li class="dropdown head-dpdn">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-gift" aria-hidden="true"></i> Gift Cards<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="offers.php">Product Gift card</a></li>
	            <li><a href="offers.php">Occasions Register</a></li>
	            <li><a href="offers.php">View Balance</a></li>
	          </ul>
	        </li>
	        <li class="dropdown head-dpdn">
	          <a href="contact.php" class="dropdown-toggle"><i class="fa fa-map-marker" aria-hidden="true"></i> Store Finder</a>
	        </li>
	        <li class="dropdown head-dpdn">
	          <a href="card.php" class="dropdown-toggle"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Credit Card</a>
	        </li>
	        <li class="dropdown head-dpdn">
	          <a href="help.php" class="dropdown-toggle"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
	        </li>
	      </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
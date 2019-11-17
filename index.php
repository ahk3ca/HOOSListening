<?php
session_start();
$_SESSION['isLogged'] = false;
$_SESSION['name'] = "Josh";
?>

<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<<<<<<< HEAD
=======
<style>
.iframe {
  padding: 0;
  margin: 0;
  border: none;
  margin: 0;
  display: block;
  width: 100%;
  height: 50vh;
  float: left;
  &::-webkit-scrollbar { 
    display: none; 
  }
}
</style>
>>>>>>> ad075b6d2a363a812cc585c0e081d67e39c638eb
<html>
	<head>
		<title>HOOS Listening | Home</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Sidebar -->
			<section id="sidebar">
				<div class="inner">
					<nav>
						<ul>
							<li><a href="#intro">Home</a></li>
							<li><a href="#one">Who we are</a></li>
							<li><a href="#two">What we do</a></li>
							<?php if(!$_SESSION['isLogged']) { ?>
								<li><a href="#three">Sign Up</a></li>
							<?php } ?>
							<li><a href="#four">Get in touch</a></li>
<!-- <<<<<<< HEAD
======= -->
							<?php if($_SESSION['isLogged']) { ?>
								<li><a href="#five">Services</a></li>
							<?php } ?>
<!-- >>>>>>> ad075b6d2a363a812cc585c0e081d67e39c638eb
 -->						</ul>
					</nav>
				</div>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Intro -->
					<section id="intro" class="wrapper style1 fullscreen fade-up">
						<div class="inner">
							<h1>HOOS Listening</h1>
							<?php 
								if($_SESSION['isLogged']){
									echo "<p>";
									echo $_SESSION['name'] , ", ", "Let your <strong>voice</strong> be heard."; 
									echo "</p>";
								} else {
									echo "<p>Let your <strong>voice</strong> be heard.</p>";
								}
							?>
							<ul class="actions">
								<li><a href="login.html" class="button scrolly">Member Login</a></li>
							</ul>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style2 spotlights">
						<div class="inner">
							<h2>Who We Are</h2>
							<p>With HOOS Listening, finding new music from emerging artists has never been easier. Support your favorite, local artists by interacting with their content and helping them gain more national exposure. <br /> <br /> Let your <strong>voice</strong> be heard.</p>
							<ul class="actions">
								<li><a href="#three" class="button">Sign Up</a></li>
							</ul>
							<ul class="actions">
								<li><a href="#three" class="button">Sign Up</a></li>
							</ul>
						</div>
					</section>


				<!-- Two -->
					<section id="two" class="wrapper style3 fade-up">
						<div class="inner">
							<h2>What We Do</h2>
							<p>We want to promote up and coming artists/musicians through a platform that gives a level playing field. Musicians  upload their songs to our app and only users within a certain radius can listen to the artist’s song. The more listens / good impressions the musician has on their songs, the larger their radius of listening expands. Prove that you can deliver what people enjoy listening to. </p>
								<img src="Hoos Listening Logo.png" alt="Girl in a jacket" class="rounded float-bottom" style="width:300px;height:300px;"> 
						</div>
					</section>




					<!-- Sign up page (three) -->
<<<<<<< HEAD
		<section id="three" class="wrapper style1 fade-up">
						<div class="inner">				
							<div class="split style1">
								<section>
									<form method="POST" action="signup.php" >
			  <div class="container">
			    <h1>Sign Up</h1>
			    <p>Please fill in this form to create an account.</p>
			    <hr>

                <label for="fname"><b>First Name</b></label>
			    <input type="text" placeholder="Enter First Name" name="fname" required pattern = "^[a-zA-Z]+$" title = "Need one letter minimum. Nothing besides letters.">

                <label for="lname"><b>Last Name</b></label>
			    <input type="text" placeholder="Enter Last Name" name="lname" required pattern = "^[a-zA-Z]+-*[a-zA-Z]*$" title = "Need one letter minimum. Nothing besides letters. Hyphens allowed.">

			    <label for="email"><b>Email</b></label>
			    <input type="text" placeholder="Enter Email" name="email"required pattern = "^.+@+.+\.+.+$" value = "" title = "Please use valid email format. At least one . symbol and one @ symbol." >

                <label for="address"><b>Address</b></label>
			    <input type="text" placeholder="Enter Address" name="address" required pattern = "^\d+.*[a-zA-Z]+$" title = "Need at least one number followed by one letter.">

                <label for="city"><b>City</b></label>
			    <input type="text" placeholder="Enter City" name="city" required pattern = "^[a-zA-Z]+\s*[a-zA-Z]*$" value = "" title = "Need at least one letter">

                <label for="state"><b>State</b></label>
                <select name = "state" required>
							<option value = "">Make a Selection</option>
							<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
			    </select>
			    			

                <label for="zipcode"><b>5-digit zip code</b></label>
			    <input type="text" placeholder="Enter 5-digit zip code" name="zipcode" required pattern = "^\d{5}$" value = "" title = "Need exactly 5 numbers.">

                <label for="username"><b>Username</b></label>
			    <input type="text" placeholder="Enter Username" name="username" required>

			    <label for="psw"><b>Password</b></label>
			    <input type="password" placeholder="Enter Password" name="psw" required>

			    <label for="psw-repeat"><b>Repeat Password</b></label>
			    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

			   <!--  <label>
			      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
			    </label> -->

			    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

			    <div class="clearfix">
			      <button type="button" class="cancelbtn">Cancel</button>
			      <button type="submit" class="signupbtn" value="Submit">Sign Up</button>
			    </div>
			  </div>
			</form>
								</section>
								
							</div>
						</div>
					</section>



					<section id="three" class="wrapper style1 fade-up">
							

			
						

					</section>
		
		
										
=======
		<?php if(!$_SESSION['isLogged']) { ?>
			<section id="three" class="wrapper style1 fade-up">
				<div class="inner">				
					<div class="split style1">
						<section>
							<form method="POST" action="signup.php" >
								<div class="container">
									<h1>Sign Up</h1>
									<p>Please fill in this form to create an account.</p>
									<hr>

									<label for="fname"><b>First Name</b></label>
									<input type="text" placeholder="Enter First Name" name="fname" required pattern = "^[a-zA-Z]+$" title = "Need one letter minimum. Nothing besides letters.">

									<label for="lname"><b>Last Name</b></label>
									<input type="text" placeholder="Enter Last Name" name="lname" required pattern = "^[a-zA-Z]+-*[a-zA-Z]*$" title = "Need one letter minimum. Nothing besides letters. Hyphens allowed.">

									<label for="email"><b>Email</b></label>
									<input type="text" placeholder="Enter Email" name="email"required pattern = "^.+@+.+\.+.+$" value = "" title = "Please use valid email format. At least one . symbol and one @ symbol. >

									<label for="address"><b>Address</b></label>
									<input type="text" placeholder="Enter Address" name="address" required>

									<label for="city"><b>City</b></label>
									<input type="text" placeholder="Enter City" name="city" required>

									<label for="state"><b>State</b></label>
									<select name = "state" required>
												<option value = "">Make a Selection</option>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
												<option value="AZ">Arizona</option>
												<option value="AR">Arkansas</option>
												<option value="CA">California</option>
												<option value="CO">Colorado</option>
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="DC">District Of Columbia</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="HI">Hawaii</option>
												<option value="ID">Idaho</option>
												<option value="IL">Illinois</option>
												<option value="IN">Indiana</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NV">Nevada</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NM">New Mexico</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="ND">North Dakota</option>
												<option value="OH">Ohio</option>
												<option value="OK">Oklahoma</option>
												<option value="OR">Oregon</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="SD">South Dakota</option>
												<option value="TN">Tennessee</option>
												<option value="TX">Texas</option>
												<option value="UT">Utah</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WA">Washington</option>
												<option value="WV">West Virginia</option>
												<option value="WI">Wisconsin</option>
												<option value="WY">Wyoming</option>
									</select>
												

									<label for="zipcode"><b>5-digit zip code</b></label>
									<input type="text" placeholder="Enter 5-digit zip code" name="zipcode" required>

									<label for="username"><b>Username</b></label>
									<input type="text" placeholder="Enter Username" name="username" required>

									<label for="psw"><b>Password</b></label>
									<input type="password" placeholder="Enter Password" name="psw" required>

									<label for="psw-repeat"><b>Repeat Password</b></label>
									<input type="password" placeholder="Repeat Password" name="psw-repeat" required>

									<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

									<div class="clearfix">
									<button type="button" class="cancelbtn">Cancel</button>
									<button type="submit" class="signupbtn">Sign Up</button>
									</div>
								</div>
							</form>
						</section>	
					</div>
				</div>
			</section>
		<?php } ?>
>>>>>>> ad075b6d2a363a812cc585c0e081d67e39c638eb

				<!-- Four -->
					<section id="four" class="wrapper style1 fade-up">
						<div class="inner">
							<h2>Get in touch</h2>
							<p>Send your inquiries via our contact portal.</p>
							<div class="split style1">
								<section>
									<form method="post" action="#">
										<div class="fields">
											<div class="field half">
												<label for="name">Name</label>
												<input type="text" name="name" id="name" />
											</div>
											<div class="field half">
												<label for="email">Email</label>
												<input type="text" name="email" id="email" />
											</div>
											<div class="field">
												<label for="message">Message</label>
												<textarea name="message" id="message" rows="5"></textarea>
											</div>
										</div>
										<ul class="actions">
											<li><a href="" class="button submit">Send Message</a></li>
										</ul>
									</form>
								</section>
								<section>
									<ul class="contact">
										<li>
											<h3>Address</h3>
											<span>12345 Somewhere Road #654<br />
											Nashville, TN 00000-0000<br />
											USA</span>
										</li>
										<li>
											<h3>Email</h3>
											<a href="#">user@untitled.tld</a>
										</li>
										<li>
											<h3>Phone</h3>
											<span>(000) 000-0000</span>
										</li>
										<li>
											<h3>Social</h3>
											<ul class="icons">
												<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
												<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
											</ul>
										</li>
									</ul>
								</section>
							</div>
						</div>
					</section>

<<<<<<< HEAD
=======
					<!-- Five -->
					<?php if($_SESSION['isLogged']) { ?>
						<section id="five" class="wrapper style1 fade-up">
							<div class="inner">
								<h2>Services</h2>
								<p>Buy plz.</p>
								<div class="split style1">
									<section>
										<iframe src="https://bitcoinwisdom.io/markets/bitstamp/btcusd" class="iframe"></iframe>
										<iframe float="center" frameBorder="0" scrolling="no" allowtransparency="0" src="https://bitcoinaverage.com/en/widgets?widgetType=conversion&bgcolor=#FFFFFF&bwidth=1&bcolor=#CCCCCC&cstyle=round&fsize=16px&ffamily=arial&fcolor=#000000&bgTransparent=solid&chartStyle=none&lastUpdateTime=none&currency0=USD&total=1" style="width:250px; height:275px; overflow:hidden; background-color:transparent !important;"></iframe>
									</section> 
									<section>
											<div class="container">
												<h3>Premium</h3>
												<ul class="alt">
													<li>This is the premium description</li>
													<li>Price : 0.002 BTC</li>
													<li>
														<form action="https://test.bitpay.com/checkout" method="post">
															<input type="hidden" name="action" value="checkout" />
															<input type="hidden" name="posData" value="" />
															<input type="hidden" name="data" value="v0BGPkhuQEjZIdeSYOJXP6EqInRsAHkhnEXbpvCTnmb2XPqR2eUZHDnGX1RmOe12ix2gqJMvcjsO/V38wk7hk0XO7D0o1tZIU/1MMoBAFmbvSIGo3yJewCMrmqlZFNiU//D53qy5uXEstkMfgDam8HzqHqMn0unMLQl7z0ZM5Ti3bIvH/tp7R/MehdAZAUxjbifvEPMVLvtsJM+fWJSANQ==" />
															<input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width: 210px" alt="BitPay, the easy way to pay with bitcoins.">
														</form>
													</li>
												</ul>
											</div>
											<div class="container">
												<h3>Normal</h3>
												<ul class="alt">
													<li>This is the normal description</li>
													<li>Price : 0.001 BTC</li>
													<li>
														<form action="https://test.bitpay.com/checkout" method="post">
															<input type="hidden" name="action" value="checkout" />
															<input type="hidden" name="posData" value="" />
															<input type="hidden" name="data" value="v0BGPkhuQEjZIdeSYOJXP6EqInRsAHkhnEXbpvCTnmb2XPqR2eUZHDnGX1RmOe12XGFi4jK19wVqDqVy9gJRqOeTTtTCKkwhuXcXY70vz8xfSUL40jt8D4A7+R6Hf9h40JYy7aZeMA3msiXQ1VQcnnAkQ8mtbTfZsXqr+cRDof1DfSij56h2wgTcVB5WG47KYHEZwxGUaVSYcLIUqvzckw==" />
															<input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit" style="width: 210px" alt="BitPay, the easy way to pay with bitcoins.">
														</form>
													</li>
												</ul>
											</div>
									</section>
								</div>
							</div>
						</section>
					<?php } ?>

>>>>>>> ad075b6d2a363a812cc585c0e081d67e39c638eb

		<!-- Footer -->
			<footer id="footer" class="wrapper style1-alt">
				<div class="inner">
					<ul class="menu">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
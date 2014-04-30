<?php
// load data from data.txt
?><html>

	<head>
		<title>Juice Stand</title>
		<link rel="stylesheet" type="text/css" href="game.css"/>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="game.js"></script>
	</head>

	<body>
		<header>
			<h1>Juice Stand</h1>
		</header>

		<div id="wrapper">
			<div id="game">
				<button>I'm a button</button>
				<section>
					<div id="stand">
						<p>STAND NAME</p>
					</div>
					<div id="account">
						<h2>Bank Account</h2>
						<p>$XX.00</p>
					</div>
					<div id="price">
						<h2>Price</h2>
						<p>$X.XX</p>
					</div>
					<div id="updates">
						<!-- this is placeholder for now, we'll come back to this later -->
						<p>
						+ $0.50 satisfied customer<br />
						- $100 fine (food poisoning)<br />
						</p>
					</div>
				</section>

				<section>
					<div id="date">
						<h2>January 1st</h2>
						<p><span id="hour">8</span><span id="separator">:</span><span id="minute">00</span> <span id="meridiem">AM</span></p>
					</div>
					<div id="inventory">
						<h2>Fruit</h2>
						<p>XXX</p>
					</div>
					<div id="product">
						<h2>Juice</h2>
						<p>XX.000  mL</p>
					</div>
					<div id="customers">
						<h2>Customers</h2>
						<p>XX</p>
					</div>
				</section>
			</div>
		</div>

		<footer>
			&copy; 2011 Octopod Games
		</footer>
	</body>
</html>
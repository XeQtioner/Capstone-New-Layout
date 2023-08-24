<?php
session_start();
require 'dbcon.php';

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
			crossorigin="anonymous"
		/>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
			crossorigin="anonymous"
		></script>
		<title>CBI Log In</title>
		<link rel="icon" type="image" href="./images/nbi.jpeg" />
		<style>
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}

			body {
				background-image: url(./images/mapbg.png);
				background-size: 100vw 50vh;
				background-position: center bottom;
				background-repeat: no-repeat;
				background-attachment: fixed;
				margin: 0;
				padding: 0;
				display: flex;
				align-items: center;
				justify-content: center;
				overflow-x: hidden;
				color: whitesmoke;
				overflow-y: hidden;
				height: 100%;
			}

			body::before {
				content: "";
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background: linear-gradient(
					to top,
					rgb(180, 7, 7),
					rgba(0, 0, 0, 0.5)
				);
				opacity: 1;
				z-index: -1;
			}

			body::after {
				content: "";
				position: fixed;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				background: linear-gradient(
					to bottom,
					rgba(0, 0, 0, 1),
					rgba(0, 0, 0, 0.95),
					/* rgba(0, 0, 0, 0.9), */
					rgba(0, 0, 0, 0.1)
				);
				opacity: 1;
				z-index: -1;
				text-shadow: #000;
			}

			::-webkit-scrollbar {
				width: 3px;
			}

			::-webkit-scrollbar-track {
				background-color: rgb(92, 7, 4);
			}

			::-webkit-scrollbar-thumb {
				background-color: rgb(237, 14, 6);
				border-radius: 2px;
				/* border: thin solid white; */
			}

			#login-container {
				width: 300px;
				margin: 100px auto;
				background-color: #080000;
				border-color: #f1eaea;
				border-style: groove;
				padding: 20px;
				border-radius: 5px;
				box-shadow: 0 2px 5px rgba(243, 241, 241, 0.3);
			}

			h2 {
				text-align: center;
				color: #f5eeee;
			}

			input[type="text"],
			input[type="password"] {
				width: 100%;
				padding: 10px;
				margin-bottom: 10px;
				border-radius: 5px;
				border: 1px solid #f7f5f5;
			}

			.button[type="button"] {
				width: 100%;
				padding: 10px;
				background-color: #000300;
				color: #f8f3f3;
				border: none;
				border-radius: 5px;
			}

			.button :hover {
				background-color: #039c0b;
			}
		</style>
	</head>
	<body>
		<div id="login-container">
			<h2
				style="
					font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
				"
			>
				Central Bureau of Investigation
			</h2>
			<form action="index.html" class="was-validated">
				<label
					for="agent"
					type="text"
					class="form-label"
					style="
						font-family: 'Courier New', Courier, monospace;
						font-weight: bolder;
						color: #f1eaea;
					"
					>AGENT CODE:</label
				>
				<input
					type="text"
					name="username"
					placeholder="xxxxxxxxxx"
					style="
						background-color: #383a38;
						font-family: 'Courier New', Courier, monospace;
						color: #f1eaea;
						border-style: dashed;
					"
					required
				/><br />

				<label
					for="pass"
					type="password"
					class="form-label"
					style="
						font-family: 'Courier New', Courier, monospace;
						font-weight: bolder;
						color: #f1eaea;
					"
					>PASSCODE:</label
				>
				<input
					type="password"
					name="password"
					placeholder="xxxxxxxxxx"
					style="
						font-family: 'Courier New', Courier, monospace;
						color: #f5eeee;
						border-style: dashed;
						background-color: #373837;
					"
					required
				/><br />

				<div class="valid-feedback">Welcome, Agent!</div>
				<div class="invalid-feedback">Access Denied!</div>
				<div class="d-grid gap-3">
					<button
						onclick="enterFullscreen()"
						type="submit"
						class="btn btn-dark"
						style="font-family: 'Courier New', Courier, monospace"
					
						href="index3.php">Submit
					</button>
				</div>
			</form>
		</div>
	</body>

	<script src="script.js"></script>
</html>

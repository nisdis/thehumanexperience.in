<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"> -->

	<title>Hope With Corona</title>
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans|Cabin&display=swap" rel="stylesheet">
	<!-- <link href="https://fonts.googleapis.com/css?family=Cabin|Ubuntu&display=swap" rel="stylesheet"> -->

	<style>
		body {
			width: 100%;
			height: 100%;
			overflow: hidden;
		}

		#page-wrap {
			position: absolute;
			top: 30vh;
			left: 40vw;
			padding: 0 60px;
			z-index: 20;
			width: calc(50% - 40px);
			/* right: 10px; */
			margin: 50px auto;

			background: transparent;
			color: white;
			overflow: hidden;

		}

		h1 {
			font-size: 3rem;
			font-family: 'Merriweather Sans', sans-serif;
			text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.71);
			color: white;

		}

		p {
			font: 2rem 'Cabin', sans-serif;
			margin: 0;
			text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.71);

		}


		img.bg {
			/* Set rules to fill background */
			min-height: 100%;
			min-width: 1024px;
			z-index: -1000;

			/* Set up proportionate scaling */
			/* width: 100%; */
			height: auto;

			/* Set up positioning */
			position: fixed;
			top: 0;
			left: 0;
		}

		
		@media screen and (min-width: 601px) and (max-width: 1024px) {

			img.bg {
				left: 40%;
				margin-left: -512px;
			}

			h1 {
				font-size: 5rem;
				font-family: 'Merriweather Sans', sans-serif;
				text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.71);

			}


			#page-wrap {
				position: fixed;
				top: auto;
				left: auto;
				margin-top: 30vh;
				width: calc(90% - 40px);

			}

			p {
				font-size: 3rem;
			}

		}

		@media screen and (min-width: 381px) and (max-width: 600) {
		
		}

		@media screen and (min-width: 175px) and (max-width: 380px) {
			
		}
	</style>
</head>

<body>
	<img src="images/baclkground1_edit.jpg" class="bg">

	<div id="page-wrap">
		<h1>The Human Experience</h1>
		<p>Release your true potential</p>
		<br />
		<p>Mind | Body | Spirit</p>
	</div>


</body>

</html>
<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<style>
	body {
		font-family: Arial, sans-serif;
		margin: 0;
		padding: 0;
	}

	.content {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		padding: 20px;
		align-items: center
	}

	.p {
            flex: 1;
            max-width: 110rem;
            margin: 10px;
            padding: 20px;
            border: 3px solid #ccc;
            display: flex;
        }

        .p img {
            max-width: 10rem; 
            margin-right: 10rem; 
        }

        .p p {
            margin: 10px 0;
        }
</style>

<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">

		<?php include 'includes/navbar.php'; ?>

		<div class="content-wrapper">
			<div class="container">

				<!-- Main content -->
				<section class="content">
					<div class="p">
					
						<p>

							Meet the Road Masters: Get to know the skilled professionals who make up our car transport team and their expertise in ensuring your vehicle's safe journey.

							Your Vehicles, Our Responsibility: Learn how we treat every vehicle as if it were our own, with meticulous care and attention to detail throughout the transport process.

							Transparency in Transit: Understand how we prioritize transparency by keeping you informed at every step of the car transport journey, providing peace of mind.

							Our Fleet, Your Assurance: Explore our well-maintained fleet of transport vehicles and the advanced technology we employ to ensure a smooth and secure transit experience.

							Community of Car Enthusiasts: Discover our shared love for automobiles and how this passion drives us to deliver top-notch car transport services to fellow enthusiasts.

							Committed to Reliability: Learn about our unwavering commitment to reliability, punctuality, and professionalism, which sets us apart in the car transport industry.
						
					</div>

					<img src="./img/4.jpg" alt="Car Image">
				</section>

			</div>
		</div>

		<?php include 'includes/footer.php'; ?>
	</div>

	<?php include 'includes/scripts.php'; ?>
</body>

</html>
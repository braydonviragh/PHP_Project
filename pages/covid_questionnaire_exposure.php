<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
		<meta name="covid-19 questionnaire" description=" coronavirus self-assessment">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>QC/HC - covid questionaire</title>
		
		<!-- Bootstrap 4.5 CSS -->
		<link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
		<!-- Style CSS -->
		<link rel="stylesheet" href="css/style.css">
		<!-- questionaire CSS -->
		<link rel="stylesheet" href="css/questionnaire.css">
	    <!-- Style FOR HEADER AND FOOTER -->
	    <link rel="stylesheet" href="css/HeaderFooter.css">
	    <script src="https://kit.fontawesome.com/c03ea9a48c.js" crossorigin="anonymous"></script>
	   


	</head>

	<body>
		<?php

			include_once 'header.php';
        ?>
        <div> <a href="index.php?page=covid_questionnaire_risk_factors" class="btn btn-link ">< Back</a></div>
        <main class="content-wrapper container">

        	<h1>COVID-19 questionnaire</h1>
            
        	<p class="question"><strong>In the last 14 days, have you been identified as a “close contact” of someone who currently has COVID-19?</strong></p>

        	<div class="choices-wrapper">

        		<a href="index.php?page=covid_questionnaire_fail_result" class="btn btn-secondary btn-lg">yes</a> 
        		<a href="index.php?page=covid_questionnaire_alert" class="btn btn-secondary btn-lg">no</a>
        		
        	</div>        	

	    </main>
		    <?php	
				include_once 'footer.php';
			?>
		    <!-- Script Source Files -->

			<!-- jQuery -->
			<script src="js/jquery-3.5.1.min.js"></script>
			<!-- Bootstrap 4.5 JS -->
			<script src="js/bootstrap.min.js"></script>
			<!-- Popper JS -->
			<script src="js/popper.min.js"></script>
			<!-- Font Awesome -->
			<script src="js/all.min.js"></script>

			<!-- End Script Source Files -->


	  
		
	</body>
</html>
<?php
	$thisPage = 'about';
	include('inc/head.php');
	?>


<body id="<?=$thisPage?>">
	<div id="wrapper">
		<?php include('inc/nav.php'); ?>

		<div id="container">


			<h2>Bio:</h2>
			<section>
				<h3>Barbara Snipes</h3>
				<p>Been practicing speech and language therapy in the
					Maitland and Winter Park area since 1995. She earned her Master's degree in
					Communicative Disorders at UCF. She has worked for 19 years with children in the public school system and at the college level as a Clinical Supervisor at UCF Communicative Disorders Clinic working with college interns. Barbara has worked with the Pre-K Diagnostic team, Hospital Homebound students, and in private practice.  She has a "whole child" approach to help the child grow to his/her potential. The family is encouraged to assist the child in reaching his/her goals and aspirations.
				</p>
			</section>


			<h2>Certifications:</h2>
			<section>
				<h3>Speech-Language Pathologist</h3>
				<p>Barbara Snipes, M.A., CCC-SLP

				<p>FL License #SA4451
				<p>ASHA Member
					<img style="float:right; margin-top:-20px;" src='<?= (baseurl());?>img/ashaLogoBW.png' alt='ASHA Member Logo' width='180' height='65'>
				</p>

				<p><a href="tel:4079009859">407-900-9859</a></p>
			</section>

			<!-- AddToAny BEGIN -->
			<div id="addToAny" class="a2a_kit a2a_kit_size_32 a2a_default_style">
				<a class="a2a_button_facebook"></a>
				<a class="a2a_button_twitter"></a>
				<a class="a2a_button_google_plus"></a>
				<a class="a2a_dd" href="https://www.addtoany.com/share_save"></a>
			</div>
			<script src="//static.addtoany.com/menu/page.js"></script>
			<!-- AddToAny END -->

		</div> <!-- [END] #container -->
	</div> <!-- [END] #wrapper -->

	<?php include('inc/footer.php'); ?>

</body>
</html>

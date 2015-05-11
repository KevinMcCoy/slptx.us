<?php
	$thisPage = 'index';
	require_once '../_baseurl.php'; //to use type   echo(baseurl());
	include('inc/head.php');
?>

<body>
	<?php include('inc/nav.php');
		//  include('inc/right.php'); ?>

	<div id="container">
		<a href="http://www.asha.org/" target="_blank"><img src='<?= (baseurl());?>img/vendors/asa_logo.jpg' alt='' width='180px' height='' style="float:right; margin:25px;"></a>

		<h2>Services</h2>
		<section>
			<h3>Comprehensive Diagnostic Services and Therapy</h3>
			<ul>
				<li>Articulation</li>
				<li>Phonics</li>
				<li>Pre-reading skills</li>
				<li>Phonemic Awareness </li>
				<li>Language Therapy; Expressive and Receptive</li>
				<li>Stuttering</li>
				<li>Voice</li>
				<li>Pragmatics</li>
				<li>also the ASD and Hearing Impaired population</li>
			</ul>
		</section>

		<section>
			<h3>Therapy</h3>
			<p>Speech and Language Therapy can be provided in your home or my office. Each session is typically 45 minutes.  Parents will also be taught how to work with their child during the week and techniques will be taught for carry over into everyday conversations. That way, the child will improve at a faster rate and the parents are happier!</p>
		</section>

	</div> <!-- [END] #container -->
	<?php include('inc/footer.php'); ?>
</body>
</html>

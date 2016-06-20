<?php
	$thisPage = 'evaluation';
	require_once '_baseURL.php'; //to use type   echo(baseurl());
	include('inc/head.php');
	?>

<body id="<?=$thisPage?>">
	<div id="wrapper">

		<?php include('inc/nav.php'); ?>
		<div id="container">

			<div class="accordion">
				<article>
					<header>
						<h1>Services Provided</h1>
					</header><!-- end title -->
					<section>
						<h2>Evaluation</h2>
						<p>An initial assessment of the client's speech/language skills is completed. The initial assessment
							may include a parent interview, standardized
							assessments, an informal conversational sample,
							and/or an informal oral-motor examination; checking
							the muscles needed for articulation. The results of
							the assessment are given, and recommendations are
							made. The parents and speech-language pathologist
							develop a plan to assist the child in achieving his/her
							speech/language goals. A current speech/language
							evaluation can be used if completed within the last
							year.</p>
						</section>
				<!-- </article>

				<article>
					<header>
						<h1>Treatment</h1>
					</header> -->
					<section>
						<h2>Treatment</h2>
						<p>Private sessions are available at flexible times.
							Each treatment session is one 45 minutes long. The
							frequency of treatment is discussed and based on
							the initial evaluation results. Clients and parents are
							provided with instruction and activities to do at home if
							necessary.
						</p>
					</section>


				</article>
			</div><!-- [END]#accordion -->


		</div> <!-- [END] #container -->
	</div> <!-- [END] #wrapper -->

	<?php include('inc/footer.php'); ?>

</body>
</html>

<?php
	$thisPage = 'home';
	include('inc/head.php');
?>

<body id="<?=$thisPage?>">
	<div id="wrapper">
		<?php include('inc/nav.php');
			//  include('inc/right.php'); ?>

		<div id="container">
			<div>
				<!-- <img src='<?//= (baseurl());?>img/IMG_Nav1b.jpg' alt='Speech Language and Social Skills' width='350' height='480' > -->
				<img src="<?= (baseurl());?>img/IMG_Nav1b.jpg" alt="Speech Language and Social Skills" width="233" height="320">
			</div>

			<section id="about">
				<h2>About</h2>
				<p>Speech-language pathologists also known as speech therapists.  To assess, diagnose, treat, and help to prevent communication and swallowing disorders in children and adults.</p>
			</section>

			<article>
				<h3>Evaluation</h3>
					<p>An initial assessment of the client's speech/language skills is completed. The initial assessment
						may include a parent interview, standardized
						assessments, an informal conversational sample,
						and/or an informal oral-motor examination; checking
						the muscles needed for articulation.</p>
					<p>The results of
						the assessment are given, and recommendations are
						made. The parents and speech-language pathologist
						develop a plan to assist the child in achieving his/her
						speech/language goals. A current speech/language
						evaluation can be used if completed within the last
						year.
					</p>
			</article>

			<article>
				<h3>Therapy</h3>
					<p>Private sessions are available at flexible times.
						Each treatment session is one 45 minutes long. The
						frequency of treatment is discussed and based on
						the initial evaluation results. Clients are
						provided with instruction and activities to do at home if
						necessary.
					</p>
					<p>Speech and Language Therapy can be provided in your home or my office. Parents will also be taught how to work with their child during the week and techniques will be taught for carry over into everyday conversations. That way, the child will improve at a faster rate and the parents are happier!</p>
			</article>

			<section id="set">
				<span style="margin: 20px auto 10px; display:block; max-width:600px; text-align:center;">Speech and Language Therapy Is Available For Children/Adults Experiencing Difficulty In The Following Areas:</span>

				<h2>Services</h2>
				<ul>
					<li>Comprehensive Diagnostic Services and Therapy</li>
					<li>Articulation Disorder/Delay</li>
					<li style="list-style: none;"><ul style="list-style: none;">
						<li><img src='<?= (baseurl());?>img/IMG_Nav1a.jpg' alt='' width='300' height='427' style="float:right; margin:0px 25px;">
						When a speech sound is produced incorrectly,
						this makes it difficult to be understood and can hinder
						learning to read.</li>
					</ul></li>
					<li>Phonics</li>
					<li>Pre-reading skills</li>
					<li>Phonemic Awareness </li>
					<li>Language Therapy; Expressive and Receptive</li>
					<li style="list-style: none;"><ul style="list-style: none;">
						<li>Language Disorder/Delay: Receptive language refers to the ability to understand
						what is being said. You are receiving the information.
						Expressive language refers to the ability to say what
						you are thinking. You are expressing what you are
						thinking.</li>
					</ul></li>
					<li>Fluency/Stuttering</li>
					<li style="list-style: none;"><ul style="list-style: none;">
						<li>Occurs when sounds, syllables, or words are
						repeated or prolonged. This causes an interference in
						the normal flow of speech, which makes it difficult for
						the listener to concentrate on what is being said.</li>
					</ul></li>
					<li>Voice</li>
					<li>Pragmatics</li>
					<li>Phonological Impairment</li>
					<li style="list-style: none;"><ul style="list-style: none;">
						<li>Involves incorrect speech patterns. Typically, these
						errors could include leaving the final consonant
						off most words: "ha for hat," or "cu for cup." Or
						substituting consonant
						sounds that are made in the front of the mouth such
						as "t" and "d" for sounds that are made in the back
						of the mouth such as "g" and "k". So the client might
						say "dood for good" or "tate for cake."</li>
					</ul></li>
					<li>Oral-motor Exercises:</li>
					<li style="list-style: none;"><ul style="list-style: none;">
						<li>Refers to the strength and coordination of the oral/
						facial muscles needed for correct speech. The client may
						exhibit drooling, chewing on clothes, or breathing
						through their mouth.</li>
					</ul></li>
					<li>ASD and Hearing Impaired population</li>
				</ul>
			</section>

			<section id="bio">
			<h2>Bio</h2>
				<h3>Barbara Snipes</h3>
				<p>Ms. Snipes has been practicing speech and language therapy in the
					Maitland and Winter Park area since 1995. She earned her Master's degree in
					Communicative Disorders at UCF. She has worked for <?= date('Y')-1995; ?> years with children in the public school system and at the college level as a Clinical Supervisor at UCF Communicative Disorders Clinic working with college interns. Barbara has worked with the Pre-K Diagnostic team, Hospital Homebound students, and in private practice.  She has a "whole child" approach to help the child grow to his/her potential. The family is encouraged to assist the child in reaching his/her goals and aspirations.
				</p>
			</section>

			<h2>Certifications</h2>

			<section>
				<h3>Speech-Language Pathologist</h3>
				<p>Barbara Snipes, M.A., CCC-SLP
					<img id="ash" src='<?= (baseurl());?>img/ashaLogoBW.png' alt='ASHA Member Logo' width='180' height='65'>
				<p>FL License #SA4451
				<p>ASHA Member</p>
			</section>

		</div> <!-- [END] #container -->
	</div> <!-- [END] #wrapper -->

	<?php include('inc/footer.php'); ?>
</body>
</html>

<header id="page">
	<nav>

		<h1 id="site-title">
			<a href="index.php" class="escapehatch <?= ($thisPage == 'index' ? ' active' : '') ?>">
				<p class="desktop">Maitland Speech Therapy In Central Florida</p>
				<p class="tablet">Maitland Speech Therapy<br />Central Florida</p>
			</a>
		</h1>

		<ul>
			<li><a href = '<?= (baseurl());?>services.php' <?= ($thisPage == 'services' ? 'class="active"' : '') ?>>
				<!-- <img src='<?= (baseurl('img'));?>services.png' alt="Our Services Logo" height="70" width="70"> -->
				Services</a></li>
			<li><a href = '<?= (baseurl());?>evaluation.php' <?= ($thisPage == 'evaluation' ? 'class="active"' : '') ?>>
				<!-- <img src='<?= (baseurl('img'));?>evaluation.png' alt="Evaluation Logo" height="70" width="70"> -->
				Evaluation / Treatment</a></li>
			<li><a href = '<?= (baseurl());?>about.php' <?= ($thisPage == 'about' ? 'class="active"' : '') ?>>
				<!-- <img src='<?= (baseurl('img'));?>about.jpeg' alt="About Us Logo" height="70" width="70"> -->
				About Us</a></li>
		</ul>

		<div class='right'>
			<h3><a href="tel: 4079009859">407-900-9859</a></h3>
			<p>Barbara Snipes, M.A., CCC-SLP</p>
			<p>Speech-Language Pathologist</p>
		</div>

	</nav>
</header><!-- [END] #page header -->

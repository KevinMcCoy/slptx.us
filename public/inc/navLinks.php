<ul>
	<li><a href = '<?= (baseurl());?>home.php' <?= ($thisPage == 'home' ? 'class="active"' : '') ?>>
		Home</a>
	</li>
	<li><a href = '<?= (baseurl());?>services.php' <?= ($thisPage == 'services' ? 'class="active"' : '') ?>>
		<!-- <img src='<?= (baseurl('img'));?>services.png' alt="Our Services Logo" height="70" width="70"> -->
		Services / Evaluation / Treatment</a></li>

	<!-- <li><a href = '<//?= (baseurl());?>evaluation.php' <//?= ($thisPage == 'evaluation' ? 'class="active"' : '') ?>>
		<img src='<//?= (baseurl('img'));?>evaluation.png' alt="Evaluation Logo" height="70" width="70">
		Evaluation / Treatment</a></li> -->

	<li><a href = '<?= (baseurl());?>about.php' <?= ($thisPage == 'about' ? 'class="active"' : '') ?>>
		<!-- <img src='<?= (baseurl('img'));?>about.jpeg' alt="About Us Logo" height="70" width="70"> -->
		About Us</a></li>
</ul>

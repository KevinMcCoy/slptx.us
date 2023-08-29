<!-- footer -->
<footer class="box">
    <a class="call" href="tel:4079009859">407-900-9859</a>

    <a class="i" href="https://www.facebook.com/MaitlandSpeechTherapy" target="_blank">
        <i class="fa fa-facebook-square"></i>
    </a>
    <div>Maitland Speech Therapy <span>&copy;2015 - <?= date('Y'); ?></span></div>

    <!-- <img src='<?//= (baseurl());?>img/ashaLogoBW.png' alt='' width='180' height='65'> -->

</footer>

<?php if (baseURL('check_if_live')) {
    include_once("vendors/analyticstracking.php");
} ?>
<!-- [END] footer -->
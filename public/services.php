<?php
  $thisPage = 'services';
  require_once '../_baseurl.php'; //to use type   echo(baseurl());
  include('inc/head.php');
  ?>

<body>
  <?php include('inc/nav.php'); ?>
  <div id="container">
    <br>
    <br>
    <span style="margin: 0 auto; display:block; max-width:600px; text-align:center;">Speech and Language Therapy Is Available For Children/Adults Experiencing Difficulty In The Following Areas:
    </span>
    <div class="accordion">
      <article>
        <header>
          <h1>Articulation Disorder/Delay:</h1>
        </header>
        <section>
          <img src='<?= (baseurl());?>img/IMG_Nav1a.jpg' alt='' width='19%' height='' style="float:right; margin:0px 25px;">
          <p style="width:64%;">Is when an speech sound is produced incorrectly.
          This makes it difficult to be understood and can hinder
          learning to read.</p>
          <div style="clear:both;"></div>
        </section>
      </article>
      <article>
        <header>
          <h1>Language Disorder/Delay:</h1>
        </header>
        <section>
          <p>Receptive language refers to the ability to understand
      what is being said. You are receiving the information.
      Expressive language refers to the ability to say what
      you are thinking. You are expressing what you are
      thinking.</p>
        </section>
      </article>
      <article>
        <header>
          <h1>Fluency/Stuttering:</h1>
        </header>
        <section>
          <p>Occurs when sounds, syllables, or words are
      repeated or prolonged. This causes an interference in
      the normal flow of speech, which makes it difficult for
      the listener to concentrate on what is being said.</p>
        </section>
      </article>
      <article>
        <header>
          <h1>Phonological Impairment:</h1>
        </header>
        <section>
          <p>Involves incorrect speech patterns. Typically, these
      errors could include leaving the final consonant
      off most words: "ha for hat," or "cu for cup." Or
      substituting consonant
      sounds that are made in the front of the mouth such
      as "t" and "d" for sounds that are made in the back
      of the mouth such as "g" and "k". So the client might
      say "dood for good" or "tate for cake."</p>
        </section>
      </article>
      <article>
        <header>
          <h1>Oral-motor Exercises:</h1>
        </header>
        <section>
          <p style="width:45%;">Refers to the strength and coordination of the oral/
          facial muscles needed for correct speech. The client may
          exhibit drooling, chewing on clothes, or breathing
          through their mouth.</p>
          <div style="clear:both;"></div>
        </section>
      </article>
    </div><!-- [END]#accordion -->


  </div> <!-- [END] #container -->
  <?php include('inc/footer.php'); ?>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- http://makitweb.com/online-poll-and-voting-system-with-jquery-ajax/ -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vote</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/content.css">

    <!-- Add js library -->
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900" rel="stylesheet">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <nav>
        <span id="brand">
            <a href="index.html">M<span>Vote</span></a>
        </span>

        <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">New Albums</a></li>
            <li><a href="vote.php">Vote</a></li>
            <li><a href="#footer-main">Contact</a></li>
        </ul>

        <div id="toggle">
            <div class="span" id="one"></div>
            <div class="span" id="two"></div>
            <div class="span" id="three"></div>
        </div>
    </nav>

    <div id="resize">
        <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">New Albums</a></li>
            <li><a href="vote.php">Vote</a></li>
            <li><a href="#footer-main">Contact</a></li>
        </ul>
    </div>

      <main class="content">
            <div class="content-info">
                  <section class="content-info3">
                        <img src="images/little-mix.jpg">
                        <h2>Little Mix</h2>
                        <p>From Little Mix's eagerly awaited fifth album to the debut of Anne-Marie's 'Speak Your Mind', we genuinely can't wait for all the new music that's about to fill the airwaves.</p>
                        <a href="https://www.youtube.com/watch?v=RlSzahonkTk" class="info-link" target="_blank">Latest Hit Song</a>
                  </section>
                  <section class="content-info3">
                        <img src="images/james.jpg">
                        <h2>James Arthur</h2>
                        <p>James Arthur's 2016 comeback securely put the X Factor winner back on the map when it came to pop royalty. Fast forward to 2018 and James is finally back in the studio for the first time since 'Back From The Edge'.</p>
                        <a href="https://www.youtube.com/watch?v=_iLsfkignj8" class="info-link" target="_blank">Latest Hit Song</a>
                  </section>
                  <section class="content-info3">
                        <img src="images/selena.jpg">
                        <h2>Selena Gomez</h2>
                        <p>The last time Selena Gomez released a full studio album was back in 2015 with her platinum selling LP 'Revival' and now it is finally time for Sel to head back into the studio. We've already had new music in 2017 with her Marshmello collab 'Wolves' and 'Fetish' feat. Gucci Mane, a 2018 album seems a dead cert!</p>
                        <a href="https://www.youtube.com/watch?v=VY1eFxgRR-k" class="info-link" target="_blank">Latest Hit Song</a>
                  </section>
                  <section class="content-info3">
                        <img src="images/liam-payne.jpg">
                        <h2>Liam Payne</h2>
                        <p>With the release of four hit singles throughout 2017 including MASSIVE success with his Quavo collaboration 'Strip That Down' and J Balvin smash 'Familiar', it is only a matter of time before we get our paws on a debut album from Payno.</p>
                        <a href="https://www.youtube.com/watch?v=RQUuqbzQVsY" class="info-link" target="_blank">Latest Hit Song</a>
                  </section>
                  <section class="content-info3">
                        <img src="images/ag.jpg">
                        <h2>Ariana Grande</h2>
                        <p>Ariana's 2016 'Dangerous Woman' featured blockbuster hits such as 'Into You' and 'Side To Side' featuring Nicki Minaj so of course when Ari posted this video on the last day of 2017 our minds started jumping to ALL sorts of conclusions.And then, finally, out of nowhere. Ariana dropped her comeback single 'No Tear Left To Cry' and the world was set to rights once again.</p>
                        <a href="https://www.youtube.com/watch?v=ffxKSjUwKdU" class="info-link" target="_blank">Latest Hit Song</a>
                  </section>
                  <section class="content-info3">
                        <img src="images/shawn_mendes.jpg">
                        <h2>Shawn Mendes</h2>
                        <p>By the end of 2018 Shawn Mendes will finally become 20 years old! So, hopefully we'll get our hands on his THIRD (yes, third, that's three album by the time he's 20) by the end of the year too. Early in January Shawn vowed to finish the album by the end of the month, just... YAY!</p>
                        <a href="https://www.youtube.com/watch?v=36tggrpRoTI" class="info-link" target="_blank">Latest Hit Song</a>
                  </section>
                  <section class="content-info3">
                        <img src="images/charlie-puth.jpg">
                        <h2>Charlie Puth</h2>
                        <p>With singles 'How Long' and 'Attention' becoming two of the biggest singles of 2017, the 2018 album 'Voicenotes' is set to be the pop masterpiece we'd expect from Chaz Paz. With 13 tracks billed on the official iTunes track listing, the follow-up to his 2016 debut LP 'Nine Track Mind' is ready to blow you away.</p>
                        <a href="https://www.youtube.com/watch?v=TdyllLZeviY" class="info-link" target="_blank">Latest Hit Song</a>
                  </section>
                  <section class="content-info3">
                        <img src="images/anne-marie.jpg">
                        <h2>Anne-Marie</h2>
                        <p>Anne-Marie... why haven't you released an album yet?! 'Alarm', 'Ciao Adios' and new single '2002' are all legit pop bangers that belong in an album together! Finally, the lady herself announced 'Speak Your Mind' was finally on it's way and we couldn't be more excited!</p>
                        <a href="https://www.youtube.com/watch?v=jzD_yyEcp0M" class="info-link" target="_blank">Latest Hit Song</a>
                  </section>
                  <section class="content-info3">
                        <img src="images/camila-cabello.jpg">
                        <h2>Camila Cabello</h2>
                        <p>We've been waiting for this for a LONG time. Ever since Camila Cabello left Fifth Harmony in late 2016, the starlet has been releasing single after single and absolutely slaying each time *cough* 'Havana' *cough*. On 12th January 'Camila' will finally drop and the world will never be the same!</p>
                        <a href="https://www.youtube.com/watch?v=Ph54wQG8ynk" class="info-link" target="_blank">Latest Hit Song</a>
                  </section>
                  <section class="content-info3">
                        <img src="images/Justin-Timberlake.jpg">
                        <h2>Justin Timberlake</h2>
                        <p>On the 2nd January 2018, JT dropped the news that in precisely one month he'd be releasing his fifth studio album 'Man Of The Woods'. In a teaser video for the LP, Justin explains, "This album is really inspired by my son, my wife, my family, but more so than any other album I've ever written, where I'm from – it's personal."</p>
                        <a href="https://www.youtube.com/watch?v=8MPbR6Cbwi4" class="info-link" target="_blank">Latest Hit Song</a>
                  </section>
            </div>
      </main>

      <?php
            include 'footer.php';
      ?>

    <!-- Scripts -->
    <script src="js/menu.js" type="text/javascript"></script>
</body>
</html>

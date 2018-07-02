<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home</title>

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

      <div class="banner">
            <div class="banner-text">
                  <div class="banner-text-items">
                        <h2>Pop songs 2018</h2>
                        <p>Best Artists</p>
                  </div>
            </div>
      </div>

      <div class="content">
            <h1>TOP ARTISTS:</h1>
      </div>

      <main class="content">
            <section class="content-info1">
                <h2>Best Songs of 2018 So Far</h2>
                <p>The year may feel like it’s just heating up over the radio waves, but 2018 has already given us a slew of new releases 
                    to celebrate. From surprises like Childish Gambino and Drake to harbingers of ingeniously effective album rollouts from 
                    Ariana Grande and Janelle Monáe, the first half of the year has offered an embarrassment of musical riches. Here are our 
                    picks for the best songs released in 2018 — so far.</p>
                <a href="http://time.com/5294304/best-songs-2018-so-far/" class="info-link" target="_blank">Learn More</a>
            </section>
            <figure class="content-fig1">
                <img class="content-img" src="images/ariana.png">
            </figure>

            <figure class="content-fig2">
                <img class="content-img" src="images/bts.jpg">
            </figure>

            <figure>
                <img class="content-img" src="images/anne-marie.jpg">
            </figure>

            <figure>
                <img class="content-img" src="images/shawn_mendes.jpeg">
            </figure>

            <figure>
                <img class="content-img" src="images/taylor-swift.jpeg">
            </figure>

            <section class="content-info2">
                <h2>The 50 Best Songs of 2018:</h2>
                <p>When talking about 2018 so far at Billboard, it's hard to avoid the fact that the 2018 chart year has only had 24 editions 
                of the Hot 100, and Drake has been No. 1 for 17 of them. Beyond the Drakening, 2018 has been a year of pleasant surprises on 
                the charts: All-Star teamups we didn't see coming, previously unknown artists coming out with left-field hits, and a handful 
                of big-name comebacks taking us to unexpected new places, all of which made the predictability at pop's highest level forgivable.</p>
                <a href="https://www.billboard.com/articles/news/list/8459289/best-songs-of-2018-top-50" class="info-link" target="_blank">Learn More</a>
            </section>

            <figure class="content-fig3">
                  <img class="content-img" src="images/the-weeknd.jpg">
            </figure>

            <figure class="content-fig1">
                  <img class="content-img" src="images/dua-lipa.jpg">
            </figure>
      </main>

      <?php
            include 'footer.php';
      ?>

      <!-- Scripts -->
      <script src="js/menu.js" type="text/javascript"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="styles.css" />
  <link rel="server" href="./2.1.1/2.1.1.php" />
  <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/tt2020-style-f" type="text/css" />
  <meta charset="UTF-8" />
  <meta http-equiv="default-style" content="/style.css" />
  <meta name="author" content="Marah Thomas" />
  <meta name="description" content="My name is Marah Thomas, and this is a website about my life" />
  <meta name="generator" content="Notepad++" />
  <meta name="keywords" content="lifestory, assignment, DSV, stockholm's university, WEB1, web development" />
  <meta name="robots" content="noindex, noarchive" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My name is Marah.</title>
</head>

<body>
  <header>
    <h1>My Life as Marah</h1>

    <nav class="main-nav">
      <ul>
        <li><a href="index.html"> index </a></li>
        <li><a href="home.php"> home </a></li>
        <li><a href="history.html"> history </a></li>
        <li><a href="now.html"> now </a></li>
        <li><a href="future.html"> future </a></li>
      </ul>
    </nav>
  </header>


  <section>
    <h2>Call Me Marah</h2>
    <article>
      <h3>About Me</h3>

      <h4 class="decorated-section">General Information</h4>

      <p>
        Hi, my name is Marah Thomas, I’m 25 years old, I’m a Syrian emigrant
        living in Sweden since 2015. I study Computer Science at Stockholm’s
        university, and I’m graduating in June.
      </p>

      <h4 class="decorated-section">Interests</h4>

      <p>
        I love to read, watch tv shows and movies, listen to music, workout,
        I love hanging out with friends and family, I love makeup, I love
        learning new things and so on. On this website, you will find some
        tidbits about me and what events led me to where I am right now, so
        welcome, and enjoy my boring life lol.
      </p>
    </article>

    <article>
      <h3>The Meaning of My Name</h3>

      <h4 class="decorated-section">what does my name mean?</h4>

      <figure>
        <img src="./media/m.png" alt="Marah in Arabic" />
        <figcaption>Marah in Arabic</figcaption>
      </figure>
      <p>
        My name, as you probably have guessed, is Arabic. The meaning of it
        is: extreme fun, gleeful, hilarious, cheerful etc. My sister decided
        on my name, and her inspiration what the Syrian actress
        <mark>
          <a href="https://www.imdb.com/name/nm5594603/">
            Marah Jabr</a> </mark>.
      </p>
    </article>

    <article>
      <h3>Quote of the day</h3>

      <h4 class="decorated-section">About survival and strength</h4>

      <pre>
 "and here you are living
  despite it all"
								
  -rupi kaur
							</pre>

      <h4 class="decorated-section underline">
        About striving to become the best version of one's self
      </h4>
      <blockquote>
        Push yourself, because no one else is going to do it for you.
      </blockquote>
    </article>
  </section>

  <aside>
    <h3>Random Tidbits:</h3>
    <h4>One thing I love: Timelapse videos</h4>
    <video controls>
      <source src="./media/timeLapse.mp4" type="video/mp4" />
    </video>
    <p>
      <a id="fullscreen" href="fullscreen.html"> click here to see in fullscreen</a>
    </p>
    <h4>Another thing I love: instrumental Music</h4>
    <audio controls>
      <source src="./media/When_We_Found_The_Horizon.mp3" type="audio/mp3" />
    </audio>
    <p>
      <a id="fullscreen" type="application/rss+xml" href="./1.3.4/1.3.4.xml">some audio and video podcasts (rss)</a>
    </p>

  </aside>
  <footer>
    <p class="h-card">designed by Marah Thomas</p>
    <a class="u-email" href="mailto:marah.thomas@outlook.com"> Contact me </a>
    <p>
      this page has been visited <?php include './2.2.1/2.2.1.php' ?> times.<br>
      <br> <a href="./2.2.2/2.2.2.php"> users' log</a>
    </p>
    <a type="application/rss+xml" href="./1.3.2/1.3.2.xml">
      RSS feed for this site
    </a>
    </p>
  </footer>

</body>

</html>
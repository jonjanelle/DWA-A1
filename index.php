<?php require('quote_chooser.php'); ?>
<!doctype html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jon Janelle - CSCI E-15 A1</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
  </head>

  <body>
    <div id="container">
      <div id="title" class="jumbotron shadowbox">
        <div class="page-header">
          <h1>Jon Janelle</h1>
        </div>
      </div>

      <img src="janelle.jpg" class="img-thumbnail centerpic" alt="Picture of me at my wedding">

      <div class="card">
        <h2 class="card-header">About me</h2>
        <div class="card-block">
          <blockquote class="card-blockquote">
            <p>
              My name is Jon Janelle and I am from Medford, MA. I am relatively
              new to the world of web development, but am very excited to learn
              more! Over the past several semesters at Harvard Extension School,
	            I have taken several introductory computer science courses using Java.
              On the side, I learned the basics of HTML, CSS, and Javascript using free
              MOOCs and books, although I'm sure I have picked up a number of bad habits
	            along the way.
            </p>
            <p>
              I currently work as a high school mathematics teacher in Lawrence, MA. In
              the near future, my school plans to expand its technology offerings. Part of
              my goal in taking this course is to develop my skills enough to a point that I
              am able to teach introductory computer science courses at the high school level.
            </p>
            <p>
              Outside of work-based things, I enjoy spending time with my wife, Hayley, drinking far
	            too much coffee, gardening, pretending to play musical instruments, and my cat named Fig.
            </p>
          </blockquote>
        </div>
      </div>

      <br />
      <div class="card">
        <h2 class="card-header">Random Quote</h2>
        <div class="card-block">
          <blockquote class="card-blockquote">
            <?php
              echo "<p id=\"quote\">".$quote."</p>";
              echo "<p id=\"author\">-".$author."</p>";
            ?>
          </blockquote>
        </div>
      </div>

    </div>
  </body>

</html>

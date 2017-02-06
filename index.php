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
    <?php
      $quotes = array("Darkness cannot drive out darkness; only light can do that. Hate cannot drive out hate; only love can do that. ",
                      "If things go wrong, don’t go with them.",
                      "Optimism is the faith that leads to achievement.",
                      "When the whole world is silent, even one voice becomes powerful.",
                      "It took me quite a long time to develop a voice, and now that I have it, I am not going to be silent.");

      $authors = array("Martin Luther King, Jr.",
                       "Roger Babson",
                       "Helen Keller",
                       "Malala Yousafzai",
                       "Madeleine Albright");

      $position = rand(0, count($quotes)-1);
      $quote = $quotes[$position];
      $author = $authors[$position];
    ?>

    <div id="container">
      <div id="title" class="jumbotron shadowbox">
        <div class="page-header">
          <h1>Jon Janelle</h1>
        </div>
      </div>
      <div class="centerpic">
        <img src="janelle.jpg" class="img-thumbnail">
      </div>


      <div class="card">
        <h2 class="card-header">About me</h2>
        <div class="card-block">
          <blockquote class="card-blockquote">
            <p>
              My name is Jon Janelle and I am from Medford, MA. I am relatively
              new to the world of web development, but am very excited to learn
              more! Over the past several semesters at Harvard Extension I have
              taken and enjoyed introductory computer science courses using Java. I
              have learned the basics of HTML, CSS, and Javascript through free MOOCs
              and books, although I'm sure I have picked up a number of bad habits along
              the way.
            </p>
            <p>
              I currently work as a high school mathematics teacher in Lawrence, MA. In
              the near future, my school plans to expand its technology offerings. Part of
              my goal in taking this course is to continue to develop my skills enough to teach
              introductory computer science courses at the high school level.
            </p>
            <p>
              Outside of work-based things, I enjoy spending time with my wife, Hayley, drinking far 
	      too much coffee, gardening, pretending to play musical instruments, and my cat named Fig.
            </p>
          </blockquote>
        </div>
      </div>


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

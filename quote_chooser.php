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

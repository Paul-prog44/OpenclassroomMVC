<?php
   require_once('model.php');

   function homepage() {
      $posts = getPosts();
   
      require('templates/homepage.php');

   }


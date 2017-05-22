
<!DOCTYPE html>
<html>
    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <?php wp_head(); ?>

        <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <title>Yrgo</title>

    </head>
    <body>

<!-- chose meny based on page -->
<?php ($wp_query->post->post_type == 'studentwebben')? $page = 'studentWeb' : $page = $wp_query->post->post_type;?>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">

  <!-- Menu for mobile -->
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="container">

    <!-- Logotype for home navigation -->
    <a class="navbar-brand" href="<?php echo site_url(); ?>">
      <img class="logotype-image" src="<?php echo get_template_directory_uri() ?>/assets/img/yrgo-nav.png"/>
    </a>

      <?php
        // loops all menu titles
         wp_nav_menu( array(
           'theme_location' => $page,
           'menu_class' => 'navbar-nav mr-auto', // add classes to ui
           'container_class' => 'collapse navbar-collapse', //add class to div
           'container_id' => 'navbarSupportedContent', //add id to div
           'echo'=> true,
          ) );
      ?>


    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
      <div class="">

      </div>

<!-- Start of container div, ends in footer.php -->
<div class="container">

<?php
$yrgo = array(
  'menu'            => 'Yrgo',
  'container'       => 'container',
  'container_class' => 'container_class',
  'container_id'    => 'container_id',
  'menu_class'      => 'nav navbar-nav',
  'menu_id'         => 'menu_id',
  'echo'            => true);
?>

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
<?php ($wp_query->post->post_type == 'studentwebben')? $page = 'studentwebben' : $page = $wp_query->post->post_type;?>


<nav class="navbar navbar-toggleable-md navbar-light bg-faded">

  <!-- Menu for mobile -->
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="container">

    <!-- Logotype for home navigation -->
    <a class="navbar-brand" href='<?php echo site_url() . "/?" . $wp_query->post->post_type ."=startsida"; ?>'>
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


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- <?php // wp_nav_menu($yrgo);?> -->
    </div>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <img class="search-image" src="<?php echo get_template_directory_uri() ?>/assets/img/search.svg"/>
      <ul class="navbar-nav  ml-auto">



        <li class="nav-item">
          <?php if ($wp_query->post->post_type == 'studentwebben'): ?>
            <a href="<?=get_home_url()?>/?yrgo=startsida">Yrgo</a>
            <?php else: ?>
            <a href="<?=get_home_url()?>/?studentwebben=startsida">Studentwebb</a>
          <?php endif; ?>


        </li>
        <li class="nav-item">
          <a class="onlyText" data-check="true" href="#">Bara text</a>
        </li>
        <li class="nav-item ">
          <a href="#">SVE</a>
        </li>
        <li class="nav-item">
          <a class="not-active" href="#">ENG</a>
        </li>
      </ul>
    </div>


  </div>
</nav>
      <div class="">

      </div>

<!-- Start of container div, ends in footer.php -->
<div class="container">

<?php
/*
Template Name: Ny utbildning
Template Post Type: Education
*/
?>
<?php get_header(); ?>

</div>
<div class="row-education">
  <img class"education-image" src="<?php the_field('education_image'); ?>" alt="">
</div>

<div class="container">
    <div class="row education">
      <div class="col-md-12">
        <h1><?php the_field('education_name'); ?></h1>
        <a href="<?php the_field('link_application'); ?>">

        </a>
        <p class="decription-education">
          Yrkeshögskoleutbildning <br>
          <?php the_field('yh-points'); ?> Yh-poäng.
        </p>
        <h2><?php the_field('education_title'); ?></h2>
      </div>
    </div>

    <div class="row education-description">
      <div class="col-md-6">
        <?php the_field('description_education'); ?>
      </div>
      <div class="col-md-6">
        <?php the_field('description_education_work'); ?>
      </div>
    </div>
  </div>

  <div class="courses-education" style="background: url(<?php the_field('course_image'); ?>)">
    <div class="container">
      <div class="row" >
        <div class="col-md-3">
          <h3>KURSER</h3>
        </div>
        <div class="col-md-3">
          <h3>KURSNAMN</h3>
          <?php if( have_rows('courses_education') ): ?>
            <?php while ( have_rows('courses_education') ) : the_row(); ?>
              <p class="course-name"><?php the_sub_field('course_name'); ?> <?php the_sub_field('course_points'); ?>p</p>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="col-md-3">
          <h3>ANTAGNINGSKRAV</h3>
          <p>Grundläggande behörighet samt lägst godkänt betyg i:</p>
          <?php if( have_rows('application_requirement') ): ?>
            <?php while ( have_rows('application_requirement') ) : the_row(); ?>
              <p><?php the_sub_field('courses_completed'); ?></p>
            <?php endwhile; ?>
          <?php endif; ?>

          <br><p>Urval:</p>
          <?php if( have_rows('selection_education') ): ?>
            <?php while ( have_rows('selection_education') ) : the_row(); ?>
              <p><?php the_sub_field('selection_title'); ?></p>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
        <div class="col-md-3">
          <h3>OM UTBILDNINGEN</h3>
          <p>Längd: <?php the_field('length_education'); ?></p>
          <p>Start: <?php the_field('start_education'); ?></p>
          <p>Antal platser: <?php the_field('places_education'); ?></p>
          <p>Senaste ansökan: <?php the_field('last_application_education'); ?></p>
          <p>Anmälningskod: <?php the_field('application_code_education'); ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
      <div class="row management">
        <div class="col-md-6">
          <h3>LEDNINGSGRUPP</h3>
          <div class="row ">

            <?php if( have_rows('management_education') ): ?>
              <?php while ( have_rows('management_education') ) : the_row(); ?>
                <div class="col-md-3">
                  <img class="management-logotype" src="<?php the_sub_field('management_logotype'); ?>" alt="">
                </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

        </div>
        <div class="col-md-6">

        </div>
      </div>






<?php get_footer(); ?>

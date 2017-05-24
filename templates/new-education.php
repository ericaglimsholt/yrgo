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
        <img class="application-image" src="<?php echo get_template_directory_uri() ?>/assets/img/application.svg"/>
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
          <?php if( get_field('csn_education') ): ?>
          	<p>Utbildningen är statligt finansierad och berättigar till studiestöd</p>
          <?php endif; ?>
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
          <h3>ANSVARIGA UTBILDARE</h3>
          <?php if( have_rows('responsible_teachers', $post->ID) ): ?>
            <?php while( have_rows('responsible_teachers', $post->ID) ): the_row(); ?>
              <?php echo $sub = the_sub_field('name_employee'); ?>
              <h3><?php var_dump($sub); ?></h3>
              <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
            <?php endwhile; ?>
          <?php endif; ?>

          <?php

          $post_object = get_field('project_name');
          if( $post_object ): ?>
            <div>
    	         <h4><?php echo get_the_title($post_object->ID); ?></h4>
               <span>Post Object Custom Field: <?php the_field('project_description', $post_object->ID); ?></span>
             </div>
             <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          <?php endif; ?>
        </div>
      </div>






<?php get_footer(); ?>

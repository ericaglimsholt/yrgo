<div class="row faq">
  <div class="col-md-12">
    <h1>Frequently asked questions</h1>
  </div>

  <?php if( have_rows('faq_repeater') ): ?>
    <?php while( have_rows('faq_repeater') ): the_row();   ?>
        <?php
        $posts = get_sub_field('questions_relationship');
        if( $posts ): ?>
          <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
            <div class="col-md-6 faq-col">
                <div class="faq-question">
                  <h3><?php echo $post->post_title; ?></h3>
                </div>
                <div class="faq-answere">
                  <p><?php echo $post->post_content; ?></p>
                </div>
                <img class="education-img" src="<?= get_sub_field('image_single') ?>" alt="">
            </div>

          <?php endforeach; ?>
          <?php wp_reset_postdata(); // IMPORTANT – reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
  <?php endwhile; endif?>
</div>

<script>
question = document.querySelectorAll('.faq-question');
for (i = 0; i < question.length; i++) {
  // Show the answere to question
  document.querySelector('.faq-question').addEventListener("click", function(event){
    document.querySelector('.faq-answere').style.display='block';
    event.preventDefault();
  });
}

</script>

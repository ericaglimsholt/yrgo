<!-- close container -->
</div>
<?php $educations = get_posts([
  'post_type' => 'news',
  'order' => 'ASC',
  'orderby' => 'name'
]); ?>

<!-- Get id from url -->
<?php $id = esc_html( $_REQUEST['ID'] ) ?>

<?php foreach ($educations as $education): ?>


  <?php if ($education->ID == $id): ?>


    <?php echo $education->post_title ?><br>
    <?php echo $education->ID ?><br>






<?php endif; endforeach; ?>



<div class="container">

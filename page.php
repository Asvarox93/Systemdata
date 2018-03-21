<?php

  get_header();
?>

<!-- Pokazywanie aktualnego miejsca, gdzie znajduje się użytkownik -->
<?php 
  $theParent = wp_get_post_parent_id(get_the_ID());
  if($theParent){ ?>
    <h2>Jesteś tutaj: <a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent);?> </a> &raquo; <?php the_title() ?></h2>
  <?php }
?>

<!-- Przygotowane dynamiczne menu przygotowane wzgledem rodziców -->
<ul>
  <?php 
    if($theParent){
      $chilfOfID = $theParent;
    }else{
      $chilfOfID = get_the_ID();
    }
     wp_list_pages(array(
       'title_li' => NULL,
       'child_of' => $chilfOfID,
       'sort_column' => 'menu_order',
     )); 
  ?>
</ul>

<!-- Wyświetlanie treści strony -->
<?php
  while(have_posts()) {
    the_post(); ?>
    <h1>This is a page not a post</h1>
    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>
    
  <?php }

  get_footer();

?>
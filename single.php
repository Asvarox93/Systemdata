<?php
  get_header();
?>
<div class="page-distance">
<nav id="navbar-page" class="navbar  navbar-expand-lg pt-2 pb-2 navbar-light">
  <a class="navbar-brand" href="/">System<span>Data</span></a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <!-- Wczytanie menu stworzonego w pliku function pod nazwa 'header-menu' -->
   <?php
   wp_nav_menu(array(
       'theme_location' => 'header-menu',
       'menu_class' => 'navbar-nav ml-auto mt-2 mt-lg-0 main_nav--modify',
       'menu_id' => 'main-nav',
       'container_class' => 'collapse navbar-collapse',
       'container_id' => 'navbarNav',
   ));
?>
</nav>
  </div>

<div class="container-fluid page-content">
  <div class="bar mb-2">
    <h2 class="bar-title"><?php echo get_the_title(); ?></h2>  
  </div>

    <!-- Pokazywanie aktualnego miejsca, gdzie znajduje się użytkownik -->
  <?php 
        $theParent = wp_get_post_parent_id(get_the_ID());
        if($theParent){ ?>
          <h2 class="page-content-where">Jesteś tutaj: <a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent);?> </a> &raquo; <?php the_title() ?></h2>
        <?php } else {?>
          <h2 class="page-content-where">Jesteś tutaj: <?php the_title() ?></h2>
        <?php }
  ?>
 <div class="container">
  <div class="row page-content-items mt-5">  
    <div class="col-sm-12 col-md page-content-info">
          <!-- Wyświetlanie treści strony -->
          <?php
            while(have_posts()) {
              the_post(); ?>
          <?php the_content(); }?>
    </div>
  </div>           
</div> 
</div>




<?php 
  get_footer();
?>

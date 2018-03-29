


<!-- wyswietlanie headera -->
<?php  get_header(); ?>
<nav class="navbar-position navbar navbar-expand-lg pt-2 pb-2 navbar-light">
  <a class="navbar-brand" href="/">System<span>Data</span></a>
  <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <!-- Wczytanie menu stworzonego w pliku function pod nazwa 'header-menu' -->
   <?php
   wp_nav_menu(array(
       'theme_location' => 'header-menu',
       'menu_class' => 'navbar-nav ml-auto mt-2 mt-lg-0',
       'menu_id' => 'main-nav',
       'container_class' => 'collapse navbar-collapse',
       'container_id' => 'navbarNav',
   ));
?>
</nav>
<!-- wyswietlanie slidera -->
<div class="fluid-container">
<div class="Modern-Slider">
<!-- Item -->
<!-- Wyświetlanie postów z sekcji slajder -->
<?php
    $SlajdQuery = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'Slider'
    ));

    if($SlajdQuery->have_posts()):
        while ($SlajdQuery->have_posts()) : $SlajdQuery->the_post();?>
           <div class="item">
           <div class="img-fill">
             <?php if ( has_post_thumbnail() ) {
                     the_post_thumbnail('sldier_thumb'); 
             } ?>
             <div class="info">
               <div class="info-content">
                 <h3><?php the_title(); ?></h3>
                 <?php if ( function_exists( 'the_subtitle' ) ) {
                    the_subtitle( '<h4>', '</h4>' );
                }?>
                 <h5><?php echo get_the_content(); ?></h5></div>
             </div>
           </div>
         </div>
        <?php endwhile;
        else: echo '<p> Nie znaleziono postów do wyświetlenia</p>';
    endif;
?>

<!-- // Item -->
</div>
</div>
<div class="container">

<div class="card-deck">
    <!-- Wyświetlanie postów z sekcji o firmie -->
<?php
    $firmaQuery = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'O firmie'
    ));

    if($firmaQuery->have_posts()):
        while ($firmaQuery->have_posts()) : $firmaQuery->the_post();?>

<div class="card">
    <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('ofirmie_thumb', ['class' => 'card-img-position']); 
    } ?>
    <div class="card-body">
      <h5 class="card-title"><?php the_title(); ?></h5>
      <p class="card-text"><?php the_content();?></p>
    </div>
  </div>
        <?php endwhile;
        else: echo '<p> Nie znaleziono postów do wyświetlenia</p>';
    endif;
?> 
</div>

</div><!--  div container -->

<div class="container-fluid bar">
<h2 class="bar-title">Dlaczego My</h2>  
</div>

<div class="container-fluid dlaczego-my">
<div class="container pb-5 pt-5 ">
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-3 dlaczego-bar-l">
        <?php
            $dlaczego_L_Query = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'DlaczegoMyL'
            ));

            if($dlaczego_L_Query->have_posts()):
                while ($dlaczego_L_Query->have_posts()) : $dlaczego_L_Query->the_post();?>

            <div class="col-12 dlaczego">
                <i class="dlaczego-l-ico fa <?php the_field('dlaczego_my_ico'); ?>"></i>
                <h2 class="dlaczego-l-title"><?php the_title(); ?></h2>
                <p class="dlaczego-l-content"><?php echo get_the_content();?></p>
                
            </div>
                <?php endwhile;
                else: echo '<p> Nie znaleziono postów do wyświetlenia</p>';
            endif;
        ?> 
     </div>
    <div class="col-sm-12 col-md-12 col-lg-6">
    <?php get_post( 499 ); ?>
            <div class="col-12">
                <img class="dlaczego-l-img" src="<?php $get_img = get_field('dlaczego_my_zdj'); echo $get_img['url'] ?>" alt="">
            </div>
     </div>
    <div class="col-sm-12 col-md-12 col-lg-3 dlaczego-bar-p">
    <?php
            $dlaczego_P_Query = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'DlaczegoMyP'
            ));

            if($dlaczego_P_Query->have_posts()):
                while ($dlaczego_P_Query->have_posts()) : $dlaczego_P_Query->the_post();?>

            <div class="col-12 dlaczego">
                <i class="dlaczego-p-ico fa <?php the_field('dlaczego_my_ico'); ?>"></i>
                <h2 class="dlaczego-p-title"><?php the_title(); ?></h2>
                <p class="dlaczego-p-content"><?php echo get_the_content();?></p>
            
            </div>
                <?php endwhile;
                else: echo '<p> Nie znaleziono postów do wyświetlenia</p>';
            endif;
        ?> 
     </div>
    </div>
  </div>
</div><!--  div container -->
</div><!--  div container-fluid -->

<div class="container-fluid bar">
<h2 class="bar-title">Aktualności</h2>  
</div>

<div class="container">
<!-- wyswietlanie postów -->

    <div class="card-deck">
    <?php
    // wyswietlanie 3 postów przy użyciu niestandardowego WP_Query
    $postQuery = new WP_Query(array(
        'posts_per_page' => 3
    ));
    if($postQuery->have_posts()):
        while ($postQuery->have_posts()) : $postQuery->the_post();?>

    <div class="card card--modify">
    <div class="card-body">
        <div class="card-time mb-3"><?php the_time('F j, Y'); ?></div>
        <div class="card-distance">
        <h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
        <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail('post_thumb',['class' => 'card-img-center']); 
            } ?>
        </div>
        <div class="card-content-section">
        <p class="card-text"><?php 
            // wyswietlanie 30 słów contentu, jeśli ma wyświetlać całość używamy funkcji the_content()
            if( has_excerpt()){
                echo get_the_excerpt();
            } else {
                echo wp_trim_words(get_the_content(),30);
            }?>
        </p>
        <a class="card-read" href="<?php the_permalink();?>">Czytaj więcej</a>
        </div>   
    </div>
    </div>
            
        <?php endwhile;

        else: echo '<p> Nie znaleziono postów do wyświetlenia</p>';
    endif;
    // Wymagany reset po użyciu niestandardowego WP_Query
    wp_reset_postdata();
    ?>
    </div>

</div> <!-- div.container -->
<!-- wyswietlanie stopki -->
<?php  get_footer(); ?> 
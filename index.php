


<!-- wyswietlanie headera -->
<?php  get_header(); ?>

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
                     the_post_thumbnail(); 
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

<!-- Wyświetlanie postów z sekcji o firmie -->
<?php
    $firmaQuery = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'O firmie'
    ));

    if($firmaQuery->have_posts()):
        while ($firmaQuery->have_posts()) : $firmaQuery->the_post();?>
         <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail('ofirmie_thumb'); 
            } ?>
            <h2><?php the_title(); ?></h2>
           <p> <?php 
            // wyswietlanie 30 słów contentu, jeśli ma wyświetlać całość używamy funkcji the_content()
            the_content();?></p>
        <?php endwhile;
        else: echo '<p> Nie znaleziono postów do wyświetlenia</p>';
    endif;
?>

<!-- wyswietlanie postów -->
<?php
    // wyswietlanie 3 postów przy użyciu niestandardowego WP_Query
    $postQuery = new WP_Query(array(
        'posts_per_page' => 3
    ));
    if($postQuery->have_posts()):
        while ($postQuery->have_posts()) : $postQuery->the_post();?>
            <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail('post_thumb'); 
            } ?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php 
            // wyswietlanie 30 słów contentu, jeśli ma wyświetlać całość używamy funkcji the_content()
            if( has_excerpt()){
               echo get_the_excerpt();
            } else {
                echo wp_trim_words(get_the_content(),30);
            }?>
            <a href="<?php the_permalink();?>">Czytaj więcej</a>
        <?php endwhile;

        else: echo '<p> Nie znaleziono postów do wyświetlenia</p>';
    endif;
    // Wymagany reset po użyciu niestandardowego WP_Query
    wp_reset_postdata();
?>



<!-- wyswietlanie stopki -->
<?php  get_footer(); ?>
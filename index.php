


<!-- wyswietlanie headera -->
<?php  get_header(); ?>

<!-- wyswietlanie slidera -->
<div class="fluid-container">
<div class="Modern-Slider">
<!-- Item -->
<div class="item">
  <div class="img-fill">
    <img src="<?php echo get_theme_file_uri('/images/meowsalot.jpg') ?>" alt="">
    <div class="info">
      <div class="info-content">
        <h3>Znajdziemy rozwiązanie</h3>
        <h4>Twojego problemu</h4>
        <h5>You can easialy add image, html formatted texts and video layers over each slide and each layer accepts unique animation You can easily add imYou can easialy add image, html formatted texts and video layers over each slide and each layer accepts unique animation You can easily add image, html formatted te You can easialy add image, html formatted texts and video layers over each slide and each layer accepts unique animation You can easily add image, html formatted teage, html formatted texts and video layers over each slide and each layer accepts unique animation.</h5>
      </div>
    </div>
  </div>
</div>
<!-- // Item -->
<!-- Item -->
<div class="item">
  <div class="img-fill">
    <img src="<?php echo get_theme_file_uri('/images/apples.jpg') ?>" alt="">
    <div class="info">
      <div class="info-content">
        <h3>Usługi serwisowe</h3>
        <h4>Dowiedz się więcej o naszych usługach</h4>
        <h5>Donec id ornare dui. Aenean tristique condimentum elit, quis blandit nisl varius sit amet. Sed eleifend felis quis massa viverra You can easily add image, html formatted texts and video layers over each slide and each layer accepts unique animation</h5>
      </div>
    </div>
  </div>
</div>
<!-- // Item -->
<!-- Item -->
<div class="item">
  <div class="img-fill">
    <img src="<?php echo get_theme_file_uri('/images/ocean.jpg') ?>" alt="">
    <div class="info">
      <div class="info-content">
        <h3>Awesome Transtions With CSS3</h3>
        <h4>Alego dela crusiero</h4>
        <h5>Donec id ornare dui. Aenean tristique condimentum elit, quis blandit nisl varius sit amet. Sed eleifend felis quis massa viverra You can easily add image, html formatted texts and video layers over each slide and each layer accepts unique animation</h5>
      </div>
    </div>
  </div>
</div>
<!-- // Item -->
<!-- Item -->
<div class="item">
  <div class="img-fill">
    <img src="<?php echo get_theme_file_uri('/images/bus.jpg') ?>" alt="">
    <div class="info">
      <div class="info-content">
        <h3>Separate settings per breakpoint</h3>
        <h4>Alego dela crusiero</h4>
        <h5>Donec id ornare dui. Aenean tristique condimentum elit, quis blandit nisl varius sit amet. Sed eleifend felis quis massa viverra You can easily add image, html formatted texts and video layers over each slide and each layer accepts unique animation</h5>
      </div>
    </div>
  </div>
</div>
<!-- // Item -->
</div>
</div>
<div class="container">

<!-- wyswietlanie postów -->
<?php
    // wyswietlanie 3 postów przy użyciu niestandardowego WP_Query
    $postQuery = new WP_Query(array(
        'posts_per_page' => 3
    ));
    if($postQuery->have_posts()):
        while ($postQuery->have_posts()) : $postQuery->the_post();?>
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <?php 
            // wyswietlanie 30 słów contentu, jeśli ma wyświetlać całość używamy funkcji the_content()
            echo wp_trim_words(get_the_content(),30);?>
            <a href="<?php the_permalink();?>">Czytaj więcej</a>
        <?php endwhile;

        else: echo '<p> Nie znaleziono postów do wyświetlenia</p>';
    endif;
    // Wymagany reset po użyciu niestandardowego WP_Query
    wp_reset_postdata();
?>



<!-- wyswietlanie stopki -->
<?php  get_footer(); ?>
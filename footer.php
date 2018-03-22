<footer class="site-footer">


 </footer>

 
<!-- Wczytanie menu stworzonego w pliku functions pod nazwa 'footer-menu' -->
 <?php
        wp_nav_menu(array(
            'theme_location' => 'footer-menu'
        ));
 ?>
</div> <!--header div.container -->

<?php wp_footer(); ?>
<!-- Domknięcie tagów dokumentu  -->
</body>
</html>


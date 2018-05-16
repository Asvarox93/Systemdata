<div class="container-fluid footer-modify mt-5">
<div class="container mt-2">
<div class="card-group">
    <div class="card card--footer">
        <div class="card-body">
            <?php
            if(is_active_sidebar('footer-sidebar-1')){
            dynamic_sidebar('footer-sidebar-1');
            }
            ?>
        </div>
    </div>

    <div class="card card--footer">
        <div class="card-body card-body--modify">
            <?php
            if(is_active_sidebar('footer-sidebar-2')){
            dynamic_sidebar('footer-sidebar-2');
            }
            ?>
        </div>
    </div>

    <div class="card card--footer">
        <div class="card-body">
            <?php
            if(is_active_sidebar('footer-sidebar-3')){
            dynamic_sidebar('footer-sidebar-3');
            }
            ?>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm ">
        <div class="copyright-text text-center mt-4 mb-4">
            <p>Copyright &copy; <?php echo date('Y'); ?> System Data Sp. z o.o. Wszystkie prawa zastrzeżone</p>
        </div>
    </div>
</div>
</div>
</div> <!-- div.container-fluid -->

<?php wp_footer(); ?>
<!-- Domknięcie tagów dokumentu  -->
</body>
</html>


<!-- Footer -->


<footer>
    <div class="container-fluid wraper">
        <div class="row">
            <div class="col-md-4">
                <a href="index.html" class="logo_footer"></a>
            </div>
            <div class="col-md-8">
                <menu>
                    <input type="checkbox" class="menu-checkbox-footer" id="menu-checkbox-footer" />
                    <nav role="navigation">
                        <label for="menu-checkbox-footer" class="toggle-button-footer" data-open="menu" data-close="close" onclick></label>
                        <?php
                        if ( has_nav_menu( 'footer_menu' ) ) {
                            wp_nav_menu(array(
                                'theme_location'=> 'footer_menu',
                                'menu'			=> 'Footer Menu',
                                'menu_class'	=> 'footermenu cf main-menu-footer  clearfix',
                                'walker'		=> new Aletheme_Nav_Walker(),
                                'container'		=> '',
                            ));
                        }
                        ?>
                    </nav>
                </menu>

            </div>
        </div><!-- /.row -->
        <div class="row">
            <div class="social">
                <ul>
                    <?php if(ale_get_option('gog')){ echo '<li ><a class="plus-google" href="'.ale_get_option('gog').'" ></a></li>'; } ?>
                    <?php if(ale_get_option('insta')){ echo '<li ><a class="instagram" href="'.ale_get_option('insta').'" ></a></li>'; } ?>
                    <?php if(ale_get_option('fb')){ echo '<li ><a class="facebook" href="'.ale_get_option('fb').'" ></a></li>'; } ?>
                    <?php if(ale_get_option('twi')){ echo '<li ><a class="twitter" href="'.ale_get_option('twi').'" ></a></li>'; } ?>
            </div><!-- /.social -->
        </div><!-- /.row -->


    </div>
</footer>
    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>
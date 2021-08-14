<footer class="site-footer bg-darkest">
        <div class="container">

        <?php
                wp_nav_menu( array(
                'theme_location'  => 'footer_social',
                'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
        
                'menu_class'      => 'nav justify-content-center',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );?>
       

       <?php
                wp_nav_menu( array(
                'theme_location'  => 'footer_menu',
                'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
        
                'menu_class'      => 'nav justify-content-center',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );?>
            <div class="copy">
                &copy; Kinøti <?php echo date("Y");?><br /> All rights reserved
            </div>
        </div>
    </footer>

    <?php wp_footer();?>
</body>


</html>
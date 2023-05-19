<?php

/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JUDAS,_As_botas_de
 */

?>

<?php wp_footer(); ?>
<footer class="flex flex-col px-8 before:block before:h-[8px] before:mt-2 before:w-full before:border-t-2 before:border-b before:border-t-foreground">
    <!-- Footer Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-5 gap-12 py-6">
        <!-- Logo -->
        <div class="flex flex-col justify-start lg:justify-center content-center lg:items-center gap-3">
            <a href="<?php echo site_url(); ?>">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                $logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
                ?>
                <img class="w-16 h-16" src="<?php echo esc_url($logo_url); ?>" alt="">
            </a>
        </div>
        <!-- Menu one -->
        <div id="footer-1">
            <?php
            wp_nav_menu(array(
                'menu' => 'Footer 1',
                'container' => false,
                'menu_class' => 'menu-item hover:opacity-80 uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<nav class="flex flex-col justify-start content-center gap-3">%3$s</nav>',
                'walker' => new Footer_Nav_Walker()
            ));
            ?>
            <?php
            class Footer_Nav_Walker extends Walker_Nav_Menu
            {
                // Modify menu item output
                function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
                {
                    $output .= '<a class="' . implode(' ', $item->classes) . ' hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left" href="' . $item->url . '">' . $item->title . '</a>';
                }
            }
            ?>
        </div>
        <!-- Menu two -->
        <div id="footer-2">
            <?php
            wp_nav_menu(array(
                'menu' => 'Footer 2',
                'container' => false,
                'menu_class' => 'menu-item hover:opacity-80 uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<nav class="flex flex-col justify-start content-center gap-3">%3$s</nav>',
                'walker' => new Footer_Nav_Walker()
            ));
            ?>
        </div>
        <!-- Menu three -->
        <div id="footer-3">
            <?php
            wp_nav_menu(array(
                'menu' => 'Footer 3',
                'container' => false,
                'menu_class' => 'menu-item hover:opacity-80 uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<nav class="flex flex-col justify-start content-center gap-3">%3$s</nav>',
                'walker' => new Footer_Nav_Walker()
            ));
            ?>
        </div>
        <!-- Menu three -->
        <div id="footer-4">
            <?php
            wp_nav_menu(array(
                'menu' => 'Footer 4',
                'container' => false,
                'menu_class' => 'menu-item hover:opacity-80 uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<nav class="flex flex-col justify-start content-center gap-3">%3$s</nav>',
                'walker' => new Footer_Nav_Walker()
            ));
            ?>
        </div>
    </div>
    <!-- Footer Links -->
    <div class="flex flex-col lg:flex-row gap-3 lg:gap-6 justify-start content-center py-6 lg:py-2 border-t">
        <span class="text-xs uppercase text-foreground/80">© JUDAS, As botas de 2023</span>
        <a href="https://github.com/moisesmmreis/judasasbotasde">
            <span class="text-xs uppercase text-blue-600/80 underline">Desenvolvimento Colaborativo</span>
        </a>
    </div>
    <!-- Scroll to the top -->
    <button class="fixed bottom-4 right-4 z-[999] p-3 shadow-lg border bg-white rounded-full text-foreground" id="scrolltotop">
        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.1464 6.85355C11.3417 7.04882 11.6583 7.04882 11.8536 6.85355C12.0488 6.65829 12.0488 6.34171 11.8536 6.14645L7.85355 2.14645C7.65829 1.95118 7.34171 1.95118 7.14645 2.14645L3.14645 6.14645C2.95118 6.34171 2.95118 6.65829 3.14645 6.85355C3.34171 7.04882 3.65829 7.04882 3.85355 6.85355L7.5 3.20711L11.1464 6.85355ZM11.1464 12.8536C11.3417 13.0488 11.6583 13.0488 11.8536 12.8536C12.0488 12.6583 12.0488 12.3417 11.8536 12.1464L7.85355 8.14645C7.65829 7.95118 7.34171 7.95118 7.14645 8.14645L3.14645 12.1464C2.95118 12.3417 2.95118 12.6583 3.14645 12.8536C3.34171 13.0488 3.65829 13.0488 3.85355 12.8536L7.5 9.20711L11.1464 12.8536Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
        </svg>
    </button>
</footer>
</body>

</html>
<?php

/**
 * JUDAS, As botas de functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package JUDAS,_As_botas_de
 */

if (!defined('JUDASASBOTASDE_VERSION')) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('JUDASASBOTASDE_VERSION', '0.1.0');
}

if (!defined('JUDASASBOTASDE_TYPOGRAPHY_CLASSES')) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `judasasbotasde_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'JUDASASBOTASDE_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if (!function_exists('judasasbotasde_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function judasasbotasde_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on JUDAS, As botas de, use a find and replace
		 * to change 'judasasbotasde' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('judasasbotasde', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'header' => __('Header', 'judasasbotasde'),
				'footer' => __('Footer', 'judasasbotasde'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Remove support for block templates.
		remove_theme_support('block-templates');
	}
endif;
add_action('after_setup_theme', 'judasasbotasde_setup');

/**
 * Enqueue scripts and styles.
 */
function judasasbotasde_scripts()
{
	wp_enqueue_style('judasasbotasde-style', get_stylesheet_uri(), array(), JUDASASBOTASDE_VERSION);
	wp_enqueue_script('judasasbotasde-script', get_template_directory_uri() . '/js/script.min.js', array(), JUDASASBOTASDE_VERSION, true);
	wp_enqueue_script('flowbite-script', '/wp-content/themes/judasasbotasde/node_modules/.pnpm/flowbite@1.6.5/node_modules/flowbite/dist/flowbite.min.js', array(), JUDASASBOTASDE_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'judasasbotasde_scripts');

/**
 * Enqueue the block editor script.
 */
function judasasbotasde_enqueue_block_editor_script()
{
	wp_enqueue_script(
		'judasasbotasde-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		JUDASASBOTASDE_VERSION,
		true
	);
}
add_action('enqueue_block_editor_assets', 'judasasbotasde_enqueue_block_editor_script');

/**
 * Create a JavaScript array containing the Tailwind Typography classes from
 * JUDASASBOTASDE_TYPOGRAPHY_CLASSES for use when adding Tailwind Typography support
 * to the block editor.
 */
function judasasbotasde_admin_scripts()
{
?>
	<script>
		tailwindTypographyClasses = '<?php echo esc_attr(JUDASASBOTASDE_TYPOGRAPHY_CLASSES); ?>'.split(' ');
	</script>
<?php
}
add_action('admin_print_scripts', 'judasasbotasde_admin_scripts');

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function judasasbotasde_tinymce_add_class($settings)
{
	$settings['body_class'] = JUDASASBOTASDE_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', 'judasasbotasde_tinymce_add_class');

/**
 * Add Google Font Scripts to the <head> tag
 */

function judasasbotasde_fonts()
{
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">';
}
add_action('wp_head', 'judasasbotasde_fonts');

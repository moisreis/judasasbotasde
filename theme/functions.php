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

		// Add theme support for custom logo.
		add_theme_support( 'custom-logo', array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		) );

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
	wp_enqueue_style('swiper-style', '/wp-content/themes/judasasbotasde/node_modules/.pnpm/swiper@9.2.4/node_modules/swiper/swiper-bundle.min.css', array(), JUDASASBOTASDE_VERSION);
	wp_enqueue_script('judasasbotasde-script', get_template_directory_uri() . '/js/script.min.js', array(), JUDASASBOTASDE_VERSION, true);
	wp_enqueue_script('flowbite-script', '/wp-content/themes/judasasbotasde/node_modules/.pnpm/flowbite@1.6.5/node_modules/flowbite/dist/flowbite.min.js', array(), JUDASASBOTASDE_VERSION, true);
	wp_enqueue_script('swiper-script', '/wp-content/themes/judasasbotasde/node_modules/.pnpm/swiper@9.2.4/node_modules/swiper/swiper-bundle.min.js', array(), JUDASASBOTASDE_VERSION);
	wp_enqueue_script('videojs-script', '/wp-content/themes/judasasbotasde/node_modules/.pnpm/video.js@8.3.0/node_modules/video.js/dist/video.min.js', array(), JUDASASBOTASDE_VERSION);
	wp_enqueue_style('videojs-style', '/wp-content/themes/judasasbotasde/node_modules/.pnpm/video.js@8.3.0/node_modules/video.js/dist/video-js.min.css', array(), JUDASASBOTASDE_VERSION);
	wp_enqueue_script('clipboard-script', '/wp-content/themes/judasasbotasde/node_modules/.pnpm/clipboard@2.0.11/node_modules/clipboard/dist/clipboard.min.js', array(), JUDASASBOTASDE_VERSION);

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
 *
 * This function generates the necessary HTML code to add Google Fonts to the <head> section of a webpage.
 *
 * @return void
 */
function judasasbotasde_fonts()
{
	echo '<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">';

	echo '<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">';

	echo '<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">';

	echo '<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">';

	echo '<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Noto+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">';
}

add_action('wp_head', 'judasasbotasde_fonts');

/**
 * Creates a custom field in the users profile menu
 * so custom profile pictures can be added and displayed
 * in the website
 */
function add_author_fields($user)
{
?>
	<h3><?php _e('Custom Fields'); ?></h3>
	<table class="form-table">
		<tr>
			<th><label for="author_image"><?php _e('Author Image'); ?></label></th>
			<td>
				<?php
				$author_image = get_the_author_meta('author_image', $user->ID);
				if (!empty($author_image)) {
					echo '<img src="' . esc_url($author_image) . '" width="100">';
				}
				?>
				<input type="text" name="author_image" id="author_image" value="<?php echo esc_attr(get_the_author_meta('author_image', $user->ID)); ?>" class="regular-text">
				<br>
				<span class="description"><?php _e('Enter the URL of the author image.'); ?></span>
			</td>
		</tr>
	</table>
<?php
}
add_action('show_user_profile', 'add_author_fields');
add_action('edit_user_profile', 'add_author_fields');


/**
 * Saves the new profile picture
 *
 * @param int $user_id The ID of the user whose profile picture is being updated
 * @return bool False if the user doesn't have permission to update the profile picture, true otherwise.
 */
function save_author_fields($user_id)
{
	if (!current_user_can('edit_user', $user_id)) {
		return false;
	}
	update_user_meta($user_id, 'author_image', $_POST['author_image']);
}

// Hooks save_author_fields function to the personal_options_update and edit_user_profile_update actions
add_action('personal_options_update', 'save_author_fields');
add_action('edit_user_profile_update', 'save_author_fields');

/**
 * Adds custom fields to user profile
 *
 * @param array $user_contact An array of user contact fields
 * @return array An array of user contact fields including the added custom fields
 */
function add_user_custom_fields($user_contact)
{
	$user_contact['position'] = __('Position');
	$user_contact['location'] = __('Location');
	return $user_contact;
}

// Hooks add_user_custom_fields function to the user_contactmethods filter
add_filter('user_contactmethods', 'add_user_custom_fields');

/**
 * Excludes a number of most recent posts in a given category
 * 
 * @param int $num_posts Number of posts to retrieve
 * @param string $category_name Category name from which the posts will be retrieved
 * @return array List of post IDs to exclude
 */
function get_posts_exclude_most_recent_in_category($num_posts, $category_name)
{
	$category = get_category_by_slug($category_name);
	$args = array(
		'posts_per_page' => $num_posts,
		'category' => $category->term_id,
		'orderby' => 'date',
		'order' => 'DESC',
		'fields' => 'ids',
	);
	$recent_posts = get_posts($args);
	return $recent_posts;
}

/**
 * This function generates a shortcode for social sharing
 * It can be used to display social media sharing buttons on posts and pages.
 */
function social_sharing_shortcode()
{
	// Get the current post URL and title
	$url = urlencode(get_permalink());
	$title = urlencode(get_the_title());

	// Create an array with the social media networks and their URLs
	$social_networks = array(
		'Facebook' => "https://www.facebook.com/sharer/sharer.php?u={$url}",
		'Twitter' => "https://twitter.com/share?url={$url}&text={$title}",
		'WhatsApp' => "http://pinterest.com/pin/create/button/?url={$url}&description={$title}",
		'Email' => "",
	);

	// Create the HTML for the social sharing buttons
	$output = '<div class="flex flex-wrap items-center justify-start gap-3 xl:gap-6">';
	foreach ($social_networks as $network => $url) {
		$output .= '<button class="bg-white border border-neutral-300 focus:outline-none hover:bg-neutral-100 font-medium rounded-3xl max-w-fit max-h-fit text-sm flex flex-row gap-2 justify-center content-center items-center px-3 py-1.5">';
		$output .= '<a href="' . $url . '" target="_blank"><span>' . $network . '</span></a>';
		$output .= '<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">';
		$output .= '<path stroke-linecap="round" stroke-linejoin="round" d="M15 15l6-6m0 0l-6-6m6 6H9a6 6 0 000 12h3" />';
		$output .= '</svg>';
		$output .= '</button>';
	}
	$output .= '</div>';

	return $output;
}
add_shortcode('social_sharing', 'social_sharing_shortcode');

/**
 * Calculates estimated reading time for an article
 */
function get_post_reading_time()
{
	$content = get_post_field('post_content', get_the_ID());
	$word_count = str_word_count(strip_tags($content));
	$reading_time = ceil($word_count / 200); // Assuming an average reading speed of 200 words per minute
	return $reading_time;
}

/**
 * Get search results.
 *
 * @param string $search_query Search query.
 *
 * @return array List of search results.
 */
function search_filter($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts', 'search_filter');

// Enable SVG file upload
function allow_svg_upload( $mime_types ) {
    $mime_types['svg'] = 'image/svg+xml';
    return $mime_types;
}
add_filter( 'upload_mimes', 'allow_svg_upload' );


<?php

/**
 * The header for our theme
 *
 * This is the template that displays the `head` element
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JUDAS,_As_botas_de
 */

?>

<!-- 
	
   __     __  __     _____     ______     ______                              
  /\ \   /\ \/\ \   /\  __-.  /\  __ \   /\  ___\                             
 _\_\ \  \ \ \_\ \  \ \ \/\ \ \ \  __ \  \ \___  \                            
/\_____\  \ \_____\  \ \____-  \ \_\ \_\  \/\_____\                           
\/_____/   \/_____/   \/____/   \/_/\/_/   \/_____/                           
                                                                              
 ______     ______        ______     ______     ______   ______     ______    
/\  __ \   /\  ___\      /\  == \   /\  __ \   /\__  _\ /\  __ \   /\  ___\   
\ \  __ \  \ \___  \     \ \  __<   \ \ \/\ \  \/_/\ \/ \ \  __ \  \ \___  \  
 \ \_\ \_\  \/\_____\     \ \_____\  \ \_____\    \ \_\  \ \_\ \_\  \/\_____\ 
  \/_/\/_/   \/_____/      \/_____/   \/_____/     \/_/   \/_/\/_/   \/_____/ 
                                                                              
 _____     ______                                                             
/\  __-.  /\  ___\                                                            
\ \ \/\ \ \ \  __\                                                            
 \ \____-  \ \_____\                                                          
  \/____/   \/_____/                                                          
                                                                              

 -->
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- WordPress head snippets -->
	<?php wp_head(); ?>
</head>

<body class="overflow-x-hidden">
	<!-- Top navigation menu -->
	<header class="grid grid-cols-12 outline outline-offset-4 outline-1 outline-[#e5e7eb] mb-6">
		<!-- Hamburguer menu -->
		<nav class="col-span-3 xl:col-span-1 flex flex-row justify-center content-center items-center border-r border-b-2 py-2">
			<!-- Hamburguer menu button -->
			<button data-dropdown-toggle="hamburguer-menu" data-dropdown-placement="bottom">
				<!-- Hamburguer menu icon -->
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-foreground">
					<path stroke-linecap="miter" stroke-linejoin="miter" d="M3.75 9h16.5m-16.5 6.75h16.5" />
				</svg>
			</button>
			<!-- Hamburguer menu dropdown -->
			<div id="hamburguer-menu" class="shadow-lg flex flex-col justify-start content-center gap-6 hidden bg-white border z-[999] p-6">
				<!-- Hamburguer logo -->
				<div id="hamburguer-logo" class="flex flex-row justify-start pb-6 border-b">
					<a href="<?php echo site_url(); ?>">
						<?php
						$custom_logo_id = get_theme_mod('custom_logo');
						$logo_url = wp_get_attachment_image_url($custom_logo_id, 'full');
						?>
						<img class="w-16 h-16" src="<?php echo esc_url($logo_url); ?>" alt="">
					</a>
				</div>
				<!-- Hamburguer links -->
				<?php
				wp_nav_menu(array(
					'menu' => 'Main',
					'container' => false,
					'menu_class' => 'menu-item hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left',
					'fallback_cb' => '__return_false',
					'items_wrap' => '<nav class="flex flex-col gap-3 justify-start pb-6 border-b">%3$s</nav>',
					'walker' => new Judas_Nav_Walker()
				));
				?>
				<?php
				class Judas_Nav_Walker extends Walker_Nav_Menu
				{
					// Modify menu item output
					function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
					{
						$output .= '<a class="' . implode(' ', $item->classes) . ' hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left" href="' . $item->url . '">' . $item->title . '</a>';
					}
				}
				?>
				<?php
				wp_nav_menu(array(
					'menu' => 'Category',
					'container' => false,
					'menu_class' => 'menu-item hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left',
					'fallback_cb' => '__return_false',
					'items_wrap' => '<nav class="flex xl:hidden flex-col gap-3 justify-start pb-6 border-b">%3$s</nav>',
					'walker' => new Judas_Nav_Walker()
				));
				?>
				<!-- Hamburguer social external links -->
				<div class="flex flex-col gap-3 justify-between">
					<!-- Twitter icon -->
					<a class="flex flex-row gap-2 justify-start items-center content-center" href="https://twitter.com/judasasbotasde">
						<span class="text-sm text-blue-600/80">Twitter</span>
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600/80">
							<path d="M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
						</svg>
					</a>
					<!-- Instagram icon -->
					<a class="flex flex-row gap-2 justify-start items-center content-center" href="https://www.instagram.com/judasasbotasde/">
						<span class="text-sm text-blue-600/80">Instagram</span>
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600/80">
							<path d="M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
						</svg>
					</a>
					<!-- Facebook icon -->
					<a class="flex flex-row gap-2 justify-start items-center content-center" href="https://www.facebook.com/judasasbotasde/">
						<span class="text-sm text-blue-600/80">Facebook</span>
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600/80">
							<path d="M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
						</svg>
					</a>
					<!-- Linkedin icon -->
					<a class="flex flex-row gap-2 justify-start items-center content-center" href="https://www.linkedin.com/in/judasasbotasde">
						<span class="text-sm text-blue-600/80">Linkedin</span>
						<svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-blue-600/80">
							<path d="M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
						</svg>
					</a>
				</div>
			</div>
		</nav>
		<!-- Search menu -->
		<nav class="col-span-3 xl:col-span-1 flex flex-row justify-center content-center items-center border-r border-b-2 py-2">
			<!-- Search menu button -->
			<button data-dropdown-toggle="search-menu" data-dropdown-placement="bottom" class="relative" id="search-button" aria-expanded="false">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-foreground">
					<path stroke-linecap="miter" stroke-linejoin="miter" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
				</svg>
			</button>
			<!-- Search menu dropdown -->
			<div id="search-menu" class="shadow-lg absolute hidden bg-white border z-[999]">
				<!-- Search form -->
				<form class="flex items-center" autocomplete="off" action="<?php echo esc_url(home_url('/')); ?>" method="get">
					<!-- Search input field -->
					<input type="text" id="voice-search" class="bg-white border-none ring-[#e5e7eb] outline-none focus:border-none focus:ring-[#e5e7eb] focus:outline-none text-foreground/80 text-sm block w-full p-2.5" placeholder="Pesquise por artigos, termos ou autores" aria-label="Search" required name="s" value="<?php echo get_search_query(); ?>">
				</form>
			</div>
		</nav>
		<!-- Main menu -->
		<nav class="hidden xl:flex xl:col-span-8 gap-6 flex-row justify-center content-center items-center border-r border-b-2 py-2 ">
			<?php
			wp_nav_menu(array(
				'menu' => 'Category',
				'container' => false,
				'menu_class' => 'menu-item hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left',
				'fallback_cb' => '__return_false',
				'items_wrap' => '<nav class="hidden xl:flex col-span-8 gap-6 flex-row justify-center content-center items-center">%3$s</nav>',
				'walker' => new Judas_Nav_Walker()
			));
			?>
		</nav>
		<!-- Login button -->
		<nav class="col-span-3 xl:col-span-1 flex flex-row justify-center content-center items-center border-r border-b-2 py-2">
			<a href="<?php echo site_url() . '/wp-login.php'; ?>">
				<button class="hover:opacity-80 transition-opacity text-xs uppercase font-medium tracking-widest">Entrar</button>
			</a>
		</nav>
		<!-- Email button -->
		<nav class="col-span-3 xl:col-span-1 flex flex-row justify-center content-center items-center border-b-2 py-2">
			<a href="https://mail.hostinger.com/">
				<button class="hover:opacity-80 transition-opacity text-xs uppercase font-medium tracking-widest">E-mail</button>
			</a>
		</nav>
	</header>
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
	<?php wp_head(); ?>
</head>

<body class="overflow-x-hidden">
	<header>
		<nav class="flex flex-row gap-6 justify-end py-2 px-6 border-b">
			<button id="dropdown-languages" data-dropdown-toggle="dropdownLanguages" data-dropdown-placement="bottom" class="text-xs capitalize hover:underline" type="button">Idiomas</button>
			<!-- Dropdown menu -->
			<div id="dropdownLanguages" class="z-10 hidden bg-white rounded-lg shadow w-fit dark:bg-gray-700">
				<ul class="flex flex-col gap-1 h-fit py-2 overflow-y-auto text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLanguagesButton">
					<li class="px-2 hover:bg-neutral-50">
						<span class="text-xs">Português</span>
					</li>
					<li class="px-2">
						<span class="text-xs">Inglês</span>
					</li>
					<li class="px-2">
						<span class="text-xs">Espanhol</span>
					</li>
				</ul>
			</div>
			<button class="text-xs capitalize hover:underline">Webmail</button>
			<button class="text-xs capitalize hover:underline">Minha conta</button>
		</nav>
	</header>
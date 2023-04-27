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
	<!-- Top navigation menu -->
	<header class="grid grid-cols-12 outline outline-offset-4 outline-1 outline-[#e5e7eb] mb-6">
		<!-- Hamburguer menu -->
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-r border-b py-2">
			<button class="">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-foreground">
					<path stroke-linecap="miter" stroke-linejoin="miter" d="M3.75 9h16.5m-16.5 6.75h16.5" />
				</svg>
			</button>
		</nav>
		<!-- Main menu -->
		<nav class="col-span-9 gap-6 flex flex-row justify-center content-center items-center border-r border-b py-2 ">
			<button class="text-xs uppercase font-medium tracking-widest">Opinião<button>
			<button class="text-xs uppercase font-medium tracking-widest">Cultura <b class="font-black">POP</b><button>
			<button class="text-xs uppercase font-medium tracking-widest">Cinema<button>
			<button class="text-xs uppercase font-medium tracking-widest">Acadêmico<button>
			<button class="text-xs uppercase font-black tracking-widest">Forca de Judas<button>
		</nav>
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-r border-b py-2">
			<button class="text-xs uppercase font-medium tracking-widest">Entrar<button>
		</nav>
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-r border-b py-2">
			<button class="text-xs uppercase font-medium tracking-widest">E-mail<button>
		</nav>
	</header>
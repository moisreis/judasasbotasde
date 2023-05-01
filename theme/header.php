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
			<!-- Hamburguer menu button -->
			<button data-dropdown-toggle="hamburguer-menu" data-dropdown-placement="bottom">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-foreground">
					<path stroke-linecap="miter" stroke-linejoin="miter" d="M3.75 9h16.5m-16.5 6.75h16.5" />
				</svg>
			</button>
			<!-- Hamburguer menu dropdown -->
			<div id="hamburguer-menu" class="shadow-sm flex flex-col justify-start content-center gap-6 hidden bg-white border z-[999] p-6">
				<!-- Hamburguer logo -->
				<div id="hamburguer-logo">
					<img class="w-20 h-20" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/logo.svg" alt="">
				</div>
				<!-- Hamburguer links -->
				<div class="flex flex-col gap-3 justify-start">
					<button class="hover:text-blue-600 uppercase text-xs font-medium tracking-widest text-left">Início</button>
					<button class="hover:text-blue-600 uppercase text-xs font-medium tracking-widest text-left">Contato</button>
					<button class="hover:text-blue-600 uppercase text-xs font-medium tracking-widest text-left">Sobre <b class="font-black">nós</b></button>
					<button class="hover:text-blue-600 uppercase text-xs font-medium tracking-widest text-left">Linha <b class="font-black">editorial</b></button>
					<button class="hover:text-blue-600 uppercase text-xs font-medium tracking-widest text-left">Apoie-nos</button>
					<button class="hover:text-blue-600 uppercase text-xs font-medium tracking-widest text-left">A <b class="font-black">Forca de Judas</b></button>
					<button class="hover:text-blue-600 uppercase text-xs font-medium tracking-widest text-left">Anunciantes</button>
					<button class="hover:text-blue-600 uppercase text-xs font-medium tracking-widest text-left">Nossos <b class="font-black">ideais</b></button>
				</div>
				<!-- Hamburguer social external links -->
				<div class="flex flex-row justify-between">
					<!-- Twitter icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-twitter">
						<path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
					</svg>
					<!-- Instagram icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram">
						<rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
						<path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
						<line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
					</svg>
					<!-- Facebook icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook">
						<path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
					</svg>
					<!-- Linkedin icon -->
					<svg width="16" height="16" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2 1C1.44772 1 1 1.44772 1 2V13C1 13.5523 1.44772 14 2 14H13C13.5523 14 14 13.5523 14 13V2C14 1.44772 13.5523 1 13 1H2ZM3.05 6H4.95V12H3.05V6ZM5.075 4.005C5.075 4.59871 4.59371 5.08 4 5.08C3.4063 5.08 2.925 4.59871 2.925 4.005C2.925 3.41129 3.4063 2.93 4 2.93C4.59371 2.93 5.075 3.41129 5.075 4.005ZM12 8.35713C12 6.55208 10.8334 5.85033 9.67449 5.85033C9.29502 5.83163 8.91721 5.91119 8.57874 6.08107C8.32172 6.21007 8.05265 6.50523 7.84516 7.01853H7.79179V6.00044H6V12.0047H7.90616V8.8112C7.8786 8.48413 7.98327 8.06142 8.19741 7.80987C8.41156 7.55832 8.71789 7.49825 8.95015 7.46774H9.02258C9.62874 7.46774 10.0786 7.84301 10.0786 8.78868V12.0047H11.9847L12 8.35713Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
					</svg>
				</div>
			</div>
		</nav>
		<!-- Search menu -->
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-r border-b py-2">
			<!-- Search menu button -->
			<button data-dropdown-toggle="search-menu" data-dropdown-placement="right" class="relative" id="search-button">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-foreground">
					<path stroke-linecap="miter" stroke-linejoin="miter" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
				</svg>
			</button>
			<!-- Search menu dropdown -->
			<div id="search-menu" class="absolute hidden bg-white border z-[999] shadow-sm-light">
				<form class="flex items-center">
					<div class="relative w-full">
						<input type="text" id="voice-search" class="bg-white border-none ring-[#e5e7eb] outline-none focus:border-none focus:ring-[#e5e7eb] focus:outline-none text-foreground/80 text-sm block w-full p-2.5" placeholder="Pesquise por artigos, termos ou autores" required>
					</div>
				</form>
			</div>
		</nav>
		<!-- Zoom in or out menu -->
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-r border-b py-2">
			<button class="">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-foreground">
					<path stroke-linecap="miter" stroke-linejoin="miter" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
				</svg>
			</button>
		</nav>
		<!-- Main menu -->
		<nav class="col-span-7 gap-6 flex flex-row justify-center content-center items-center border-r border-b py-2 ">
			<button class="hover:text-blue-600 text-xs uppercase font-medium tracking-widest">Opinião</button>
			<button class="hover:text-blue-600 text-xs uppercase font-medium tracking-widest">Cultura <b class="font-black">POP</b></button>
			<button class="hover:text-blue-600 text-xs uppercase font-medium tracking-widest">Cinema</button>
			<button class="hover:text-blue-600 text-xs uppercase font-medium tracking-widest">Acadêmico</button>
			<button class="hover:text-blue-600 text-xs uppercase font-black tracking-widest">Forca de Judas</button>
		</nav>
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-r border-b py-2">
			<button class="hover:text-blue-600 text-xs uppercase font-medium tracking-widest">Entrar</button>
		</nav>
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-b py-2">
			<button class="hover:text-blue-600 text-xs uppercase font-medium tracking-widest">E-mail</button>
		</nav>
	</header>
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
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-r border-b-2 py-2">
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
				<div id="hamburguer-logo">
					<img class="w-20 h-20" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/logo.svg" alt="">
				</div>
				<!-- Hamburguer links -->
				<div class="flex flex-col gap-3 justify-start">
					<!-- Home link -->
					<a href="http://localhost/judasasbotasde">
						<button class="hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left">Início</button>
					</a>
					<!-- Contact link -->
					<a href="http://localhost/judasasbotasde/contato/">
						<button class="hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left">Contato</button>
					</a>
					<!-- About link -->
					<a href="http://localhost/judasasbotasde/sobre">
						<button class="hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left">Sobre <b class="font-black">nós</b></button>
					</a>
					<!-- Editorial link -->
					<button class="hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left">Linha <b class="font-black">editorial</b></button>
					<!-- Support us link -->
					<button class="hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left">Apoie-nos</button>
					<!-- Magazine link -->
					<button class="hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left">A <b class="font-black">Forca de Judas</b></button>
					<!-- Advertisers link -->
					<button class="hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left">Anunciantes</button>
					<!-- Our ideals link -->
					<button class="hover:opacity-80 transition-opacity uppercase text-xs font-medium tracking-widest text-left">Nossos <b class="font-black">ideais</b></button>
				</div>
				<!-- Hamburguer social external links -->
				<div class="flex flex-row justify-between">
					<!-- Twitter icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
						<path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
					</svg>
					<!-- Instagram icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
						<path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
					</svg>
					<!-- Facebook icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
						<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
					</svg>
					<!-- Linkedin icon -->
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
						<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
					</svg>
				</div>
			</div>
		</nav>
		<!-- Search menu -->
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-r border-b-2 py-2">
			<!-- Search menu button -->
			<button data-dropdown-toggle="search-menu" data-dropdown-placement="bottom" class="relative" id="search-button" aria-expanded="false">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-foreground">
					<path stroke-linecap="miter" stroke-linejoin="miter" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
				</svg>
			</button>
			<!-- Search menu dropdown -->
			<div id="search-menu" class="shadow-lg absolute hidden bg-white border z-[999]">
				<!-- Search form -->
				<form class="flex items-center" autocomplete="off">
					<!-- Search input field -->
					<input type="text" id="voice-search" class="bg-white border-none ring-[#e5e7eb] outline-none focus:border-none focus:ring-[#e5e7eb] focus:outline-none text-foreground/80 text-sm block w-full p-2.5" placeholder="Pesquise por artigos, termos ou autores" aria-label="Search" required>
				</form>
			</div>
		</nav>
		<!-- Zoom in or out menu -->
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-r border-b-2 py-2">
			<!-- zoom in or out button -->
			<button>
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-foreground">
					<path stroke-linecap="miter" stroke-linejoin="miter" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
				</svg>
			</button>
		</nav>
		<!-- Main menu -->
		<nav class="col-span-7 gap-6 flex flex-row justify-center content-center items-center border-r border-b-2 py-2 ">
			<button class="hover:opacity-80 transition-opacity text-xs uppercase font-medium tracking-widest">Opinião</button>
			<button class="hover:opacity-80 transition-opacity text-xs uppercase font-medium tracking-widest">Cultura <b class="font-black">POP</b></button>
			<button class="hover:opacity-80 transition-opacity text-xs uppercase font-medium tracking-widest">Cinema</button>
			<button class="hover:opacity-80 transition-opacity text-xs uppercase font-medium tracking-widest">Acadêmico</button>
			<button class="hover:opacity-80 transition-opacity text-xs uppercase font-black tracking-widest">Forca de Judas</button>
		</nav>
		<!-- Login button -->
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-r border-b-2 py-2">
			<button class="hover:opacity-80 transition-opacity text-xs uppercase font-medium tracking-widest">Entrar</button>
		</nav>
		<!-- Email button -->
		<nav class="col-span-1 flex flex-row justify-center content-center items-center border-b-2 py-2">
			<button class="hover:opacity-80 transition-opacity text-xs uppercase font-medium tracking-widest">E-mail</button>
		</nav>
	</header>
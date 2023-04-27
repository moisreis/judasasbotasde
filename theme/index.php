<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JUDAS,_As_botas_de
 */

get_header();
?>
<!-- Authors carrousel -->
<section class="px-8 flex flex-row justify-between mb-12">
    <div class="flex flex-col justify-center content-center items-center gap-2">
        <img class="w-16 h-16 rounded-full object-cover saturate-0" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/catarina.webp" alt="">
        <span class="font-mono text-foreground/80 text-xs w-1/2 text-center">Catarina de Melo</span>
    </div>
    <div class="flex flex-col justify-center content-center items-center gap-2">
        <img class="w-16 h-16 rounded-full object-cover saturate-0" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/zin.webp" alt="">
        <span class="font-mono text-foreground/80 text-xs w-1/2 text-center">Rafael Zin</span>
    </div>
    <div class="flex flex-col justify-center content-center items-center gap-2">
        <img class="w-16 h-16 rounded-full object-cover saturate-0" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/daniel.webp" alt="">
        <span class="font-mono text-foreground/80 text-xs w-1/2 text-center">Daniel Braz</span>
    </div>
    <div class="flex flex-col justify-center content-center items-center gap-2">
        <img class="w-16 h-16 rounded-full object-cover saturate-0" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/moises.webp" alt="">
        <span class="font-mono text-foreground/80 text-xs w-1/2 text-center">Moisés Reis</span>
    </div>
    <div class="flex flex-col justify-center content-center items-center gap-2">
        <img class="w-16 h-16 rounded-full object-cover saturate-0" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/ygor.webp" alt="">
        <span class="font-mono text-foreground/80 text-xs w-1/2 text-center">Ygor Monteiro</span>
    </div>
    <div class="flex flex-col justify-center content-center items-center gap-2">
        <img class="w-16 h-16 rounded-full object-cover saturate-0" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/catarina.webp" alt="">
        <span class="font-mono text-foreground/80 text-xs w-1/2 text-center">Catarina de Melo</span>
    </div>
    <div class="flex flex-col justify-center content-center items-center gap-2">
        <img class="w-16 h-16 rounded-full object-cover saturate-0" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/catarina.webp" alt="">
        <span class="font-mono text-foreground/80 text-xs w-1/2 text-center">Catarina de Melo</span>
    </div>
    <div class="flex flex-col justify-center content-center items-center gap-2">
        <img class="w-16 h-16 rounded-full object-cover saturate-0" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/catarina.webp" alt="">
        <span class="font-mono text-foreground/80 text-xs w-1/2 text-center">Catarina de Melo</span>
    </div>
    <div class="flex flex-col justify-center content-center items-center gap-2">
        <img class="w-16 h-16 rounded-full object-cover saturate-0" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/catarina.webp" alt="">
        <span class="font-mono text-foreground/80 text-xs w-1/2 text-center">Catarina de Melo</span>
    </div>
</section>
<!-- Main articles -->
<section class="grid grid-cols-12 px-8 gap-12 mb-12">
    <!-- New posts column -->
    <div class="col-span-4">
        <!-- Newest post -->
        <h1 class="font-serif text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b">Mais recente</h1>
        <div class="flex flex-col gap-2" id="newest-post">
            <div class="relative">
                <img src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/mulheres.webp" alt="">
                <span class="absolute bottom-1 right-2 text-white/80 text-xs font-mono">Fernando Frazão/Agência Brasil</span>
            </div>
            <h2 class="font-bold text-xl">Pela vida das mulheres</h2>
            <p class="line-clamp-3 text-foreground/90 text-sm">A Igreja condenava e eliminava as mulheres por seus saberes: não devia ser fácil sobreviver em um mundo que matava as curandeiras, sob acusação de bruxaria e heresia e ainda lhes confiscava os bens. Fico imaginando as riquezas subtraídas às vítimas: receita de chá para espinhela caída, emplasto para queimadura (que triste ironia), cataplasma para inflamação na garganta, xaropes, vermífugos e pomadas para unha encravada</p>
        </div>
    </div>
    <!-- Cinema articles or others -->
    <div class="col-span-4">
        <h1 class="font-serif text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b">Cinema</h1>
        <div class="grid grid-cols-2 gap-6">
            <div class="flex flex-col gap-6">
                <!-- Small thumbnail -->
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-sm">“Não, Não Olhe!”: Pois olhe, e ouça muito bem</h3>
                    <span class="text-xs font-mono">Ygor Monteiro</span>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-sm">“O Homem do Norte” (2022): O corvo, o urso e o lobo</h3>
                    <span class="text-xs font-mono">Ygor Monteiro</span>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-sm">“Noite de Reis” (2020): Sherazade marfinense</h3>
                    <span class="text-xs font-mono">Ygor Monteiro</span>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-sm">“Batman” (2022): O que é ser herói? O que é ser um filme de super-herói?</h3>
                    <span class="text-xs font-mono">Ygor Monteiro</span>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-sm">“Mulheres à beira de um ataque de nervos” (1988): Um melodrama segundo Pedro Almodóvar</h3>
                    <span class="text-xs font-mono">Ygor Monteiro</span>
                </div>
            </div>
            <div class="flex flex-col gap-6">
                <!-- Small thumbnail -->
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-sm">“A vida depois”: Amadurecimentos, traumas e espontaneidade</h3>
                    <span class="text-xs font-mono">Ygor Monteiro</span>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-sm">“Benedetta”: Iconografias e narrativas de subversão ao catolicismo dogmático</h3>
                    <span class="text-xs font-mono">Ygor Monteiro</span>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-sm">“Cabeça de nêgo”: vozes e corpos em movimento</h3>
                    <span class="text-xs font-mono">Ygor Monteiro</span>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-sm">Amor, sublime amor, um clássico e o tempo</h3>
                    <span class="text-xs font-mono">Ygor Monteiro</span>
                </div>
                <div class="flex flex-col gap-2">
                    <h3 class="font-bold text-sm">Clube da luta e as “realidades” que nos atravessam</h3>
                    <span class="text-xs font-mono">Ygor Monteiro</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Support us -->
    <div class="col-span-4">
        <div class="max-h-fit flex flex-col gap-4 border p-4 outline outline-offset-4 outline-1 outline-[#e5e7eb]">
            <h2 class="font-serif text-4xl font-black">Apoie esse projeto e participe de nossos grupos</h2>
            <p class="text-sm text-foreground/90">O <b class="font-bold">JUDAS, As botas de</b> e a <b class="font-bold">Forca de Judas</b> são organizações independentes, multidisciplinares e livres. Acreditamos que conteúdo de qualidade, compreensível, escrito com base em dados factuais e por autores que entendem do assunto, devem estar disponíveis para todos que os procurarem. Para continuar existindo e expandindo o projeto, precisamos de recursos. Assim como você, somos <i>estudantes, trabalhadores e pais</i></p>
            <button class="px-4 py-2 bg-amber-500 text-white max-w-fit max-h-fit rounded-3xl text-sm flex flex-row gap-2 justify-center content-center items-center">
                <span>Apoie-nos</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="miter" stroke-linejoin="miter" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </button>
        </div>
    </div>
</section>
<!-- Magazine publications slider -->
<section class="px-8 mb-12">
    <h1 class="font-serif text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b">Forca de Judas</h1>
    <!-- Swiper library slider -->
    <div class="swiper magazineSwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <!-- Featured magazine external link -->
                <div class="flex flex-col gap-3">
                    <div class="relative">
                        <img src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/torto-arado.webp" alt="">
                        <span class="absolute bottom-1 right-2 text-white/80 text-xs font-mono">Fernando Frazão/Agência Brasil</span>
                    </div>
                    <h2 class="font-bold text-xl">Torto Arado: o que vem da terra é meu, mas a terra não é minha</h2>
                    <div class="flex flex-row gap-6">
                        <span class="font-mono text-xs">Mirena Guimarães</span>
                        <span class="font-mono text-xs">vol. 3</span>
                        <span class="font-mono text-xs">n. 1</span>
                        <span class="font-mono text-xs">2022</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex flex-col gap-3">
                    <div class="relative">
                        <img src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/ditadura.jpg" alt="">
                        <span class="absolute bottom-1 right-2 text-white/80 text-xs font-mono">Fernando Frazão/Agência Brasil</span>
                    </div>
                    <h2 class="font-bold text-xl">Sobre missivas de antes e de hoje</h2>
                    <div class="flex flex-row gap-6">
                        <span class="font-mono text-xs">Jorge Rocha</span>
                        <span class="font-mono text-xs">vol. 3</span>
                        <span class="font-mono text-xs">n. 1</span>
                        <span class="font-mono text-xs">2022</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex flex-col gap-3">
                    <div class="relative">
                        <img src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/fome.webp" alt="">
                        <span class="absolute bottom-1 right-2 text-white/80 text-xs font-mono">Fernando Frazão/Agência Brasil</span>
                    </div>
                    <h2 class="font-bold text-xl">Crise política, econômica e moral: o Brasil de volta ao mapa da fome</h2>
                    <div class="flex flex-row gap-6">
                        <span class="font-mono text-xs">Heliene Rosa</span>
                        <span class="font-mono text-xs">vol. 3</span>
                        <span class="font-mono text-xs">n. 1</span>
                        <span class="font-mono text-xs">2022</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex flex-col gap-3">
                    <div class="relative">
                        <img src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/torto-arado.webp" alt="">
                        <span class="absolute bottom-1 right-2 text-white/80 text-xs font-mono">Fernando Frazão/Agência Brasil</span>
                    </div>
                    <h2 class="font-bold text-xl">Torto Arado: o que vem da terra é meu, mas a terra não é minha</h2>
                    <div class="flex flex-row gap-6">
                        <span class="font-mono text-xs">Mirena Guimarães</span>
                        <span class="font-mono text-xs">vol. 3</span>
                        <span class="font-mono text-xs">n. 1</span>
                        <span class="font-mono text-xs">2022</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex flex-col gap-3">
                    <div class="relative">
                        <img src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/torto-arado.webp" alt="">
                        <span class="absolute bottom-1 right-2 text-white/80 text-xs font-mono">Fernando Frazão/Agência Brasil</span>
                    </div>
                    <h2 class="font-bold text-xl">Torto Arado: o que vem da terra é meu, mas a terra não é minha</h2>
                    <div class="flex flex-row gap-6">
                        <span class="font-mono text-xs">Mirena Guimarães</span>
                        <span class="font-mono text-xs">vol. 3</span>
                        <span class="font-mono text-xs">n. 1</span>
                        <span class="font-mono text-xs">2022</span>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="flex flex-col gap-3">
                    <div class="relative">
                        <img src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/torto-arado.webp" alt="">
                        <span class="absolute bottom-1 right-2 text-white/80 text-xs font-mono">Fernando Frazão/Agência Brasil</span>
                    </div>
                    <h2 class="font-bold text-xl">Torto Arado: o que vem da terra é meu, mas a terra não é minha</h2>
                    <div class="flex flex-row gap-6">
                        <span class="font-mono text-xs">Mirena Guimarães</span>
                        <span class="font-mono text-xs">vol. 3</span>
                        <span class="font-mono text-xs">n. 1</span>
                        <span class="font-mono text-xs">2022</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var swiper = new Swiper(".magazineSwiper", {
            slidesPerView: 3,
            spaceBetween: 30,
        });
    </script>
</section>
<!-- Bulk of posts -->
<section class="px-8 mb-12">
    <h1 class="font-serif text-4xl font-black mb-6 after:block after:h-[6px] after:mt-2 after:w-full after:border-t after:border-b">Nossos artigos</h1>
    <div class="grid grid-cols-2 gap-12">
        <div class="flex flex-col gap-12">
            <!-- Individual post -->
            <div class="grid grid-cols-2 gap-6">
                <div class="flex flex-col gap-6">
                    <h2 class="font-bold text-xl">Pela vida das mulheres</h2>
                    <p class="line-clamp-3 text-foreground/90 text-sm">A Igreja condenava e eliminava as mulheres por seus saberes: não devia ser fácil sobreviver em um mundo que matava as curandeiras, sob acusação de bruxaria e heresia e ainda lhes confiscava os bens. Fico imaginando as riquezas subtraídas às vítimas: receita de chá para espinhela caída, emplasto para queimadura (que triste ironia), cataplasma para inflamação na garganta, xaropes, vermífugos e pomadas para unha encravada</p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="relative">
                        <img src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/mulheres.webp" alt="">
                        <span class="absolute bottom-1 right-2 text-white/80 text-xs font-mono">Fernando Frazão/Agência Brasil</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-12">
            <div class="grid grid-cols-2 gap-6">
                <div class="flex flex-col gap-6">
                    <h2 class="font-bold text-xl">Pela vida das mulheres</h2>
                    <p class="line-clamp-3 text-foreground/90 text-sm">A Igreja condenava e eliminava as mulheres por seus saberes: não devia ser fácil sobreviver em um mundo que matava as curandeiras, sob acusação de bruxaria e heresia e ainda lhes confiscava os bens. Fico imaginando as riquezas subtraídas às vítimas: receita de chá para espinhela caída, emplasto para queimadura (que triste ironia), cataplasma para inflamação na garganta, xaropes, vermífugos e pomadas para unha encravada</p>
                </div>
                <div class="flex flex-col gap-6">
                    <div class="relative">
                        <img src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/mulheres.webp" alt="">
                        <span class="absolute bottom-1 right-2 text-white/80 text-xs font-mono">Fernando Frazão/Agência Brasil</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();

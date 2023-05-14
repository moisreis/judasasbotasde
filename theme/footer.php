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
<footer class="flex flex-col px-8 before:block before:h-[8px] before:mt-2 before:w-full before:border-t-2 before:border-b">
    <!-- Footer Grid -->
    <div class="grid grid-cols-4 gap-12 py-6">
        <!-- Logo -->
        <div class="flex flex-col justify-center content-center items-center gap-3">
            <img class="w-20 h-20" src="http://localhost/judasasbotasde/wp-content/uploads/2023/04/logo.svg" alt="">
        </div>
        <!-- Menu one -->
        <div class="flex flex-col justify-start content-center gap-3">
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">Início</button>
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">Sobre</button>
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">Contato</button>
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">Apoie-nos</button>
        </div>
        <!-- Menu two -->
        <div class="flex flex-col justify-start content-center gap-3">
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">A <b class="font-black">Forca de Judas</b></button>
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">Junte-se a nós</button>
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">Linha <b class="font-black">editorial</b></button>
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">Nossos <b class="font-black">editoriais</b></button>
        </div>
        <!-- Menu three -->
        <div class="flex flex-col justify-start content-center gap-3">
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">Opinião</button>
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">Cinema</button>
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">Cultura <b class="font-black">POP</b></button>
            <button class="uppercase hover:opacity-80 transition-opacity text-xs font-medium tracking-widest text-left">Acadêmico</button>
        </div>
    </div>
    <!-- Footer Links -->
    <div class="flex flex-row justify-between content-center py-2 border-t">
        <span class="text-xs uppercase text-foreground/80">© JUDAS, As botas de 2023</span>
        <span class="text-xs uppercase text-foreground/80">Made by <b class="font-black">Moisés Reis</b></span>
        <span class="text-xs uppercase text-foreground/80">Termos de uso</span>
        <span class="text-xs uppercase text-foreground/80">Política de privacidade</span>
        <span class="text-xs uppercase text-foreground/80">Contato</span>
        <span class="text-xs uppercase text-foreground/80">Sitemap</span>
        <span class="text-xs uppercase text-foreground/80">Acessibilidade</span>
    </div>
    <!-- Scroll to the top -->
    <button class="fixed bottom-4 right-4 z-[999] border p-4 bg-neutral-800 border-neutral-700 rounded-full text-white" id="scrolltotop">
        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.1464 6.85355C11.3417 7.04882 11.6583 7.04882 11.8536 6.85355C12.0488 6.65829 12.0488 6.34171 11.8536 6.14645L7.85355 2.14645C7.65829 1.95118 7.34171 1.95118 7.14645 2.14645L3.14645 6.14645C2.95118 6.34171 2.95118 6.65829 3.14645 6.85355C3.34171 7.04882 3.65829 7.04882 3.85355 6.85355L7.5 3.20711L11.1464 6.85355ZM11.1464 12.8536C11.3417 13.0488 11.6583 13.0488 11.8536 12.8536C12.0488 12.6583 12.0488 12.3417 11.8536 12.1464L7.85355 8.14645C7.65829 7.95118 7.34171 7.95118 7.14645 8.14645L3.14645 12.1464C2.95118 12.3417 2.95118 12.6583 3.14645 12.8536C3.34171 13.0488 3.65829 13.0488 3.85355 12.8536L7.5 9.20711L11.1464 12.8536Z" fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
        </svg>
    </button>
</footer>
</body>

</html>
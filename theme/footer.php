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
<footer class="flex flex-col px-8 before:block before:h-[6px] before:mt-2 before:w-full before:border-t before:border-b">
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
</footer>
</body>

</html>
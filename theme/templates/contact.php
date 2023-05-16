<?php

/**
 * Template Name: Contact
 *
 * This is the 'Contact Us' template
 * It is used to display the page with a handful of contact links.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JUDAS,_As_botas_de
 */

get_header();
?>

<main class="p-8 xl:p-12">
    <!-- Contact links -->
    <section class="flex flex-col mb-12">
        <!-- Heading for contact links -->
        <header>
            <h1 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b after:border-t-foreground">Fale com o Judas</h1>
        </header>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- General contact -->
            <p class="text-lg text-foreground/90"><span class="font-bold">Você é um leitor?</span> Ficamos muito felizes que queria falar conosco, porém, todos nós somos trabalhadores e por isso, é bem possível que leve um tempinho para respondermos, viu? Mas vamos responder sim! Só enviar um e-mail para: <a class="underline text-blue-600" href="mailto:contato@judasasbotasde.com.br">contato@judasasbotasde.com.br</a></p>
            <!-- Sources -->
            <p class="text-lg text-foreground/90"><span class="font-bold">Seja a nossa fonte!</span> Muito cuidado! Se tem algo que precisa nos dizer, use este canal e entraremos em contato através de um canal seguro, certo? Envie seu telefone e nos diga se está seguro ou não, em <a class="underline text-blue-600" href="mailto:fonte@judasasbotasde.com.br">fonte@judasasbotasde.com.br</a></p>
            <!-- Themes and topics -->
            <p class="text-lg text-foreground/90"><span class="font-bold">Sugira uma pauta!</span> Se tem algo acontecendo e quer que tratemos deste assunto, entre em contato com o tema e fontes sobre o acontecimento, certo? Por <a class="underline text-blue-600" href="mailto:pautas@judasasbotasde.com.br">pautas@judasasbotasde.com.br</a></p>
            <!-- Submissions -->
            <p class="text-lg text-foreground/90"><span class="font-bold">Envie um artigo!</span> Nós publicaremos os artigos de nossos leitores em todas as chances que tivermos! Se tiver uma publicação original que queria enviar, o e-mail é <a class="underline text-blue-600" href="mailto:envie@judasasbotasde.com.br">envie@judasasbotasde.com.br</a></p>
        </div>
    </section>
    <!-- Support us -->
    <section class="flex flex-col">
        <!-- Heading for support us -->
        <h1 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">Somos trabalhadores, assim como você</h1>
        <p class="text-lg text-foreground/90">Este projeto <span class="font-bold">NÃO</span> é sustentado por qualquer partido, grupo ou empresa. Não temos nenhum financiamento que não seja as contribuições de nossos colaboradores. Se você gostou do que leu e deseja colaborar na construção de uma plataforma de divulgação de conteúdo rico, confiável e construtivo, por favor, pense em se tornar um membro do nosso time de apoiadores, ajude-nos e contribua com o crescimento do JUDAS, As botas de através deste <a class="underline text-blue-600" href="https://apoia.se/judasasbotasde">link</a></p>
    </section>
</main>

<?php
get_footer();

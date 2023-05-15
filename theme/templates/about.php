<?php

/**
 * Template Name: About
 *
 * This is the 'About Us' template
 * It is used to display the page with a list of contributors
 * and some content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JUDAS,_As_botas_de
 */

get_header();
?>
<main class="p-8 xl:p-12">
    <!-- About content -->
    <section class="flex flex-col mb-12">
        <!-- Heading for About page -->
        <header>
            <h1 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">Sobre nós</h1>
        </header>
        <!-- General info -->
        <p class="text-lg text-foreground/90">Fundado por Daniel Braz e Moisés Reis em fevereiro de 2020, o <b>JUDAS, As botas de</b> é um espaço independente e multidisciplinar formado por professores, estudantes e ativistas do Brasil e do mundo, cujo objetivo é a divulgação de informações, opiniões e conteúdo de relevância histórica, cultural e social. Somos voluntários e atuamos como uma associação sem fins lucrativos, promovendo nosso conteúdo através de artigos de opinião e científicos, entrevistas e colunas publicadas em nosso website e na Forca de Judas, nossa revista de divulgação científica bimestral gratuita</p>
    </section>
    <!-- Contributors grid -->
    <section class="flex flex-col">
        <!-- Heading for contributors -->
        <h1 class="capitalize font-serif text-4xl font-black mb-6 after:block after:h-[8px] after:mt-2 after:w-full after:border-t-2 after:border-b">Nossos colaboradores</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-12 mb-12">
            <?php
            // Get all users with the role of 'subscriber'
            $contributors = get_users(array('role' => 'subscriber'));
            ?>
            <?php if (!empty($contributors)) : ?>
                <?php foreach ($contributors as $user) : ?>
                    <!-- Individual contributor div -->
                    <div class="flex flex-col gap-3">
                        <?php
                        // Get the author image for the current user
                        $author_image = get_the_author_meta('author_image', $user->ID);
                        ?>
                        <?php if (!empty($author_image)) : ?>
                            <!-- Display the author image if available -->
                            <div>
                                <img class="min-w-[4rem] min-h-[4rem] max-w-[4rem] max-h-[4rem] object-cover rounded-full saturate-0" src="<?php echo esc_url($author_image); ?>" alt="<?php echo $user->display_name; ?>" class="author-image">
                            </div>
                        <?php endif; ?>
                        <div>
                            <ul class="flex flex-col gap-0">
                                <?php
                                // Get the author's position and location
                                $position = get_the_author_meta('position', $user->ID);
                                $location = get_the_author_meta('location', $user->ID);
                                ?>
                                <span class="font-black text-lg"><?php echo $user->display_name; ?></span>
                                <span class="text-foreground/80 text-sm"><?php echo $position; ?></span>
                                <span class="text-foreground/80 text-sm"><?php echo $location; ?></span>
                                <?php
                                // Get the author's location and e-mail
                                $email = get_the_author_meta('email', $user->ID);
                                ?>
                                <!-- Display the author's email if available -->
                                <li class="flex flex-col gap-1 justify-start content-center mt-1">
                                    <a href="mailto:<?php echo $email; ?>">
                                        <span class="text-blue-600/80 text-sm underline"><?php echo $email; ?></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php
get_footer();

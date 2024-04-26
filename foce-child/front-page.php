<?php

get_header();
?>
    <main id="primary" class="site-main">

    <?php get_template_part( 'templates/home','banner' ); ?>
        
        <section id="story" class="story fade-in">
            <h2 class="fadeh2 title">L'histoire</h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>

            <article id="characters">
                <?php get_template_part( 'templates/home','character' ); ?>
            </article>
            <article id="place">
                <div>
                    <h3 class="title">Le Lieu</h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
                
                <div class="cloud">
                    <img class="bigcloud" src="<?php echo get_stylesheet_directory_uri().'/assets/images/big_cloud.png'?>" alt="">
                </div>
                <div class="cloud">
                    <img class="littlecloud" src="<?php echo get_stylesheet_directory_uri().'/assets/images/little_cloud.png'?>" alt="">
                </div>

            </article>
        </section>


        <section id="studio" class="fade-in">
            <h2 class="fadeh2 title">Studio Koukaki</h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

          
        <?php get_template_part( 'templates/home','festival' ); ?>
    </main><!-- #main -->

<?php
get_footer();

<?php get_header();?>

<!-- Début jumbotron -->
<section class="hero is-bold">

    <div class="hero-body">
        <div class="container has-text-left">
            <div id="particles-js"></div>
            <img class="hero-img" src="wp-content/themes/ab-portfolio/img/img_header.png" alt="image header">
            <h1 class="title">
                Alexandre Bouttier
            </h1>
            <h2 class="subtitle">
                <span class="has-text-info has-text-weight-bold">Développeur</span> front-end
            </h2>
            <div class="hero-btn">
                <a href="portfolio.html" class="button is-medium is-info">Voir portfolio</a>
                <a href="contact.html" class="button is-medium is-info is-outlined">Contact</a>
            </div>
        </div>
    </div>
</section>
<!-- // Fin jumbotron -->

<div class="container">
    <!-- Début intro  -->
    <section class="intro">
        <h3>Comment puis-je vous aider?</h3>
        <?php query_posts('pagename=accueil');
         while (have_posts()) : the_post(); ?>
             <?php the_content(); ?>
            <?php endwhile; ?>
    </section>
    <!-- // Fin intro  -->

    <!-- Début services -->
    <section class="services">
        <div class="columns">
        <?php query_posts('p=26');
         while (have_posts()) : the_post(); ?>
            <div class="column is-2 col-img">
                <img class="has-text-left" <?php the_post_thumbnail();?></>
            </div>
            <div class="column is-4">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </div>
            <?php endwhile; ?>

 <?php query_posts('p=28');
         while (have_posts()) : the_post(); ?>
            <div class="column is-2 col-img">
                <img class="has-text-left" <?php the_post_thumbnail();?></>
            </div>
            <div class="column is-4">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </div>
        </div>
        <?php endwhile; ?>

        <!--// fermeture columns  -->
        <?php query_posts('p=31');
         while (have_posts()) : the_post(); ?>
        <div class="columns">
            <div class="column is-2 col-img">
                <img class="has-text-left" <?php the_post_thumbnail();?></>
            </div>
            <div class="column is-4">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </div>
            <?php endwhile; ?>

             <?php query_posts('p=33');
         while (have_posts()) : the_post(); ?>
            <div class="column is-2 col-img">
                <img class="has-text-left" <?php the_post_thumbnail();?></>
            </div>
            <div class="column is-4">
                <h4><?php the_title(); ?></h4>
                <p><?php the_content(); ?></p>
            </div>
            <?php endwhile; ?>
        </div>
        <!--// fermeture columns  -->
</div>
</section>
<!-- // Fin services  -->
</body>

</html>
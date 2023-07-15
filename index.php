<?php get_header(); ?>

<main class="main">

    <div class="container">

        <div class="main__title">
            <?php the_field('main__title'); ?>
        </div>

        <div class="main__text">
            <?php the_field('main__text'); ?>
        </div>

        <img class="main__img" src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="...">

        <section class="project">

            <div class="project__title">
                <?php the_field('project__title'); ?>
            </div>

            <div class="project__item">

                <?php
                    $featured_posts = get_field('project__item');
                        if( $featured_posts ): ?>

                                <?php foreach( $featured_posts as $post ):

                                setup_postdata($post); ?>

                                    <div class="project__name">
                                           <?php the_field('project__name'); ?>
                                    </div>

                                    <div class="project__size">
                                        <?php the_field('project__size'); ?>
                                    </div>

                                    <div class="project__area">
                                        <?php the_field('project__area'); ?>
                                    </div>

                                    <div class="project__price">
                                        <?php the_field('project__price'); ?>
                                    </div>

                                    <div class="project__images">
                                        <img class="project__images-item" src="<?php the_field('project__images-item1'); ?>" alt="...">
                                        <img class="project__images-item" src="<?php the_field('project__images-item2'); ?>" alt="...">
                                    </div>

                                <?php endforeach; ?>

                <?php
                                   // Reset the global post object so that the rest of the page works correctly.
                wp_reset_postdata(); ?>
                <?php endif; ?>

            </div>

        </section>

    </div>

    <section class="download">

        <img class="download__img" src="<?php bloginfo( 'template_url' ); ?>/assets/img/img-download.png" alt="...">

        <a href="<?php the_field('download__img'); ?>" download>СКАЧАТЬ ВЕСЬ КАТАЛОГ ДОМОВ</a>

    </section>

    <section class="gallery">

        <div class="container">

            <div class="gallery__title">
                <?php the_field('gallery__title'); ?>
            </div>

            <div class="gallery__text">
                <?php the_field('gallery__text'); ?>
            </div>

            <div class="gallery__images">
                <?php the_field('gallery__images'); ?>
            </div>

        </div>
    </section>

    <img class="main__img" src="<?php bloginfo( 'template_url' ); ?>/assets/img/main-img.png" alt="...">

</main>

<?php get_footer(); ?>




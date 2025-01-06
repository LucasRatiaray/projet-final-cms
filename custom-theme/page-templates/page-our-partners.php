<?php
/*
 * Template Name: Our Partners Page
 * Description: Template personnalisé pour la page Our Partners
 */
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        // Récupération de l’image à la une (si besoin)
        $featured_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );

        $main_title             = get_field('main_title');
        $our_partners_image_1   = get_field('our_partners_image_1');
        $our_partners_image_2   = get_field('our_partners_image_2');
        $our_partners_image_3   = get_field('our_partners_image_3');
        $our_partners_image_4   = get_field('our_partners_image_4');
        $our_partners_image_5   = get_field('our_partners_image_5');
        $our_partners_image_6   = get_field('our_partners_image_6');
        ?>

        <!-- SECTION 1 : Titre principal -->
        <section class="w-full px-4 md:px-8 py-12 md:py-16">
            <div class="max-w-5xl mx-auto">
                <?php if ( $main_title ) : ?>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900">
                        <?php echo esc_html( $main_title ); ?>
                    </h1>
                <?php else : ?>
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900">
                        <?php the_title()?>
                    </h1>
                <?php endif; ?>
            </div>
        </section>

        <!-- SECTION 2 : Logos -->
        <section class="w-full mb-44">
            <div class="max-w-6xl mx-auto px-4 md:px-8">
                <div class="flex flex-wrap items-center justify-center gap-6">
                    <!-- Partner 1 -->
                    <?php if ( $our_partners_image_1 ) : ?>
                        <img
                            src="<?php echo esc_url( $our_partners_image_1['url'] ); ?>"
                            alt="<?php echo esc_attr( $our_partners_image_1['alt'] ); ?>"
                            class="h-12 w-auto object-contain"
                        />
                    <?php endif; ?>

                    <!-- Partner 2 -->
                    <?php if ( $our_partners_image_2 ) : ?>
                        <img
                            src="<?php echo esc_url( $our_partners_image_2['url'] ); ?>"
                            alt="<?php echo esc_attr( $our_partners_image_2['alt'] ); ?>"
                            class="h-12 w-auto object-contain"
                        />
                    <?php endif; ?>

                    <!-- Partner 3 -->
                    <?php if ( $our_partners_image_3 ) : ?>
                        <img
                            src="<?php echo esc_url( $our_partners_image_3['url'] ); ?>"
                            alt="<?php echo esc_attr( $our_partners_image_3['alt'] ); ?>"
                            class="h-12 w-auto object-contain"
                        />
                    <?php endif; ?>

                    <!-- Partner 4 -->
                    <?php if ( $our_partners_image_4 ) : ?>
                        <img
                            src="<?php echo esc_url( $our_partners_image_4['url'] ); ?>"
                            alt="<?php echo esc_attr( $our_partners_image_4['alt'] ); ?>"
                            class="h-12 w-auto object-contain"
                        />
                    <?php endif; ?>

                    <!-- Partner 5 -->
                    <?php if ( $our_partners_image_5 ) : ?>
                        <img
                            src="<?php echo esc_url( $our_partners_image_5['url'] ); ?>"
                            alt="<?php echo esc_attr( $our_partners_image_5['alt'] ); ?>"
                            class="h-12 w-auto object-contain"
                        />
                    <?php endif; ?>

                    <!-- Partner 6 -->
                    <?php if ( $our_partners_image_6 ) : ?>
                        <img
                            src="<?php echo esc_url( $our_partners_image_6['url'] ); ?>"
                            alt="<?php echo esc_attr( $our_partners_image_6['alt'] ); ?>"
                            class="h-12 w-auto object-contain"
                        />
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <?php
    endwhile;
endif;

get_footer();

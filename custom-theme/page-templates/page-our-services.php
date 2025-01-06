<?php
/*
 * Template Name: Our Services Page
 * Description: Template personnalisé pour la page Our Services
 */
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        // Récupère l’image à la une
        $featured_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        
        $main_title             = get_field('main_title');
        $our_services_image_1   = get_field('our_services_image_1');
        $our_services_image_2   = get_field('our_services_image_2');
        $our_services_image_3   = get_field('our_services_image_3');
        $our_services_text      = get_field('our_services_text');
        $content_title          = get_field('content_title');
        $content_text           = get_field('content_text');
        $content_image          = get_field('content_image');
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

        <!-- SECTION 2 : Trois images + texte “Private Parties” -->
        <section class="w-full mb-12 md:mb-16">
            <div class="max-w-5xl mx-auto px-4 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <!-- Image 1 -->
                    <?php if ( $our_services_image_1 ) : ?>
                        <div class="col-span-1">
                            <img 
                                src="<?php echo esc_url( $our_services_image_1['url'] ); ?>" 
                                alt="<?php echo esc_attr( $our_services_image_1['alt'] ); ?>" 
                                class="w-full h-auto object-cover"
                            />
                        </div>
                    <?php endif; ?>

                    <!-- Image 2 -->
                    <?php if ( $our_services_image_2 ) : ?>
                        <div class="col-span-1">
                            <img 
                                src="<?php echo esc_url( $our_services_image_2['url'] ); ?>" 
                                alt="<?php echo esc_attr( $our_services_image_2['alt'] ); ?>" 
                                class="w-full h-auto object-cover"
                            />
                        </div>
                    <?php endif; ?>

                    <!-- Texte -->
                    <?php if ( $our_services_image_2 ) : ?>
                        <div class="col-span-1 flex items-center justify-center text-black">
                            <div class="mt-4 text-center">
                                <p class="underline">
                                    <?php echo esc_html( $our_services_text ); ?>
                                </p>
                            </div>
                        </div>
                    <?php endif; ?>


                    <!-- Image 3 -->
                    <?php if ( $our_services_image_3 ) : ?>
                        <div class="col-span-1">
                            <img 
                                src="<?php echo esc_url( $our_services_image_3['url'] ); ?>" 
                                alt="<?php echo esc_attr( $our_services_image_3['alt'] ); ?>" 
                                class="w-full h-auto object-cover"
                            />
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- SECTION 3 : Bloc “Corp. Parties” + paragraphe -->
        <section class="w-full mb-12 md:mb-16">
            <div class="max-w-5xl mx-auto px-4 md:px-8">
                <?php if ( $content_title ) : ?>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                        <?php echo esc_html( $content_title ); ?>
                    </h2>
                <?php else : ?>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                        Corp. Parties
                    </h2>
                <?php endif; ?>

                <?php if ( $content_text ) : ?>
                    <p class="text-gray-700 mb-8"><?php echo esc_html( $content_text ); ?></p>
                <?php else : ?>
                    <p class="text-gray-700 mb-8">
                        Specializing in the creation of exceptional events for private
                        and corporate clients, we design, plan and manage every project
                        from conception to execution.
                    </p>
                <?php endif; ?>
            </div>
        </section>

        <!-- SECTION 4 : Grande image -->
        <?php if ( $content_image ) : ?>
            <section class="w-full mb-12 md:mb-16">
                <div class="max-w-6xl mx-auto">
                    <img 
                        src="<?php echo esc_url( $content_image['url'] ); ?>" 
                        alt="<?php echo esc_attr( $content_image['alt'] ); ?>" 
                        class="w-full h-auto object-cover"
                    />
                </div>
            </section>
        <?php endif; ?>

        <?php
    endwhile;
endif;

get_footer();

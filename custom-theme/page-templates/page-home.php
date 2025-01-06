<?php
/*
 * Template Name: Home Page
 * Description: Template personnalisé pour la page Home
 */
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        // Récupération de l’image à la une
        $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');

        $main_title             = get_field('main_title');
        $about_us_content       = get_field('about_us_content');
        $about_us_image         = get_field('about_us_image');
        $who_are_we             = get_field('who_are_we');
        $our_vision             = get_field('our_vision');
        $our_mission            = get_field('our_mission');
        $our_services_image_1   = get_field('our_services_image_1');
        $our_services_image_2   = get_field('our_services_image_2');
        $our_services_image_3   = get_field('our_services_image_3');
        $our_services_text      = get_field('our_services_text');
        $our_partners_image_1   = get_field('our_partners_image_1');
        $our_partners_image_2   = get_field('our_partners_image_2');
        $our_partners_image_3   = get_field('our_partners_image_3');
        $our_partners_image_4   = get_field('our_partners_image_4');
        $our_partners_image_5   = get_field('our_partners_image_5');
        $our_partners_image_6   = get_field('our_partners_image_6');
        ?>

        <!-- SECTION 1 : Titre principal -->
        <section class="w-full px-4 md:px-8 py-12 md:py-20">
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

        <!-- SECTION 2 : Image + "About Us" -->
        <section class="w-full mb-12 md:mb-20">
            <div class="max-w-5xl mx-auto px-4 md:px-8">
                <!-- Grande image (type concert) -->
                <?php if ( $about_us_image ) : ?>
                    <div class="w-full mb-8">
                        <img 
                            src="<?php echo esc_url( $featured_image ); ?>"
                            class="w-full h-auto object-cover"
                        />
                    </div>
                <?php endif; ?>

                <!-- Texte "About Us" + paragraphe -->
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">About Us</h2>
                <?php if ( $about_us_content ) : ?>
                    <p class="text-gray-700 mb-8"><?php echo esc_html( $about_us_content ); ?></p>
                <?php endif; ?>
            </div>
        </section>

        <!-- SECTION 3 : Image + "Who are we? / Our vision / Our mission" -->
        <section class="w-full mb-12 md:mb-20">
            <div class="max-w-5xl mx-auto px-4 md:px-8 grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                <?php if ( $featured_image ) : ?>
                    <div>
                        <img
                            src="<?php echo esc_url( $about_us_image['url'] ); ?>"
                            alt="Featured Image"
                            class="w-full h-auto object-cover"
                        />
                    </div>
                <?php endif; ?>

                <div>
                    <!-- Who are we? -->
                    <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-2">
                        Who are we?
                    </h3>
                    <?php if ( $who_are_we ) : ?>
                        <p class="text-gray-700 mb-6"><?php echo esc_html( $who_are_we ); ?></p>
                    <?php else : ?>
                        <p class="text-gray-700 mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        </p>
                    <?php endif; ?>

                    <!-- Our vision -->
                    <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-2">
                        Our vision
                    </h3>
                    <?php if ( $our_vision ) : ?>
                        <p class="text-gray-700 mb-6"><?php echo esc_html( $our_vision ); ?></p>
                    <?php else : ?>
                        <p class="text-gray-700 mb-6">
                            Suspendisse commodo magna orci.
                        </p>
                    <?php endif; ?>

                    <!-- Our mission -->
                    <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-2">
                        Our mission
                    </h3>
                    <?php if ( $our_mission ) : ?>
                        <p class="text-gray-700 mb-6"><?php echo esc_html( $our_mission ); ?></p>
                    <?php else : ?>
                        <p class="text-gray-700 mb-6">
                            Donec quis lorem ut magna tincidunt egestas.
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <!-- SECTION 4 : Our Services -->
        <section class="w-full mb-12 md:mb-20">
            <div class="max-w-5xl mx-auto px-4 md:px-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8">
                    Our Services
                </h2>
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

        <!-- SECTION 5 : Our Partners -->
        <section class="w-full mb-12 md:mb-20">
            <div class="max-w-5xl mx-auto px-4 md:px-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8">
                    Our Partners
                </h2>
                <div class="grid grid-cols-2 md:grid-cols-6 gap-4 items-center justify-items-center">
                    <?php if ( $our_partners_image_1 ) : ?>
                        <img 
                            src="<?php echo esc_url($our_partners_image_1['url']); ?>" 
                            alt="" 
                            class="w-auto h-8 object-contain"
                        />
                    <?php endif; ?>

                    <?php if ( $our_partners_image_2 ) : ?>
                        <img 
                            src="<?php echo esc_url($our_partners_image_2['url']); ?>" 
                            alt="" 
                            class="w-auto h-8 object-contain"
                        />
                    <?php endif; ?>

                    <?php if ( $our_partners_image_3 ) : ?>
                        <img 
                            src="<?php echo esc_url($our_partners_image_3['url']); ?>" 
                            alt="" 
                            class="w-auto h-8 object-contain"
                        />
                    <?php endif; ?>

                    <?php if ( $our_partners_image_4 ) : ?>
                        <img 
                            src="<?php echo esc_url($our_partners_image_4['url']); ?>" 
                            alt="" 
                            class="w-auto h-8 object-contain"
                        />
                    <?php endif; ?>

                    <?php if ( $our_partners_image_5 ) : ?>
                        <img 
                            src="<?php echo esc_url($our_partners_image_5['url']); ?>" 
                            alt="" 
                            class="w-auto h-8 object-contain"
                        />
                    <?php endif; ?>

                    <?php if ( $our_partners_image_6 ) : ?>
                        <img 
                            src="<?php echo esc_url($our_partners_image_6['url']); ?>" 
                            alt="" 
                            class="w-auto h-8 object-contain"
                        />
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <?php
    endwhile;
endif;

get_footer();

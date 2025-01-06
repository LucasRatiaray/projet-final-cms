<?php
/*
 * Template Name: About Us Page
 * Description: Template personnalisé pour la page About Us
 */
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        // Récupération de l’image à la une
        $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        
        $main_title       = get_field('main_title');
        $content_title    = get_field('content_title');
        $content          = get_field('content');
        $content_image    = get_field('content_image');
        $who_are_we       = get_field('who_are_we');
        $our_vision       = get_field('our_vision');
        $our_mission      = get_field('our_mission');
        $our_team_title   = get_field('our_team_title');
        $team_1_image     = get_field('team_1_image');
        $team_1_name      = get_field('team_1_name');
        $team_1_info      = get_field('team_1_info');
        $team_1_info_2    = get_field('team_1_info_2');
        $team_2_image     = get_field('team_2_image');
        $team_2_name      = get_field('team_2_name');
        $team_2_info      = get_field('team_2_info');
        $team_2_info_2    = get_field('team_2_info_2');
        $team_3_image     = get_field('team_3_image');
        $team_3_name      = get_field('team_3_name');
        $team_3_info      = get_field('team_3_info');
        $team_3_info_2    = get_field('team_3_info_2');
        $team_4_image     = get_field('team_4_image');
        $team_4_name      = get_field('team_4_name');
        $team_4_info      = get_field('team_4_info');
        $team_4_info_2    = get_field('team_4_info_2');
        ?>

        <!-- SECTION 1 : Titre principal "About us." -->
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

        <!-- SECTION 2 : Image principale + Titre de contenu + Texte -->
        <section class="w-full mb-12 md:mb-16">
            <div class="max-w-5xl mx-auto px-4 md:px-8">
                <?php if ( $featured_image ) : ?>
                    <div class="w-full mb-8">
                        <img 
                            src="<?php echo esc_url( $featured_image ); ?>" 
                            alt="Featured Image" 
                            class="w-full h-auto object-cover"
                        />
                    </div>
                <?php endif; ?>

                <?php if ( $content_title ) : ?>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                        <?php echo esc_html( $content_title ); ?>
                    </h2>
                <?php else : ?>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                        Sky’s the limit
                    </h2>
                <?php endif; ?>

                <?php if ( $content ) : ?>
                    <p class="text-gray-700 mb-8"><?php echo esc_html( $content ); ?></p>
                <?php else : ?>
                    <p class="text-gray-700 mb-8">
                        Spécializing in the creation of exceptional events for private
                        and corporate clients, we design, plan and manage every project
                        from conception to execution.
                    </p>
                <?php endif; ?>
            </div>
        </section>

        <!-- SECTION 3 : Image + 3 blocs "Who are we?", "Our vision", "Our mission" -->
        <section class="w-full mb-12 md:mb-16">
            <div class="max-w-5xl mx-auto px-4 md:px-8 grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
                <!-- Colonne 1 : Image -->
                <?php if ( $content_image ) : ?>
                    <div>
                        <img
                            src="<?php echo esc_url( $content_image['url'] ); ?>"
                            alt="<?php echo esc_attr( $content_image['alt'] ); ?>"
                            class="w-full h-auto object-cover"
                        />
                    </div>
                <?php else : ?>
                    <div class="bg-gray-200 w-full h-64"></div>
                <?php endif; ?>

                <!-- Colonne 2 : Textes -->
                <div>
                    <!-- Who are we? -->
                    <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-2">
                        Who are we?
                    </h3>
                    <p class="text-gray-700 mb-6">
                        <?php echo $who_are_we ? esc_html( $who_are_we )
                            : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'; ?>
                    </p>

                    <!-- Our vision -->
                    <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-2">
                        Our vision
                    </h3>
                    <p class="text-gray-700 mb-6">
                        <?php echo $our_vision ? esc_html( $our_vision )
                            : 'Suspendisse commodo magna orci, id luctus risus porta pharetra.'; ?>
                    </p>

                    <!-- Our mission -->
                    <h3 class="text-xl md:text-2xl font-semibold text-gray-900 mb-2">
                        Our mission
                    </h3>
                    <p class="text-gray-700 mb-6">
                        <?php echo $our_mission ? esc_html( $our_mission )
                            : 'Donec quis lorem ut magna tincidunt egestas.'; ?>
                    </p>
                </div>
            </div>
        </section>

        <!-- SECTION 4 : Our Team -->
        <section class="w-full mb-12 md:mb-16">
            <div class="max-w-5xl mx-auto px-4 md:px-8">
                <?php if ( $our_team_title ) : ?>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8">
                        <?php echo esc_html( $our_team_title ); ?>
                    </h2>
                <?php else : ?>
                    <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8">
                        Our Team
                    </h2>
                <?php endif; ?>

                <!-- Grille de 4 colonnes -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Team member 1 -->
                    <div class="flex flex-col items-center text-center">
                        <?php if ( $team_1_image ) : ?>
                            <img
                                src="<?php echo esc_url( $team_1_image['url'] ); ?>"
                                alt="<?php echo esc_attr( $team_1_image['alt'] ); ?>"
                                class="mb-4 w-full h-64 object-cover"
                            />
                        <?php else : ?>
                            <div class="bg-gray-200 w-full h-64 mb-4"></div>
                        <?php endif; ?>
                        <h3 class="font-semibold text-gray-900">
                            <?php echo $team_1_name ? esc_html($team_1_name) : 'Sales Manager'; ?>
                        </h3>
                        <p class="text-sm text-gray-700">
                            <?php echo $team_1_info ? esc_html($team_1_info) : '+33 1 23 12 23 21'; ?>
                        </p>
                        <p class="text-sm text-gray-700">
                            <?php echo $team_1_info_2 ? esc_html($team_1_info_2) : 'sales@company.com'; ?>
                        </p>
                    </div>

                    <!-- Team member 2 -->
                    <div class="flex flex-col items-center text-center">
                        <?php if ( $team_2_image ) : ?>
                            <img
                                src="<?php echo esc_url( $team_2_image['url'] ); ?>"
                                alt="<?php echo esc_attr( $team_2_image['alt'] ); ?>"
                                class="mb-4 w-full h-64 object-cover"
                            />
                        <?php else : ?>
                            <div class="bg-gray-200 w-full h-64 mb-4"></div>
                        <?php endif; ?>
                        <h3 class="font-semibold text-gray-900">
                            <?php echo $team_2_name ? esc_html($team_2_name) : 'Event planner'; ?>
                        </h3>
                        <p class="text-sm text-gray-700">
                            <?php echo $team_2_info ? esc_html($team_2_info) : '+33 1 24 12 76 24'; ?>
                        </p>
                        <p class="text-sm text-gray-700">
                            <?php echo $team_2_info_2 ? esc_html($team_2_info_2) : 'plan@company.com'; ?>
                        </p>
                    </div>

                    <!-- Team member 3 -->
                    <div class="flex flex-col items-center text-center">
                        <?php if ( $team_3_image ) : ?>
                            <img
                                src="<?php echo esc_url( $team_3_image['url'] ); ?>"
                                alt="<?php echo esc_attr( $team_3_image['alt'] ); ?>"
                                class="mb-4 w-full h-64 object-cover"
                            />
                        <?php else : ?>
                            <div class="bg-gray-200 w-full h-64 mb-4"></div>
                        <?php endif; ?>
                        <h3 class="font-semibold text-gray-900">
                            <?php echo $team_3_name ? esc_html($team_3_name) : 'Designer'; ?>
                        </h3>
                        <p class="text-sm text-gray-700">
                            <?php echo $team_3_info ? esc_html($team_3_info) : '+33 1 23 12 23 20'; ?>
                        </p>
                        <p class="text-sm text-gray-700">
                            <?php echo $team_3_info_2 ? esc_html($team_3_info_2) : 'design@company.com'; ?>
                        </p>
                    </div>

                    <!-- Team member 4 -->
                    <div class="flex flex-col items-center text-center">
                        <?php if ( $team_4_image ) : ?>
                            <img
                                src="<?php echo esc_url( $team_4_image['url'] ); ?>"
                                alt="<?php echo esc_attr( $team_4_image['alt'] ); ?>"
                                class="mb-4 w-full h-64 object-cover"
                            />
                        <?php else : ?>
                            <div class="bg-gray-200 w-full h-64 mb-4"></div>
                        <?php endif; ?>
                        <h3 class="font-semibold text-gray-900">
                            <?php echo $team_4_name ? esc_html($team_4_name) : 'CEO'; ?>
                        </h3>
                        <p class="text-sm text-gray-700">
                            <?php echo $team_4_info ? esc_html($team_4_info) : '+33 1 33 25 25'; ?>
                        </p>
                        <p class="text-sm text-gray-700">
                            <?php echo $team_4_info_2 ? esc_html($team_4_info_2) : 'ceo@company.com'; ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php
    endwhile;
endif;

get_footer();

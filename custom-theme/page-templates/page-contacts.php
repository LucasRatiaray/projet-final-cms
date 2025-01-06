<?php
/*
 * Template Name: Contacts Page
 * Description: Template personnalisé pour la page Contacts
 */
get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();

        // Récupération de l’image à la une
        $featured_image   = get_the_post_thumbnail_url( get_the_ID(), 'full' );
        
        $main_title       = get_field('main_title');
        $field_1_title     = get_field('field_1_title');
        $field_1_info_1    = get_field('field_1_info_1');
        $field_1_info_2    = get_field('field_1_info_2');
        $field_2_title     = get_field('field_2_title');
        $field_2_info_1    = get_field('field_2_info_1');
        $field_2_info_2    = get_field('field_2_info_2');
        $field_3_title     = get_field('field_3_title');
        $field_3_info_1    = get_field('field_3_info_1');
        $field_3_info_2    = get_field('field_3_info_2');
        $contact_title    = get_field('contact_title');
        $contact_content  = get_field('contact_content');
        ?>

        <!-- SECTION 1 : Titre principal + phrase d’accroche -->
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

                <p class="mt-4 text-gray-700">
                    A desire for a big big party or a very select congress? Contact us.
                </p>
            </div>
        </section>

        <!-- SECTION 2 : 3 colonnes -->
        <section class="w-full mb-12 md:mb-16">
            <div class="max-w-5xl mx-auto px-4 md:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-gray-900">
                    
                    <!-- Colonne 1 -->
                    <div>
                        <h3 class="font-semibold text-lg">
                            <?php echo $field_1_title ? esc_html($field_1_title) : 'Location'; ?>
                        </h3>
                        <p class="text-sm">
                            <?php echo $field_1_info_1 ? esc_html($field_1_info_1) : '242 Rue du Faubourg Saint-Antoine'; ?>
                        </p>
                        <p class="text-sm">
                            <?php echo $field_1_info_2 ? esc_html($field_1_info_2) : '75020 Paris FRANCE'; ?>
                        </p>
                    </div>

                    <!-- Colonne 2 -->
                    <div>
                        <h3 class="font-semibold text-lg">
                            <?php echo $field_2_title ? esc_html($field_2_title) : 'Manager'; ?>
                        </h3>
                        <p class="text-sm">
                            <?php echo $field_2_info_1 ? esc_html($field_2_info_1) : '+33 1 53 31 25 23'; ?>
                        </p>
                        <p class="text-sm">
                            <?php echo $field_2_info_2 ? esc_html($field_2_info_2) : 'info@company.com'; ?>
                        </p>
                    </div>

                    <!-- Colonne 3 -->
                    <div>
                        <h3 class="font-semibold text-lg">
                            <?php echo $field_3_title ? esc_html($field_3_title) : 'CEO'; ?>
                        </h3>
                        <p class="text-sm">
                            <?php echo $field_3_info_1 ? esc_html($field_3_info_1) : '+33 1 53 31 25 25'; ?>
                        </p>
                        <p class="text-sm">
                            <?php echo $field_3_info_2 ? esc_html($field_3_info_2) : 'ceo@company.com'; ?>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION 3 : Grande image -->
        <?php if ( $featured_image ) : ?>
            <section class="w-full mb-12 md:mb-16">
                <div class="max-w-5xl mx-auto px-4 md:px-8">
                    <img
                        src="<?php echo esc_url( $featured_image ); ?>"
                        alt="Featured Image"
                        class="w-full h-auto object-cover"
                    />
                </div>
            </section>
        <?php endif; ?>

        <!-- SECTION 4 : Formulaire “Write us here” -->
        <section class="w-full mb-12 md:mb-16">
            <div class="max-w-5xl mx-auto px-4 md:px-8">
                <!-- Titre du formulaire -->
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">
                    <?php echo $contact_title ? esc_html( $contact_title ) : 'Write us here'; ?>
                </h2>
                <!-- Texte de description du formulaire -->
                <p class="text-gray-700 mb-6">
                    <?php echo $contact_content ? esc_html( $contact_content ) : 'Go! Don’t be shy.'; ?>
                </p>

                <!-- Formulaire basique -->
                <form action="#" method="post" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Subject (colonne 1 pleine largeur) -->
                    <div class="col-span-2">
                        <label for="subject" class="sr-only">Subject</label>
                        <input
                            type="text"
                            id="subject"
                            name="subject"
                            placeholder="Subject"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600"
                        />
                    </div>

                    <!-- Email -->
                    <div class="col-span-1">
                        <label for="email" class="sr-only">Email</label>
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Email"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600"
                        />
                    </div>

                    <!-- Phone -->
                    <div class="col-span-1">
                        <label for="phone" class="sr-only">Phone</label>
                        <input
                            type="text"
                            id="phone"
                            name="phone"
                            placeholder="Phone"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600"
                        />
                    </div>

                    <!-- Message -->
                    <div class="col-span-2">
                        <label for="message" class="sr-only">Message</label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            placeholder="Message"
                            class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-600"
                        ></textarea>
                    </div>

                    <!-- Submit button -->
                    <div class="col-span-2">
                        <button
                            type="submit"
                            class="px-6 py-2 bg-gray-800 text-white font-semibold rounded hover:bg-gray-700"
                        >
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <?php
    endwhile;
endif;

get_footer();

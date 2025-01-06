<?php get_header(); ?>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 mb-20 mt-8">
    <?= get_search_form(); ?>

    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-semibold mb-6">
        <?php printf(__('Search results for: %s', 'textdomain'), '<span class="text-blue-600">' . get_search_query() . '</span>'); ?>
    </h1>
    <!-- Résultats de recherche -->
    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php while (have_posts()) : the_post(); ?>
                <div class="p-4 border border-gray-200 rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                    <a href="<?php the_permalink(); ?>" class="block">
                        <h2 class="text-lg font-semibold mb-2"><?php the_title(); ?></h2>
                        <p class="text-gray-600 text-sm sm:text-base"><?php the_excerpt(); ?></p>
                        <span class="text-sm text-blue-500 mt-2 inline-block"><?php echo get_the_date(); ?></span>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            <?= custom_pagination(); ?>
        </div>

    <?php else : ?>
        <p class="text-gray-600 text-base sm:text-lg">No results found for your search query. Please try again with different keywords.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

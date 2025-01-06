<?php get_header(); ?>

<div class="container mx-auto px-6 py-16 mb-20 mt-8">
    <h1 class="text-4xl font-semibold mb-6">
        <?php printf(__('Search results for: %s', 'textdomain'), '<span class="text-blue-600">' . get_search_query() . '</span>'); ?>
    </h1>

    <!-- Code des résultats de recherche ici -->
    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-3 gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <div class="p-4 border border-gray-200 rounded-lg shadow hover:shadow-lg">
                    <a href="<?php the_permalink(); ?>" class="block">
                        <h2 class="text-lg font-semibold mb-2"><?php the_title(); ?></h2>
                        <p class="text-gray-600"><?php the_excerpt(); ?></p>
                        <span class="text-sm text-blue-500 mt-2 inline-block"><?php echo get_the_date(); ?></span>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            <?= custom_pagination() ?>
        </div>

    <?php else : ?>
        <p class="text-gray-600 text-lg">No results found for your search query. Please try again with different keywords.</p>
        <div class="mt-6">
            <?= get_search_form(); ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>

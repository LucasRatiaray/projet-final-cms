<?php get_header(); ?>

<div class="container mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 py-12 px-4 sm:px-6 lg:px-8">
    <!-- Sidebar -->
    <aside class="lg:col-span-3">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-6">Article.</h1>
        <?= get_sidebar('sidebar') ?>
    </aside>

    <!-- Main content -->
    <main class="lg:col-span-9">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article class="block">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-6">
                            <?php the_post_thumbnail('full', ['class' => 'w-full h-[300px] lg:h-[400px] object-cover rounded-lg']); ?>
                        </div>
                    <?php endif; ?>

                    <div class="mb-6">
                        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-4"><?php the_title(); ?></h1>
                        <span class="text-sm text-gray-500 block mb-2">
                            <span class="text-sm text-gray-500 block">
                                <?php
                                $categories = get_the_category();
                                $category_names = array_map(function ($category) {
                                    return $category->cat_name;
                                }, $categories);

                                echo implode(' | ', $category_names);
                                ?>
                                &bull; <?php the_date(); ?>
                            </span>
                    </div>

                    <div class="prose max-w-none mb-8">
                        <?php the_content(); ?>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-8">
                        <?php the_tags('<span class="bg-gray-200 text-sm px-3 py-1 rounded-md">', '</span><span class="bg-gray-200 text-sm px-3 py-1 rounded-md">', '</span>'); ?>
                    </div>

                    <!-- Comments Section -->
                    <div class="mt-12">
                        <?php if (comments_open() || get_comments_number()) :
                            comments_template();
                        endif; ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <h1 class="text-center text-2xl">Post not found</h1>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>
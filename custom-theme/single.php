<?php get_header(); ?>

<div class="container mx-auto grid grid-cols-12 gap-8 py-12">
    <!-- Sidebar -->
    <aside class="col-span-3">
        <?= get_sidebar('sidebar') ?>
    </aside>

    <!-- Main content -->
    <main class="col-span-9">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article>
                    <h1 class="text-4xl font-bold mb-6"><?php the_title(); ?></h1>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="mb-6">
                            <?php the_post_thumbnail('full', ['class' => 'w-full cover-fit rounded-lg']); ?>
                        </div>
                    <?php endif; ?>

                    <div class="text-sm text-gray-500 mb-4">
                        <?php the_category(', '); ?> &bull; <?php the_date(); ?>
                    </div>

                    <div class="prose max-w-none">
                        <?php the_content(); ?>
                    </div>

                    <div class="mt-8 flex flex-wrap gap-2">
                        <?php the_tags('<span class="bg-gray-200 text-sm px-3 py-1 rounded-md">', '</span><span class="bg-gray-200 text-sm px-3 py-1 rounded-md">', '</span>'); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <!-- Comments Section -->
            <div class="mt-12">
                <?php if (comments_open() || get_comments_number()) :
                    comments_template();
                endif; ?>
            </div>
        <?php else : ?>
            <h1 class="text-center text-2xl">Post not found</h1>
        <?php endif; ?>
    </main>
</div>

<?php get_footer(); ?>
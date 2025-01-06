<?php get_header(); ?>

<div class="container mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 py-12 px-4 sm:px-6 lg:px-8">
  <!-- Sidebar -->
  <aside class="lg:col-span-3">
    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold mb-6">Blogs.</h1>
    <?= get_sidebar('sidebar') ?>
  </aside>

  <!-- Main content -->
  <main class="lg:col-span-9">
    <?php if (have_posts()) : ?>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="group block">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium', ['class' => 'w-full h-[200px] object-cover rounded-lg']); ?>
            <?php else : ?>
              <img class="w-full h-[200px] object-cover rounded-lg" src="/path/to/default-image.jpg" alt="<?php the_title(); ?>" />
            <?php endif; ?>

            <div class="mt-4">
              <span class="text-sm text-gray-500 block">
                <?php
                $categories = get_the_category();
                $category_names = array_map(function ($category) {
                  return $category->cat_name;
                }, $categories);

                echo implode(' | ', $category_names);
                ?>
              </span>
              <h3 class="text-lg font-semibold group-hover:text-blue-500">
                <?php the_title(); ?>
              </h3>
              <p class="text-sm text-gray-600 mt-2">
                <?php the_excerpt(); ?>
              </p>
            </div>
          </a>
        <?php endwhile; ?>
      </div>

      <!-- Pagination -->
      <div class="mt-8">
        <?php custom_pagination(); ?>
      </div>

    <?php else : ?>
      <h1 class="text-center text-2xl">No posts available</h1>
    <?php endif; ?>
  </main>
</div>

<?php get_footer(); ?>
<?php get_header(); ?>

<div class="container mx-auto grid grid-cols-12 gap-8 py-12">
  <!-- Sidebar -->
  <aside class="col-span-3">
    <h1 class="text-4xl font-bold mb-6">Blogs.</h1>

    <?= get_sidebar('sidebar') ?>
  </aside>

  <!-- Main content -->
  <main class="col-span-9">
    <?php if (have_posts()) : ?>
      <div class="grid grid-cols-3 gap-8">
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="group block">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('medium', ['class' => 'w-full h-[200px] object-cover rounded-lg']); ?>
            <?php else : ?>
              <img class="w-full h-[200px] object-cover rounded-lg" src="/path/to/default-image.jpg" alt="<?php the_title(); ?>" />
            <?php endif; ?>

            <div class="mt-4">
              <span class="text-sm text-gray-500 block">
                <?php foreach ((get_the_category()) as $category) {
                  echo $category->cat_name . ' ';
                } ?>
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
      <?php custom_pagination(); ?>

    <?php else : ?>
      <h1 class="text-center text-2xl">No posts available</h1>
    <?php endif; ?>
  </main>
</div>

<?php get_footer(); ?>
<?= get_search_form(); ?>

<!-- Recent Posts -->
<div class="mb-8">
    <h2 class="text-xl font-semibold mb-4">Recent posts</h2>
    <ul>
        <?php
        $recent_posts = wp_get_recent_posts(['numberposts' => 4]);
        foreach ($recent_posts as $post) :
        ?>
            <li class="mb-4 flex">
                <a href="<?php echo get_permalink($post['ID']); ?>" class="flex items-center gap-4">
                    <?php if (has_post_thumbnail($post['ID'])) : ?>
                        <?php echo get_the_post_thumbnail($post['ID'], 'thumbnail', ['class' => 'w-16 h-16 object-cover rounded-md']); ?>
                    <?php else : ?>
                        <img class="w-16 h-16 object-cover rounded-md" src="/path/to/default-image.jpg" alt="<?php echo esc_attr($post['post_title']); ?>" />
                    <?php endif; ?>
                    <div>
                        <p class="text-sm text-gray-500"><?php echo get_the_date('j F, Y', $post['ID']); ?></p>
                        <h3 class="text-md font-medium"><?php echo esc_html($post['post_title']); ?></h3>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</div>

<!-- Archives -->
<div class="mb-8">
    <h2 class="text-xl font-semibold mb-4">Archives</h2>
    <ul>
        <?php wp_get_archives(['type' => 'monthly', 'show_post_count' => true]); ?>
    </ul>
</div>

<!-- Categories -->
<div class="mb-8">
    <h2 class="text-xl font-semibold mb-4">Categories</h2>
    <ul>
        <?php wp_list_categories(['title_li' => '', 'show_count' => true]); ?>
    </ul>
</div>

<!-- Tags -->
<div>
    <h2 class="text-xl font-semibold mb-4">Tags</h2>
    <div class="flex flex-wrap gap-2">
        <?php
        $tags = get_tags();
        foreach ($tags as $tag) :
        ?>
            <a href="<?php echo get_tag_link($tag->term_id); ?>" class="bg-gray-200 text-gray-800 text-sm px-3 py-1 rounded-md">
                <?php echo $tag->name; ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>
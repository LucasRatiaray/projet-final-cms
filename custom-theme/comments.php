<?php
if (post_password_required()) {
    return;
}
?>

<div id="comments" class="comments-area">
    <!-- Nombre de commentaires -->
    <?php if (have_comments()) : ?>
        <h2 class="text-2xl font-bold mb-6">
            <?php
            $count = absint(get_comments_number());
            echo sprintf(_n('%s Comment', '%s Comments', $count, 'textdomain'), $count);
            ?>
        </h2>

        <!-- Liste des commentaires -->
        <ol class="comment-list space-y-6">
            <?php
            wp_list_comments([
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size' => 50,
                'callback'   => function ($comment, $args, $depth) {
                    ?>
                    <li <?php comment_class('comment-item flex gap-4'); ?> id="comment-<?php comment_ID(); ?>">
                        <div class="comment-avatar">
                            <?php echo get_avatar($comment, 50, '', '', ['class' => 'rounded-full']); ?>
                        </div>
                        <div class="comment-body">
                            <div class="comment-author font-bold">
                                <?php echo get_comment_author_link(); ?>
                            </div>
                            <div class="comment-meta text-sm text-gray-500">
                                <?php printf(__('%1$s at %2$s', 'textdomain'), get_comment_date(), get_comment_time()); ?>
                            </div>
                            <div class="comment-content mt-2">
                                <?php comment_text(); ?>
                            </div>
                            <?php if ($comment->comment_approved == '0') : ?>
                                <p class="comment-awaiting-moderation text-sm text-red-500">
                                    <?php _e('Your comment is awaiting moderation.', 'textdomain'); ?>
                                </p>
                            <?php endif; ?>
                            <div class="comment-reply mt-2">
                                <?php
                                comment_reply_link(array_merge($args, [
                                    'reply_text' => __('Reply', 'textdomain'),
                                    'depth'      => $depth,
                                    'max_depth'  => $args['max_depth'],
                                ]));
                                ?>
                            </div>
                        </div>
                    </li>
                    <?php
                },
            ]);
            ?>
        </ol>

        <!-- Navigation des commentaires -->
        <?php if (get_comment_pages_count() > 1 && get_option('page_comments')) : ?>
            <nav class="comment-navigation" role="navigation">
                <div class="nav-previous">
                    <?php previous_comments_link(__('&larr; Older Comments', 'textdomain')); ?>
                </div>
                <div class="nav-next">
                    <?php next_comments_link(__('Newer Comments &rarr;', 'textdomain')); ?>
                </div>
            </nav>
        <?php endif; ?>

    <?php endif; ?>

    <!-- Formulaire de commentaire -->
    <?php if (comments_open()) : ?>
        <div id="respond" class="comment-respond mt-8">
            <h3 class="text-xl font-bold mb-4">
                <?php comment_form_title(__('', 'textdomain'), __('', 'textdomain')); ?>
            </h3>
            <?php
            comment_form([
                'logged_in_as' => '',
                'comment_notes_before' => '',
                'comment_notes_after' => '',
                'fields' => [
                    'author' => '<p class="comment-form-author mb-4">
                                    <label for="author" class="block text-sm font-medium text-gray-700">' . __('Name', 'textdomain') . '</label>
                                    <input id="author" name="author" type="text" class="w-full p-3 border border-gray-300 rounded-lg" value="" required />
                                </p>',
                    'email'  => '<p class="comment-form-email mb-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">' . __('Email', 'textdomain') . '</label>
                                    <input id="email" name="email" type="email" class="w-full p-3 border border-gray-300 rounded-lg" value="" required />
                                </p>',
                ],
                'comment_field' => '<p class="comment-form-comment mb-4">
                                        <label for="comment" class="block text-sm font-medium text-gray-700">' . _x('Comment :', 'noun', 'textdomain') . '</label>
                                        <textarea id="comment" name="comment" class="w-full p-3 border border-gray-300 rounded-lg" rows="4" required></textarea>
                                    </p>',
                'class_submit'  => 'bg-[#050A3A] text-white px-4 py-2 rounded-lg hover:bg-blue-700',
                'label_submit'  => __('Post Comment', 'textdomain'),
                'title_reply'   => __('', 'textdomain'),
                'title_reply_to' => __('', 'textdomain'),
            ]);
            ?>
        </div>
    <?php endif; ?>
</div>

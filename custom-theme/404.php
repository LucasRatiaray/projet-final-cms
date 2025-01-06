<?php get_header(); ?>

<div class="bg-[#050A3A] text-white items-center mx-auto px-44 py-28">
    <div class="">
        <h1 class="text-5xl font-medium mb-4">404 Error.</h1>
        <p class="text-lg mb-6">The page you were looking for couldn’t be found.<br>Maybe try a search?</p>
        <div class="relative max-w-md">
            <?= get_search_form(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

<?php get_header(); ?>

<div class="bg-[#050A3A] text-white flex flex-col items-start mx-auto px-6 sm:px-10 lg:px-44 py-14 sm:py-20 lg:py-28">
    <div class="">
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-medium mb-4">404 Error.</h1>
        <p class="text-base sm:text-lg lg:text-xl mb-6">
            The page you were looking for couldn’t be found.<br>
            Maybe try a search?
        </p>
        <div class="relative w-full max-w-sm">
            <?= get_search_form(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

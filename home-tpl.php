<?php
/*
Template Name: Home
*/

add_action('post_updated', 'wp_save_post_revision', 10);
require_once("helpers.php");

$pageId = 2;
$pageTitle = explodeParagraphTags(get_field("hero_text_home", $pageId));

get_header(); ?>

<main class="max-w-4xl mx-auto px-4">

    <div class="bg-gray-400">
        <div class="max-w-4xl mx-auto mb-5 px-4">
            <h1 class="text-3xl py-10"><a href="<?php echo get_home_url(); ?>" class="hover:text-blue-500"><?= $pageTitle  ?></a></h1>
        </div>
    </div>

    <!-- example react component 
    <div id="render-react-example-here"></div>
    end example react component -->

    <div class="p-6 max-w-sm mx-auto bg-sky-500 rounded-xl font-objectsans shadow-lg flex items-center space-x-4">
        <div class="shrink-0">
            <img class="h-12 w-12 sm:rounded-md" src="https://place-hold.it/60x5/666/fff/000.png" alt="ChitChat Logo">
        </div>
        <div>
            <div class="text-xl font-medium  text-white">Card Tailwind</div>
            <p class="text-white">You have a new message!</p>
        </div>
    </div>

    <div class="pointer-events-auto h-6 w-10 rounded-full p-1 ring-1 ring-inset transition duration-200 ease-in-out bg-slate-900/10 ring-slate-900/5">
        <div class="h-4 w-4 rounded-full bg-white shadow-sm ring-1 ring-slate-700/10 transition duration-200 ease-in-out"></div>
    </div>
    <p class="text-blue">The quick brown fox...</p>


</main>

<?php get_footer();

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

    <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-lg flex items-center space-x-4">
        <div class="shrink-0">
            <img class="h-12 w-12" src="https://place-hold.it/60x5/666/fff/000.png" alt="ChitChat Logo">
        </div>
        <div>
            <div class="text-xl font-medium text-blue-500">ChitChat</div>
            <p class="text-slate-500">You have a new message!</p>
        </div>
    </div>
    <p class="text-blue-600">The quick brown fox...</p>


</main>

<?php get_footer();

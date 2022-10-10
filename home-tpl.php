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

    <!-- example react component -->
    <div id="render-react-example-here"></div>
    <!-- end example react component -->

    <div class="prose max-w-full">

    </div>

</main>

<?php get_footer();

<?php

function explodeParagraphTags($string)
{
    $paragraphs = explode("</p><p>", preg_replace("/\r|\n/", "", $string));
    $paragraphs = array_map(fn ($paragraph) => strip_tags($paragraph, "<br><strong><em><ul><li>"), $paragraphs);
    return count($paragraphs) > 1 ? $paragraphs : $paragraphs[0];
}

function explodeListTags($string)
{
    $items = preg_replace("/<\/?ul>/", "", $string);
    $items = explode("</li><li>", preg_replace("/\r|\n/", "", $items));
    return array_map(fn ($item) => strip_tags($item, "<br><strong><em>"), $items);
}

<?php

global $commonmark_converter;

function commonmark_convert($content) {
  global $commonmark_converter;

  if ($commonmark_converter === null) {
    $commonmark_converter = new League\CommonMark\CommonMarkConverter;
  }

  return $commonmark_converter->convertToHtml($content);
}

add_filter('the_content', 'commonmark_convert', 1);

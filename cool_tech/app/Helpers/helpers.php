<?php
// Helper methods to convert a slug(hello-world) to a title(Hello world)
function convertSlugToTitle($slug)
{
  $words = explode('-', $slug);
  $word = implode(" ", $words);
  return ucfirst($word);
}
// Helper methods to convert a title(Hello world) to a slug(hello-world)
function convertTitleToSlug($title)
{
  $words = explode(' ', $title);
  $word = implode('-', $words);
  return strtolower($word);
}

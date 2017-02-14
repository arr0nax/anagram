<?php
date_default_timezone_set("America/Los_Angeles");
require_once __DIR__."/../vendor/autoload.php";
require_once __DIR__."/../src/anagram.php";

$app = new Silex\Application();


$app->register(new Silex\Provider\TwigServiceProvider(), ["twig.path" => __DIR__."/../views"]);

$app->get("/", function() use ($app) {
    $anagramTest = new Anagram('bread');
    $result = $anagramTest->compare_words('braed bared drabe rabed salad');
    return $app["twig"]->render("input.html.twig");
});

return $app;

 ?>

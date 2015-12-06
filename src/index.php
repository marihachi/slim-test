<?php
require_once "vendor/autoload.php";

use Jlndk\SlimJade\Jade;
use \Slim\Slim;

$app = new Slim([
	"view" => new Jade(),
	"templates.path" => dirname(__FILE__)."/templates"
]);

$app->get("/:name", function ($name) use ($app) {
	$app->render("home.jade", [
		"name" => $name
	]);
});

$app->run();

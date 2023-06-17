<?php

require_once __DIR__ . '/Themes/DarkTheme.php';
require_once __DIR__ . '/Themes/LightTheme.php';
require_once __DIR__ . '/UiComoponent/Button.php';
require_once __DIR__ . '/UiComoponent/Text.php';

use Themes\DarkTheme\DarkTheme;
use Themes\LightTheme;
use UiComponent\Button\Button;

$darkTheme = new DarkTheme();
$lightTheme  = new LightTheme();

$button = new Button($lightTheme);
echo $button->render() . PHP_EOL;

$button = new Button($darkTheme);
echo $button->render();


$text = new Button($lightTheme);
echo $text->render() . PHP_EOL;

$text = new Button($darkTheme);
echo $text->render();


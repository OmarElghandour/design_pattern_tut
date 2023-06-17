<?php 

namespace Themes\DarkTheme;

require_once __DIR__ . '/ITheme.php';


use ITheme;

class DarkTheme implements ITheme {
    public function define()
    {
        return 'dark them';
    }
}
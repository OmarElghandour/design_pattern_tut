<?php 

namespace Themes;

require_once __DIR__ . '/ITheme.php';

use ITheme;

class LightTheme implements ITheme {
    public function define()
    {
        return 'rendered light theme';   
    }
}
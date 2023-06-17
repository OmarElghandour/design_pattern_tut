<?php 

namespace UiComponent;

require_once __DIR__ . '/UiComponent.php';

use ITheme;
use UiComponent;

class Text extends UiComponent {

    public function __construct(ITheme $theme)
    {
        parent::__construct($theme);    
    }

    public function render()
    {
        return 'Text component rendered by' . $this->theme->define();
    }
}
<?php 

namespace UiComponent\Button;

require_once __DIR__ . '/UiComponent.php';

use ITheme;
use UiComponent;

class Button extends UiComponent {


    public function __construct(ITheme $theme)
    {
        parent::__construct($theme);    
    }


    public function render()
    {
        return 'button rendered by' . $this->theme->define();
    }
}
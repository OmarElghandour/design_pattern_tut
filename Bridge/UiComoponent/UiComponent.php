<?php 


abstract class UiComponent {
    
    protected $theme;
    public function __construct(ITheme $theme)
    {
        $this->theme = $theme;
    }


    abstract function render();
}

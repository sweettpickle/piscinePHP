<?php

class Color{
    public $red;
    public $green;
    public $blue;
    static $verbose = false;

    public function __construct($mas)
    {
        if (isset($mas['red']) && isset($mas['green']) && isset($mas['blue'])){
            $this->red = intval($mas['red']);
            $this->green = intval($mas['green']);
            $this->blue = intval($mas['blue']);
        }
        elseif (isset($mas['rgb'])){
            $rgb = intval($mas["rgb"]);
            $this->red = $rgb / 65281 % 256;
            $this->green = $rgb / 256 % 256;
            $this->blue = $rgb % 256;
        }
    }

    public function __toString(){
        return "";
}
}

?>
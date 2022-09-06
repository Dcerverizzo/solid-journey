<?php

use Forma;

class Circulo extends Forma
{
    protected $radio;

    public function __construct($x, $y, $radio, APIDesenho $api)
    {
        parent::__construct($api);
        $this->x = $x;
        $this->y = $y;
        $this->radio = $radio;
    }

    public function desenhar()
    {
        $this->api->desenharCirculo($this->x, $this->y, $this->radio);
    }

}
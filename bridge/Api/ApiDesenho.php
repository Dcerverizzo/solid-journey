<?php

class APIDesenhoV1 implements APIDesenho
{
    public function desenharCirculo($x, $y, $radio)
    {
        echo "desenhando circulo com propriedades x: " . $x . " y: " . $y ." radio: " . $radio;
    }

}

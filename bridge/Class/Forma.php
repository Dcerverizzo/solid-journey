<?php

use APIDesenho;

abstract class Forma
{
    protected $api;
    protected $x;
    protected $y;
    
    public function __construct(APIDesenho $api)
    {
        $this->api = $api;
    } 

}

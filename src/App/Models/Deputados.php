<?php

namespace Models;
 
use Models\Connect; 

class Deputados
{

    private $CONNECT;

    function __construct()
    {
        $connect = new Connect();
        $this->CONNECT = $connect->Mysqli();
    }


}

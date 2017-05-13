<?php

namespace mibexx\AppGenerator;


class AppGenerator
{

    private $diFacade;

    /**
     * AppGenerator constructor.
     */
    public function __construct()
    {
        $this->diFacade = new mibexx\AppGenerator\DependencyInjection\Facade();
    }
}
<?php

namespace mibexx\AppGenerator;


use mibexx\AppGenerator\DependencyInjection\DiContainer;

class AppGenerator
{
    /**
     * @var DiContainer
     */
    private $di;

    /**
     * AppGenerator constructor.
     */
    public function __construct()
    {
        $facade = new \mibexx\AppGenerator\DependencyInjection\Facade();
        $this->di = $facade->getDi();
    }

    /**
     * @return DiContainer
     */
    public function getDi()
    {
        return $this->di;
    }
}
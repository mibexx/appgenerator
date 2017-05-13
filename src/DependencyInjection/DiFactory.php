<?php

namespace mibexx\AppGenerator\DependencyInjection;


use mibexx\AppGenerator\DependencyInjection\Simple\SimpleDiContainer;

class DiFactory implements DiFactoryInterface
{
    /**
     * @var DiContainer
     */
    private $diContainer;

    /**
     * DiFactory constructor.
     */
    public function __construct()
    {
        $this->diContainer = new SimpleDiContainer();
    }

    /**
     * @return DiContainer
     */
    public function get()
    {
        return $this->diContainer;
    }
}
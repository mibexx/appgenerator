<?php

namespace mibexx\AppGenerator\DependencyInjection;


use mibexx\AppGenerator\DependencyInjection\Simple\SimpleDiContainer;

class DiFactory implements DiFactoryInterface
{
    /**
     * @return DiContainer
     */
    public function get()
    {
        return new SimpleDiContainer();
    }
}
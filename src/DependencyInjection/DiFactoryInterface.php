<?php

namespace mibexx\AppGenerator\DependencyInjection;

interface DiFactoryInterface
{
    /**
     * @return DiContainer
     */
    public function get();
}
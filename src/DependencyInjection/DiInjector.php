<?php

namespace mibexx\AppGenerator\DependencyInjection;


interface DiInjector
{
    /**
     * @param string $name
     * @param callable $service
     * @return null
     */
    public function set($name, callable $service);
}
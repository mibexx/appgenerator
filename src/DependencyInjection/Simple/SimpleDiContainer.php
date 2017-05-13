<?php

namespace mibexx\AppGenerator\DependencyInjection\Simple;


use mibexx\AppGenerator\DependencyInjection\DiContainer;
use mibexx\AppGenerator\DependencyInjection\Exception\ServiceNotFound;

class SimpleDiContainer implements DiContainer
{
    /**
     * @var callable[]
     */
    private $container;

    /**
     * @param $name
     * @return mixed
     * @throws ServiceNotFound
     */
    public function get($name)
    {
        if (!isset($this->container[$name]))
        {
            throw new ServiceNotFound("Service " . $name . " does not exist", 1000);
        }
        return $this->container[$name]();
    }

    /**
     * @param string $name
     * @param callable $service
     * @return $this
     */
    public function set($name, callable $service)
    {
        $this->container[$name] = $service;
        return $this;
    }

}
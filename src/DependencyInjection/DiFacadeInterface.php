<?php

namespace mibexx\AppGenerator\DependencyInjection;

interface DiFacadeInterface
{
    /**
     * @param $name
     * @param callable $service
     * @return null
     */
    public function setService($name, callable $service);

    /**
     * @param $name
     * @return mixed
     */
    public function getService($name);
}
<?php
namespace Configuration;

class Config
{
    private $namespace;
    private $controller;
    private $method;

    /**
     * @param $namespace
     * @param $controller
     * @param $method
     */
    public function __constructParam($namespace, $controller, $method)
    {
        $this->namespace = $namespace;
        $this->controller = $controller;
        $this->method = $method;
    }

    public function __construct()
    {
        $this->namespace = "Controllers";
        $this->controller = "ContactController";
        $this->method = "listContactsRender";
    }

    /**
     * @return mixed
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param mixed $namespace
     */
    public function setNamespace($namespace): void
    {
        $this->namespace = $namespace;
    }

    /**
     * @param mixed $controller
     */
    public function setController($controller): void
    {
        $this->controller = $controller;
    }

    /**
     * @param mixed $method
     */
    public function setMethod($method): void
    {
        $this->method = $method;
    }




}
<?php

namespace Core;


class Application
{
    protected string $uri;
    public Request $request;
    public static $app;

    public function __construct()
    {
        self::$app = $this;
        $this->uri = $_SERVER['QUERY_STRING'];
        $this->request = new Request($this->uri);
    }
}
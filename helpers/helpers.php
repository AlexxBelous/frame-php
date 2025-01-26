<?php


function app(): \Core\Application
{
    return \Core\Application::$app;
}

function request(): \Core\Request
{
    return app()->request;
}
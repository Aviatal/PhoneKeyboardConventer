<?php

declare(strict_types=1);

namespace App;

class Request
{
    public array $post = [];
    public array $get = [];

    public function __construct(array $get, array $post)
    {
        $this->post = $post;
        $this->get = $get;
    }
    public function postParam($name, $default = null) : ?string
    {
        return $this->post[$name] ?? $default;
    }
    public function getParam($name, $default = null) : ?string
    {
        return $this->get[$name] ?? $default;
    }
}
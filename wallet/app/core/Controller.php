<?php

namespace matiu\wallet\app\core;

class Controller
{
    protected function view($view, $data = []) {
        extract($data);
        require "app/views/{$view}.php";
    }
}
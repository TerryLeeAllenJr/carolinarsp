<?php

namespace App\Lib\Cms;

interface ClientInterface
{
    public function get(string $uri, array $params = []);
}

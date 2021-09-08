<?php

namespace Thunderstorm;

class Request
{
    public function path()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos('?', $path);

        if ($position === false)
        {
            return $path;
        }

        return substr($path, 0, $position);
    }

    public function method(): string
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function headers(): array
    {
        $headers = array();

        foreach($_SERVER as $key => $value)
        {
            if (!str_starts_with($key, 'HTTP_'))
            {
                continue;
            }

            $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
            $headers[$header] = $value;
        }

        return $headers;
    }

}
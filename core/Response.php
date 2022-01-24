<?php

namespace Thunderstorm;

use Twig\Environment;
use Twig\Error\LoaderError as LoaderErrorAlias;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

class Response {
    public function __construct() {
        $this->headers = [];
    }

    public function send() {
        foreach ($this->headers as $header) {
            header($header);
        }
    }

    public function header($header) {

        $this->headers[] = $header;

        return $this;
    }

    public function redirect($url) {
        $this->header("Location: $url")->send();
    }

    public function status_code($code) {
        http_response_code($code);
        return $this;
    }

    public function render_json($data, $status = 200) {
        if ($status != 200)
        {
            $this->status_code($status);
        }

        $this->header('Content-Type: application/json')->send();
        echo json_encode($data);
    }

    /**
     * @param $template
     * @param array $args
     */
    public function render_template($template, array $args = [])
    {
        $loader = new FilesystemLoader(dirname(__DIR__).'/views/');
        $twig = new Environment($loader);

        try {
            echo $twig->render($template, $args);
        } catch (LoaderErrorAlias | SyntaxError | RuntimeError $e) {
            die($e);
        }

        return $this;
    }
}
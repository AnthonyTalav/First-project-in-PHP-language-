<?php

namespace App\Controller;


use Laminas\Diactoros\Response\HtmlResponse as ResponseHtmlResponse;

class BaseController
{
    protected $templateEngine;
    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader('../views');
        $this->templateEngine = new \Twig\Environment($loader, [
            'debug' => 'true',
            'cache' => 'false'
        ]);
    }

    public function renderHTML($fileName,$data=[])
    {
        return new ResponseHtmlResponse($this->templateEngine->render($fileName,$data));
    }
}

<?php

namespace App\Http;

class Router
{
    /**
     * URL completa do projeto (raiz)
     * @var string
     */
    private $url = '';

    /**
     * Prefixo de todas as rotas
     * @var string
     */
    private $prefix = '';

    /**
     * Indice de rotas
     * @var array
     */
    private $routes = [];

    /**
     * Instancia de Request
     * @var Request
     */
    private $request;


    /**
     * Método responsavel por iniciara aclasse
     * @param string $url
     */
    public function __construct($url)
    {
        $this->request = new Request();
        $this->url = $url;
        $this->setPrefix();
    }

    /**
     * Método responsavel por definir o prefixo das rotas
     */
    private function setPrefix()
    {
        //informações da url atual
        $parseUrl = parse_url($this->url);

        //define o prefixo
        $this->prefix = $parseUrl['path'] ?? "";

        // echo '<pre>';
        // print_r($parseUrl);
        // echo '</pre>';
        // exit;
    }
}

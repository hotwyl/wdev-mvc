<?php

namespace App\Http;

class Request
{

    /**
     * Método HTTP da requisição
     * @var string
     */
    private $httpMethod;

    /**
     * URI da página
     * @var string
     */
    private $uri;

    /**
     * Parametros da URL ($_GET)
     * @var array
     */
    private $queryParams =  [];

    /**
     * Variaveis recebidas no POST da página ($_POST)
     * @var array
     */

    private $postVars = [];

    /**
     * CAbeçalho da requisição
     * @var array
     */
    private $headers = [];

    /**
     * construtor da classe
     */
    public function __construct()
    {
        $this->queryParams = $_GET ?? [];
        $this->postVars = $_POST ?? [];
        $this->headers = getallheaders();
        $this->httpMethod = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_URI'] ?? '';
    }

    /**
     * Método responsável por retornar o mnétodo HTTP da requisição
     * @return string
     */
    public function getHttpMehod()
    {
        return $this->httpMethod;
    }

    /**
     * Método responsável por retornar a URI da requisição
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * Método responsável por retornar os headers da requisição
     * @return array
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Método responsável por retornar os parametros da URL da requisição
     * @return array
     */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /**
     * Método responsável por retornar as variaveis POST da requisição
     * @return array
     */
    public function getPostVars()
    {
        return $this->postVars;
    }
}

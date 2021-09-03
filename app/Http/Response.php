<?php

namespace App\Http;

class Response
{
    /**
     * Código do status HTTP
     * @var integer
     */
    private $httpCode = 200;

    /**
     * Cabeçalho do Response
     * @var array
     */
    private $headers = [];

    /**
     * Tipo de conteúdo que está sendo retornado
     * @var string
     */
    private $contentType = 'text/html';

    /**
     * Tipo de conteúdo do response
     * @var mixed
     */
    private $content = 'text/html';

    /**
     * Método responsável por iniciar a classe e definir os valores
     * @var integer $httpCode
     * @var mixed $content
     * @var string $contentType
     */

    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    /**
     * Método responsável por alterar o content type do response
     * @param string $contentType
     */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    /**
     * Método responsável por adicionar um registro no cabeçalho de response
     * @param string $key
     * @param string $values
     */
    public function addHeader($key, $values)
    {
        $this->headers[$key] = $values;
    }

    /**
     * Método responsável por enviar os headers para o navegador
     */
    private function sendHeaders()
    {
        //status
        http_response_code($this->httpCode);

        //enviar headres
        foreach ($this->headers as $key => $value) {
            header($key . ': ' . $value);
        }
    }

    /**
     * Método responsável por enviar a resposta para o usuario
     */
    public function sendResponse()
    {
        //envia os headers
        $this->sendHeaders();

        //imprime o conteudo
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}

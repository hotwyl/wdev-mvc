<?php

namespace App\controller\Pages;

use \App\Utils\View;

class Page
{

    /**
     * metodo responsavel por renderizar o topo da pagina
     * @return string
     */
    private static function getHeader()
    {
        return View::render('pages/header');
    }

    /**
     * metodo responsavel por renderizar o rodape da pagina
     * @return string
     */
    private static function getFooter()
    {
        return View::render('pages/footer');
    }

    /**
     * Método responsável por retornar o conteúdo (view) da nossa pagina generica
     * @return string 
     */
    public static function getPage($title, $content)
    {
        return View::render('pages/page', $vars = [
            'title' => $title,
            'header' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
    }
}

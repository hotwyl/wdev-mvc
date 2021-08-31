<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class Home extends Page
{
    /**
     * Método responsável por retornar o conteúdo (view) da nossa home
     * @return string 
     */
    public static function getHome()
    {

        //organização
        $obOrganization = new Organization;

        //view da home
        $content =  View::render('pages/home', [
            'name' => $obOrganization->name,
            'description' => $obOrganization->description,
            'site' => $obOrganization->site
        ]);

        //retorna a viuew da página
        return parent::getPage('WDEV - Canal - HOME', $content);
    }
}

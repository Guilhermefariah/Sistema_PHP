<?php

namespace Traits;

trait TraitParseUrl
{
    // Cria um array com os parâmetros da URL
    public function parseUrl($par=null)
    {
        $url = explode('/', rtrim($_GET['url'], FILTER_SANITIZE_URL));
        return ($par == null)?$url:$url[$par];
    }
}
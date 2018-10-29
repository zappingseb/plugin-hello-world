<?php

namespace HelloWorld\Containers;

use Plenty\Plugin\Templates\Twig;

class ExampleDataProvider
{
    public function call(Twig $twig):string
    {
        try {
            return $twig->render('HelloWorld::content.ExampleContent');
        } catch (\Exception $e) {}
    }
}
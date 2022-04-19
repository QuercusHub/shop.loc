<?php

namespace app\controllers;

use prj\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->setMeta('Главная страница', 'description...', 'keywords...');
    }
}

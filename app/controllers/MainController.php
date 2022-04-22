<?php

namespace app\controllers;

use prj\Controller;
use RedBeanPHP\R;

class MainController extends Controller
{
    public function indexAction()
    {
        $names = $this->model->get_names();
        $this->setMeta('Главная страница', 'Description...', 'keywords...');
        $this->set(compact('names'));
    }
}

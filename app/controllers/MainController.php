<?php

namespace app\controllers;


use app\models\Main;

class MainController extends AppController
{

  //public $layout = 'main';
  //public $view = 'main';

  public function indexAction()
  {

    $model = new Main;

    //$res = $model->query("CREATE TABLE posts SELECT * FROM yiitest.posts");

    $posts = $model->findAll();

    //debug($posts);

    $title = 'Page title';

    $this->set(compact('title','posts'));
  }
}
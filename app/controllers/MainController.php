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

    //$post = $model->findOne(4);



    //$data = $model->findBySql("SELECT * FROM {$model->table} ORDER BY id DESC LIMIT 2");
    //$data = $model->findBySql("SELECT * FROM {$model->table} WHERE title LIKE ?", ['%Советы%']);

    //$data = $model->findLike('пост', 'title');

    //debug($data );


    $title = 'Page title';

    $this->set(compact('title','posts', 'post'));
  }
}
<?php

namespace app\controllers;


use app\models\Main;
use vendor\core\App;

class MainController extends AppController
{

  //public $layout = 'main';
  //public $view = 'main';

  public function indexAction()
  {

    //App::$app->getList();
    \R::fancyDebug(true);
    $model = new Main;
    $posts = App::$app->cache->get('posts');

    if (!$posts) {
      $posts = \R::findAll('posts');

      App::$app->cache->set('posts', $posts);
      //App::$app->cache->set('posts', $posts, 3600 * 24);
    }






    //echo date('Y-m-d H:i:s', time());
    //echo '<br>';
    //echo date('Y-m-d H:i:s', 1533121292);

    $menu = $this->menu;


    $title = 'Page title';

    $this->setMeta('Главная страница', 'Описание главной страницы', 'Ключевые слова главной страницы');
    $meta = $this->meta;

    $this->set(compact('title','posts', 'post', 'menu', 'meta'));
  }

  public function testAction()
  {
    $this->layout = 'test';
  }

}
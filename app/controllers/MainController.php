<?php

namespace app\controllers;


use app\models\Main;
use fw\core\App;
use fw\core\base\View;
use fw\libs\Pagination;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MainController extends AppController
{

  //public $layout = 'main';
  //public $view = 'main';

  public function indexAction()
  {


    $model = new Main;

    $total = \R::count('posts');
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $perpage = 3;

    $pagination = new Pagination($page, $perpage, $total);
    $start = $pagination->getStart();

    $posts = \R::findAll('posts', "LIMIT $start, $perpage");




    View::setMeta('Заголовок главной страницы', 'Описание главной страницы', 'Ключевые слова главной страницы');
    //$this->setMeta('Главная страница', 'Описание главной страницы', 'Ключевые слова главной страницы');
    //$meta = $this->meta;

    $this->set(compact('title','posts', 'pagination', 'total'));
  }

  public function testAction()
  {
    if ($this->isAjax()) {

      $model = new Main();

      //$data = [
       // 'answer' => 'Ответ с сервера',
      //  'code' => 200,
      //];

      //echo json_encode($data);

      $post = \R::findOne('posts', "id = {$_POST['id']}");

      $this->loadView('_test', compact('post'));

      die;
    }
    echo 222;

    //$this->layout = 'test';
  }

}
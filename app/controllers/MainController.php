<?php

namespace app\controllers;


use app\models\Main;
use fw\core\App;
use fw\core\base\View;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class MainController extends AppController
{

  //public $layout = 'main';
  //public $view = 'main';

  public function indexAction()
  {


// create a log channel
    $log = new Logger('name');
    $log->pushHandler(new StreamHandler(ROOT . '/tmp/your.log', Logger::WARNING));

    // add records to the log
    $log->warning('Foo');
    $log->error('Bar');

    //\R::fancyDebug(true);
    $model = new Main;

    $posts = \R::findAll('posts');



    //trigger_error("E_USER_ERROR", E_USER_ERROR);
    $menu = $this->menu;


    $title = 'Page title';

    View::setMeta('Заголовок главной страницы', 'Описание главной страницы', 'Ключевые слова главной страницы');
    //$this->setMeta('Главная страница', 'Описание главной страницы', 'Ключевые слова главной страницы');
    //$meta = $this->meta;

    $this->set(compact('title','posts', 'post', 'menu', 'meta'));
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
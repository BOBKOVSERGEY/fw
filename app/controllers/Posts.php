<?php


class Posts
{
  public function __construct()
  {
    echo "Posts::__constructor";
  }

  public function indexAction()
  {
    echo "Метод Post::index";
  }
  public function testAction()
  {
    echo "Метод Post::test";
  }
  public function testPageAction()
  {
    echo "Метод Post::testPage";
  }

  public function before()
  {
    echo "Метод Post::before";
  }

}
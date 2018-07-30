<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$title;?></title>
  <link rel="stylesheet" href="/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="/css/main.css">

</head>
<body>
<div class="container">
  <p>Здесь меню нет</p>
  <div class="row">
    <div class="col-md-12">
      <nav class="nav nav-pills flex-column flex-sm-row">
        <?php if(!empty($menu)) {?>
          <?php foreach ($menu as $list) {?>
            <a class="flex-sm-fill text-sm-center nav-link" href="#"><?php echo $list->title; ?></a>
          <?php }?>
        <?php }?>
      </nav>
    </div>
  </div>
</div>
<?php echo $content; ?>

<p><?php //debug(\vendor\core\Db::$countSql); ?></p>
<p><?php //debug(\vendor\core\Db::$queries); ?></p>


<script src="/bootstrap/jquery-3.3.1.min.js"></script>
<script src="/bootstrap/bootstrap.min.js"></script>
</body>
</html>
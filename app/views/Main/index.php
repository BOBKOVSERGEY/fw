<div class="container">
  <div id="answer">

  </div>
  <button class="btn btn-info mb-5" id="send">Кнопка</button>
  <?php new \vendor\widgets\menu\Menu();?>
    <div class="row">
        <div class="col-md-12">
          <?php if(!empty($posts)) {?>
            <?php foreach ($posts as $post) {?>
                  <div class="card mb-3">
                      <div class="card-body">
                          <h5 class="card-title"><?php echo $post->title?></h5>
                          <p class="card-text"><?php echo $post->text?></p>
                      </div>
                  </div>
            <?php }?>
          <?php }?>
        </div>
    </div>
</div>
<script src="/js/test.js"></script>
<script>
  $(function () {
    $('#send').on('click', function () {
      $.ajax({
        // куда будет идти запрос
        url: '/main/test',
        // метод передачи данных
        type: 'post',
        // данные которые мы хотим передать
        'data': {'id':2},
        // при получении ответа в переменную res выведет ответ
        success: function (res) {
          //var data = JSON.parse(res);
          //$('#answer').html('<p>Ответ: ' + data.answer + ' | Код ответа: ' + data.code + '</p>');
          //console.log(res);

          $('#answer').html(res);
        },
        // если у нас возникнет ошибка с получением ответа
        error: function () {
          console.log('wrong');
        }
      });
    })
  })
</script>

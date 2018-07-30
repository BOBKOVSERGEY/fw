<div class="container">
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

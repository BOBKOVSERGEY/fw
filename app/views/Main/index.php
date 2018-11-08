<?php if (!empty($posts)) { ?>
  <?php foreach ($posts as $post) {?>
    <div class="content-grid-info">
      <img src="/blog/images/post1.jpg" alt=""/>
      <div class="post-info">
        <h4><a href="<?php echo $post->id;?>"><?php echo $post->title;?></a>  July 30, 2014 / 27 Comments</h4>
        <p><?php echo $post->excert;?></p>
        <a href="<?php echo $post->id;?>"><span></span><?php echo __('read_more');?></a>
      </div>
    </div>
  <?php } ?>
  <div class="text-center">
    <p>Статей: <?=count($posts);?> из <?=$total;?></p>
    <?php if($pagination->countPages > 1): ?>
      <?=$pagination;?>
    <?php endif; ?>
  </div>
<?php } else { ?>
  <h3>Posts not found</h3>
<?php } ?>

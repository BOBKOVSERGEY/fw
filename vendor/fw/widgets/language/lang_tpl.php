<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="lang">Язык</label>
  </div>
  <select class="custom-select" name="lang" id="lang">
    <option value="<?php echo $this->language['code']; ?>"><?php echo $this->language['title']; ?></option>
<?php foreach ($this->languages as $k => $v) {?>
  <?php if ($this->language['code'] != $k) {?>
    <option value="<?php echo $k; ?>"><?php echo $v['title']; ?></option>
  <?php } ?>
<?php }?>
  </select>
</div>
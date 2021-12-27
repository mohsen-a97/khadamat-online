<?php if (count($errors) > 0) : ?>
  <div class="error alert alert-success alert-dismissible alert-message">
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    <?php foreach ($errors as $error) : ?>
      <p><?php echo $error ?></p>
    <?php endforeach ?>
  </div>
<?php endif ?>
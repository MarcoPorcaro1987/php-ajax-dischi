<div class="container albums-cont">
  <?php foreach($database as $album) { ?>
    <div class="album-cont">
      <div class="album">
        <img src="<?php echo $album['poster']?> " alt="<?php echo $album['title']?>">
        <div class="title"><?php echo $album['title'] ?></div>
        <p class="author"><?php echo $album['author'] ?></p>
        <p class="year"><?php echo $album['year'] ?></h6>
      </div>
    </div>     
  <?php } ?>
</div>


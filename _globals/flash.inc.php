<?php if (count($_flashes) > 0):?>
 <div id="flashes">
  <?php foreach($_flashes as $f): ?>
   <h5 class="flash <?php echo $f['type'] ?>"><?php echo $f['msg'] ?></h5>
  <?php endforeach; ?>
 </div>
<?php endif; ?>
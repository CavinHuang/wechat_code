<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('sidebar'); ?>
  ##parent-placeholder-19bd1503d9bad449304cc6b4e977b74bac6cc771##
  
  <p>This is appended to the master sidebar.</p>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <?php echo e($title); ?>

  <?php echo e($abs); ?>

  <div class="article">
    <h1><?php echo $article['title'] ?></h1>
    <div class="content">
      <?php echo $article['content'] ?>
    </div>
  </div>
  <ul class="fuckme">
    <li>Fuck Me !</li>
    <li>
      <?php echo $fuck_me ?>
    </li>
  </ul>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
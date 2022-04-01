<?php $__env->startSection('content'); ?>
<section>
	<div class="row">
		<div class="col-md-5 col-sm-5">
			<img src='<?php echo e(URL::asset('img/photo.png')); ?>'>
		</div>
		<div class="col-md-7 col-sm-7">
			<h1>Здравствуйте, меня зовут <?php echo e($info->name); ?>.</h1>
			<div class="links ">
				<a href="<?php echo e(URL::asset('resume')); ?>">Резюме</a>
				<a href="<?php echo e(URL::asset('projects')); ?>">Проекты</a>
				<a href="<?php echo e(URL::asset('resume')); ?>">Навыки</a>
			</div>
			<p><?php echo e($info->about); ?></p>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
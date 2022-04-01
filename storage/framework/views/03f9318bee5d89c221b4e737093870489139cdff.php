<?php $__env->startSection('content'); ?>
<section>
	<h1 style="text-align:right;">Ваше письмо отправлено.</h1>
	<h3 style="text-align:right;">Как только я его прочту-я отвечу Вам</h3>
	<p style="text-align:right;">Спасибо за внимание, с уважением <?php echo e($info->name); ?> <?php echo e($info->family); ?>.</p>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
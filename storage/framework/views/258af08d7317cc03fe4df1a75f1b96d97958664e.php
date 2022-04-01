<?php $__env->startSection('content'); ?>
<section>
	<form class="form-horizontal" method="POST" action="<?php echo e(route('code_edit')); ?>">
    <?php echo e(csrf_field()); ?>

		
			<textarea class="form-control" rows="25" name="code"><?php echo e($data); ?></textarea>
		
		<button style="width:100%" type="submit">
			Save
		</button>
	</form>
	<h3>Отправить резюме</h3>
	<form method="post" action="send-mail-resume" accept-charset="UTF-8" >
		<?php echo e(csrf_field()); ?>

			<input type="email" name="email" placeholder="Email" required>
			<input type="submit">		
	</form>
	
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
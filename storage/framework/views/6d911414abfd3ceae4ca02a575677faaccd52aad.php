<?php $__env->startSection('content'); ?>
<section class="projects">
<p style="display: none;"><?php echo e($inc = 0); ?></p>
	<?php $__currentLoopData = $info->project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="row" >
			<div class="col-md-7 col-sm-7">
				<img src='<?php echo e(URL::asset($project->preview_img_link)); ?>' alt="preview"></img>
			</div>
			<div class="col-md-5 col-sm-5">
				<div class="project_num">
					<p>Проект <?php echo e(sprintf("%'.02d\n",++$inc)); ?></p>
				</div>
				<h1><?php echo e($project->name); ?></h1>
				<p><?php echo e($project->description); ?></p>
				</br>
				<a href="<?php echo e($project->link_heroku); ?>" target="_blank">>>смотреть</a>
			</div>
		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
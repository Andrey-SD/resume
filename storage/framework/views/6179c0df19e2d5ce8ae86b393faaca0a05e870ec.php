<?php $__env->startSection('content'); ?>

<section class="print">
	<div>
		<img src="<?php echo e(URL::asset('img/photo.png')); ?>" alt="photo">
	</div>
	<h1><?php echo e($info->name); ?> <?php echo e($info->family); ?></h1>
	<p><?php echo e($info->position); ?></p>
	<div class="row">
		<div class="col-md-6 col-sm-6 col-xs-6 lc">
			<div>
				<h2>Здравствуйте</h2>
				<p>Меня зовут <?php echo e($info->name); ?>, прошу рассмотреть мою кандидатуру на позицию <?php echo e($info->position); ?>.</p>
			</div>
			<div>
				<h2>Образование</h2>
				<?php $__currentLoopData = $info->education; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $education): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<p class="work_ch" style="margin-top:10px !important;"><?php echo e($education->date); ?></p>
				<p class="work_tar"><span><?php echo e($education->name); ?></span></p>
				<p class="work_tar"><?php echo e($education->lesson); ?></p>
				<p style="border-bottom: 1px dotted #8B8B8B; margin:5mm 0mm 7mm !important;"></p>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<div>
				<h2>Опыт работы</h2>
				<?php $__currentLoopData = $info->works; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $work): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<p><?php echo e($work->date); ?></p>
				<p><span><?php echo e($work->name); ?></span></p>
				<p><?php echo e($work->position); ?></p>
				<p style="border-bottom: 1px dotted #8B8B8B; margin:5mm 0mm 7mm !important;"><?php echo e($work->duties); ?></p>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6 rc">
			<div>
				<h2>Контакты</h2>
				<p><span>г.Днепр (Харьков)</span></p>
				<p><span>тел: </span><?php echo e($info->phone_number); ?> (Viber)</p>
				<p><span>e-mail: </span><?php echo e($info->email); ?></p>
				<a class="gitlink" href="https://github.com/Andrey-SD?tab=repositories" title="GitHub" target="_blank"> https://github.com/Andrey-SD</a>
				</br>
				<a class="facebook" href="https://www.facebook.com/profile.php?id=100017494866601" title="Facebook" target="_blank">
					https://www.facebook.com/profile.php?id=100017494866601</a>
				<br>
				<a class="telegram" href="https://t.me/andrey_sd" title="Telegram" target="_blank">
					@Andrey_SD</a>
			</div>
			<div>
				<h2>Навыки</h2>
				<dl>
					<dt>HTML</dt>
					<dt>CSS</dt>
					<ul>
						<li>Bootstrap</li>
					</ul>
					<dt>JavaScript</dt>
					<ul>
						<li>Ajax</li>
						<li>JQuery</li>
						<li>DOM</li>
					</ul>
					<dt>MYSQL</dt>
					<dt>PHP</dt>
					<ul>
						<li>Laravel</li>
					</ul>
					<dt>GitHub</dt>
				</dl>
			</div>
			<div>
				<h2>Увлечения</h2>
				<?php $__currentLoopData = $info->hobbi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<p><?php echo e($count); ?></p>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>

</section>
<div class="btnprn">
	<button id="print">Печать</button>
</div>





<script src="<?php echo e(URL::asset('js/print.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
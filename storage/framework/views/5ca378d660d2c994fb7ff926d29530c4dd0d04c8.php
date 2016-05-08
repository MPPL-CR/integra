<?php $__env->startSection('content'); ?>
<h1>Dashboard Anggota</h1>


		<div id="welcome-panel" class="welcome-panel">
			<input id="welcomepanelnonce" name="welcomepanelnonce" value="297df4163f" type="hidden">		
			
			<div class="welcome-panel-content">
			<h3>Selamat datang di Dasboard SIA!</h3>
			<p class="about-description"></p>
				<div class="welcome-panel-column-container">
				
				
				</div>
			</div>
		</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.t_anggota', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
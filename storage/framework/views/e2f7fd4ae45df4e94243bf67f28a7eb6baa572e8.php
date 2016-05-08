<?php $__env->startSection('content'); ?>
<h1>Pilih Genre Latihan</h1>
<form id="your-profile" action="<?php echo e(URL::to('/insertGenre')); ?>" method="post" novalidate="novalidate">
<?php echo e(csrf_field()); ?>


<table class="form-table">
	<tbody><tr class="user-user-login-wrap">
		<th><label for="user_login">NRP</label></th>
		<td><input name="kelompok" id="user_login"   value=" <?php echo Session::get('Anggota');  ?>"class="regular-text" type="text"> </td>
	</tr>


<tr class="user-first-name-wrap">
	<th><label for="display_name">Genre 1</label></th>
	<td>
		<select name="genre1" id="display_name">
					<option >-Pilih</option>
					<option value="1">Banjari Laki-laki</option>
					<option value="2">Banjari Perempuan</option>
					<option value="3">Vokal Laki-laki</option>
					<option value="4">Vokal Perempuan</option>
				</select>
	</td>
</tr>
<tr class="user-first-name-wrap">
	<th><label for="display_name">Genre 2</label></th>
	<td>
		<select name="genre2" id="display_name">
					<option >-Pilih</option>
					<option value="1">Banjari Laki-laki</option>
					<option value="2">Banjari Perempuan</option>
					<option value="3">Vokal Laki-laki</option>
					<option value="4">Vokal Perempuan</option>
				</select>
	</td>
</tr>


</tbody></table>
<p class="submit"><input name="submit" id="submit" class="button button-primary" value="Selesai" type="submit"></p>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.t_anggota', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
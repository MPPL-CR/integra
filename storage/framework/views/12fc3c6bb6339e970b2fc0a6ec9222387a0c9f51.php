<?php $__env->startSection('content'); ?>
<h1>Edit Profile</h1>
<form id="your-profile" novalidate="novalidate">
<?php echo e(csrf_field()); ?>

<?php foreach($result as $anggota): ?>
<table class="form-table">
	<tbody><tr class="user-user-login-wrap">
		<th><label for="user_login">Nama</label></th>
		<td><label for="user_login">: <?php {{ echo $anggota->nama; }} ?></label> </td>
	</tr>


<tr class="user-first-name-wrap">
	<th><label for="first_name">NRP</label></th>
	<td><label for="user_login">: <?php {{ echo $anggota->NRP; }} ?></label></td>
</tr>

<tr class="user-last-name-wrap">
	<th><label for="last_name">Jurusan</label></th>
	<td><label for="user_login">: <?php {{ echo $anggota->jurusan; }} ?></label></td>
</tr>


<tr class="user-nickname-wrap">
	<th><label for="nickname">Tgl Lahir</label></th>
	<td><label for="user_login">: <?php {{ echo $anggota->tanggal; }} ?></label></td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">Alamat Asal</label></th>
	<td><label for="user_login">: <?php {{ echo $anggota->alamatasli; }} ?></label></td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">Alamat Surabaya</label></th>
	<td><label for="user_login">: <?php {{ echo $anggota->alamatsurabaya; }} ?></label></td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">Email</label></th>
	<td><label for="user_login">: <?php {{ echo $anggota->email; }} ?></label></td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">No.Hp</label></th>
	<td><label for="user_login">: <?php {{ echo $anggota->telepon; }} ?></label></td>
</tr>

<tr class="user-nickname-wrap">
	<th><label for="nickname">Keanggotaan</label></th>
	<td>
		
		<label for="user_login">: <?php {{ echo $anggota->keanggotaan; }} ?></label>
	</td>
</tr>
<tr class="user-nickname-wrap">
	<th><label for="nickname">Status Keanggotaan</label></th>
	<td>
		<label for="user_login">: <?php {{ echo $anggota->status; }} ?></label>
	</td>
</tr>

</tbody></table>
<p class="submit"><a href="<?php echo e(URL::to('/edit')); ?>/<?php {{ echo $anggota->NRP; }} ?>"  class="button button-primary" >Edit Profil</a></p>

<?php endforeach; ?>
</form>

	</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.t_admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
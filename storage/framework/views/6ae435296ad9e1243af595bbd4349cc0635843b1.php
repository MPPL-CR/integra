<?php $__env->startSection('content'); ?>
<div class="row">

      <!-- Blog Post Content Column -->
		 <div class="col-lg-12">

        <!-- Blog Post -->

        <!-- Title -->
        
		<img class="img-responsive " src="<?php echo e(asset('assets/img/header-1.png')); ?>" alt="">
		

        <!-- Author -->
        <!--p class="lead">
          by <a href="#">MD Bootstrap</a>
        </p-->

        <hr>

        <!-- Date/Time -->
        

        <hr>

        <!-- Preview Image -->
        <!--img class="img-responsive z-depth-2" src="img/project1.png" alt=""-->

       

        <!-- Post Content -->
       
       

       


      </div>


      <!-- Blog Sidebar Widgets Column -->
      <div class="col-md-6">
        <div class="">

          <!-- Subscription widget -->
         
            <div class="row">
              <div class="col-md-12" style="margin-left:250px;">
			 <div style="margin;auto;"> <p style="text-align:center;"><h5><strong>Hasil Pencarian</strong></h5></p></div>
				<div class="table-responsive" >
					<table class="table table-bordered">
						<tr>
							<th>No</th>
							<th>Nama Kelompok</th>
							<th>Genre</th>
							<th>Mentor</th>
							<th>Jadwal</th>
							<th>Hp</th>
						</tr>
						<?php $i=1; ?>
						<?php foreach($result as $anggota): ?>
						<tr>
							<th><?php echo $i++; ?></th>
							<th><a href="<?php echo e(URL::to('/lihatKelompok')); ?>/<?php echo e($anggota->nama_kelompok); ?>"><?php echo e($anggota->nama_kelompok); ?></a></th>
							<th>
								<?php
									if( $anggota->genre ==1){
										echo "Banjari laki-laki";
									}else if($anggota->genre ==2){
										echo "Banjari perempuan";
									}else if($anggota->genre ==3){
										echo "vokal Laki-laki";
									}else{
										echo "vokal perempuan";
									}
								?>
							
							</th>
							<th><?php echo e($anggota->mentor); ?></th>
							<th><?php echo e($anggota->jadwal); ?></th>
							<th><?php echo e($anggota->hp); ?></th>
						</tr>
						<?php endforeach; ?>
					</table>
				</div>
                
              </div>
             
            </div>
          
          <!--/.Subscription widget -->
          <br>
          <!-- Category widget -->
          <!--h4>Categories</h4>
          <div class="collection ">
            <a href="#!" class="collection-item">Category 1</a>
            <a href="#!" class="collection-item active">Category 1</a>
            <a href="#!" class="collection-item">Category 1</a>
            <a href="#!" class="collection-item">Category 1</a>
            <a href="#!" class="collection-item">Category 1</a>
            <a href="#!" class="collection-item">Category 1</a>
          </div-->

        </div>
      </div>

    </div>
    <!-- /.row -->

    <hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.t_index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
							<th>Nama</th>
							<th>NRP</th>
							<th>Jurusan</th>
							<th>Alamat Surabaya</th>
						</tr>
						<?php $i=1; ?>
						<?php foreach($result as $anggota): ?>
						<tr>
							<th><?php echo $i++; ?></th>
							<th><?php echo e($anggota->nama); ?></th>
							<th><?php echo e($anggota->NRP); ?></th>
							<th><?php echo e($anggota->jurusan); ?></th>
							<th><?php echo e($anggota->alamatsurabaya); ?></th>
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
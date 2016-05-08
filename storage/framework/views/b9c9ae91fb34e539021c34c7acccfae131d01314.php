<?php $__env->startSection('content'); ?>
<div class="row">

      <!-- Blog Post Content Column -->
     

      <!-- Blog Sidebar Widgets Column -->
      <div class="col-md-6">
        <div class="">

          <!-- Subscription widget -->
          <div class="card-panel">
            <div class="row">
              <form id="cari" class="col-md-12" method="post" action="<?php echo e(URL::to('/search')); ?>">
                <h5>Cari Data Anggota</h5>
                <?php echo e(csrf_field()); ?>

                <br>
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input name="nama" id="icon_prefix" type="text" class="validate" placeholder="Search by name">
                  <label for="icon_prefix">Nama</label>
                </div>
               
				 <div class="text-center">
                <button type="submit" class="btn btn-info waves-effect waves-light">Cari</button>
				
              </div>
              </form>
             
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
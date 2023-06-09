<?php $__env->startSection('content'); ?>
    <main>
        <h1>BIKE ROLL</h1>
        
    
        </div>
        <h3><a href="<?php echo e(url('logout')); ?>">Cerrar sesión</a></h3>
    </main>
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Gestionar carreras</text></svg>
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="<?php echo e(url('editarCarrera')); ?>">Ver todas</a>
                    <a class="btn btn-sm btn-outline-secondary" href="<?php echo e(url('anyadirCarrera')); ?>">Añadir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Gestionar aseguradoras</text></svg>
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="<?php echo e(url('mostrarTodosAs')); ?>">Ver todas</a>
                    <a class="btn btn-sm btn-outline-secondary" href="<?php echo e(url('anyadirAseguradora')); ?>">Añadir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Gestionar sponsors</text></svg>
              <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a class="btn btn-sm btn-outline-secondary" href="<?php echo e(url('mostrarSponsors')); ?>">Ver todos</a>
                    <a class="btn btn-sm btn-outline-secondary" href="<?php echo e(url('anyadirSponsor')); ?>">Añadir</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\bikerollSalma_\resources\views/admin/paginaPrincipal.blade.php ENDPATH**/ ?>
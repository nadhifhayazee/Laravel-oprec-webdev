<?php $__env->startSection('jumbotron'); ?>

    <div class="jumbotron center" id="jumbo">
        <div class="container">
            <img class="center-block" src="/img/webdev.jpg" alt="" srcset="">
            <h1 class="text-center">Webdev Open Recruitment</h1>
            <hr>
            
                <a href="/webdev/create"><button class="btn btn-primary center-block"><i class="glyphicon glyphicon-plus"></i> Buat Baru</button></a>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container tabel">
            <table class="table table-bordered text-center">

                    <thead>
                        <tr>
                                <th class="text-center" >No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">ID LINE</th>
                                <th class="text-center">NO HP</th>
                                <th class="text-center">Minat</th>
                                <th class="text-center">Opsi</th>
                        </tr>
                    </thead>
                    

                    <?php ($i = 1); ?>
                    <?php $__currentLoopData = $webdevs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $webdev): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <form action="/webdev/<?php echo e($webdev->id); ?>" method="POST">
                        <tr>
                            <td><?php echo e($i); ?></td>
                            <td><?php echo e($webdev->nama); ?></td>
                            <td><?php echo e($webdev->kelas); ?></td>
                            <td><?php echo e($webdev->line_id); ?></td>
                            <td><?php echo e($webdev->nope); ?></td>
                            <td><?php echo e($webdev->minat); ?></td>
                            <td><a href="/webdev/<?php echo e($webdev->id); ?>/edit"><i class="glyphicon glyphicon-pencil"></i></a>   
                                
                                    <button type="submit" name="submit" class="btn btn-link"> <i class="glyphicon glyphicon-trash"></i></button>
                                    <?php echo e(csrf_field()); ?>

                                    <input type="hidden" name="_method" value="DELETE">
                                
                               </tr>
                            </form>
                              

                        <?php ( $i++ ); ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
                </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
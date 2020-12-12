<form action="<?php echo e(url('/usuarios/'.$usuario->id)); ?>" method="post"  enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>

<?php echo e(method_field('PATCH')); ?>


<?php echo $__env->make('usuarios.form',['Modo'=>'editar'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




</form> 
        
<?php /**PATH C:\xampp\htdocs\actividad_final_6_trimestre_2020\resources\views/usuarios/edit.blade.php ENDPATH**/ ?>
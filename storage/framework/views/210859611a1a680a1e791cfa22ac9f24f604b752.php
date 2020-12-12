<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Cedula</th>
            <th>Primer_Nombre</th>
            <th>Segundo_Nombre</th>
            <th>Apellidos</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>Ciudad</th>
            <th>Acciones</th>
            
          

        </tr>
    </thead>

    <tbody>

    <?php $__currentLoopData = $Usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($usuario->Cedula); ?></td>
            <td><?php echo e($usuario->Primer_Nombre); ?></td>
            <td><?php echo e($usuario->Segundo_Nombre); ?></td>
            <td><?php echo e($usuario->Apellidos); ?></td>
            <td><?php echo e($usuario->Telefono); ?></td>
            <td><?php echo e($usuario->Dirreccion); ?></td>
            <td><?php echo e($usuario->Ciudad); ?></td>
            <td>

            <a href="<?php echo e(url('/usuarios/'.$usuario->id.'/edit')); ?>">
            Editar
            </a>

            
            <form method="post" action="<?php echo e(url('/usuarios/'.$usuario->id)); ?>">
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('DELETE')); ?>

            <button type="submit" onclick="return confirm('¿Borrar?');">BORRAR</button>
                

        
            </form>
            
             </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>     
    </tbody>
</table><?php /**PATH C:\xampp\htdocs\actividad_final_6_trimestre_2020\resources\views/usuarios/index.blade.php ENDPATH**/ ?>
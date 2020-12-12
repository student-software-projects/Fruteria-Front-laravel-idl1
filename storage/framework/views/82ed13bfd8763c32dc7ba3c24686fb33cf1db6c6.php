

<form action="<?php echo e(url('/')); ?>"method="get" enctype="multipart/form-data">
<?php echo e(csrf_field()); ?>


<label for="Cedula"><?php echo e('Cedula'); ?></label><br>
<input type="number" name="Cedula" id="Cedula" value="">
<br>

<label for="Primer Nombre"><?php echo e('Primer Nombre'); ?></label><br>
<input type="text" name="Primer Nombre" id="Primer Nombre" value="">
<br>

<label for="Segundo Nombre"><?php echo e('Segundo Nombre'); ?></label><br>
<input type="text" name="Segundo Nombre" id="Segundo Nombre" value="">
<br>

<label for="Apellidos"><?php echo e('Apellidos'); ?></label><br>
<input type="text" name="Apellidos" id="Apellidos" value="">
<br>

<label for="Telefono"><?php echo e('Telefono'); ?></label><br>
<input type="tel" name="Telefono" id="Telefono" value="">
<br>

<label for="Direccion"><?php echo e('Direccion'); ?></label><br>
<input type="text" name="Direccion" id="Direccion" value="">
<br>

<label for="Ciudad"><?php echo e('Ciudad'); ?></label><br>
<input type="text" name="Ciudad" id="Ciudad" value="">
<br>
 
<input type="submit" value="Agregar">


</form>        
<?php /**PATH C:\Users\lenovo\OneDrive\Documentos\laravel\actividad_final_6_trimestre_2020\resources\views/Usuarios/create.blade.php ENDPATH**/ ?>
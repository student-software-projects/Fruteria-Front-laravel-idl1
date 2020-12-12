 
<label for="Cedula"><?php echo e('Cedula'); ?></label>  <br>
<input type="number" name="Cedula" id="Cedula" 

value="<?php echo e(isset($usuario->cedula)?$$usuario->cedula:''); ?>"
>
<br>

<label for="Primer_Nombre"><?php echo e('Primer Nombre'); ?></label> <br>
<input type="text" name="Primer_Nombre" id="Primer_Nombre" 

value="<?php echo e(isset($usuario->primer_nombre)?$$usuario->primer_nombre:''); ?>"
>
<br>

<label for="Segundo_Nombre"><?php echo e('Segundo Nombre'); ?></label> <br>
<input type="text" name="Segundo_Nombre" id="Segundo_Nombre" 

value="<?php echo e(isset($usuario->segundo_nombre)?$$usuario->segundo_nombre:''); ?>"
>
<br>

<label for="Apellidos"><?php echo e('Apellidos'); ?></label> <br>
<input type="text" name="Apellidos" id="Apellidos" 

value="<?php echo e(isset($usuario->apellidos)?$$usuario->apellidos:''); ?>" 
> 
<br>

<label for="Telefono"><?php echo e('Telefono'); ?></label> <br>
<input type="text" name="Telefono" id="Telefono" 

value="<?php echo e(isset($usuario->telefono)?$$usuario->telefono:''); ?>"
>
<br>

<label for="Direccion"><?php echo e('Direccion'); ?></label> <br> 
<input type="text" name="Direccion" id="Direccion" 

value="<?php echo e(isset($usuario->direccion)?$$usuario->direccion:''); ?>"
>
<br>

<label for="Ciudad"><?php echo e('Ciudad'); ?></label> <br>
<input type="text" name="Ciudad" id="Ciudad"

value="<?php echo e(isset($usuario->ciudad)?$$usuario->ciudad:''); ?>"
>
<br>
 
<input type="submit" value="<?php echo e($Modo=='crear'?'Agregar ':'Modificar '); ?>">

<a href="<?php echo e(url('usuarios')); ?>">Regresar</a>
<?php /**PATH C:\xampp\htdocs\actividad_final_6_trimestre_2020\resources\views/usuarios/form.blade.php ENDPATH**/ ?>
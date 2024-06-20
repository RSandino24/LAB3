<h1>Lista de tareas</h1>
<a href="/tasks/create">Crear</a>
<ul>
    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li>
         <a href="/tasks/<?php echo e($task->id); ?>"><?php echo e($task->name); ?></a> <button>Completar</button>  
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul><?php /**PATH C:\Users\Alonso\Documents\tasks\resources\views/tasks/index.blade.php ENDPATH**/ ?>
<h1>Tarea ID: <?php echo e($task->id); ?></h1>
<hr>
<h2><?php echo e($task->name); ?></h2>
<p><?php echo e($task->description); ?></p>

<a href="/tasks/<?php echo e($task->id); ?>/edit">Editar</a><?php /**PATH C:\Users\Alonso\Documents\tasks\resources\views/tasks/show.blade.php ENDPATH**/ ?>
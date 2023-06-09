<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <div class="flex justify-between">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Film')); ?>

        </h2>
        <a href="<?php echo e(route('film.create')); ?>" class="border border-green-500 hover:bg-green-500 hover:text-white px-4 py-2 rounded-md">Create</a>
        </div>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Judul</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Tahun Rilis</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Dibuat</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            
                            <?php $__currentLoopData = $films; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"><?php echo e($film->judul); ?></td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"><?php echo e($film->tahun_rilis); ?></td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400"><?php echo e($film->created_at); ?></td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                        
                                        <a href="<?php echo e(route('film.edit', $film->id)); ?>" class="border border-yellow-500 hover:bg-yellow-500 hover:text-white px-4 py-2 rounded-md">EDIT</a>
                                        
                                        <form method="post" action="<?php echo e(route('film.destroy', $film->id)); ?>" class="inline">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button class="border border-red-500 hover:bg-red-500 hover:text-white px-4 py-2 rounded-md">DELETE</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\DNCC\coba-breeze\resources\views/film/index.blade.php ENDPATH**/ ?>
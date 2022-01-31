<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Glossary')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="container flex justify-center mx-auto">
                <div class="flex flex-col">
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table>
                                <thead style="border-bottom: 1px solid lightgray;" class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-2 text-xs">
                                        ID
                                    </th>
                                    <th class="px-6 py-2 text-xs">
                                        Term
                                    </th>
                                    <th class="px-6 py-2 text-xs">
                                        Definition
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white">
                                <?php $__currentLoopData = $terms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $term): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr style="border-bottom: 1px solid lightgray;" class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500">
                                        <?php echo e($term->id); ?>

                                    </td>
                                    <td  class="px-6 py-4">
                                        <div class="text-sm text-gray-900 ">
                                            <?php echo e($term->term); ?>

                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="text-sm text-gray-500">
                                            <?php echo e($term->definition); ?>

                                        </div>
                                    </td>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH /Users/wojciechreluga/University/level 6/Enterprise system development/Medical-App/resources/views/glossary/index.blade.php ENDPATH**/ ?>
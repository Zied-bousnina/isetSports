<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRG9hgIT\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRG9hgIT/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRG9hgIT.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRG9hgIT\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRG9hgIT\App_KernelDevDebugContainer([
    'container.build_hash' => 'RG9hgIT',
    'container.build_id' => '0ea44573',
    'container.build_time' => 1651757163,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRG9hgIT');

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLjcmeU7\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLjcmeU7/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLjcmeU7.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLjcmeU7\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLjcmeU7\App_KernelDevDebugContainer([
    'container.build_hash' => 'LjcmeU7',
    'container.build_id' => '3d3fceeb',
    'container.build_time' => 1661541923,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLjcmeU7');

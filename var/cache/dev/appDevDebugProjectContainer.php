<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerReeoadb\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerReeoadb/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerReeoadb.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerReeoadb\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerReeoadb\appDevDebugProjectContainer([
    'container.build_hash' => 'Reeoadb',
    'container.build_id' => '7d84f7b8',
    'container.build_time' => 1551584185,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerReeoadb');

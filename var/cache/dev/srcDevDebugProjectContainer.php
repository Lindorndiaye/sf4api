<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDP4p0xO\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDP4p0xO/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerDP4p0xO.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerDP4p0xO\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerDP4p0xO\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'DP4p0xO',
    'container.build_id' => '1a01d8d6',
    'container.build_time' => 1522927943,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerDP4p0xO');

<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'cache.system_clearer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheClearer\\CacheClearerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\http-kernel\\CacheClearer\\Psr6CacheClearer.php';

return $this->services['cache.system_clearer'] = new \Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer(array('cache.system' => ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->load(__DIR__.'/getCache_SystemService.php')) && false ?: '_'}));

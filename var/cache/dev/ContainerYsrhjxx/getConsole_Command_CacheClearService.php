<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_clear' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\dependency-injection\\ContainerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Command\\ContainerAwareCommand.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Command\\CacheClearCommand.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\filesystem\\Filesystem.php';

$this->services['console.command.cache_clear'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CacheClearCommand(${($_ = isset($this->services['cache_clearer']) ? $this->services['cache_clearer'] : $this->load(__DIR__.'/getCacheClearerService.php')) && false ?: '_'}, ${($_ = isset($this->services['filesystem']) ? $this->services['filesystem'] : $this->services['filesystem'] = new \Symfony\Component\Filesystem\Filesystem()) && false ?: '_'});

$instance->setName('cache:clear');

return $instance;

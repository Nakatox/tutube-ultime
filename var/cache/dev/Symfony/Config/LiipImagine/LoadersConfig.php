<?php

namespace Symfony\Config\LiipImagine;

require_once __DIR__.\DIRECTORY_SEPARATOR.'LoadersConfig'.\DIRECTORY_SEPARATOR.'StreamConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LoadersConfig'.\DIRECTORY_SEPARATOR.'FilesystemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LoadersConfig'.\DIRECTORY_SEPARATOR.'FlysystemConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LoadersConfig'.\DIRECTORY_SEPARATOR.'ChainConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class LoadersConfig 
{
    private $stream;
    private $filesystem;
    private $flysystem;
    private $chain;
    
    public function stream(array $value = []): \Symfony\Config\LiipImagine\LoadersConfig\StreamConfig
    {
        if (null === $this->stream) {
            $this->stream = new \Symfony\Config\LiipImagine\LoadersConfig\StreamConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "stream()" has already been initialized. You cannot pass values the second time you call stream().');
        }
    
        return $this->stream;
    }
    
    public function filesystem(array $value = []): \Symfony\Config\LiipImagine\LoadersConfig\FilesystemConfig
    {
        if (null === $this->filesystem) {
            $this->filesystem = new \Symfony\Config\LiipImagine\LoadersConfig\FilesystemConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "filesystem()" has already been initialized. You cannot pass values the second time you call filesystem().');
        }
    
        return $this->filesystem;
    }
    
    public function flysystem(array $value = []): \Symfony\Config\LiipImagine\LoadersConfig\FlysystemConfig
    {
        if (null === $this->flysystem) {
            $this->flysystem = new \Symfony\Config\LiipImagine\LoadersConfig\FlysystemConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "flysystem()" has already been initialized. You cannot pass values the second time you call flysystem().');
        }
    
        return $this->flysystem;
    }
    
    public function chain(array $value = []): \Symfony\Config\LiipImagine\LoadersConfig\ChainConfig
    {
        if (null === $this->chain) {
            $this->chain = new \Symfony\Config\LiipImagine\LoadersConfig\ChainConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "chain()" has already been initialized. You cannot pass values the second time you call chain().');
        }
    
        return $this->chain;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['stream'])) {
            $this->stream = new \Symfony\Config\LiipImagine\LoadersConfig\StreamConfig($value['stream']);
            unset($value['stream']);
        }
    
        if (isset($value['filesystem'])) {
            $this->filesystem = new \Symfony\Config\LiipImagine\LoadersConfig\FilesystemConfig($value['filesystem']);
            unset($value['filesystem']);
        }
    
        if (isset($value['flysystem'])) {
            $this->flysystem = new \Symfony\Config\LiipImagine\LoadersConfig\FlysystemConfig($value['flysystem']);
            unset($value['flysystem']);
        }
    
        if (isset($value['chain'])) {
            $this->chain = new \Symfony\Config\LiipImagine\LoadersConfig\ChainConfig($value['chain']);
            unset($value['chain']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->stream) {
            $output['stream'] = $this->stream->toArray();
        }
        if (null !== $this->filesystem) {
            $output['filesystem'] = $this->filesystem->toArray();
        }
        if (null !== $this->flysystem) {
            $output['flysystem'] = $this->flysystem->toArray();
        }
        if (null !== $this->chain) {
            $output['chain'] = $this->chain->toArray();
        }
    
        return $output;
    }
    

}

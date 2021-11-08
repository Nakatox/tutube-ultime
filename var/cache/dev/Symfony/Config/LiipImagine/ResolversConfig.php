<?php

namespace Symfony\Config\LiipImagine;

require_once __DIR__.\DIRECTORY_SEPARATOR.'ResolversConfig'.\DIRECTORY_SEPARATOR.'WebPathConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ResolversConfig'.\DIRECTORY_SEPARATOR.'AwsS3Config.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'ResolversConfig'.\DIRECTORY_SEPARATOR.'FlysystemConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ResolversConfig 
{
    private $webPath;
    private $awsS3;
    private $flysystem;
    
    public function webPath(array $value = []): \Symfony\Config\LiipImagine\ResolversConfig\WebPathConfig
    {
        if (null === $this->webPath) {
            $this->webPath = new \Symfony\Config\LiipImagine\ResolversConfig\WebPathConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "webPath()" has already been initialized. You cannot pass values the second time you call webPath().');
        }
    
        return $this->webPath;
    }
    
    public function awsS3(array $value = []): \Symfony\Config\LiipImagine\ResolversConfig\AwsS3Config
    {
        if (null === $this->awsS3) {
            $this->awsS3 = new \Symfony\Config\LiipImagine\ResolversConfig\AwsS3Config($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "awsS3()" has already been initialized. You cannot pass values the second time you call awsS3().');
        }
    
        return $this->awsS3;
    }
    
    public function flysystem(array $value = []): \Symfony\Config\LiipImagine\ResolversConfig\FlysystemConfig
    {
        if (null === $this->flysystem) {
            $this->flysystem = new \Symfony\Config\LiipImagine\ResolversConfig\FlysystemConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "flysystem()" has already been initialized. You cannot pass values the second time you call flysystem().');
        }
    
        return $this->flysystem;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['web_path'])) {
            $this->webPath = new \Symfony\Config\LiipImagine\ResolversConfig\WebPathConfig($value['web_path']);
            unset($value['web_path']);
        }
    
        if (isset($value['aws_s3'])) {
            $this->awsS3 = new \Symfony\Config\LiipImagine\ResolversConfig\AwsS3Config($value['aws_s3']);
            unset($value['aws_s3']);
        }
    
        if (isset($value['flysystem'])) {
            $this->flysystem = new \Symfony\Config\LiipImagine\ResolversConfig\FlysystemConfig($value['flysystem']);
            unset($value['flysystem']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->webPath) {
            $output['web_path'] = $this->webPath->toArray();
        }
        if (null !== $this->awsS3) {
            $output['aws_s3'] = $this->awsS3->toArray();
        }
        if (null !== $this->flysystem) {
            $output['flysystem'] = $this->flysystem->toArray();
        }
    
        return $output;
    }
    

}

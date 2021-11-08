<?php

namespace Symfony\Config\LiipImagine;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Webp'.\DIRECTORY_SEPARATOR.'PostProcessorsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class WebpConfig 
{
    private $generate;
    private $quality;
    private $cache;
    private $dataLoader;
    private $postProcessors;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function generate($value): self
    {
        $this->generate = $value;
    
        return $this;
    }
    
    /**
     * @default 100
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function quality($value): self
    {
        $this->quality = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): self
    {
        $this->cache = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dataLoader($value): self
    {
        $this->dataLoader = $value;
    
        return $this;
    }
    
    public function postProcessors(string $name, array $value = []): \Symfony\Config\LiipImagine\Webp\PostProcessorsConfig
    {
        if (!isset($this->postProcessors[$name])) {
            return $this->postProcessors[$name] = new \Symfony\Config\LiipImagine\Webp\PostProcessorsConfig($value);
        }
        if ([] === $value) {
            return $this->postProcessors[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "postProcessors()" has already been initialized. You cannot pass values the second time you call postProcessors().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['generate'])) {
            $this->generate = $value['generate'];
            unset($value['generate']);
        }
    
        if (isset($value['quality'])) {
            $this->quality = $value['quality'];
            unset($value['quality']);
        }
    
        if (isset($value['cache'])) {
            $this->cache = $value['cache'];
            unset($value['cache']);
        }
    
        if (isset($value['data_loader'])) {
            $this->dataLoader = $value['data_loader'];
            unset($value['data_loader']);
        }
    
        if (isset($value['post_processors'])) {
            $this->postProcessors = array_map(function ($v) { return new \Symfony\Config\LiipImagine\Webp\PostProcessorsConfig($v); }, $value['post_processors']);
            unset($value['post_processors']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->generate) {
            $output['generate'] = $this->generate;
        }
        if (null !== $this->quality) {
            $output['quality'] = $this->quality;
        }
        if (null !== $this->cache) {
            $output['cache'] = $this->cache;
        }
        if (null !== $this->dataLoader) {
            $output['data_loader'] = $this->dataLoader;
        }
        if (null !== $this->postProcessors) {
            $output['post_processors'] = array_map(function ($v) { return $v->toArray(); }, $this->postProcessors);
        }
    
        return $output;
    }
    

}

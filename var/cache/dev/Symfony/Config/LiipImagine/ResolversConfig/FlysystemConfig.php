<?php

namespace Symfony\Config\LiipImagine\ResolversConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FlysystemConfig 
{
    private $filesystemService;
    private $cachePrefix;
    private $rootUrl;
    private $visibility;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filesystemService($value): self
    {
        $this->filesystemService = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cachePrefix($value): self
    {
        $this->cachePrefix = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rootUrl($value): self
    {
        $this->rootUrl = $value;
    
        return $this;
    }
    
    /**
     * @default 'public'
     * @param ParamConfigurator|'public'|'private'|'noPredefinedVisibility' $value
     * @return $this
     */
    public function visibility($value): self
    {
        $this->visibility = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['filesystem_service'])) {
            $this->filesystemService = $value['filesystem_service'];
            unset($value['filesystem_service']);
        }
    
        if (isset($value['cache_prefix'])) {
            $this->cachePrefix = $value['cache_prefix'];
            unset($value['cache_prefix']);
        }
    
        if (isset($value['root_url'])) {
            $this->rootUrl = $value['root_url'];
            unset($value['root_url']);
        }
    
        if (isset($value['visibility'])) {
            $this->visibility = $value['visibility'];
            unset($value['visibility']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->filesystemService) {
            $output['filesystem_service'] = $this->filesystemService;
        }
        if (null !== $this->cachePrefix) {
            $output['cache_prefix'] = $this->cachePrefix;
        }
        if (null !== $this->rootUrl) {
            $output['root_url'] = $this->rootUrl;
        }
        if (null !== $this->visibility) {
            $output['visibility'] = $this->visibility;
        }
    
        return $output;
    }
    

}

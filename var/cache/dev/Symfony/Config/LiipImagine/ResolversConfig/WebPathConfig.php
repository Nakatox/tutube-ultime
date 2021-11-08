<?php

namespace Symfony\Config\LiipImagine\ResolversConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class WebPathConfig 
{
    private $webRoot;
    private $cachePrefix;
    
    /**
     * @default '%kernel.project_dir%/public'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function webRoot($value): self
    {
        $this->webRoot = $value;
    
        return $this;
    }
    
    /**
     * @default 'media/cache'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cachePrefix($value): self
    {
        $this->cachePrefix = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['web_root'])) {
            $this->webRoot = $value['web_root'];
            unset($value['web_root']);
        }
    
        if (isset($value['cache_prefix'])) {
            $this->cachePrefix = $value['cache_prefix'];
            unset($value['cache_prefix']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->webRoot) {
            $output['web_root'] = $this->webRoot;
        }
        if (null !== $this->cachePrefix) {
            $output['cache_prefix'] = $this->cachePrefix;
        }
    
        return $output;
    }
    

}

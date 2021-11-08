<?php

namespace Symfony\Config\LiipImagine;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class TwigConfig 
{
    private $mode;
    private $assetsVersion;
    
    /**
     * Twig mode: none/lazy/legacy (default)
     * @default 'legacy'
     * @param ParamConfigurator|'none'|'lazy'|'legacy' $value
     * @return $this
     */
    public function mode($value): self
    {
        $this->mode = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function assetsVersion($value): self
    {
        $this->assetsVersion = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['mode'])) {
            $this->mode = $value['mode'];
            unset($value['mode']);
        }
    
        if (isset($value['assets_version'])) {
            $this->assetsVersion = $value['assets_version'];
            unset($value['assets_version']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->mode) {
            $output['mode'] = $this->mode;
        }
        if (null !== $this->assetsVersion) {
            $output['assets_version'] = $this->assetsVersion;
        }
    
        return $output;
    }
    

}

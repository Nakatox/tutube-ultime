<?php

namespace Symfony\Config\LiipImagine\LoadersConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class StreamConfig 
{
    private $wrapper;
    private $context;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function wrapper($value): self
    {
        $this->wrapper = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function context($value): self
    {
        $this->context = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['wrapper'])) {
            $this->wrapper = $value['wrapper'];
            unset($value['wrapper']);
        }
    
        if (isset($value['context'])) {
            $this->context = $value['context'];
            unset($value['context']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->wrapper) {
            $output['wrapper'] = $this->wrapper;
        }
        if (null !== $this->context) {
            $output['context'] = $this->context;
        }
    
        return $output;
    }
    

}

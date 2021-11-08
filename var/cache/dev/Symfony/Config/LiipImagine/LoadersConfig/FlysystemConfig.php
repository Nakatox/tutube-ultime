<?php

namespace Symfony\Config\LiipImagine\LoadersConfig;


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
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['filesystem_service'])) {
            $this->filesystemService = $value['filesystem_service'];
            unset($value['filesystem_service']);
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
    
        return $output;
    }
    

}

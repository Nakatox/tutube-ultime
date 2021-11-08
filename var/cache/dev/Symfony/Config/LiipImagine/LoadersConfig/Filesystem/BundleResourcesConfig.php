<?php

namespace Symfony\Config\LiipImagine\LoadersConfig\Filesystem;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class BundleResourcesConfig 
{
    private $enabled;
    private $accessControlType;
    private $accessControlList;
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * Sets the access control method applied to bundle names in "access_control_list" into a blacklist or whitelist.
     * @default 'blacklist'
     * @param ParamConfigurator|'blacklist'|'whitelist' $value
     * @return $this
     */
    public function accessControlType($value): self
    {
        $this->accessControlType = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function accessControlList($value): self
    {
        $this->accessControlList = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['enabled'])) {
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
    
        if (isset($value['access_control_type'])) {
            $this->accessControlType = $value['access_control_type'];
            unset($value['access_control_type']);
        }
    
        if (isset($value['access_control_list'])) {
            $this->accessControlList = $value['access_control_list'];
            unset($value['access_control_list']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output['enabled'] = $this->enabled;
        }
        if (null !== $this->accessControlType) {
            $output['access_control_type'] = $this->accessControlType;
        }
        if (null !== $this->accessControlList) {
            $output['access_control_list'] = $this->accessControlList;
        }
    
        return $output;
    }
    

}

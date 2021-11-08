<?php

namespace Symfony\Config\LiipImagine\LoadersConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Filesystem'.\DIRECTORY_SEPARATOR.'BundleResourcesConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FilesystemConfig 
{
    private $locator;
    private $dataRoot;
    private $allowUnresolvableDataRoots;
    private $bundleResources;
    
    /**
     * Using the "filesystem_insecure" locator is not recommended due to a less secure resolver mechanism, but is provided for those using heavily symlinked projects.
     * @default 'filesystem'
     * @param ParamConfigurator|'filesystem'|'filesystem_insecure' $value
     * @return $this
     */
    public function locator($value): self
    {
        $this->locator = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function dataRoot($value): self
    {
        $this->dataRoot = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowUnresolvableDataRoots($value): self
    {
        $this->allowUnresolvableDataRoots = $value;
    
        return $this;
    }
    
    public function bundleResources(array $value = []): \Symfony\Config\LiipImagine\LoadersConfig\Filesystem\BundleResourcesConfig
    {
        if (null === $this->bundleResources) {
            $this->bundleResources = new \Symfony\Config\LiipImagine\LoadersConfig\Filesystem\BundleResourcesConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "bundleResources()" has already been initialized. You cannot pass values the second time you call bundleResources().');
        }
    
        return $this->bundleResources;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['locator'])) {
            $this->locator = $value['locator'];
            unset($value['locator']);
        }
    
        if (isset($value['data_root'])) {
            $this->dataRoot = $value['data_root'];
            unset($value['data_root']);
        }
    
        if (isset($value['allow_unresolvable_data_roots'])) {
            $this->allowUnresolvableDataRoots = $value['allow_unresolvable_data_roots'];
            unset($value['allow_unresolvable_data_roots']);
        }
    
        if (isset($value['bundle_resources'])) {
            $this->bundleResources = new \Symfony\Config\LiipImagine\LoadersConfig\Filesystem\BundleResourcesConfig($value['bundle_resources']);
            unset($value['bundle_resources']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->locator) {
            $output['locator'] = $this->locator;
        }
        if (null !== $this->dataRoot) {
            $output['data_root'] = $this->dataRoot;
        }
        if (null !== $this->allowUnresolvableDataRoots) {
            $output['allow_unresolvable_data_roots'] = $this->allowUnresolvableDataRoots;
        }
        if (null !== $this->bundleResources) {
            $output['bundle_resources'] = $this->bundleResources->toArray();
        }
    
        return $output;
    }
    

}

<?php

namespace Symfony\Config\LiipImagine\ResolversConfig;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AwsS3Config 
{
    private $bucket;
    private $cache;
    private $acl;
    private $cachePrefix;
    private $clientConfig;
    private $getOptions;
    private $putOptions;
    private $proxies;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function bucket($value): self
    {
        $this->bucket = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): self
    {
        $this->cache = $value;
    
        return $this;
    }
    
    /**
     * @default 'public-read'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function acl($value): self
    {
        $this->acl = $value;
    
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
     * @param ParamConfigurator|list<mixed|ParamConfigurator> $value
     * @return $this
     */
    public function clientConfig($value): self
    {
        $this->clientConfig = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function getOptions(string $key, $value): self
    {
        $this->getOptions[$key] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function putOptions(string $key, $value): self
    {
        $this->putOptions[$key] = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function proxies(string $name, $value): self
    {
        $this->proxies[$name] = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['bucket'])) {
            $this->bucket = $value['bucket'];
            unset($value['bucket']);
        }
    
        if (isset($value['cache'])) {
            $this->cache = $value['cache'];
            unset($value['cache']);
        }
    
        if (isset($value['acl'])) {
            $this->acl = $value['acl'];
            unset($value['acl']);
        }
    
        if (isset($value['cache_prefix'])) {
            $this->cachePrefix = $value['cache_prefix'];
            unset($value['cache_prefix']);
        }
    
        if (isset($value['client_config'])) {
            $this->clientConfig = $value['client_config'];
            unset($value['client_config']);
        }
    
        if (isset($value['get_options'])) {
            $this->getOptions = $value['get_options'];
            unset($value['get_options']);
        }
    
        if (isset($value['put_options'])) {
            $this->putOptions = $value['put_options'];
            unset($value['put_options']);
        }
    
        if (isset($value['proxies'])) {
            $this->proxies = $value['proxies'];
            unset($value['proxies']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->bucket) {
            $output['bucket'] = $this->bucket;
        }
        if (null !== $this->cache) {
            $output['cache'] = $this->cache;
        }
        if (null !== $this->acl) {
            $output['acl'] = $this->acl;
        }
        if (null !== $this->cachePrefix) {
            $output['cache_prefix'] = $this->cachePrefix;
        }
        if (null !== $this->clientConfig) {
            $output['client_config'] = $this->clientConfig;
        }
        if (null !== $this->getOptions) {
            $output['get_options'] = $this->getOptions;
        }
        if (null !== $this->putOptions) {
            $output['put_options'] = $this->putOptions;
        }
        if (null !== $this->proxies) {
            $output['proxies'] = $this->proxies;
        }
    
        return $output;
    }
    

}

<?php

namespace Symfony\Config;

require_once __DIR__.\DIRECTORY_SEPARATOR.'LiipImagine'.\DIRECTORY_SEPARATOR.'ResolversConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LiipImagine'.\DIRECTORY_SEPARATOR.'LoadersConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LiipImagine'.\DIRECTORY_SEPARATOR.'DefaultFilterSetSettingsConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LiipImagine'.\DIRECTORY_SEPARATOR.'ControllerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LiipImagine'.\DIRECTORY_SEPARATOR.'FilterSetConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LiipImagine'.\DIRECTORY_SEPARATOR.'TwigConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LiipImagine'.\DIRECTORY_SEPARATOR.'MessengerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'LiipImagine'.\DIRECTORY_SEPARATOR.'WebpConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class LiipImagineConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $resolvers;
    private $loaders;
    private $driver;
    private $cache;
    private $cacheBasePath;
    private $dataLoader;
    private $defaultImage;
    private $defaultFilterSetSettings;
    private $controller;
    private $filterSets;
    private $twig;
    private $enqueue;
    private $messenger;
    private $templating;
    private $webp;
    
    public function resolvers(string $name, array $value = []): \Symfony\Config\LiipImagine\ResolversConfig
    {
        if (!isset($this->resolvers[$name])) {
            return $this->resolvers[$name] = new \Symfony\Config\LiipImagine\ResolversConfig($value);
        }
        if ([] === $value) {
            return $this->resolvers[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "resolvers()" has already been initialized. You cannot pass values the second time you call resolvers().');
    }
    
    public function loaders(string $name, array $value = []): \Symfony\Config\LiipImagine\LoadersConfig
    {
        if (!isset($this->loaders[$name])) {
            return $this->loaders[$name] = new \Symfony\Config\LiipImagine\LoadersConfig($value);
        }
        if ([] === $value) {
            return $this->loaders[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "loaders()" has already been initialized. You cannot pass values the second time you call loaders().');
    }
    
    /**
     * @default 'gd'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function driver($value): self
    {
        $this->driver = $value;
    
        return $this;
    }
    
    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cache($value): self
    {
        $this->cache = $value;
    
        return $this;
    }
    
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheBasePath($value): self
    {
        $this->cacheBasePath = $value;
    
        return $this;
    }
    
    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dataLoader($value): self
    {
        $this->dataLoader = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultImage($value): self
    {
        $this->defaultImage = $value;
    
        return $this;
    }
    
    public function defaultFilterSetSettings(array $value = []): \Symfony\Config\LiipImagine\DefaultFilterSetSettingsConfig
    {
        if (null === $this->defaultFilterSetSettings) {
            $this->defaultFilterSetSettings = new \Symfony\Config\LiipImagine\DefaultFilterSetSettingsConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "defaultFilterSetSettings()" has already been initialized. You cannot pass values the second time you call defaultFilterSetSettings().');
        }
    
        return $this->defaultFilterSetSettings;
    }
    
    public function controller(array $value = []): \Symfony\Config\LiipImagine\ControllerConfig
    {
        if (null === $this->controller) {
            $this->controller = new \Symfony\Config\LiipImagine\ControllerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "controller()" has already been initialized. You cannot pass values the second time you call controller().');
        }
    
        return $this->controller;
    }
    
    public function filterSet(string $name, array $value = []): \Symfony\Config\LiipImagine\FilterSetConfig
    {
        if (!isset($this->filterSets[$name])) {
            return $this->filterSets[$name] = new \Symfony\Config\LiipImagine\FilterSetConfig($value);
        }
        if ([] === $value) {
            return $this->filterSets[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "filterSet()" has already been initialized. You cannot pass values the second time you call filterSet().');
    }
    
    public function twig(array $value = []): \Symfony\Config\LiipImagine\TwigConfig
    {
        if (null === $this->twig) {
            $this->twig = new \Symfony\Config\LiipImagine\TwigConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "twig()" has already been initialized. You cannot pass values the second time you call twig().');
        }
    
        return $this->twig;
    }
    
    /**
     * Enables integration with enqueue if set true. Allows resolve image caches in background by sending messages to MQ.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enqueue($value): self
    {
        $this->enqueue = $value;
    
        return $this;
    }
    
    public function messenger(array $value = []): \Symfony\Config\LiipImagine\MessengerConfig
    {
        if (null === $this->messenger) {
            $this->messenger = new \Symfony\Config\LiipImagine\MessengerConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "messenger()" has already been initialized. You cannot pass values the second time you call messenger().');
        }
    
        return $this->messenger;
    }
    
    /**
     * Enables integration with symfony/templating component
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function templating($value): self
    {
        $this->templating = $value;
    
        return $this;
    }
    
    public function webp(array $value = []): \Symfony\Config\LiipImagine\WebpConfig
    {
        if (null === $this->webp) {
            $this->webp = new \Symfony\Config\LiipImagine\WebpConfig($value);
        } elseif ([] !== $value) {
            throw new InvalidConfigurationException('The node created by "webp()" has already been initialized. You cannot pass values the second time you call webp().');
        }
    
        return $this->webp;
    }
    
    public function getExtensionAlias(): string
    {
        return 'liip_imagine';
    }
            
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['resolvers'])) {
            $this->resolvers = array_map(function ($v) { return new \Symfony\Config\LiipImagine\ResolversConfig($v); }, $value['resolvers']);
            unset($value['resolvers']);
        }
    
        if (isset($value['loaders'])) {
            $this->loaders = array_map(function ($v) { return new \Symfony\Config\LiipImagine\LoadersConfig($v); }, $value['loaders']);
            unset($value['loaders']);
        }
    
        if (isset($value['driver'])) {
            $this->driver = $value['driver'];
            unset($value['driver']);
        }
    
        if (isset($value['cache'])) {
            $this->cache = $value['cache'];
            unset($value['cache']);
        }
    
        if (isset($value['cache_base_path'])) {
            $this->cacheBasePath = $value['cache_base_path'];
            unset($value['cache_base_path']);
        }
    
        if (isset($value['data_loader'])) {
            $this->dataLoader = $value['data_loader'];
            unset($value['data_loader']);
        }
    
        if (isset($value['default_image'])) {
            $this->defaultImage = $value['default_image'];
            unset($value['default_image']);
        }
    
        if (isset($value['default_filter_set_settings'])) {
            $this->defaultFilterSetSettings = new \Symfony\Config\LiipImagine\DefaultFilterSetSettingsConfig($value['default_filter_set_settings']);
            unset($value['default_filter_set_settings']);
        }
    
        if (isset($value['controller'])) {
            $this->controller = new \Symfony\Config\LiipImagine\ControllerConfig($value['controller']);
            unset($value['controller']);
        }
    
        if (isset($value['filter_sets'])) {
            $this->filterSets = array_map(function ($v) { return new \Symfony\Config\LiipImagine\FilterSetConfig($v); }, $value['filter_sets']);
            unset($value['filter_sets']);
        }
    
        if (isset($value['twig'])) {
            $this->twig = new \Symfony\Config\LiipImagine\TwigConfig($value['twig']);
            unset($value['twig']);
        }
    
        if (isset($value['enqueue'])) {
            $this->enqueue = $value['enqueue'];
            unset($value['enqueue']);
        }
    
        if (isset($value['messenger'])) {
            $this->messenger = new \Symfony\Config\LiipImagine\MessengerConfig($value['messenger']);
            unset($value['messenger']);
        }
    
        if (isset($value['templating'])) {
            $this->templating = $value['templating'];
            unset($value['templating']);
        }
    
        if (isset($value['webp'])) {
            $this->webp = new \Symfony\Config\LiipImagine\WebpConfig($value['webp']);
            unset($value['webp']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->resolvers) {
            $output['resolvers'] = array_map(function ($v) { return $v->toArray(); }, $this->resolvers);
        }
        if (null !== $this->loaders) {
            $output['loaders'] = array_map(function ($v) { return $v->toArray(); }, $this->loaders);
        }
        if (null !== $this->driver) {
            $output['driver'] = $this->driver;
        }
        if (null !== $this->cache) {
            $output['cache'] = $this->cache;
        }
        if (null !== $this->cacheBasePath) {
            $output['cache_base_path'] = $this->cacheBasePath;
        }
        if (null !== $this->dataLoader) {
            $output['data_loader'] = $this->dataLoader;
        }
        if (null !== $this->defaultImage) {
            $output['default_image'] = $this->defaultImage;
        }
        if (null !== $this->defaultFilterSetSettings) {
            $output['default_filter_set_settings'] = $this->defaultFilterSetSettings->toArray();
        }
        if (null !== $this->controller) {
            $output['controller'] = $this->controller->toArray();
        }
        if (null !== $this->filterSets) {
            $output['filter_sets'] = array_map(function ($v) { return $v->toArray(); }, $this->filterSets);
        }
        if (null !== $this->twig) {
            $output['twig'] = $this->twig->toArray();
        }
        if (null !== $this->enqueue) {
            $output['enqueue'] = $this->enqueue;
        }
        if (null !== $this->messenger) {
            $output['messenger'] = $this->messenger->toArray();
        }
        if (null !== $this->templating) {
            $output['templating'] = $this->templating;
        }
        if (null !== $this->webp) {
            $output['webp'] = $this->webp->toArray();
        }
    
        return $output;
    }
    

}

<?php

namespace Symfony\Config\LiipImagine;

require_once __DIR__.\DIRECTORY_SEPARATOR.'FilterSetConfig'.\DIRECTORY_SEPARATOR.'FilterConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'FilterSetConfig'.\DIRECTORY_SEPARATOR.'PostProcessorsConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class FilterSetConfig 
{
    private $quality;
    private $jpegQuality;
    private $pngCompressionLevel;
    private $pngCompressionFilter;
    private $format;
    private $animated;
    private $cache;
    private $dataLoader;
    private $defaultImage;
    private $filters;
    private $postProcessors;
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
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
    public function jpegQuality($value): self
    {
        $this->jpegQuality = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pngCompressionLevel($value): self
    {
        $this->pngCompressionLevel = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function pngCompressionFilter($value): self
    {
        $this->pngCompressionFilter = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function format($value): self
    {
        $this->format = $value;
    
        return $this;
    }
    
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function animated($value): self
    {
        $this->animated = $value;
    
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
    
    public function filter(string $name, array $value = []): \Symfony\Config\LiipImagine\FilterSetConfig\FilterConfig
    {
        if (!isset($this->filters[$name])) {
            return $this->filters[$name] = new \Symfony\Config\LiipImagine\FilterSetConfig\FilterConfig($value);
        }
        if ([] === $value) {
            return $this->filters[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "filter()" has already been initialized. You cannot pass values the second time you call filter().');
    }
    
    public function postProcessors(string $name, array $value = []): \Symfony\Config\LiipImagine\FilterSetConfig\PostProcessorsConfig
    {
        if (!isset($this->postProcessors[$name])) {
            return $this->postProcessors[$name] = new \Symfony\Config\LiipImagine\FilterSetConfig\PostProcessorsConfig($value);
        }
        if ([] === $value) {
            return $this->postProcessors[$name];
        }
    
        throw new InvalidConfigurationException('The node created by "postProcessors()" has already been initialized. You cannot pass values the second time you call postProcessors().');
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['quality'])) {
            $this->quality = $value['quality'];
            unset($value['quality']);
        }
    
        if (isset($value['jpeg_quality'])) {
            $this->jpegQuality = $value['jpeg_quality'];
            unset($value['jpeg_quality']);
        }
    
        if (isset($value['png_compression_level'])) {
            $this->pngCompressionLevel = $value['png_compression_level'];
            unset($value['png_compression_level']);
        }
    
        if (isset($value['png_compression_filter'])) {
            $this->pngCompressionFilter = $value['png_compression_filter'];
            unset($value['png_compression_filter']);
        }
    
        if (isset($value['format'])) {
            $this->format = $value['format'];
            unset($value['format']);
        }
    
        if (isset($value['animated'])) {
            $this->animated = $value['animated'];
            unset($value['animated']);
        }
    
        if (isset($value['cache'])) {
            $this->cache = $value['cache'];
            unset($value['cache']);
        }
    
        if (isset($value['data_loader'])) {
            $this->dataLoader = $value['data_loader'];
            unset($value['data_loader']);
        }
    
        if (isset($value['default_image'])) {
            $this->defaultImage = $value['default_image'];
            unset($value['default_image']);
        }
    
        if (isset($value['filters'])) {
            $this->filters = array_map(function ($v) { return new \Symfony\Config\LiipImagine\FilterSetConfig\FilterConfig($v); }, $value['filters']);
            unset($value['filters']);
        }
    
        if (isset($value['post_processors'])) {
            $this->postProcessors = array_map(function ($v) { return new \Symfony\Config\LiipImagine\FilterSetConfig\PostProcessorsConfig($v); }, $value['post_processors']);
            unset($value['post_processors']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->quality) {
            $output['quality'] = $this->quality;
        }
        if (null !== $this->jpegQuality) {
            $output['jpeg_quality'] = $this->jpegQuality;
        }
        if (null !== $this->pngCompressionLevel) {
            $output['png_compression_level'] = $this->pngCompressionLevel;
        }
        if (null !== $this->pngCompressionFilter) {
            $output['png_compression_filter'] = $this->pngCompressionFilter;
        }
        if (null !== $this->format) {
            $output['format'] = $this->format;
        }
        if (null !== $this->animated) {
            $output['animated'] = $this->animated;
        }
        if (null !== $this->cache) {
            $output['cache'] = $this->cache;
        }
        if (null !== $this->dataLoader) {
            $output['data_loader'] = $this->dataLoader;
        }
        if (null !== $this->defaultImage) {
            $output['default_image'] = $this->defaultImage;
        }
        if (null !== $this->filters) {
            $output['filters'] = array_map(function ($v) { return $v->toArray(); }, $this->filters);
        }
        if (null !== $this->postProcessors) {
            $output['post_processors'] = array_map(function ($v) { return $v->toArray(); }, $this->postProcessors);
        }
    
        return $output;
    }
    

}

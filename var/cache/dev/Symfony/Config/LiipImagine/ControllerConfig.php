<?php

namespace Symfony\Config\LiipImagine;


use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ControllerConfig 
{
    private $filterAction;
    private $filterRuntimeAction;
    private $redirectResponseCode;
    
    /**
     * @default 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filterAction($value): self
    {
        $this->filterAction = $value;
    
        return $this;
    }
    
    /**
     * @default 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function filterRuntimeAction($value): self
    {
        $this->filterRuntimeAction = $value;
    
        return $this;
    }
    
    /**
     * @default 302
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function redirectResponseCode($value): self
    {
        $this->redirectResponseCode = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value['filter_action'])) {
            $this->filterAction = $value['filter_action'];
            unset($value['filter_action']);
        }
    
        if (isset($value['filter_runtime_action'])) {
            $this->filterRuntimeAction = $value['filter_runtime_action'];
            unset($value['filter_runtime_action']);
        }
    
        if (isset($value['redirect_response_code'])) {
            $this->redirectResponseCode = $value['redirect_response_code'];
            unset($value['redirect_response_code']);
        }
    
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->filterAction) {
            $output['filter_action'] = $this->filterAction;
        }
        if (null !== $this->filterRuntimeAction) {
            $output['filter_runtime_action'] = $this->filterRuntimeAction;
        }
        if (null !== $this->redirectResponseCode) {
            $output['redirect_response_code'] = $this->redirectResponseCode;
        }
    
        return $output;
    }
    

}

<?php

namespace Symfony\Config\Framework;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class PhpErrorsConfig 
{
    private $log;
    private $throw;
    
    /**
     * Use the application logger instead of the PHP logger for logging PHP errors.
     * @example "true" to use the default configuration: log all errors. "false" to disable. An integer bit field of E_* constants, or an array mapping E_* constants to log levels.
     * @default true
     * @return $this
     */
    public function log($value = true): self
    {
        $this->log = $value;
    
        return $this;
    }
    
    /**
     * Throw PHP errors as \ErrorException instances.
     * @default true
     * @return $this
     */
    public function throw(bool $value): self
    {
        $this->throw = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["log"])) {
            $this->log = $value["log"];
            unset($value["log"]);
        }
    
        if (isset($value["throw"])) {
            $this->throw = $value["throw"];
            unset($value["throw"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->log) {
            $output["log"] = $this->log;
        }
        if (null !== $this->throw) {
            $output["throw"] = $this->throw;
        }
    
        return $output;
    }
    

}

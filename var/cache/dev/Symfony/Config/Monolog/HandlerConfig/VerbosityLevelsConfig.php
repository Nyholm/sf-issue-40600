<?php

namespace Symfony\Config\Monolog\HandlerConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class VerbosityLevelsConfig 
{
    private $vERBOSITYQUIET;
    private $vERBOSITYNORMAL;
    private $vERBOSITYVERBOSE;
    private $vERBOSITYVERYVERBOSE;
    private $vERBOSITYDEBUG;
    
    /**
     * @default 'ERROR'
     */
    public function vERBOSITYQUIET($value): self
    {
        $this->vERBOSITYQUIET = $value;
    
        return $this;
    }
    
    /**
     * @default 'WARNING'
     */
    public function vERBOSITYNORMAL($value): self
    {
        $this->vERBOSITYNORMAL = $value;
    
        return $this;
    }
    
    /**
     * @default 'NOTICE'
     */
    public function vERBOSITYVERBOSE($value): self
    {
        $this->vERBOSITYVERBOSE = $value;
    
        return $this;
    }
    
    /**
     * @default 'INFO'
     */
    public function vERBOSITYVERYVERBOSE($value): self
    {
        $this->vERBOSITYVERYVERBOSE = $value;
    
        return $this;
    }
    
    /**
     * @default 'DEBUG'
     */
    public function vERBOSITYDEBUG($value): self
    {
        $this->vERBOSITYDEBUG = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["VERBOSITY_QUIET"])) {
            $this->vERBOSITYQUIET = $value["VERBOSITY_QUIET"];
            unset($value["VERBOSITY_QUIET"]);
        }
    
        if (isset($value["VERBOSITY_NORMAL"])) {
            $this->vERBOSITYNORMAL = $value["VERBOSITY_NORMAL"];
            unset($value["VERBOSITY_NORMAL"]);
        }
    
        if (isset($value["VERBOSITY_VERBOSE"])) {
            $this->vERBOSITYVERBOSE = $value["VERBOSITY_VERBOSE"];
            unset($value["VERBOSITY_VERBOSE"]);
        }
    
        if (isset($value["VERBOSITY_VERY_VERBOSE"])) {
            $this->vERBOSITYVERYVERBOSE = $value["VERBOSITY_VERY_VERBOSE"];
            unset($value["VERBOSITY_VERY_VERBOSE"]);
        }
    
        if (isset($value["VERBOSITY_DEBUG"])) {
            $this->vERBOSITYDEBUG = $value["VERBOSITY_DEBUG"];
            unset($value["VERBOSITY_DEBUG"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->vERBOSITYQUIET) {
            $output["VERBOSITY_QUIET"] = $this->vERBOSITYQUIET;
        }
        if (null !== $this->vERBOSITYNORMAL) {
            $output["VERBOSITY_NORMAL"] = $this->vERBOSITYNORMAL;
        }
        if (null !== $this->vERBOSITYVERBOSE) {
            $output["VERBOSITY_VERBOSE"] = $this->vERBOSITYVERBOSE;
        }
        if (null !== $this->vERBOSITYVERYVERBOSE) {
            $output["VERBOSITY_VERY_VERBOSE"] = $this->vERBOSITYVERYVERBOSE;
        }
        if (null !== $this->vERBOSITYDEBUG) {
            $output["VERBOSITY_DEBUG"] = $this->vERBOSITYDEBUG;
        }
    
        return $output;
    }
    

}

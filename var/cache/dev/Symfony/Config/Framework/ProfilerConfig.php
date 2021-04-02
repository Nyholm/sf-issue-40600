<?php

namespace Symfony\Config\Framework;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ProfilerConfig 
{
    private $enabled;
    private $collect;
    private $onlyExceptions;
    private $onlyMainRequests;
    private $onlyMasterRequests;
    private $dsn;
    
    /**
     * @default false
     */
    public function enabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default true
     */
    public function collect(bool $value): self
    {
        $this->collect = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function onlyExceptions(bool $value): self
    {
        $this->onlyExceptions = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function onlyMainRequests(bool $value): self
    {
        $this->onlyMainRequests = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function onlyMasterRequests(bool $value): self
    {
        $this->onlyMasterRequests = $value;
    
        return $this;
    }
    
    /**
     * @default 'file:%kernel.cache_dir%/profiler'
     */
    public function dsn( $value): self
    {
        $this->dsn = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["collect"])) {
            $this->collect = $value["collect"];
            unset($value["collect"]);
        }
    
        if (isset($value["only_exceptions"])) {
            $this->onlyExceptions = $value["only_exceptions"];
            unset($value["only_exceptions"]);
        }
    
        if (isset($value["only_main_requests"])) {
            $this->onlyMainRequests = $value["only_main_requests"];
            unset($value["only_main_requests"]);
        }
    
        if (isset($value["only_master_requests"])) {
            $this->onlyMasterRequests = $value["only_master_requests"];
            unset($value["only_master_requests"]);
        }
    
        if (isset($value["dsn"])) {
            $this->dsn = $value["dsn"];
            unset($value["dsn"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output["enabled"] = $this->enabled;
        }
        if (null !== $this->collect) {
            $output["collect"] = $this->collect;
        }
        if (null !== $this->onlyExceptions) {
            $output["only_exceptions"] = $this->onlyExceptions;
        }
        if (null !== $this->onlyMainRequests) {
            $output["only_main_requests"] = $this->onlyMainRequests;
        }
        if (null !== $this->onlyMasterRequests) {
            $output["only_master_requests"] = $this->onlyMasterRequests;
        }
        if (null !== $this->dsn) {
            $output["dsn"] = $this->dsn;
        }
    
        return $output;
    }
    

}

<?php

namespace Config\Framework;

require_once __DIR__.'/WorkflowsConfig/WorkflowsConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class WorkflowsConfig
{
    private $enabled;
    private $workflows;
    
    /**
     * @default false
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function addWorkflows(string $name, array $value = []): \Config\Framework\WorkflowsConfig\WorkflowsConfig
    {
        return $this->workflows[$name] = new \Config\Framework\WorkflowsConfig\WorkflowsConfig($value);
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output["enabled"] = $this->enabled;
        }
        if (null !== $this->workflows) {
            $output["workflows"] = array_map(function($v) { return $v->toArray(); }, $this->workflows);
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["workflows"])) {
            $this->workflows = array_map(function($v) { return new WorkflowsConfig($v); }, $value["workflows"]);;
            unset($value["workflows"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}

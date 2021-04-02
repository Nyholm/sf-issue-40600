<?php

namespace Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig;

require_once __DIR__.'/EntityConfig/ListenerConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class EntityConfig 
{
    private $listeners;
    
    public function listener(string $class, array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig\EntityConfig\ListenerConfig
    {
        return $this->listeners[$class] = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig\EntityConfig\ListenerConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["listeners"])) {
            $this->listeners = array_map(function($v) { return new ListenerConfig($v); }, $value["listeners"]);;
            unset($value["listeners"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->listeners) {
            $output["listeners"] = array_map(function($v) { return $v->toArray(); }, $this->listeners);
        }
    
        return $output;
    }
    

}

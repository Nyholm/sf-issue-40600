<?php

namespace Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig\EntityConfig;

require_once __DIR__.'/ListenerConfig/EventConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ListenerConfig 
{
    private $events;
    
    public function event(array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig\EntityConfig\ListenerConfig\EventConfig
    {
        return $this->events[] = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig\EntityConfig\ListenerConfig\EventConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["events"])) {
            $this->events = array_map(function($v) { return new EventConfig($v); }, $value["events"]);;
            unset($value["events"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->events) {
            $output["events"] = array_map(function($v) { return $v->toArray(); }, $this->events);
        }
    
        return $output;
    }
    

}

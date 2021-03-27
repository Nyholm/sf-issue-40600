<?php

namespace Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig\EntityConfig;

require_once __DIR__.'/ListenerConfig/EventConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ListenerConfig
{
    private $events;
    
    public function addEvent(array $value = []): \Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig\EntityConfig\ListenerConfig\EventConfig
    {
        return $this->events[] = new \Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig\EntityConfig\ListenerConfig\EventConfig($value);
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->events) {
            $output["events"] = array_map(function($v) { return $v->toArray(); }, $this->events);
        }
    
        return $output;
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
    

}

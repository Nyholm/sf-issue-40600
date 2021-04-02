<?php

namespace Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig;

require_once __DIR__.'/EntityListenersConfig/EntityConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class EntityListenersConfig 
{
    private $entities;
    
    public function entity(string $class, array $value = []): \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig\EntityConfig
    {
        return $this->entities[$class] = new \Symfony\Config\Doctrine\OrmConfig\EntityManagerConfig\EntityListenersConfig\EntityConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["entities"])) {
            $this->entities = array_map(function($v) { return new EntityConfig($v); }, $value["entities"]);;
            unset($value["entities"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->entities) {
            $output["entities"] = array_map(function($v) { return $v->toArray(); }, $this->entities);
        }
    
        return $output;
    }
    

}

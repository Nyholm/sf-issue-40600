<?php

namespace Symfony\Config\Doctrine\Orm\EntityManagerConfig;

require_once __DIR__.'/EntityListeners/EntityConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class EntityListenersConfig 
{
    private $entities;
    
    public function entity(string $class, array $value = []): \Symfony\Config\Doctrine\Orm\EntityManagerConfig\EntityListeners\EntityConfig
    {
        if (!isset($this->entities[$class])) {
            return $this->entities[$class] = new \Symfony\Config\Doctrine\Orm\EntityManagerConfig\EntityListeners\EntityConfig($value);
        } elseif ([] === $value) {
            return $this->entities[$class];
        } else {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "entity()" has already been initialized. You cannot pass values the second time you call entity().'));
        }
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

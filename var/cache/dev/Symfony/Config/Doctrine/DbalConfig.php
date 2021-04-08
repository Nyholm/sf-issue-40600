<?php

namespace Symfony\Config\Doctrine;

require_once __DIR__.'/Dbal/TypeConfig.php';
require_once __DIR__.'/Dbal/ConnectionConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DbalConfig 
{
    private $defaultConnection;
    private $types;
    private $connections;
    
    /**
     * @default null
     */
    public function defaultConnection($value): self
    {
        $this->defaultConnection = $value;
    
        return $this;
    }
    
    public function type(string $name, array $value = []): \Symfony\Config\Doctrine\Dbal\TypeConfig
    {
        return $this->types[$name] ?? $this->types[$name] = new \Symfony\Config\Doctrine\Dbal\TypeConfig($value);
    }
    
    public function connection(string $name, array $value = []): \Symfony\Config\Doctrine\Dbal\ConnectionConfig
    {
        return $this->connections[$name] ?? $this->connections[$name] = new \Symfony\Config\Doctrine\Dbal\ConnectionConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["default_connection"])) {
            $this->defaultConnection = $value["default_connection"];
            unset($value["default_connection"]);
        }
    
        if (isset($value["types"])) {
            $this->types = array_map(function($v) { return new TypeConfig($v); }, $value["types"]);;
            unset($value["types"]);
        }
    
        if (isset($value["connections"])) {
            $this->connections = array_map(function($v) { return new ConnectionConfig($v); }, $value["connections"]);;
            unset($value["connections"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultConnection) {
            $output["default_connection"] = $this->defaultConnection;
        }
        if (null !== $this->types) {
            $output["types"] = array_map(function($v) { return $v->toArray(); }, $this->types);
        }
        if (null !== $this->connections) {
            $output["connections"] = array_map(function($v) { return $v->toArray(); }, $this->connections);
        }
    
        return $output;
    }
    

}

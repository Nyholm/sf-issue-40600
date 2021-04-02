<?php

namespace Symfony\Config\DoctrineMigrations;

require_once __DIR__.'/StorageConfig/TableStorageConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class StorageConfig 
{
    private $tableStorage;
    
    public function tableStorage(array $value = []): \Symfony\Config\DoctrineMigrations\StorageConfig\TableStorageConfig
    {
        if (null === $this->tableStorage) {
            $this->tableStorage = new \Symfony\Config\DoctrineMigrations\StorageConfig\TableStorageConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "tableStorage()" has already been initialized. You cannot pass values the second time you call tableStorage().'));
        }
    
        return $this->tableStorage;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["table_storage"])) {
            $this->tableStorage = new TableStorageConfig($value["table_storage"]);
            unset($value["table_storage"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->tableStorage) {
            $output["table_storage"] = $this->tableStorage->toArray();
        }
    
        return $output;
    }
    

}

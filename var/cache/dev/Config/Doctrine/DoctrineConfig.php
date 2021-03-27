<?php

namespace Config\Doctrine;

require_once __DIR__.'/DbalConfig.php';
require_once __DIR__.'/OrmConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class DoctrineConfig
{
    private $dbal;
    private $orm;
    
    public function addDbal(array $value = []): \Config\Doctrine\DbalConfig
    {
        return $this->dbal = new \Config\Doctrine\DbalConfig($value);
    }
    
    public function addOrm(array $value = []): \Config\Doctrine\OrmConfig
    {
        return $this->orm = new \Config\Doctrine\OrmConfig($value);
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->dbal) {
            $output["dbal"] = $this->dbal->toArray();
        }
        if (null !== $this->orm) {
            $output["orm"] = $this->orm->toArray();
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["dbal"])) {
            $this->dbal = new DbalConfig($value["dbal"]);
            unset($value["dbal"]);
        }
    
        if (isset($value["orm"])) {
            $this->orm = new OrmConfig($value["orm"]);
            unset($value["orm"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}

<?php

namespace Config\Framework\MessengerConfig;

require_once __DIR__.'/TransportConfig/RetryStrategyConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class TransportConfig
{
    private $dsn;
    private $serializer;
    private $options;
    private $retryStrategy;
    
    /**
     * @default NULL
     */
    public function setDsn( $value): self
    {
        $this->dsn = $value;
    
        return $this;
    }
    
    /**
     * Service id of a custom serializer to use.
     * @default NULL
     */
    public function setSerializer( $value): self
    {
        $this->serializer = $value;
    
        return $this;
    }
    
    public function addOption( $value): self
    {
        $this->options[] = $value;
    
        return $this;
    }
    
    public function addRetryStrategy(array $value = []): \Config\Framework\MessengerConfig\TransportConfig\RetryStrategyConfig
    {
        return $this->retryStrategy = new \Config\Framework\MessengerConfig\TransportConfig\RetryStrategyConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["dsn"])) {
            $this->dsn = $value["dsn"];
            unset($value["dsn"]);
        }
    
        if (isset($value["serializer"])) {
            $this->serializer = $value["serializer"];
            unset($value["serializer"]);
        }
    
        if (isset($value["options"])) {
            $this->options = $value["options"];
            unset($value["options"]);
        }
    
        if (isset($value["retry_strategy"])) {
            $this->retryStrategy = new RetryStrategyConfig($value["retry_strategy"]);
            unset($value["retry_strategy"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->dsn) {
            $output["dsn"] = $this->dsn;
        }
        if (null !== $this->serializer) {
            $output["serializer"] = $this->serializer;
        }
        if (null !== $this->options) {
            $output["options"] = $this->options;
        }
        if (null !== $this->retryStrategy) {
            $output["retry_strategy"] = $this->retryStrategy->toArray();
        }
    
        return $output;
    }
    

}

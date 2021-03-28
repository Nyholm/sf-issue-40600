<?php

namespace Config\Framework\MessengerConfig;

require_once __DIR__.'/SerializerConfig/SymfonySerializerConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SerializerConfig
{
    private $defaultSerializer;
    private $symfonySerializer;
    
    /**
     * Service id to use as the default serializer for the transports.
     * @default 'messenger.transport.native_php_serializer'
     */
    public function setDefaultSerializer( $value): self
    {
        $this->defaultSerializer = $value;
    
        return $this;
    }
    
    public function addSymfonySerializer(array $value = []): \Config\Framework\MessengerConfig\SerializerConfig\SymfonySerializerConfig
    {
        return $this->symfonySerializer = new \Config\Framework\MessengerConfig\SerializerConfig\SymfonySerializerConfig($value);
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["default_serializer"])) {
            $this->defaultSerializer = $value["default_serializer"];
            unset($value["default_serializer"]);
        }
    
        if (isset($value["symfony_serializer"])) {
            $this->symfonySerializer = new SymfonySerializerConfig($value["symfony_serializer"]);
            unset($value["symfony_serializer"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->defaultSerializer) {
            $output["default_serializer"] = $this->defaultSerializer;
        }
        if (null !== $this->symfonySerializer) {
            $output["symfony_serializer"] = $this->symfonySerializer->toArray();
        }
    
        return $output;
    }
    

}

<?php

namespace Config\Framework\MessengerConfig\SerializerConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SymfonySerializerConfig
{
    private $format;
    private $context;
    
    /**
     * Serialization format for the messenger.transport.symfony_serializer service (which is not the serializer used by default).
     * @default 'json'
     */
    public function setFormat( $value): self
    {
        $this->format = $value;
    
        return $this;
    }
    
    public function addContext(string $name,  $value): self
    {
        $this->context[$name] = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->format) {
            $output["format"] = $this->format;
        }
        if (null !== $this->context) {
            $output["context"] = $this->context;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["format"])) {
            $this->format = $value["format"];
            unset($value["format"]);
        }
    
        if (isset($value["context"])) {
            $this->context = $value["context"];
            unset($value["context"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}

<?php

namespace Config\Framework\MessengerConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class RoutingConfig
{
    private $senders;
    
    public function addSenders( $value): self
    {
        $this->senders[] = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->senders) {
            $output["senders"] = $this->senders;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["senders"])) {
            $this->senders = $value["senders"];
            unset($value["senders"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}

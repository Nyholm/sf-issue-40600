<?php

namespace Config\Framework\MailerConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class HeaderConfig
{
    private $value;
    
    /**
     * @default NULL
     */
    public function setValue($value): self
    {
        $this->value = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->value) {
            $output["value"] = $this->value;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["value"])) {
            $this->value = $value["value"];
            unset($value["value"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}

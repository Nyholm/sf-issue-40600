<?php

namespace Config\Framework\NotifierConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class AdminRecipientConfig
{
    private $email;
    private $phone;
    
    /**
     * @default NULL
     */
    public function setEmail( $value): self
    {
        $this->email = $value;
    
        return $this;
    }
    
    /**
     */
    public function setPhone( $value): self
    {
        $this->phone = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->email) {
            $output["email"] = $this->email;
        }
        if (null !== $this->phone) {
            $output["phone"] = $this->phone;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["email"])) {
            $this->email = $value["email"];
            unset($value["email"]);
        }
    
        if (isset($value["phone"])) {
            $this->phone = $value["phone"];
            unset($value["phone"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}

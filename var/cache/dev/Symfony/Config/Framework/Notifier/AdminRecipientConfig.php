<?php

namespace Symfony\Config\Framework\Notifier;



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
     * @default null
     */
    public function email($value): self
    {
        $this->email = $value;
    
        return $this;
    }
    
    /**
     */
    public function phone($value): self
    {
        $this->phone = $value;
    
        return $this;
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
    

}

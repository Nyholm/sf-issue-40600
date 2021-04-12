<?php

namespace Symfony\Config\Framework\Translator;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class PseudoLocalizationConfig 
{
    private $enabled;
    private $accents;
    private $expansionFactor;
    private $brackets;
    private $parseHtml;
    private $localizableHtmlAttributes;
    
    /**
     * @default false
     * @return $this
     */
    public function enabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @return $this
     */
    public function accents(bool $value): self
    {
        $this->accents = $value;
    
        return $this;
    }
    
    /**
     * @default 1.0
     * @return $this
     */
    public function expansionFactor(float $value): self
    {
        $this->expansionFactor = $value;
    
        return $this;
    }
    
    /**
     * @default true
     * @return $this
     */
    public function brackets(bool $value): self
    {
        $this->brackets = $value;
    
        return $this;
    }
    
    /**
     * @default false
     * @return $this
     */
    public function parseHtml(bool $value): self
    {
        $this->parseHtml = $value;
    
        return $this;
    }
    
    /**
     * @return $this
     */
    public function localizableHtmlAttribute($value): self
    {
        $this->localizableHtmlAttributes = $value;
    
        return $this;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["accents"])) {
            $this->accents = $value["accents"];
            unset($value["accents"]);
        }
    
        if (isset($value["expansion_factor"])) {
            $this->expansionFactor = $value["expansion_factor"];
            unset($value["expansion_factor"]);
        }
    
        if (isset($value["brackets"])) {
            $this->brackets = $value["brackets"];
            unset($value["brackets"]);
        }
    
        if (isset($value["parse_html"])) {
            $this->parseHtml = $value["parse_html"];
            unset($value["parse_html"]);
        }
    
        if (isset($value["localizable_html_attributes"])) {
            $this->localizableHtmlAttributes = $value["localizable_html_attributes"];
            unset($value["localizable_html_attributes"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output["enabled"] = $this->enabled;
        }
        if (null !== $this->accents) {
            $output["accents"] = $this->accents;
        }
        if (null !== $this->expansionFactor) {
            $output["expansion_factor"] = $this->expansionFactor;
        }
        if (null !== $this->brackets) {
            $output["brackets"] = $this->brackets;
        }
        if (null !== $this->parseHtml) {
            $output["parse_html"] = $this->parseHtml;
        }
        if (null !== $this->localizableHtmlAttributes) {
            $output["localizable_html_attributes"] = $this->localizableHtmlAttributes;
        }
    
        return $output;
    }
    

}

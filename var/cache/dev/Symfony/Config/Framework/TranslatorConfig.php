<?php

namespace Symfony\Config\Framework;

require_once __DIR__.'/TranslatorConfig/PseudoLocalizationConfig.php';


/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class TranslatorConfig 
{
    private $enabled;
    private $fallbacks;
    private $logging;
    private $formatter;
    private $cacheDir;
    private $defaultPath;
    private $paths;
    private $enabledLocales;
    private $pseudoLocalization;
    
    /**
     * @default false
     */
    public function enabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    public function fallback( $value): self
    {
        $this->fallbacks = $value;
    
        return $this;
    }
    
    /**
     * @default false
     */
    public function logging(bool $value): self
    {
        $this->logging = $value;
    
        return $this;
    }
    
    /**
     * @default 'translator.formatter.default'
     */
    public function formatter( $value): self
    {
        $this->formatter = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.cache_dir%/translations'
     */
    public function cacheDir( $value): self
    {
        $this->cacheDir = $value;
    
        return $this;
    }
    
    /**
     * The default path used to load translations
     * @default '%kernel.project_dir%/translations'
     */
    public function defaultPath( $value): self
    {
        $this->defaultPath = $value;
    
        return $this;
    }
    
    public function path( $value): self
    {
        $this->paths = $value;
    
        return $this;
    }
    
    public function enabledLocale( $value): self
    {
        $this->enabledLocales = $value;
    
        return $this;
    }
    
    public function pseudoLocalization(array $value = []): \Symfony\Config\Framework\TranslatorConfig\PseudoLocalizationConfig
    {
        if (null === $this->pseudoLocalization) {
            $this->pseudoLocalization = new \Symfony\Config\Framework\TranslatorConfig\PseudoLocalizationConfig($value);
        } elseif ([] !== $value) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The node created by "pseudoLocalization()" has already been initialized. You cannot pass values the second time you call pseudoLocalization().'));
        }
    
        return $this->pseudoLocalization;
    }
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["fallbacks"])) {
            $this->fallbacks = $value["fallbacks"];
            unset($value["fallbacks"]);
        }
    
        if (isset($value["logging"])) {
            $this->logging = $value["logging"];
            unset($value["logging"]);
        }
    
        if (isset($value["formatter"])) {
            $this->formatter = $value["formatter"];
            unset($value["formatter"]);
        }
    
        if (isset($value["cache_dir"])) {
            $this->cacheDir = $value["cache_dir"];
            unset($value["cache_dir"]);
        }
    
        if (isset($value["default_path"])) {
            $this->defaultPath = $value["default_path"];
            unset($value["default_path"]);
        }
    
        if (isset($value["paths"])) {
            $this->paths = $value["paths"];
            unset($value["paths"]);
        }
    
        if (isset($value["enabled_locales"])) {
            $this->enabledLocales = $value["enabled_locales"];
            unset($value["enabled_locales"]);
        }
    
        if (isset($value["pseudo_localization"])) {
            $this->pseudoLocalization = new PseudoLocalizationConfig($value["pseudo_localization"]);
            unset($value["pseudo_localization"]);
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
        if (null !== $this->fallbacks) {
            $output["fallbacks"] = $this->fallbacks;
        }
        if (null !== $this->logging) {
            $output["logging"] = $this->logging;
        }
        if (null !== $this->formatter) {
            $output["formatter"] = $this->formatter;
        }
        if (null !== $this->cacheDir) {
            $output["cache_dir"] = $this->cacheDir;
        }
        if (null !== $this->defaultPath) {
            $output["default_path"] = $this->defaultPath;
        }
        if (null !== $this->paths) {
            $output["paths"] = $this->paths;
        }
        if (null !== $this->enabledLocales) {
            $output["enabled_locales"] = $this->enabledLocales;
        }
        if (null !== $this->pseudoLocalization) {
            $output["pseudo_localization"] = $this->pseudoLocalization->toArray();
        }
    
        return $output;
    }
    

}

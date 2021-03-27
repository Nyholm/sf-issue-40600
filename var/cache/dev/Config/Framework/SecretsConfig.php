<?php

namespace Config\Framework;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class SecretsConfig
{
    private $enabled;
    private $vaultDirectory;
    private $localDotenvFile;
    private $decryptionEnvVar;
    
    /**
     * @default true
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.project_dir%/config/secrets/%kernel.runtime_environment%'
     */
    public function setVaultDirectory( $value): self
    {
        $this->vaultDirectory = $value;
    
        return $this;
    }
    
    /**
     * @default '%kernel.project_dir%/.env.%kernel.environment%.local'
     */
    public function setLocalDotenvFile( $value): self
    {
        $this->localDotenvFile = $value;
    
        return $this;
    }
    
    /**
     * @default 'base64:default::SYMFONY_DECRYPTION_SECRET'
     */
    public function setDecryptionEnvVar( $value): self
    {
        $this->decryptionEnvVar = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->enabled) {
            $output["enabled"] = $this->enabled;
        }
        if (null !== $this->vaultDirectory) {
            $output["vault_directory"] = $this->vaultDirectory;
        }
        if (null !== $this->localDotenvFile) {
            $output["local_dotenv_file"] = $this->localDotenvFile;
        }
        if (null !== $this->decryptionEnvVar) {
            $output["decryption_env_var"] = $this->decryptionEnvVar;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["enabled"])) {
            $this->enabled = $value["enabled"];
            unset($value["enabled"]);
        }
    
        if (isset($value["vault_directory"])) {
            $this->vaultDirectory = $value["vault_directory"];
            unset($value["vault_directory"]);
        }
    
        if (isset($value["local_dotenv_file"])) {
            $this->localDotenvFile = $value["local_dotenv_file"];
            unset($value["local_dotenv_file"]);
        }
    
        if (isset($value["decryption_env_var"])) {
            $this->decryptionEnvVar = $value["decryption_env_var"];
            unset($value["decryption_env_var"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}

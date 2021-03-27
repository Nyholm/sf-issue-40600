<?php

namespace Config\Doctrine\DbalConfig\ConnectionConfig;



/**
 * This class is automatically generated to help creating config.
 *
 * @experimental in 5.3
 */
class ShardConfig
{
    private $id;
    private $url;
    private $dbname;
    private $host;
    private $port;
    private $user;
    private $password;
    private $overrideUrl;
    private $applicationName;
    private $charset;
    private $path;
    private $memory;
    private $unixSocket;
    private $persistent;
    private $protocol;
    private $service;
    private $servicename;
    private $sessionMode;
    private $server;
    private $defaultDbname;
    private $sslmode;
    private $sslrootcert;
    private $sslcert;
    private $sslkey;
    private $sslcrl;
    private $pooled;
    private $multipleActiveResultSets;
    private $useSavepoints;
    private $instancename;
    private $connectstring;
    
    /**
     * @default NULL
     */
    public function setId(int $value): self
    {
        $this->id = $value;
    
        return $this;
    }
    
    /**
     * A URL with connection information; any parameter value parsed from this string will override explicitly set parameters
     * @default NULL
     */
    public function setUrl( $value): self
    {
        $this->url = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setDbname( $value): self
    {
        $this->dbname = $value;
    
        return $this;
    }
    
    /**
     * Defaults to "localhost" at runtime.
     * @default NULL
     */
    public function setHost( $value): self
    {
        $this->host = $value;
    
        return $this;
    }
    
    /**
     * Defaults to null at runtime.
     * @default NULL
     */
    public function setPort( $value): self
    {
        $this->port = $value;
    
        return $this;
    }
    
    /**
     * Defaults to "root" at runtime.
     * @default NULL
     */
    public function setUser( $value): self
    {
        $this->user = $value;
    
        return $this;
    }
    
    /**
     * Defaults to null at runtime.
     * @default NULL
     */
    public function setPassword( $value): self
    {
        $this->password = $value;
    
        return $this;
    }
    
    /**
     * Allows overriding parts of the "url" parameter with dbname, host, port, user, and/or password parameters.
     * @default false
     */
    public function setOverrideUrl(bool $value): self
    {
        $this->overrideUrl = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setApplicationName( $value): self
    {
        $this->applicationName = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setCharset( $value): self
    {
        $this->charset = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setPath( $value): self
    {
        $this->path = $value;
    
        return $this;
    }
    
    /**
     * @default NULL
     */
    public function setMemory(bool $value): self
    {
        $this->memory = $value;
    
        return $this;
    }
    
    /**
     * The unix socket to use for MySQL
     * @default NULL
     */
    public function setUnixSocket( $value): self
    {
        $this->unixSocket = $value;
    
        return $this;
    }
    
    /**
     * True to use as persistent connection for the ibm_db2 driver
     * @default NULL
     */
    public function setPersistent(bool $value): self
    {
        $this->persistent = $value;
    
        return $this;
    }
    
    /**
     * The protocol to use for the ibm_db2 driver (default to TCPIP if omitted)
     * @default NULL
     */
    public function setProtocol( $value): self
    {
        $this->protocol = $value;
    
        return $this;
    }
    
    /**
     * True to use SERVICE_NAME as connection parameter instead of SID for Oracle
     * @default NULL
     */
    public function setService(bool $value): self
    {
        $this->service = $value;
    
        return $this;
    }
    
    /**
     * Overrules dbname parameter if given and used as SERVICE_NAME or SID connection parameter for Oracle depending on the service parameter.
     * @default NULL
     */
    public function setServicename( $value): self
    {
        $this->servicename = $value;
    
        return $this;
    }
    
    /**
     * The session mode to use for the oci8 driver
     * @default NULL
     */
    public function setSessionMode( $value): self
    {
        $this->sessionMode = $value;
    
        return $this;
    }
    
    /**
     * The name of a running database server to connect to for SQL Anywhere.
     * @default NULL
     */
    public function setServer( $value): self
    {
        $this->server = $value;
    
        return $this;
    }
    
    /**
     * Override the default database (postgres) to connect to for PostgreSQL connexion.
     * @default NULL
     */
    public function setDefaultDbname( $value): self
    {
        $this->defaultDbname = $value;
    
        return $this;
    }
    
    /**
     * Determines whether or with what priority a SSL TCP/IP connection will be negotiated with the server for PostgreSQL.
     * @default NULL
     */
    public function setSslmode( $value): self
    {
        $this->sslmode = $value;
    
        return $this;
    }
    
    /**
     * The name of a file containing SSL certificate authority (CA) certificate(s). If the file exists, the server's certificate will be verified to be signed by one of these authorities.
     * @default NULL
     */
    public function setSslrootcert( $value): self
    {
        $this->sslrootcert = $value;
    
        return $this;
    }
    
    /**
     * The path to the SSL client certificate file for PostgreSQL.
     * @default NULL
     */
    public function setSslcert( $value): self
    {
        $this->sslcert = $value;
    
        return $this;
    }
    
    /**
     * The path to the SSL client key file for PostgreSQL.
     * @default NULL
     */
    public function setSslkey( $value): self
    {
        $this->sslkey = $value;
    
        return $this;
    }
    
    /**
     * The file name of the SSL certificate revocation list for PostgreSQL.
     * @default NULL
     */
    public function setSslcrl( $value): self
    {
        $this->sslcrl = $value;
    
        return $this;
    }
    
    /**
     * True to use a pooled server with the oci8/pdo_oracle driver
     * @default NULL
     */
    public function setPooled(bool $value): self
    {
        $this->pooled = $value;
    
        return $this;
    }
    
    /**
     * Configuring MultipleActiveResultSets for the pdo_sqlsrv driver
     * @default NULL
     */
    public function setMultipleActiveResultSets(bool $value): self
    {
        $this->multipleActiveResultSets = $value;
    
        return $this;
    }
    
    /**
     * Use savepoints for nested transactions
     * @default NULL
     */
    public function setUseSavepoints(bool $value): self
    {
        $this->useSavepoints = $value;
    
        return $this;
    }
    
    /**
     * Optional parameter, complete whether to add the INSTANCE_NAME parameter in the connection. It is generally used to connect to an Oracle RAC server to select the name of a particular instance.
     * @default NULL
     */
    public function setInstancename( $value): self
    {
        $this->instancename = $value;
    
        return $this;
    }
    
    /**
     * Complete Easy Connect connection descriptor, see https://docs.oracle.com/database/121/NETAG/naming.htm.When using this option, you will still need to provide the user and password parameters, but the other parameters will no longer be used. Note that when using this parameter, the getHost and getPort methods from Doctrine\DBAL\Connection will no longer function as expected.
     * @default NULL
     */
    public function setConnectstring( $value): self
    {
        $this->connectstring = $value;
    
        return $this;
    }
    
    public function toArray(): array
    {
        $output = [];
        if (null !== $this->id) {
            $output["id"] = $this->id;
        }
        if (null !== $this->url) {
            $output["url"] = $this->url;
        }
        if (null !== $this->dbname) {
            $output["dbname"] = $this->dbname;
        }
        if (null !== $this->host) {
            $output["host"] = $this->host;
        }
        if (null !== $this->port) {
            $output["port"] = $this->port;
        }
        if (null !== $this->user) {
            $output["user"] = $this->user;
        }
        if (null !== $this->password) {
            $output["password"] = $this->password;
        }
        if (null !== $this->overrideUrl) {
            $output["override_url"] = $this->overrideUrl;
        }
        if (null !== $this->applicationName) {
            $output["application_name"] = $this->applicationName;
        }
        if (null !== $this->charset) {
            $output["charset"] = $this->charset;
        }
        if (null !== $this->path) {
            $output["path"] = $this->path;
        }
        if (null !== $this->memory) {
            $output["memory"] = $this->memory;
        }
        if (null !== $this->unixSocket) {
            $output["unix_socket"] = $this->unixSocket;
        }
        if (null !== $this->persistent) {
            $output["persistent"] = $this->persistent;
        }
        if (null !== $this->protocol) {
            $output["protocol"] = $this->protocol;
        }
        if (null !== $this->service) {
            $output["service"] = $this->service;
        }
        if (null !== $this->servicename) {
            $output["servicename"] = $this->servicename;
        }
        if (null !== $this->sessionMode) {
            $output["sessionMode"] = $this->sessionMode;
        }
        if (null !== $this->server) {
            $output["server"] = $this->server;
        }
        if (null !== $this->defaultDbname) {
            $output["default_dbname"] = $this->defaultDbname;
        }
        if (null !== $this->sslmode) {
            $output["sslmode"] = $this->sslmode;
        }
        if (null !== $this->sslrootcert) {
            $output["sslrootcert"] = $this->sslrootcert;
        }
        if (null !== $this->sslcert) {
            $output["sslcert"] = $this->sslcert;
        }
        if (null !== $this->sslkey) {
            $output["sslkey"] = $this->sslkey;
        }
        if (null !== $this->sslcrl) {
            $output["sslcrl"] = $this->sslcrl;
        }
        if (null !== $this->pooled) {
            $output["pooled"] = $this->pooled;
        }
        if (null !== $this->multipleActiveResultSets) {
            $output["MultipleActiveResultSets"] = $this->multipleActiveResultSets;
        }
        if (null !== $this->useSavepoints) {
            $output["use_savepoints"] = $this->useSavepoints;
        }
        if (null !== $this->instancename) {
            $output["instancename"] = $this->instancename;
        }
        if (null !== $this->connectstring) {
            $output["connectstring"] = $this->connectstring;
        }
    
        return $output;
    }
    
    
    public function __construct(array $value = [])
    {
    
        if (isset($value["id"])) {
            $this->id = $value["id"];
            unset($value["id"]);
        }
    
        if (isset($value["url"])) {
            $this->url = $value["url"];
            unset($value["url"]);
        }
    
        if (isset($value["dbname"])) {
            $this->dbname = $value["dbname"];
            unset($value["dbname"]);
        }
    
        if (isset($value["host"])) {
            $this->host = $value["host"];
            unset($value["host"]);
        }
    
        if (isset($value["port"])) {
            $this->port = $value["port"];
            unset($value["port"]);
        }
    
        if (isset($value["user"])) {
            $this->user = $value["user"];
            unset($value["user"]);
        }
    
        if (isset($value["password"])) {
            $this->password = $value["password"];
            unset($value["password"]);
        }
    
        if (isset($value["override_url"])) {
            $this->overrideUrl = $value["override_url"];
            unset($value["override_url"]);
        }
    
        if (isset($value["application_name"])) {
            $this->applicationName = $value["application_name"];
            unset($value["application_name"]);
        }
    
        if (isset($value["charset"])) {
            $this->charset = $value["charset"];
            unset($value["charset"]);
        }
    
        if (isset($value["path"])) {
            $this->path = $value["path"];
            unset($value["path"]);
        }
    
        if (isset($value["memory"])) {
            $this->memory = $value["memory"];
            unset($value["memory"]);
        }
    
        if (isset($value["unix_socket"])) {
            $this->unixSocket = $value["unix_socket"];
            unset($value["unix_socket"]);
        }
    
        if (isset($value["persistent"])) {
            $this->persistent = $value["persistent"];
            unset($value["persistent"]);
        }
    
        if (isset($value["protocol"])) {
            $this->protocol = $value["protocol"];
            unset($value["protocol"]);
        }
    
        if (isset($value["service"])) {
            $this->service = $value["service"];
            unset($value["service"]);
        }
    
        if (isset($value["servicename"])) {
            $this->servicename = $value["servicename"];
            unset($value["servicename"]);
        }
    
        if (isset($value["sessionMode"])) {
            $this->sessionMode = $value["sessionMode"];
            unset($value["sessionMode"]);
        }
    
        if (isset($value["server"])) {
            $this->server = $value["server"];
            unset($value["server"]);
        }
    
        if (isset($value["default_dbname"])) {
            $this->defaultDbname = $value["default_dbname"];
            unset($value["default_dbname"]);
        }
    
        if (isset($value["sslmode"])) {
            $this->sslmode = $value["sslmode"];
            unset($value["sslmode"]);
        }
    
        if (isset($value["sslrootcert"])) {
            $this->sslrootcert = $value["sslrootcert"];
            unset($value["sslrootcert"]);
        }
    
        if (isset($value["sslcert"])) {
            $this->sslcert = $value["sslcert"];
            unset($value["sslcert"]);
        }
    
        if (isset($value["sslkey"])) {
            $this->sslkey = $value["sslkey"];
            unset($value["sslkey"]);
        }
    
        if (isset($value["sslcrl"])) {
            $this->sslcrl = $value["sslcrl"];
            unset($value["sslcrl"]);
        }
    
        if (isset($value["pooled"])) {
            $this->pooled = $value["pooled"];
            unset($value["pooled"]);
        }
    
        if (isset($value["MultipleActiveResultSets"])) {
            $this->multipleActiveResultSets = $value["MultipleActiveResultSets"];
            unset($value["MultipleActiveResultSets"]);
        }
    
        if (isset($value["use_savepoints"])) {
            $this->useSavepoints = $value["use_savepoints"];
            unset($value["use_savepoints"]);
        }
    
        if (isset($value["instancename"])) {
            $this->instancename = $value["instancename"];
            unset($value["instancename"]);
        }
    
        if (isset($value["connectstring"])) {
            $this->connectstring = $value["connectstring"];
            unset($value["connectstring"]);
        }
    
        if ($value !== []) {
            throw new \Symfony\Component\Config\Definition\Exception\InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__) . implode(', ', array_keys($value)));
        }
    }
    

}

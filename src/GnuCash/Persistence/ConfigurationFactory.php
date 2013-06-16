<?php

namespace Gnucash\Persistence;

/**
 * Class ConfigurationFactory
 * @package Gnucash\Persistence
 */
class ConfigurationFactory
{
    /**
     * @var array
     */
    protected $dbParams = [];

    /**
     * @var array
     */
    protected $mappings = [];

    /**
     * @param array $config
     */
    public function loadConfiguration(array $config)
    {
        if (isset($config['params']) && is_array($config['params'])) {
            $this->dbParams = $config['params'];
        }

        if (isset($config['mappings']) && is_array($config['mappings'])) {
            $this->mappings = $config['mappings'];
        }
    }

    /**
     * @return array
     */
    public function getDbParams()
    {
        return $this->dbParams;
    }

    /**
     * @return array
     */
    public function getMappingPaths()
    {
        return $this->mappings;
    }
}

<?php

namespace Gnucash\Persistence;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

/**
 * Class EntityManagerFactory
 * @package Gnucash\Persistence
 */
class EntityManagerFactory
{
    /**
     * @var ConfigurationFactory
     */
    protected $configurationFactory;

    /**
     * @var array
     */
    protected static $singletons = [];

    /**
     * Constructor.
     *
     * @param ConfigurationFactory $config
     */
    public function __construct(ConfigurationFactory $config)
    {
        $this->configurationFactory = $config;
    }

    /**
     * Get a new entity manager.
     *
     * @todo Handle Proxies
     * @return EntityManager
     */
    public function getNewEntityManager()
    {
        $dbParams = $this->configurationFactory->getDbParams();

        return EntityManager::create(
            $dbParams,
            Setup::createYAMLMetadataConfiguration($this->configurationFactory->getMappingPaths(), true)
        );
    }

    /**
     * Get the environment entity manager singleton.
     *
     * @return EntityManager
     */
    public function getSingleton()
    {
        $dbParams = $this->configurationFactory->getDbParams();

        if (isset(self::$singletons[$dbParams['host']])) {
            return self::$singletons[$dbParams['host']];
        }

        $entityManager =  $this->getNewEntityManager();
        self::$singletons[$dbParams['host']] = $entityManager;

        return $entityManager;
    }
}

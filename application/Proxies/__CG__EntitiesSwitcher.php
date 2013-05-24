<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Switcher extends \Entities\Switcher implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setIpv4addr($ipv4addr)
    {
        $this->__load();
        return parent::setIpv4addr($ipv4addr);
    }

    public function getIpv4addr()
    {
        $this->__load();
        return parent::getIpv4addr();
    }

    public function setIpv6addr($ipv6addr)
    {
        $this->__load();
        return parent::setIpv6addr($ipv6addr);
    }

    public function getIpv6addr()
    {
        $this->__load();
        return parent::getIpv6addr();
    }

    public function setSnmppasswd($snmppasswd)
    {
        $this->__load();
        return parent::setSnmppasswd($snmppasswd);
    }

    public function getSnmppasswd()
    {
        $this->__load();
        return parent::getSnmppasswd();
    }

    public function setInfrastructure($infrastructure)
    {
        $this->__load();
        return parent::setInfrastructure($infrastructure);
    }

    public function getInfrastructure()
    {
        $this->__load();
        return parent::getInfrastructure();
    }

    public function setSwitchtype($switchtype)
    {
        $this->__load();
        return parent::setSwitchtype($switchtype);
    }

    public function getSwitchtype()
    {
        $this->__load();
        return parent::getSwitchtype();
    }

    public function setModel($model)
    {
        $this->__load();
        return parent::setModel($model);
    }

    public function getModel()
    {
        $this->__load();
        return parent::getModel();
    }

    public function setNotes($notes)
    {
        $this->__load();
        return parent::setNotes($notes);
    }

    public function getNotes()
    {
        $this->__load();
        return parent::getNotes();
    }

    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function addPort(\Entities\SwitchPort $ports)
    {
        $this->__load();
        return parent::addPort($ports);
    }

    public function removePort(\Entities\SwitchPort $ports)
    {
        $this->__load();
        return parent::removePort($ports);
    }

    public function getPorts()
    {
        $this->__load();
        return parent::getPorts();
    }

    public function addConsoleServerConnection(\Entities\ConsoleServerConnection $consoleServerConnections)
    {
        $this->__load();
        return parent::addConsoleServerConnection($consoleServerConnections);
    }

    public function removeConsoleServerConnection(\Entities\ConsoleServerConnection $consoleServerConnections)
    {
        $this->__load();
        return parent::removeConsoleServerConnection($consoleServerConnections);
    }

    public function getConsoleServerConnections()
    {
        $this->__load();
        return parent::getConsoleServerConnections();
    }

    public function setCabinet(\Entities\Cabinet $cabinet = NULL)
    {
        $this->__load();
        return parent::setCabinet($cabinet);
    }

    public function getCabinet()
    {
        $this->__load();
        return parent::getCabinet();
    }

    public function setVendor(\Entities\Vendor $vendor = NULL)
    {
        $this->__load();
        return parent::setVendor($vendor);
    }

    public function getVendor()
    {
        $this->__load();
        return parent::getVendor();
    }

    public function addSecEvent(\Entities\SecEvent $secEvents)
    {
        $this->__load();
        return parent::addSecEvent($secEvents);
    }

    public function removeSecEvent(\Entities\SecEvent $secEvents)
    {
        $this->__load();
        return parent::removeSecEvent($secEvents);
    }

    public function getSecEvents()
    {
        $this->__load();
        return parent::getSecEvents();
    }

    public function setActive($active)
    {
        $this->__load();
        return parent::setActive($active);
    }

    public function getActive()
    {
        $this->__load();
        return parent::getActive();
    }

    public function setHostname($hostname)
    {
        $this->__load();
        return parent::setHostname($hostname);
    }

    public function getHostname()
    {
        $this->__load();
        return parent::getHostname();
    }

    public function setOs($os)
    {
        $this->__load();
        return parent::setOs($os);
    }

    public function getOs()
    {
        $this->__load();
        return parent::getOs();
    }

    public function setOsDate($osDate)
    {
        $this->__load();
        return parent::setOsDate($osDate);
    }

    public function getOsDate()
    {
        $this->__load();
        return parent::getOsDate();
    }

    public function setOsVersion($osVersion)
    {
        $this->__load();
        return parent::setOsVersion($osVersion);
    }

    public function getOsVersion()
    {
        $this->__load();
        return parent::getOsVersion();
    }

    public function setLastPolled($lastPolled)
    {
        $this->__load();
        return parent::setLastPolled($lastPolled);
    }

    public function getLastPolled()
    {
        $this->__load();
        return parent::getLastPolled();
    }

    public function snmpPollSwitchPorts($host, $logger = false, &$result = false)
    {
        $this->__load();
        return parent::snmpPollSwitchPorts($host, $logger, $result);
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'name', 'hostname', 'ipv4addr', 'ipv6addr', 'snmppasswd', 'infrastructure', 'switchtype', 'model', 'active', 'os', 'osDate', 'osVersion', 'lastPolled', 'notes', 'id', 'Ports', 'ConsoleServerConnections', 'SecEvents', 'Cabinet', 'Vendor');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}
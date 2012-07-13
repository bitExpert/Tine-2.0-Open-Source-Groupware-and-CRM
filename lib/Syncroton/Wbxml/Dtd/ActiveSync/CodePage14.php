<?php
/**
 * Syncroton
 *
 * @package     Wbxml
 * @subpackage  ActiveSync
 * @license     http://www.tine20.org/licenses/lgpl.html LGPL Version 3
 * @copyright   Copyright (c) 2008-2012 Metaways Infosystems GmbH (http://www.metaways.de)
 * @author      Lars Kneschke <l.kneschke@metaways.de>
 */

/**
 * class documentation
 *
 * @package     Wbxml
 * @subpackage  ActiveSync
 * @todo        add missing tags
 */
 
class Syncroton_Wbxml_Dtd_ActiveSync_CodePage14 extends Syncroton_Wbxml_Dtd_ActiveSync_Abstract
{
    protected $_codePageNumber  = 14;
    
    protected $_codePageName    = 'Provision';
        
    protected $_tags = array(     
        'Provision'              => 0x05,
        'Policies'               => 0x06,
        'Policy'                 => 0x07,
        'PolicyType'             => 0x08,
        'PolicyKey'              => 0x09,
        'Data'                   => 0x0a,
        'Status'                 => 0x0b,
        'RemoteWipe'             => 0x0c,
        'EASProvisionDoc'        => 0x0d,
        'DevicePasswordEnabled'  => 0x0e 
    );
}
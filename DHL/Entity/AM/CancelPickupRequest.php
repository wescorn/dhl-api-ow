<?php
namespace DHL\Entity\AM; 
use DHL\Entity\Base;

/**
 * CancelPickupRequest Request model for DHL API
 */
class CancelPickupRequest extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = false;

    /**
     * Name of the service
     * @var string
     */
    protected $_serviceName = 'CancelPickupRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'CancelPickupRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'ConfirmationNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'minInclusive' => '1',
            'maxInclusive' => '999999999',
        ), 
        'RequestorName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '35',
        ), 
        'OriginSvcArea' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '5',
        ), 
        'Reason' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'maxLength' => '3',
            'minLength' => '3',
            'enumeration' => '001,002,003,004,005,006,007,008',
        ), 
    );
}
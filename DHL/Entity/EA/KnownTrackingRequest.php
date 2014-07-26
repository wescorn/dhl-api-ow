<?php
namespace DHL\Entity\EA; 
use DHL\Entity\Base;

/**
 * KnownTrackingRequest Request model for DHL API
 */
class KnownTrackingRequest extends Base
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
    protected $_serviceName = 'KnownTrackingRequest';

    /**
     * @var string
     * Service XSD
     */
    protected $_serviceXSD = 'KnownTrackingRequest.xsd';

    /**
     * Parameters to be send in the body
     * @var array
     */
    protected $_bodyParams = array(
        'LanguageCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO Language Code',
        ), 
        'AWBNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Airway bill number',
            'maxLength' => '11',
        ), 
        'LPNumber' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
        ), 
        'LevelOfDetails' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Checkpoint details selection flag',
            'enumeration' => 'LAST_CHECK_POINT_ONLY,ALL_CHECK_POINTS',
        ), 
        'PiecesEnabled' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'Pieces Enabling Flag',
            'enumeration' => 'S,B,P',
        ), 
        'CountryCode' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => 'ISO country codes',
            'length' => '2',
        ), 
    );
}
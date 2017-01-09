<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Product\Types;

/**
 *
 * @property \DTS\eBaySDK\Product\Types\PaginationOutput $paginationOutput
 * @property \DTS\eBaySDK\Product\Types\ProductSubmissionResult[] $productSubmissionResponse
 */
class GetProductSubmissionsResponse extends \DTS\eBaySDK\Product\Types\BaseServiceResponse
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'paginationOutput' => [
            'type' => 'DTS\eBaySDK\Product\Types\PaginationOutput',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paginationOutput'
        ],
        'productSubmissionResponse' => [
            'type' => 'DTS\eBaySDK\Product\Types\ProductSubmissionResult',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'productSubmissionResponse'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
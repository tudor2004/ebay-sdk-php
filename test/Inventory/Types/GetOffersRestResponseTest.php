<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\Inventory\Types;

use DTS\eBaySDK\Inventory\Types\GetOffersRestResponse;

class GetOffersRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetOffersRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\GetOffersRestResponse', $this->obj);
    }

    public function testExtendsOffers()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Inventory\Types\Offers', $this->obj);
    }
}
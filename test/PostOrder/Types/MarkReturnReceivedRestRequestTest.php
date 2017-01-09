<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\MarkReturnReceivedRestRequest;

class MarkReturnReceivedRestRequestTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new MarkReturnReceivedRestRequest();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\MarkReturnReceivedRestRequest', $this->obj);
    }

    public function testExtendsMarkAsReceivedRequest()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\MarkAsReceivedRequest', $this->obj);
    }
}
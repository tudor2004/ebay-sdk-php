<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\EscalateReturnRestResponse;

class EscalateReturnRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new EscalateReturnRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\EscalateReturnRestResponse', $this->obj);
    }

    public function testExtendsEscalateResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\EscalateResponse', $this->obj);
    }
}
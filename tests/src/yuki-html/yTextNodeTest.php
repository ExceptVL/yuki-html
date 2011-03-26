<?php

/**
 * Test class for yTextNode.
 * Generated by PHPUnit on 2011-03-26 at 21:00:58.
 */
class yTextNodeTest extends PHPUnit_Framework_TestCase{
    /**
     * @var yTextNode
     */
    protected $object;
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(){
        
    }
    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(){
        
    }
    /**
     * @covers yTextNode
     * @todo Implement testGetValue().
     */
    public function testAll(){
        $node = new yTextNode('test');
        $this->assertEquals('test', $node->getValue());
        $this->assertEquals('test', strval($node));
        $node = new yTextNode('<test>');
        $this->assertEquals('<test>', $node->getValue());
        $this->assertEquals('&lt;test&gt;', strval($node));
        // Quotes should not be escaped - we're outside of tag:
        $node = new yTextNode('"test"'); 
        $this->assertEquals('"test"', $node->getValue());
        $this->assertEquals('"test"', strval($node));
        $node->setValue('test2');
        $this->assertEquals('test2', strval($node));
    }
}

?>

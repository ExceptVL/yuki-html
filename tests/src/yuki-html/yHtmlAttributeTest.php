<?php

/**
 * Test class for \yuki\html\attribute.
 * Generated by PHPUnit on 2011-03-24 at 19:00:31.
 */
class yHtmlAttributeTest extends PHPUnit_Framework_TestCase{
    /**
     * @var \yuki\html\attribute
     */
    protected $object;
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(){
        $this->object = new \yuki\html\attribute('name', 'value');
    }
    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(){
        
    }
    /**
     * @todo Implement testSetName().
     */
    public function testAll(){
        $this->object->setName('src');
        $this->assertEquals('src', $this->object->getName());
        $this->object->set('value');
        $this->assertEquals('value', $this->object->get());
        $this->object->set(array('1', '2'));
        $this->assertEquals('1,2', $this->object->get());
        $this->assertEquals('1,2', $this->object->__toString());
        $this->assertEquals('src="1,2"', $this->object->getAttributeString());
        $this->object->push(3);
        $this->assertEquals('1,2,3', $this->object->get());
        var_dump($this->object);
        $this->object->pop(2);
        var_dump($this->object);
        $this->assertEquals('1,3', $this->object->get());
        // Push & delimiter test
        $this->object->set(4);
        $this->assertEquals(',', $this->object->getDelimiter());
        $this->object->setDelimiter(';');
        $this->assertEquals(';', $this->object->getDelimiter());
        $this->object->push(6);
        $this->assertEquals('4;6', $this->object->get());
        // Pop test
        $this->object->set(4);
        $this->object->pop(4);
        $this->assertEquals('', $this->object->get());
        $this->object->set('"value"');
        $this->assertEquals('src="&quot;value&quot;"', $this->object->getAttributeString());
    }
}



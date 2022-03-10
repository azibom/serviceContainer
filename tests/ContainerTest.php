<?php

use PHPUnit\Framework\TestCase;
use Php\Container\Container;

class ContainerTest extends TestCase
{
    /** @test */
    public function resolve_the_same_object_setted()
    {
        $expected = new \StdClass();
    
        $container = new Container;
        $container->set('stdclass', $expected);
        
        $actual = $container->get('stdclass');
        
        $this->assertSame($expected, $actual);        
    }
}
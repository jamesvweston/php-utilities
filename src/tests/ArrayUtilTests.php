<?php

namespace jamesvweston\Utilities\Tests;


use jamesvweston\Utilities\ArrayUtil;

class ArrayUtilTests extends \PHPUnit_Framework_TestCase
{

    public function testGetUnset ()
    {
        $arr            = [
            'foo'       => 'bar'
        ];
        $val            = ArrayUtil::getUnset($arr, 'foo');

        $this->assertArrayNotHasKey('foo', $arr);
        $this->assertEquals('bar', $val);
    }

}
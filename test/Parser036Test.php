<?php

namespace Antlr\Tests;
use Antlr\Runtime\ANTLRStringStream;
use Antlr\Runtime\CommonTokenStream;

require_once 'generated/t036multipleReturnValuesLexer.php';
require_once 'generated/t036multipleReturnValuesParser.php';

class Parser036Test extends \PHPUnit_Framework_TestCase
{
    public function testValid()
    {
        $ass = new ANTLRStringStream('   a');
        $lexer = new \t036multipleReturnValuesLexer($ass);
        $s = new CommonTokenStream($lexer);
        $parser = new \t036multipleReturnValuesParser($s);
        $data = $parser->a();

        $this->assertEquals('foo', $data->foo);
        $this->assertEquals('bar', $data->bar);
    }
}
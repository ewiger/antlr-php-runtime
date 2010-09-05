<?php

namespace Antlr\Tests;
use Antlr\Runtime\ANTLRStringStream;
use Antlr\Runtime\CommonTokenStream;

require_once 'generated/t041parametersLexer.php';
require_once 'generated/t041parametersParser.php';

class Parser041Test extends \PHPUnit_Framework_TestCase
{
    public function testValid()
    {
        $ass = new ANTLRStringStream('a a a');
        $lexer = new \t041parametersLexer($ass);
        $s = new CommonTokenStream($lexer);
        $parser = new \t041parametersParser($s);
        $data = $parser->a('foo', 'bar');

        $this->assertEquals(array('foo', 'bar'), $data);
    }
}
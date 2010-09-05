<?php

require_once 'antlr.php';
require_once 'generated/t029synpredgate.php';

class Lexer029Test extends PHPUnit_Framework_TestCase
{
    public function testValid()
    {
        $ass = new ANTLRStringStream('ac');
        $lexer = new t029synpredgate($ass);
        $lexer->nextToken();
    }
}
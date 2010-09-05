<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "generated/t024finallyLexer.php";
require_once "generated/t024finallyParser.php";

class ParserTest024 extends PHPUnit_Framework_TestCase
{
    function testValid1()
    {
        $parser = $this->parser('foobar');
        $events = $parser->prog();
        self::assertEquals($events, array('catch', 'finally'));
    }

    function parser($expr)
    {
        $ass = new ANTLRStringStream($expr);
        $lex = new t024finallyLexer($ass);
        $cts = new CommonTokenStream($lex);
        $tap = new t024finallyParser($cts);
        return $tap;
    }
}

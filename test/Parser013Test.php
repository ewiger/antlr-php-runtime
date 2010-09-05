<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "generated/t013parserLexer.php";
require_once "generated/t013parserParser.php";

class ParserTest013 extends PHPUnit_Framework_TestCase
{
    function testValid()
    {
        $parser = $this->parser('foobar');
        $parser->document();

        self::assertTrue(sizeof($parser->reportedErrors) == 0);
        self::assertEquals($parser->identifiers, array('foobar'));
    }

    function parser($expr)
    {
        $ass = new ANTLRStringStream($expr);
        $lex = new t013parserLexer($ass);
        $cts = new CommonTokenStream($lex);
        $tap = new t013parserParser($cts);
        return $tap;
    }
}

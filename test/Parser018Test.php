<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "generated/t018llstarLexer.php";
require_once "generated/t018llstarParser.php";

class ParserTest018 extends PHPUnit_Framework_TestCase
{
    function parser($expr)
    {
        $ass = new ANTLRStringStream($expr);
        $lex = new t018llstarLexer($ass);
        $cts = new CommonTokenStream($lex);
        $tap = new t018llstarParser($cts);
        return $tap;
    }

    function test1()
    {
        $input = file_get_contents(__DIR__ . '/grammers/t018llstar.input');
        $output = file_get_contents(__DIR__ . '/grammers/t018llstar.output');
        $parser = $this->parser($input);
        $parser->program();
        self::assertEquals($parser->out, $output);
    }
}

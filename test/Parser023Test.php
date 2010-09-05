<?php

namespace Antlr\Tests;
use Antlr\Runtime\ANTLRStringStream;
use Antlr\Runtime\CommonTokenStream;

require_once "generated/t023scopesLexer.php";
require_once "generated/t023scopesParser.php";

class ParserTest023 extends \PHPUnit_Framework_TestCase
{
    function testValid1()
    {
        $parser = $this->parser('foobar');
        $parser->prog();
    }

    function parser($expr)
    {
        $ass = ($expr);
        $lex = new \t023scopesLexer($ass);
        $cts = new CommonTokenStream($lex);
        $tap = new \t023scopesParser($cts);
        return $tap;
    }
}
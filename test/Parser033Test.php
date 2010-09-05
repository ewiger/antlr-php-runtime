<?php

require_once 'antlr.php';
require_once 'generated/t033backtrackingLexer.php';
require_once 'generated/t033backtrackingParser.php';

class Parser033Test extends PHPUnit_Framework_TestCase
{
    public function testValid()
    {
        $ass = new ANTLRStringStream('int a;');
        $lexer = new t033backtrackingLexer($ass);
        $s = new CommonTokenStream($lexer);
        $parser = new t033backtrackingParser($s);

        $parser->translation_unit();
    }
}
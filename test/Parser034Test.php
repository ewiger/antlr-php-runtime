<?php

require_once 'antlr.php';
require_once 'generated/t034tokenLabelPropertyRefLexer.php';
require_once 'generated/t034tokenLabelPropertyRefParser.php';

class Lexer034Test extends PHPUnit_Framework_TestCase
{
    public function testValid()
    {
        $ass = new ANTLRStringStream('   a');
        $lexer = new t034tokenLabelPropertyRefLexer($ass);
        $s = new CommonTokenStream($lexer);
        $parser = new t034tokenLabelPropertyRefParser($s);
        $parser->a();

        $this->assertEquals('a', $parser->text);
    }
}
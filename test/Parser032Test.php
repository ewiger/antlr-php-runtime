<?php

require_once 'antlr.php';
require_once 'generated/t032subrulePredictParser.php';
require_once 'generated/t032subrulePredictLexer.php';

class Lexer032Test extends PHPUnit_Framework_TestCase
{
    public function testValid()
    {
        $ass = new ANTLRStringStream('BEGIN A END');
        $lexer = new t032subrulePredictLexer($ass);
        $s = new CommonTokenStream($lexer);
        $parser = new t032subrulePredictParser($s);

        $parser->a();
    }
}
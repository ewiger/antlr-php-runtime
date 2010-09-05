<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "generated/t007lexer.php";

class LexerTest007 extends PHPUnit_Framework_TestCase
{
    public function test1()
    {

        $arr = array('fo', 'fababbooabb');

        $ass = new ANTLRStringStream('fofababbooabb');
        $lexer = new t007lexer($ass);
        foreach ($arr as $val) {
            $token = $lexer->nextToken();
            self::assertEquals(t007lexer::T_FOO, $token->getType());
            self::assertEquals($val, $token->getText());
        }
    }

    public function testMalformedInput()
    {
        $ass = new ANTLRStringStream('foaboao');
        $lexer = new t007lexer($ass);

        $this->setExpectedException('Exception', "line 1:6 required (...)+ loop did not match anything at character 'o'");
        $token = $lexer->nextToken();
    }
}

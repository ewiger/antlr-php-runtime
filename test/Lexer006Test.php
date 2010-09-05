<?php

require_once 'PHPUnit/Framework.php';
require_once "antlr.php";
require_once "generated/t006lexer.php";

class LexerTest0065 extends PHPUnit_Framework_TestCase
{
    public function test1()
    {
        $ass = new ANTLRStringStream('fofaaooa');
        $lexer = new t006lexer($ass);

        $token = $lexer->nextToken();
        $this->assertEquals(t006lexer::T_FOO, $token->getType());
        $this->assertEquals("fo", $token->getText());

        $token = $lexer->nextToken();
        $this->assertEquals(t006lexer::T_FOO, $token->getType());
        $this->assertEquals("faaooa", $token->getText());

        $token = $lexer->nextToken();
        $this->assertEquals(t006lexer::T_EOF, $token->getType());
    }

    public function testMalformedInput()
    {
        $ass = new ANTLRStringStream('fofoaooaoa2');
        $lexer = new t006lexer($ass);
        $token = $lexer->nextToken();
        $token = $lexer->nextToken();

        $this->setExpectedException('Exception', "line 1:10 mismatched character '2' expecting 'f'");
        $token = $lexer->nextToken();
    }
}


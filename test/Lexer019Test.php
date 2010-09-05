<?php


namespace Antlr\Tests;
use Antlr\Runtime\ANTLRStringStream;
require_once "generated/t019lexer.php";

class LexerTest019 extends \PHPUnit_Framework_TestCase
{
    public function testValid()
    {
        $input = file_get_contents(__DIR__ . '/grammers/t019lexer.input');
        $ass = new ANTLRStringStream($input);
        $lexer = new \t019lexer($ass);
        while (true) {
            $token = $lexer->nextToken();
            if ($token->type == \Antlr\Runtime\TokenConst::$EOF) {
                break;
            }
        }
    }
}

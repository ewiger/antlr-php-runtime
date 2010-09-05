<?php

namespace Antlr\Tests;
use Antlr\Runtime\ANTLRStringStream;
use Antlr\Runtime\CommonTokenStream;

require_once 'generated/t043synpredLexer.php';
require_once 'generated/t043synpredParser.php';

class Parser043Test extends \PHPUnit_Framework_TestCase
{
    public function testValid()
    {
        $ass = new ANTLRStringStream('   +foo>');
        $lexer = new \t043synpredLexer($ass);
        $s = new CommonTokenStream($lexer);
        $parser = new \t043synpredParser($s);

        $events = $parser->a();
    }
}
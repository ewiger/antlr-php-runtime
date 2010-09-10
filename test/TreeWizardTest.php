<?php

namespace Antlr\Tests;

use Antlr\Runtime\Tree\CommonTreeAdaptor;
use Antlr\Runtime\Tree\CommonTreeNodeStream;
use Antlr\Runtime\CommonToken;
use Antlr\Runtime\Tree\CommonTree;
use Antlr\Runtime\Token;
use Antlr\Runtime\Tree\TreeWizard;

class TreeNodeStreamTest extends \PHPUnit_Framework_TestCase
{

    public $adaptor;
    public $tokens = array("", "", "", "", "", "A", "B", "C", "D", "E", "ID", "VAR");

    public function setUp()
    {
        $this->adaptor = new CommonTreeAdaptor();
    }

    public function testSingleNode()
    {
        $wiz = new TreeWizard($this->adaptor, $this->tokens);
        $t = $wiz->create("ID");
        $found = $t->toStringTree();
        $this->assertEquals("ID", $found);
    }

    public function testSingleNodeWithArg()
    {
        $wiz = new TreeWizard($this->adaptor, $this->tokens);
        $t = $wiz->create("ID[foo]");
        $found = $t->toStringTree();
        $this->assertEquals("foo", $found);
    }

    public function testSingleNodeTree()
    {
        $wiz = new TreeWizard($this->adaptor, $this->tokens);
        $t = $wiz->create("(A)");
        $found = $t->toStringTree();
        $expecting = "A";
        $this->assertEquals($expecting, $found);
    }

    public function testSingleLevelTree()
    {
        $wiz = new TreeWizard($this->adaptor, $this->tokens);
        $t = $wiz->create("(A B C D)");
        $found = $t->toStringTree();
        $expecting = "(A B C D)";
        $this->assertEquals($expecting, $found);
    }

    public function testListTree()
    {
        $wiz = new TreeWizard($this->adaptor, $this->tokens);
        $t = $wiz->create("(nil A B C)");
        $found = $t->toStringTree();
        $expecting = "A B C";
        $this->assertEquals($expecting, $found);
    }

    public function testInvalidListTree()
    {
        $wiz = new TreeWizard($this->adaptor, $this->tokens);
        $t = $wiz->create("A B C");
        $this->assertNull($t);
    }

    public function testDoubleLevelTree()
    {
        $wiz = new TreeWizard($this->adaptor, $this->tokens);
        $t = $wiz->create("(A (B C) (B D) E)");
        $found = $t->toStringTree();
        $expecting = "(A (B C) (B D) E)";
        $this->assertEquals($expecting, $found);
    }

    public function testSingleNodeIndex()
    {
        $wiz = new TreeWizard($this->adaptor, $this->tokens);
        $t = $wiz->create("ID");
        $m = $wiz->index($t);

        $found = $this->indexMapToString($m);

        $expecting = '{"10":["ID"]}';
        $this->assertEquals($expecting, $found);
    }

    private function indexMapToString($m)
    {
        foreach ($m AS $type => $el) {
            foreach ($el AS $idx => $token) {
                $m[$type][$idx] = $token->toString();
            }
        }
        return json_encode($m);
    }

}
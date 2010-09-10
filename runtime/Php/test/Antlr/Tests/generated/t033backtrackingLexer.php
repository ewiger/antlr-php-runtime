<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g 2010-09-10 19:39:37


use Antlr\Runtime\IntStream;
use Antlr\Runtime\DFA;
use Antlr\Runtime\Parser;
use Antlr\Runtime\Lexer;
use Antlr\Runtime\CommonToken;
use Antlr\Runtime\Set;
use Antlr\Runtime\Token;
use Antlr\Runtime\CharStream;
use Antlr\Runtime\RecognizerSharedState;
use Antlr\Runtime\ParserRuleReturnScope;

use Antlr\Runtime\EarlyExitException;
use Antlr\Runtime\FailedPredicateException;
use Antlr\Runtime\MismatchedRangeException;
use Antlr\Runtime\MismatchedSetException;
use Antlr\Runtime\MismatchedTokenException;
use Antlr\Runtime\NoViableAltException;
use Antlr\Runtime\RecognitionException;
use Antlr\Runtime\UnwantedtokenException;


function t033backtrackingLexer_DFA25_static(){
    $eot = "\x7\xff\x1\x8\x2\xff";
    $eof = "\xa\xff";
    $min = "\x2\x2e\x1\xff\x1\x2b\x2\xff\x2\x30\x2\xff";
    $max = "\x1\x39\x1\x66\x1\xff\x1\x39\x2\xff\x1\x39\x1\x66\x2\xff";
    $accept = "\x2\xff\x1\x2\x1\xff\x1\x4\x1\x1\x2\xff\x2\x3";
    $special = "\xa\xff";
    $transitionS = array(
        "\x1\x2\x1\xff\xa\x1",
        "\x1\x5\x1\xff\xa\x1\xa\xff\x1\x4\x1\x3\x1\x4\x1d\xff\x1\x4\x1\x3" .
        "\x1\x4",
        "",
        "\x1\x6\x1\xff\x1\x6\x2\xff\xa\x7",
        "",
        "",
        "\xa\x7",
        "\xa\x7\xa\xff\x1\x9\x1\xff\x1\x9\x1d\xff\x1\x9\x1\xff\x1\x9",
        "",
        ""
    );

    $arr = array();
    $arr['eot'] = DFA::unpackRLE($eot);
    $arr['eof'] = DFA::unpackRLE($eof);
    $arr['min'] = DFA::unpackRLE($min, true);
    $arr['max'] = DFA::unpackRLE($max, true);
    $arr['accept'] = DFA::unpackRLE($accept);
    $arr['special'] = DFA::unpackRLE($special);


    $numStates = sizeof($transitionS);
    $arr['transition'] = array();
    for ($i=0; $i<$numStates; $i++) {
        $arr['transition'][$i] = DFA::unpackRLE($transitionS[$i]);
    }
    return $arr;
}

class t033backtrackingLexer_DFA25 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingLexer_DFA25_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 25;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "471:1: FLOATING_POINT_LITERAL : ( ( '0' .. '9' )+ '.' ( '0' .. '9' )* ( Exponent )? ( FloatTypeSuffix )? | '.' ( '0' .. '9' )+ ( Exponent )? ( FloatTypeSuffix )? | ( '0' .. '9' )+ Exponent ( FloatTypeSuffix )? | ( '0' .. '9' )+ ( Exponent )? FloatTypeSuffix );";
    }
}
function t033backtrackingLexer_DFA35_static(){
    $eot = "\x1\xff\x1\x15\x2\xff\xb\x15\x9\xff\x2\x2f\x4\xff\xf\x15\x1\xff" .
    "\x1\x43\x1\xff\x1\x2f\x2\xff\xb\x15\x1\x4f\x4\x15\x1\xff\x5\x15\x1\x59" .
    "\x1\x15\x1\x5b\x1\x15\x1\x5d\x1\x15\x1\xff\x1\x5f\x6\x15\x1\x66\x1\x15" .
    "\x1\xff\x1\x15\x1\xff\x1\x15\x1\xff\x1\x6a\x1\xff\x1\x6b\x3\x15\x1\x6f" .
    "\x1\x70\x1\xff\x1\x71\x2\x15\x2\xff\x1\x74\x1\x15\x1\x76\x3\xff\x2\x15" .
    "\x1\xff\x1\x15\x1\xff\x1\x7a\x1\x7b\x1\x7c\x3\xff";
    $eof = "\x7d\xff";
    $min = "\x1\x9\x1\x79\x2\xff\x1\x78\x1\x68\x1\x75\x1\x65\x1\x6f\x1\x68" .
    "\x1\x6e\x1\x6f\x1\x6c\x1\x6f\x1\x6e\x9\xff\x2\x2e\x2\xff\x1\x2a\x1\xff" .
    "\x1\x70\x1\x74\x1\x61\x1\x6f\x1\x67\x1\x74\x1\x67\x1\x69\x1\x61\x1\x6e" .
    "\x1\x74\x1\x6e\x1\x6f\x1\x75\x1\x73\x1\xff\x1\x2e\x1\xff\x1\x2e\x2\xff" .
    "\x2\x65\x1\x74\x1\x72\x1\x6e\x1\x6f\x1\x69\x1\x64\x1\x61\x1\x72\x1\x73" .
    "\x1\x24\x1\x67\x1\x61\x1\x62\x1\x69\x1\xff\x1\x64\x1\x72\x1\x69\x1\x74" .
    "\x1\x65\x1\x24\x1\x73\x1\x24\x1\x74\x1\x24\x1\x74\x1\xff\x1\x24\x1\x74" .
    "\x1\x6c\x1\x67\x1\x65\x1\x6e\x1\x63\x1\x24\x1\x64\x1\xff\x1\x74\x1\xff" .
    "\x1\x69\x1\xff\x1\x24\x1\xff\x1\x24\x1\x65\x1\x6e\x1\x66\x2\x24\x1\xff" .
    "\x1\x24\x1\x65\x1\x6c\x2\xff\x1\x24\x1\x65\x1\x24\x3\xff\x1\x72\x1\x65" .
    "\x1\xff\x1\x64\x1\xff\x3\x24\x3\xff";
    $max = "\x1\x7b\x1\x79\x2\xff\x1\x78\x1\x74\x1\x75\x1\x65\x2\x6f\x1\x6e" .
    "\x1\x6f\x1\x6c\x1\x6f\x1\x6e\x9\xff\x1\x78\x1\x66\x2\xff\x1\x2f\x1\xff" .
    "\x1\x70\x1\x74\x1\x61\x1\x6f\x1\x67\x1\x74\x1\x67\x1\x6c\x1\x61\x1\x6e" .
    "\x1\x74\x1\x6e\x1\x6f\x1\x75\x1\x73\x1\xff\x1\x66\x1\xff\x1\x66\x2\xff" .
    "\x2\x65\x1\x74\x1\x72\x1\x6e\x1\x6f\x1\x69\x1\x64\x1\x61\x1\x72\x1\x73" .
    "\x1\x7a\x1\x67\x1\x61\x1\x62\x1\x69\x1\xff\x1\x64\x1\x72\x1\x69\x1\x74" .
    "\x1\x65\x1\x7a\x1\x73\x1\x7a\x1\x74\x1\x7a\x1\x74\x1\xff\x1\x7a\x1\x74" .
    "\x1\x6c\x1\x67\x1\x65\x1\x6e\x1\x63\x1\x7a\x1\x64\x1\xff\x1\x74\x1\xff" .
    "\x1\x69\x1\xff\x1\x7a\x1\xff\x1\x7a\x1\x65\x1\x6e\x1\x66\x2\x7a\x1\xff" .
    "\x1\x7a\x1\x65\x1\x6c\x2\xff\x1\x7a\x1\x65\x1\x7a\x3\xff\x1\x72\x1\x65" .
    "\x1\xff\x1\x64\x1\xff\x3\x7a\x3\xff";
    $accept = "\x2\xff\x1\x2\x1\x3\xb\xff\x1\x13\x1\x14\x1\x15\x1\x16\x1" .
    "\x17\x1\x18\x1\x19\x1\x1a\x1\x1b\x2\xff\x1\x1f\x1\x20\x1\xff\x1\x23" .
    "\xf\xff\x1\x1c\x1\xff\x1\x1d\x1\xff\x1\x21\x1\x22\x10\xff\x1\x1e\xb" .
    "\xff\x1\xb\x9\xff\x1\x6\x1\xff\x1\x8\x1\xff\x1\x9\x1\xff\x1\xc\x6\xff" .
    "\x1\xa\x3\xff\x1\x11\x1\xd\x3\xff\x1\x4\x1\x5\x1\xf\x2\xff\x1\xe\x1" .
    "\xff\x1\x1\x3\xff\x1\x7\x1\x12\x1\x10";
    $special = "\x7d\xff";
    $transitionS = array(
        "\x2\x1b\x1\xff\x2\x1b\x12\xff\x1\x1b\x1\xff\x1\x17\x1\x1d\x1\x15" .
        "\x2\xff\x1\x16\x1\xf\x1\x10\x1\x13\x1\xff\x1\x3\x1\xff\x1\x1a\x1" .
        "\x1c\x1\x18\x9\x19\x1\xff\x1\x2\x5\xff\x1a\x15\x1\x11\x1\xff\x1" .
        "\x12\x1\xff\x1\x15\x1\xff\x1\x6\x1\x15\x1\x9\x1\xd\x1\x4\x1\xc\x2" .
        "\x15\x1\xa\x2\x15\x1\xb\x5\x15\x1\x7\x1\x5\x1\x1\x1\xe\x1\x8\x4" .
        "\x15\x1\x14",
        "\x1\x1e",
        "",
        "",
        "\x1\x1f",
        "\x1\x21\x1\x22\xa\xff\x1\x20",
        "\x1\x23",
        "\x1\x24",
        "\x1\x25",
        "\x1\x26\x6\xff\x1\x27",
        "\x1\x28",
        "\x1\x29",
        "\x1\x2a",
        "\x1\x2b",
        "\x1\x2c",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "\x1\x1a\x1\xff\x8\x2e\x2\x1a\xa\xff\x3\x1a\x11\xff\x1\x2d\xb\xff" .
        "\x3\x1a\x11\xff\x1\x2d",
        "\x1\x1a\x1\xff\xa\x30\xa\xff\x3\x1a\x1d\xff\x3\x1a",
        "",
        "",
        "\x1\x31\x4\xff\x1\x32",
        "",
        "\x1\x33",
        "\x1\x34",
        "\x1\x35",
        "\x1\x36",
        "\x1\x37",
        "\x1\x38",
        "\x1\x39",
        "\x1\x3a\x2\xff\x1\x3b",
        "\x1\x3c",
        "\x1\x3d",
        "\x1\x3e",
        "\x1\x3f",
        "\x1\x40",
        "\x1\x41",
        "\x1\x42",
        "",
        "\x1\x1a\x1\xff\x8\x2e\x2\x1a\xa\xff\x3\x1a\x1d\xff\x3\x1a",
        "",
        "\x1\x1a\x1\xff\xa\x30\xa\xff\x3\x1a\x1d\xff\x3\x1a",
        "",
        "",
        "\x1\x44",
        "\x1\x45",
        "\x1\x46",
        "\x1\x47",
        "\x1\x48",
        "\x1\x49",
        "\x1\x4a",
        "\x1\x4b",
        "\x1\x4c",
        "\x1\x4d",
        "\x1\x4e",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x50",
        "\x1\x51",
        "\x1\x52",
        "\x1\x53",
        "",
        "\x1\x54",
        "\x1\x55",
        "\x1\x56",
        "\x1\x57",
        "\x1\x58",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x5a",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x5c",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x5e",
        "",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x60",
        "\x1\x61",
        "\x1\x62",
        "\x1\x63",
        "\x1\x64",
        "\x1\x65",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x67",
        "",
        "\x1\x68",
        "",
        "\x1\x69",
        "",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x6c",
        "\x1\x6d",
        "\x1\x6e",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x72",
        "\x1\x73",
        "",
        "",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x75",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "",
        "",
        "",
        "\x1\x77",
        "\x1\x78",
        "",
        "\x1\x79",
        "",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x1\x15\xb\xff\xa\x15\x7\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "",
        "",
        ""
    );

    $arr = array();
    $arr['eot'] = DFA::unpackRLE($eot);
    $arr['eof'] = DFA::unpackRLE($eof);
    $arr['min'] = DFA::unpackRLE($min, true);
    $arr['max'] = DFA::unpackRLE($max, true);
    $arr['accept'] = DFA::unpackRLE($accept);
    $arr['special'] = DFA::unpackRLE($special);


    $numStates = sizeof($transitionS);
    $arr['transition'] = array();
    for ($i=0; $i<$numStates; $i++) {
        $arr['transition'][$i] = DFA::unpackRLE($transitionS[$i]);
    }
    return $arr;
}

class t033backtrackingLexer_DFA35 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingLexer_DFA35_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 35;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "1:1: Tokens : ( T__23 | T__24 | T__25 | T__26 | T__27 | T__28 | T__29 | T__30 | T__31 | T__32 | T__33 | T__34 | T__35 | T__36 | T__37 | T__38 | T__39 | T__40 | T__41 | T__42 | T__43 | T__44 | T__45 | T__46 | IDENTIFIER | CHARACTER_LITERAL | STRING_LITERAL | HEX_LITERAL | DECIMAL_LITERAL | OCTAL_LITERAL | FLOATING_POINT_LITERAL | WS | COMMENT | LINE_COMMENT | LINE_COMMAND );";
    }
}
 

class t033backtrackingLexer extends Lexer {
    const T_T__29=29;
    const T_T__28=28;
    const T_T__27=27;
    const T_T__26=26;
    const T_FloatTypeSuffix=15;
    const T_T__25=25;
    const T_T__24=24;
    const T_LETTER=5;
    const T_T__23=23;
    const T_Exponent=14;
    const T_EOF=-1;
    const T_HexDigit=9;
    const T_STRING_LITERAL=8;
    const T_FLOATING_POINT_LITERAL=16;
    const T_IDENTIFIER=4;
    const T_HEX_LITERAL=11;
    const T_COMMENT=20;
    const T_T__42=42;
    const T_T__43=43;
    const T_T__40=40;
    const T_T__41=41;
    const T_T__46=46;
    const T_T__44=44;
    const T_T__45=45;
    const T_LINE_COMMENT=21;
    const T_IntegerTypeSuffix=10;
    const T_CHARACTER_LITERAL=7;
    const T_OCTAL_LITERAL=13;
    const T_T__30=30;
    const T_T__31=31;
    const T_T__32=32;
    const T_T__33=33;
    const T_WS=19;
    const T_T__34=34;
    const T_T__35=35;
    const T_T__36=36;
    const T_T__37=37;
    const T_T__38=38;
    const T_T__39=39;
    const T_UnicodeEscape=18;
    const T_LINE_COMMAND=22;
    const T_OctalEscape=17;
    const T_DECIMAL_LITERAL=12;
    const T_EscapeSequence=6;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


            $this->dfa25 = new t033backtrackingLexer_DFA25($this);
            $this->dfa35 = new t033backtrackingLexer_DFA35($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g"; }

    // $ANTLR start "T__23"
    function mT__23(){
        try {
            $_type = t033backtrackingLexer::T_T__23;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("typedef"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__23"

    // $ANTLR start "T__24"
    function mT__24(){
        try {
            $_type = t033backtrackingLexer::T_T__24;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(59); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__24"

    // $ANTLR start "T__25"
    function mT__25(){
        try {
            $_type = t033backtrackingLexer::T_T__25;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(44); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__25"

    // $ANTLR start "T__26"
    function mT__26(){
        try {
            $_type = t033backtrackingLexer::T_T__26;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("extern"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__26"

    // $ANTLR start "T__27"
    function mT__27(){
        try {
            $_type = t033backtrackingLexer::T_T__27;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("static"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__27"

    // $ANTLR start "T__28"
    function mT__28(){
        try {
            $_type = t033backtrackingLexer::T_T__28;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("auto"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__28"

    // $ANTLR start "T__29"
    function mT__29(){
        try {
            $_type = t033backtrackingLexer::T_T__29;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("register"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__29"

    // $ANTLR start "T__30"
    function mT__30(){
        try {
            $_type = t033backtrackingLexer::T_T__30;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("void"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__30"

    // $ANTLR start "T__31"
    function mT__31(){
        try {
            $_type = t033backtrackingLexer::T_T__31;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("char"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__31"

    // $ANTLR start "T__32"
    function mT__32(){
        try {
            $_type = t033backtrackingLexer::T_T__32;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("short"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__32"

    // $ANTLR start "T__33"
    function mT__33(){
        try {
            $_type = t033backtrackingLexer::T_T__33;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("int"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__33"

    // $ANTLR start "T__34"
    function mT__34(){
        try {
            $_type = t033backtrackingLexer::T_T__34;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("long"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__34"

    // $ANTLR start "T__35"
    function mT__35(){
        try {
            $_type = t033backtrackingLexer::T_T__35;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("float"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__35"

    // $ANTLR start "T__36"
    function mT__36(){
        try {
            $_type = t033backtrackingLexer::T_T__36;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("double"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__36"

    // $ANTLR start "T__37"
    function mT__37(){
        try {
            $_type = t033backtrackingLexer::T_T__37;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("signed"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__37"

    // $ANTLR start "T__38"
    function mT__38(){
        try {
            $_type = t033backtrackingLexer::T_T__38;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("unsigned"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__38"

    // $ANTLR start "T__39"
    function mT__39(){
        try {
            $_type = t033backtrackingLexer::T_T__39;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("const"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__39"

    // $ANTLR start "T__40"
    function mT__40(){
        try {
            $_type = t033backtrackingLexer::T_T__40;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("volatile"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__40"

    // $ANTLR start "T__41"
    function mT__41(){
        try {
            $_type = t033backtrackingLexer::T_T__41;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(40); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__41"

    // $ANTLR start "T__42"
    function mT__42(){
        try {
            $_type = t033backtrackingLexer::T_T__42;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(41); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__42"

    // $ANTLR start "T__43"
    function mT__43(){
        try {
            $_type = t033backtrackingLexer::T_T__43;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(91); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__43"

    // $ANTLR start "T__44"
    function mT__44(){
        try {
            $_type = t033backtrackingLexer::T_T__44;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(93); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__44"

    // $ANTLR start "T__45"
    function mT__45(){
        try {
            $_type = t033backtrackingLexer::T_T__45;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(42); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__45"

    // $ANTLR start "T__46"
    function mT__46(){
        try {
            $_type = t033backtrackingLexer::T_T__46;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(123); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__46"

    // $ANTLR start "IDENTIFIER"
    function mIDENTIFIER(){
        try {
            $_type = t033backtrackingLexer::T_IDENTIFIER;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->mLETTER(); 
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('36')||($LA1_0>=$this->getToken('48') && $LA1_0<=$this->getToken('57'))||($LA1_0>=$this->getToken('65') && $LA1_0<=$this->getToken('90'))||$LA1_0==$this->getToken('95')||($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    if ( $this->input->LA(1)==$this->getToken('36')||($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
            	        $this->input->consume();

            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


            	    }
            	    break;

            	default :
            	    break 2;//loop1;
                }
            } while (true);


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "IDENTIFIER"

    // $ANTLR start "LETTER"
    function mLETTER(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            if ( $this->input->LA(1)==$this->getToken('36')||($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "LETTER"

    // $ANTLR start "CHARACTER_LITERAL"
    function mCHARACTER_LITERAL(){
        try {
            $_type = t033backtrackingLexer::T_CHARACTER_LITERAL;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(39); 
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt2=2;
            $LA2_0 = $this->input->LA(1);

            if ( ($LA2_0==$this->getToken('92')) ) {
                $alt2=1;
            }
            else if ( (($LA2_0>=$this->getToken('0') && $LA2_0<=$this->getToken('38'))||($LA2_0>=$this->getToken('40') && $LA2_0<=$this->getToken('91'))||($LA2_0>=$this->getToken('93') && $LA2_0<=$this->getToken('65535'))) ) {
                $alt2=2;
            }
            else {
                $nvae = new NoViableAltException("", 2, 0, $this->input);

                throw $nvae;
            }
            switch ($alt2) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->mEscapeSequence(); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('38'))||($this->input->LA(1)>=$this->getToken('40') && $this->input->LA(1)<=$this->getToken('91'))||($this->input->LA(1)>=$this->getToken('93') && $this->input->LA(1)<=$this->getToken('65535')) ) {
                        $this->input->consume();

                    } else {
                        $mse = new MismatchedSetException(null,$this->input);
                        $this->recover($mse);
                        throw $mse;}


                    }
                    break;

            }

            $this->matchChar(39); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "CHARACTER_LITERAL"

    // $ANTLR start "STRING_LITERAL"
    function mSTRING_LITERAL(){
        try {
            $_type = t033backtrackingLexer::T_STRING_LITERAL;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(34); 
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            //loop3:
            do {
                $alt3=3;
                $LA3_0 = $this->input->LA(1);

                if ( ($LA3_0==$this->getToken('92')) ) {
                    $alt3=1;
                }
                else if ( (($LA3_0>=$this->getToken('0') && $LA3_0<=$this->getToken('33'))||($LA3_0>=$this->getToken('35') && $LA3_0<=$this->getToken('91'))||($LA3_0>=$this->getToken('93') && $LA3_0<=$this->getToken('65535'))) ) {
                    $alt3=2;
                }


                switch ($alt3) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    $this->mEscapeSequence(); 

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('33'))||($this->input->LA(1)>=$this->getToken('35') && $this->input->LA(1)<=$this->getToken('91'))||($this->input->LA(1)>=$this->getToken('93') && $this->input->LA(1)<=$this->getToken('65535')) ) {
            	        $this->input->consume();

            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


            	    }
            	    break;

            	default :
            	    break 2;//loop3;
                }
            } while (true);

            $this->matchChar(34); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "STRING_LITERAL"

    // $ANTLR start "HEX_LITERAL"
    function mHEX_LITERAL(){
        try {
            $_type = t033backtrackingLexer::T_HEX_LITERAL;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(48); 
            if ( $this->input->LA(1)==$this->getToken('88')||$this->input->LA(1)==$this->getToken('120') ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $cnt4=0;
            //loop4:
            do {
                $alt4=2;
                $LA4_0 = $this->input->LA(1);

                if ( (($LA4_0>=$this->getToken('48') && $LA4_0<=$this->getToken('57'))||($LA4_0>=$this->getToken('65') && $LA4_0<=$this->getToken('70'))||($LA4_0>=$this->getToken('97') && $LA4_0<=$this->getToken('102'))) ) {
                    $alt4=1;
                }


                switch ($alt4) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    $this->mHexDigit(); 

            	    }
            	    break;

            	default :
            	    if ( $cnt4 >= 1 ) break 2;//loop4;
                        $eee =
                            new EarlyExitException(4, $this->input);
                        throw $eee;
                }
                $cnt4++;
            } while (true);

            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt5=2;
            $LA5_0 = $this->input->LA(1);

            if ( ($LA5_0==$this->getToken('76')||$LA5_0==$this->getToken('85')||$LA5_0==$this->getToken('108')||$LA5_0==$this->getToken('117')) ) {
                $alt5=1;
            }
            switch ($alt5) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->mIntegerTypeSuffix(); 

                    }
                    break;

            }


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "HEX_LITERAL"

    // $ANTLR start "DECIMAL_LITERAL"
    function mDECIMAL_LITERAL(){
        try {
            $_type = t033backtrackingLexer::T_DECIMAL_LITERAL;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt7=2;
            $LA7_0 = $this->input->LA(1);

            if ( ($LA7_0==$this->getToken('48')) ) {
                $alt7=1;
            }
            else if ( (($LA7_0>=$this->getToken('49') && $LA7_0<=$this->getToken('57'))) ) {
                $alt7=2;
            }
            else {
                $nvae = new NoViableAltException("", 7, 0, $this->input);

                throw $nvae;
            }
            switch ($alt7) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchChar(48); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchRange(49,57); 
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    //loop6:
                    do {
                        $alt6=2;
                        $LA6_0 = $this->input->LA(1);

                        if ( (($LA6_0>=$this->getToken('48') && $LA6_0<=$this->getToken('57'))) ) {
                            $alt6=1;
                        }


                        switch ($alt6) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    	    {
                    	    $this->matchRange(48,57); 

                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop6;
                        }
                    } while (true);


                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt8=2;
            $LA8_0 = $this->input->LA(1);

            if ( ($LA8_0==$this->getToken('76')||$LA8_0==$this->getToken('85')||$LA8_0==$this->getToken('108')||$LA8_0==$this->getToken('117')) ) {
                $alt8=1;
            }
            switch ($alt8) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->mIntegerTypeSuffix(); 

                    }
                    break;

            }


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "DECIMAL_LITERAL"

    // $ANTLR start "OCTAL_LITERAL"
    function mOCTAL_LITERAL(){
        try {
            $_type = t033backtrackingLexer::T_OCTAL_LITERAL;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(48); 
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $cnt9=0;
            //loop9:
            do {
                $alt9=2;
                $LA9_0 = $this->input->LA(1);

                if ( (($LA9_0>=$this->getToken('48') && $LA9_0<=$this->getToken('55'))) ) {
                    $alt9=1;
                }


                switch ($alt9) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    $this->matchRange(48,55); 

            	    }
            	    break;

            	default :
            	    if ( $cnt9 >= 1 ) break 2;//loop9;
                        $eee =
                            new EarlyExitException(9, $this->input);
                        throw $eee;
                }
                $cnt9++;
            } while (true);

            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt10=2;
            $LA10_0 = $this->input->LA(1);

            if ( ($LA10_0==$this->getToken('76')||$LA10_0==$this->getToken('85')||$LA10_0==$this->getToken('108')||$LA10_0==$this->getToken('117')) ) {
                $alt10=1;
            }
            switch ($alt10) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->mIntegerTypeSuffix(); 

                    }
                    break;

            }


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "OCTAL_LITERAL"

    // $ANTLR start "HexDigit"
    function mHexDigit(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('70'))||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('102')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "HexDigit"

    // $ANTLR start "IntegerTypeSuffix"
    function mIntegerTypeSuffix(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt13=2;
            $LA13_0 = $this->input->LA(1);

            if ( ($LA13_0==$this->getToken('85')||$LA13_0==$this->getToken('117')) ) {
                $LA13_1 = $this->input->LA(2);

                if ( ($LA13_1==$this->getToken('76')||$LA13_1==$this->getToken('108')) ) {
                    $alt13=1;
                }
                else {
                    $alt13=2;}
            }
            else if ( ($LA13_0==$this->getToken('76')||$LA13_0==$this->getToken('108')) ) {
                $alt13=1;
            }
            else {
                $nvae = new NoViableAltException("", 13, 0, $this->input);

                throw $nvae;
            }
            switch ($alt13) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt11=2;
                    $LA11_0 = $this->input->LA(1);

                    if ( ($LA11_0==$this->getToken('85')||$LA11_0==$this->getToken('117')) ) {
                        $alt11=1;
                    }
                    switch ($alt11) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            if ( $this->input->LA(1)==$this->getToken('85')||$this->input->LA(1)==$this->getToken('117') ) {
                                $this->input->consume();

                            } else {
                                $mse = new MismatchedSetException(null,$this->input);
                                $this->recover($mse);
                                throw $mse;}


                            }
                            break;

                    }

                    if ( $this->input->LA(1)==$this->getToken('76')||$this->input->LA(1)==$this->getToken('108') ) {
                        $this->input->consume();

                    } else {
                        $mse = new MismatchedSetException(null,$this->input);
                        $this->recover($mse);
                        throw $mse;}


                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    if ( $this->input->LA(1)==$this->getToken('85')||$this->input->LA(1)==$this->getToken('117') ) {
                        $this->input->consume();

                    } else {
                        $mse = new MismatchedSetException(null,$this->input);
                        $this->recover($mse);
                        throw $mse;}

                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt12=2;
                    $LA12_0 = $this->input->LA(1);

                    if ( ($LA12_0==$this->getToken('76')||$LA12_0==$this->getToken('108')) ) {
                        $alt12=1;
                    }
                    switch ($alt12) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            if ( $this->input->LA(1)==$this->getToken('76')||$this->input->LA(1)==$this->getToken('108') ) {
                                $this->input->consume();

                            } else {
                                $mse = new MismatchedSetException(null,$this->input);
                                $this->recover($mse);
                                throw $mse;}


                            }
                            break;

                    }


                    }
                    break;

            }
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "IntegerTypeSuffix"

    // $ANTLR start "FLOATING_POINT_LITERAL"
    function mFLOATING_POINT_LITERAL(){
        try {
            $_type = t033backtrackingLexer::T_FLOATING_POINT_LITERAL;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt25=4;
            $alt25 = $this->dfa25->predict($this->input);
            switch ($alt25) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $cnt14=0;
                    //loop14:
                    do {
                        $alt14=2;
                        $LA14_0 = $this->input->LA(1);

                        if ( (($LA14_0>=$this->getToken('48') && $LA14_0<=$this->getToken('57'))) ) {
                            $alt14=1;
                        }


                        switch ($alt14) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    	    {
                    	    $this->matchRange(48,57); 

                    	    }
                    	    break;

                    	default :
                    	    if ( $cnt14 >= 1 ) break 2;//loop14;
                                $eee =
                                    new EarlyExitException(14, $this->input);
                                throw $eee;
                        }
                        $cnt14++;
                    } while (true);

                    $this->matchChar(46); 
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    //loop15:
                    do {
                        $alt15=2;
                        $LA15_0 = $this->input->LA(1);

                        if ( (($LA15_0>=$this->getToken('48') && $LA15_0<=$this->getToken('57'))) ) {
                            $alt15=1;
                        }


                        switch ($alt15) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    	    {
                    	    $this->matchRange(48,57); 

                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop15;
                        }
                    } while (true);

                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt16=2;
                    $LA16_0 = $this->input->LA(1);

                    if ( ($LA16_0==$this->getToken('69')||$LA16_0==$this->getToken('101')) ) {
                        $alt16=1;
                    }
                    switch ($alt16) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            $this->mExponent(); 

                            }
                            break;

                    }

                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt17=2;
                    $LA17_0 = $this->input->LA(1);

                    if ( ($LA17_0==$this->getToken('68')||$LA17_0==$this->getToken('70')||$LA17_0==$this->getToken('100')||$LA17_0==$this->getToken('102')) ) {
                        $alt17=1;
                    }
                    switch ($alt17) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            $this->mFloatTypeSuffix(); 

                            }
                            break;

                    }


                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchChar(46); 
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $cnt18=0;
                    //loop18:
                    do {
                        $alt18=2;
                        $LA18_0 = $this->input->LA(1);

                        if ( (($LA18_0>=$this->getToken('48') && $LA18_0<=$this->getToken('57'))) ) {
                            $alt18=1;
                        }


                        switch ($alt18) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    	    {
                    	    $this->matchRange(48,57); 

                    	    }
                    	    break;

                    	default :
                    	    if ( $cnt18 >= 1 ) break 2;//loop18;
                                $eee =
                                    new EarlyExitException(18, $this->input);
                                throw $eee;
                        }
                        $cnt18++;
                    } while (true);

                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt19=2;
                    $LA19_0 = $this->input->LA(1);

                    if ( ($LA19_0==$this->getToken('69')||$LA19_0==$this->getToken('101')) ) {
                        $alt19=1;
                    }
                    switch ($alt19) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            $this->mExponent(); 

                            }
                            break;

                    }

                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt20=2;
                    $LA20_0 = $this->input->LA(1);

                    if ( ($LA20_0==$this->getToken('68')||$LA20_0==$this->getToken('70')||$LA20_0==$this->getToken('100')||$LA20_0==$this->getToken('102')) ) {
                        $alt20=1;
                    }
                    switch ($alt20) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            $this->mFloatTypeSuffix(); 

                            }
                            break;

                    }


                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $cnt21=0;
                    //loop21:
                    do {
                        $alt21=2;
                        $LA21_0 = $this->input->LA(1);

                        if ( (($LA21_0>=$this->getToken('48') && $LA21_0<=$this->getToken('57'))) ) {
                            $alt21=1;
                        }


                        switch ($alt21) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    	    {
                    	    $this->matchRange(48,57); 

                    	    }
                    	    break;

                    	default :
                    	    if ( $cnt21 >= 1 ) break 2;//loop21;
                                $eee =
                                    new EarlyExitException(21, $this->input);
                                throw $eee;
                        }
                        $cnt21++;
                    } while (true);

                    $this->mExponent(); 
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt22=2;
                    $LA22_0 = $this->input->LA(1);

                    if ( ($LA22_0==$this->getToken('68')||$LA22_0==$this->getToken('70')||$LA22_0==$this->getToken('100')||$LA22_0==$this->getToken('102')) ) {
                        $alt22=1;
                    }
                    switch ($alt22) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            $this->mFloatTypeSuffix(); 

                            }
                            break;

                    }


                    }
                    break;
                case 4 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $cnt23=0;
                    //loop23:
                    do {
                        $alt23=2;
                        $LA23_0 = $this->input->LA(1);

                        if ( (($LA23_0>=$this->getToken('48') && $LA23_0<=$this->getToken('57'))) ) {
                            $alt23=1;
                        }


                        switch ($alt23) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    	    {
                    	    $this->matchRange(48,57); 

                    	    }
                    	    break;

                    	default :
                    	    if ( $cnt23 >= 1 ) break 2;//loop23;
                                $eee =
                                    new EarlyExitException(23, $this->input);
                                throw $eee;
                        }
                        $cnt23++;
                    } while (true);

                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt24=2;
                    $LA24_0 = $this->input->LA(1);

                    if ( ($LA24_0==$this->getToken('69')||$LA24_0==$this->getToken('101')) ) {
                        $alt24=1;
                    }
                    switch ($alt24) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            $this->mExponent(); 

                            }
                            break;

                    }

                    $this->mFloatTypeSuffix(); 

                    }
                    break;

            }
            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "FLOATING_POINT_LITERAL"

    // $ANTLR start "Exponent"
    function mExponent(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            if ( $this->input->LA(1)==$this->getToken('69')||$this->input->LA(1)==$this->getToken('101') ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt26=2;
            $LA26_0 = $this->input->LA(1);

            if ( ($LA26_0==$this->getToken('43')||$LA26_0==$this->getToken('45')) ) {
                $alt26=1;
            }
            switch ($alt26) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    if ( $this->input->LA(1)==$this->getToken('43')||$this->input->LA(1)==$this->getToken('45') ) {
                        $this->input->consume();

                    } else {
                        $mse = new MismatchedSetException(null,$this->input);
                        $this->recover($mse);
                        throw $mse;}


                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $cnt27=0;
            //loop27:
            do {
                $alt27=2;
                $LA27_0 = $this->input->LA(1);

                if ( (($LA27_0>=$this->getToken('48') && $LA27_0<=$this->getToken('57'))) ) {
                    $alt27=1;
                }


                switch ($alt27) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    $this->matchRange(48,57); 

            	    }
            	    break;

            	default :
            	    if ( $cnt27 >= 1 ) break 2;//loop27;
                        $eee =
                            new EarlyExitException(27, $this->input);
                        throw $eee;
                }
                $cnt27++;
            } while (true);


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "Exponent"

    // $ANTLR start "FloatTypeSuffix"
    function mFloatTypeSuffix(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            if ( $this->input->LA(1)==$this->getToken('68')||$this->input->LA(1)==$this->getToken('70')||$this->input->LA(1)==$this->getToken('100')||$this->input->LA(1)==$this->getToken('102') ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "FloatTypeSuffix"

    // $ANTLR start "EscapeSequence"
    function mEscapeSequence(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt28=2;
            $LA28_0 = $this->input->LA(1);

            if ( ($LA28_0==$this->getToken('92')) ) {
                $LA28_1 = $this->input->LA(2);

                if ( ($LA28_1==$this->getToken('34')||$LA28_1==$this->getToken('39')||$LA28_1==$this->getToken('92')||$LA28_1==$this->getToken('98')||$LA28_1==$this->getToken('102')||$LA28_1==$this->getToken('110')||$LA28_1==$this->getToken('114')||$LA28_1==$this->getToken('116')) ) {
                    $alt28=1;
                }
                else if ( (($LA28_1>=$this->getToken('48') && $LA28_1<=$this->getToken('55'))) ) {
                    $alt28=2;
                }
                else {
                    $nvae = new NoViableAltException("", 28, 1, $this->input);

                    throw $nvae;
                }
            }
            else {
                $nvae = new NoViableAltException("", 28, 0, $this->input);

                throw $nvae;
            }
            switch ($alt28) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchChar(92); 
                    if ( $this->input->LA(1)==$this->getToken('34')||$this->input->LA(1)==$this->getToken('39')||$this->input->LA(1)==$this->getToken('92')||$this->input->LA(1)==$this->getToken('98')||$this->input->LA(1)==$this->getToken('102')||$this->input->LA(1)==$this->getToken('110')||$this->input->LA(1)==$this->getToken('114')||$this->input->LA(1)==$this->getToken('116') ) {
                        $this->input->consume();

                    } else {
                        $mse = new MismatchedSetException(null,$this->input);
                        $this->recover($mse);
                        throw $mse;}


                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->mOctalEscape(); 

                    }
                    break;

            }
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "EscapeSequence"

    // $ANTLR start "OctalEscape"
    function mOctalEscape(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt29=3;
            $LA29_0 = $this->input->LA(1);

            if ( ($LA29_0==$this->getToken('92')) ) {
                $LA29_1 = $this->input->LA(2);

                if ( (($LA29_1>=$this->getToken('48') && $LA29_1<=$this->getToken('51'))) ) {
                    $LA29_2 = $this->input->LA(3);

                    if ( (($LA29_2>=$this->getToken('48') && $LA29_2<=$this->getToken('55'))) ) {
                        $LA29_4 = $this->input->LA(4);

                        if ( (($LA29_4>=$this->getToken('48') && $LA29_4<=$this->getToken('55'))) ) {
                            $alt29=1;
                        }
                        else {
                            $alt29=2;}
                    }
                    else {
                        $alt29=3;}
                }
                else if ( (($LA29_1>=$this->getToken('52') && $LA29_1<=$this->getToken('55'))) ) {
                    $LA29_3 = $this->input->LA(3);

                    if ( (($LA29_3>=$this->getToken('48') && $LA29_3<=$this->getToken('55'))) ) {
                        $alt29=2;
                    }
                    else {
                        $alt29=3;}
                }
                else {
                    $nvae = new NoViableAltException("", 29, 1, $this->input);

                    throw $nvae;
                }
            }
            else {
                $nvae = new NoViableAltException("", 29, 0, $this->input);

                throw $nvae;
            }
            switch ($alt29) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchChar(92); 
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchRange(48,51); 

                    }

                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchRange(48,55); 

                    }

                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchRange(48,55); 

                    }


                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchChar(92); 
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchRange(48,55); 

                    }

                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchRange(48,55); 

                    }


                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchChar(92); 
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchRange(48,55); 

                    }


                    }
                    break;

            }
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "OctalEscape"

    // $ANTLR start "UnicodeEscape"
    function mUnicodeEscape(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(92); 
            $this->matchChar(117); 
            $this->mHexDigit(); 
            $this->mHexDigit(); 
            $this->mHexDigit(); 
            $this->mHexDigit(); 

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "UnicodeEscape"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t033backtrackingLexer::T_WS;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('9') && $this->input->LA(1)<=$this->getToken('10'))||($this->input->LA(1)>=$this->getToken('12') && $this->input->LA(1)<=$this->getToken('13'))||$this->input->LA(1)==$this->getToken('32') ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

              $_channel=self::HIDDEN;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "WS"

    // $ANTLR start "COMMENT"
    function mCOMMENT(){
        try {
            $_type = t033backtrackingLexer::T_COMMENT;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("/*"); 

            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            //loop30:
            do {
                $alt30=2;
                $LA30_0 = $this->input->LA(1);

                if ( ($LA30_0==$this->getToken('42')) ) {
                    $LA30_1 = $this->input->LA(2);

                    if ( ($LA30_1==$this->getToken('47')) ) {
                        $alt30=2;
                    }
                    else if ( (($LA30_1>=$this->getToken('0') && $LA30_1<=$this->getToken('46'))||($LA30_1>=$this->getToken('48') && $LA30_1<=$this->getToken('65535'))) ) {
                        $alt30=1;
                    }


                }
                else if ( (($LA30_0>=$this->getToken('0') && $LA30_0<=$this->getToken('41'))||($LA30_0>=$this->getToken('43') && $LA30_0<=$this->getToken('65535'))) ) {
                    $alt30=1;
                }


                switch ($alt30) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    $this->matchAny(); 

            	    }
            	    break;

            	default :
            	    break 2;//loop30;
                }
            } while (true);

            $this->matchString("*/"); 

              $_channel=self::HIDDEN;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "COMMENT"

    // $ANTLR start "LINE_COMMENT"
    function mLINE_COMMENT(){
        try {
            $_type = t033backtrackingLexer::T_LINE_COMMENT;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchString("//"); 

            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            //loop31:
            do {
                $alt31=2;
                $LA31_0 = $this->input->LA(1);

                if ( (($LA31_0>=$this->getToken('0') && $LA31_0<=$this->getToken('9'))||($LA31_0>=$this->getToken('11') && $LA31_0<=$this->getToken('12'))||($LA31_0>=$this->getToken('14') && $LA31_0<=$this->getToken('65535'))) ) {
                    $alt31=1;
                }


                switch ($alt31) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('9'))||($this->input->LA(1)>=$this->getToken('11') && $this->input->LA(1)<=$this->getToken('12'))||($this->input->LA(1)>=$this->getToken('14') && $this->input->LA(1)<=$this->getToken('65535')) ) {
            	        $this->input->consume();

            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


            	    }
            	    break;

            	default :
            	    break 2;//loop31;
                }
            } while (true);

            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt32=2;
            $LA32_0 = $this->input->LA(1);

            if ( ($LA32_0==$this->getToken('13')) ) {
                $alt32=1;
            }
            switch ($alt32) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchChar(13); 

                    }
                    break;

            }

            $this->matchChar(10); 
              $_channel=self::HIDDEN;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "LINE_COMMENT"

    // $ANTLR start "LINE_COMMAND"
    function mLINE_COMMAND(){
        try {
            $_type = t033backtrackingLexer::T_LINE_COMMAND;
            $_channel = t033backtrackingLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->matchChar(35); 
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            //loop33:
            do {
                $alt33=2;
                $LA33_0 = $this->input->LA(1);

                if ( (($LA33_0>=$this->getToken('0') && $LA33_0<=$this->getToken('9'))||($LA33_0>=$this->getToken('11') && $LA33_0<=$this->getToken('12'))||($LA33_0>=$this->getToken('14') && $LA33_0<=$this->getToken('65535'))) ) {
                    $alt33=1;
                }


                switch ($alt33) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('9'))||($this->input->LA(1)>=$this->getToken('11') && $this->input->LA(1)<=$this->getToken('12'))||($this->input->LA(1)>=$this->getToken('14') && $this->input->LA(1)<=$this->getToken('65535')) ) {
            	        $this->input->consume();

            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


            	    }
            	    break;

            	default :
            	    break 2;//loop33;
                }
            } while (true);

            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt34=2;
            $LA34_0 = $this->input->LA(1);

            if ( ($LA34_0==$this->getToken('13')) ) {
                $alt34=1;
            }
            switch ($alt34) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->matchChar(13); 

                    }
                    break;

            }

            $this->matchChar(10); 
              $_channel=self::HIDDEN;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "LINE_COMMAND"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        $alt35=35;
        $alt35 = $this->dfa35->predict($this->input);
        switch ($alt35) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__23(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__24(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__25(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__26(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__27(); 

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__28(); 

                }
                break;
            case 7 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__29(); 

                }
                break;
            case 8 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__30(); 

                }
                break;
            case 9 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__31(); 

                }
                break;
            case 10 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__32(); 

                }
                break;
            case 11 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__33(); 

                }
                break;
            case 12 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__34(); 

                }
                break;
            case 13 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__35(); 

                }
                break;
            case 14 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__36(); 

                }
                break;
            case 15 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__37(); 

                }
                break;
            case 16 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__38(); 

                }
                break;
            case 17 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__39(); 

                }
                break;
            case 18 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__40(); 

                }
                break;
            case 19 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__41(); 

                }
                break;
            case 20 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__42(); 

                }
                break;
            case 21 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__43(); 

                }
                break;
            case 22 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__44(); 

                }
                break;
            case 23 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__45(); 

                }
                break;
            case 24 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mT__46(); 

                }
                break;
            case 25 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mIDENTIFIER(); 

                }
                break;
            case 26 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mCHARACTER_LITERAL(); 

                }
                break;
            case 27 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mSTRING_LITERAL(); 

                }
                break;
            case 28 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mHEX_LITERAL(); 

                }
                break;
            case 29 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mDECIMAL_LITERAL(); 

                }
                break;
            case 30 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mOCTAL_LITERAL(); 

                }
                break;
            case 31 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mFLOATING_POINT_LITERAL(); 

                }
                break;
            case 32 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mWS(); 

                }
                break;
            case 33 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mCOMMENT(); 

                }
                break;
            case 34 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mLINE_COMMENT(); 

                }
                break;
            case 35 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->mLINE_COMMAND(); 

                }
                break;

        }

    }



}
?>
<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t042ast.g 2010-09-10 19:39:44


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


function t042astLexer_DFA4_static(){
    $eot = "\x2\xff\x1\x17\x2\xff\x5\x17\x1\xff\x1\x17\x3\xff\x1\x17\x5\xff" .
    "\x2\x17\x3\xff\x1\x17\x1\x29\xd\x17\x1\xff\x1\x38\x5\x17\x1\x3e\x1\x3f" .
    "\x6\x17\x1\xff\x1\x17\x1\x48\x3\x17\x3\xff\x4\x17\x1\x51\x2\x17\x1\xff" .
    "\x1\x17\x1\x55\x1\x17\x1\xff\x1\x5a\x1\x5b\x2\x17\x1\xff\x1\x5e\x2\x17" .
    "\x1\xff\x1\x61\x5\xff\x1\x62\x1\x17\x1\xff\x1\x17\x1\x65\x2\xff\x1\x66" .
    "\x1\x17\x2\xff\x1\x17\x1\x69\x1\xff";
    $eof = "\x6a\xff";
    $min = "\x1\x9\x1\xff\x1\x73\x2\xff\x1\x66\x1\x6c\x1\x68\x1\x65\x1\x61" .
    "\x1\xff\x1\x6f\x3\xff\x1\x6c\x5\xff\x1\x72\x1\x6f\x3\xff\x1\x73\x1\x61" .
    "\x1\x74\x1\x70\x1\x73\x1\x74\x1\x69\x1\x74\x1\x72\x1\x6f\x1\x61\x1\x62" .
    "\x1\x69\x1\x6f\x1\x65\x1\xff\x1\x61\x1\x6c\x2\x65\x1\x6c\x1\x75\x2\x61" .
    "\x1\x32\x1\x73\x1\x6c\x1\x76\x1\x6c\x1\x72\x1\xff\x1\x65\x1\x61\x1\x6e" .
    "\x1\x65\x1\x72\x2\xff\x1\x38\x1\x65\x1\x73\x1\x69\x2\x61\x1\x74\x1\x6d" .
    "\x1\xff\x1\x64\x1\x61\x1\x6e\x1\x61\x1\x32\x1\x61\x1\x63\x1\x74\x1\xff" .
    "\x1\x61\x1\x65\x1\x73\x1\xff\x1\x61\x5\xff\x1\x61\x1\x65\x1\xff\x1\x6e" .
    "\x1\x61\x2\xff\x1\x61\x1\x74\x2\xff\x1\x73\x1\x61\x1\xff";
    $max = "\x1\x7d\x1\xff\x1\x73\x2\xff\x1\x6e\x1\x78\x1\x68\x1\x65\x1\x61" .
    "\x1\xff\x1\x6f\x3\xff\x1\x6c\x5\xff\x1\x75\x1\x6f\x3\xff\x1\x73\x1\x7a" .
    "\x1\x74\x1\x70\x1\x73\x1\x74\x1\x69\x1\x74\x2\x72\x1\x61\x1\x62\x1\x69" .
    "\x1\x6f\x1\x65\x1\xff\x1\x7a\x1\x6c\x2\x65\x1\x6c\x1\x75\x3\x7a\x1\x73" .
    "\x1\x6c\x1\x76\x1\x6c\x1\x72\x1\xff\x1\x65\x1\x7a\x1\x6e\x1\x65\x1\x72" .
    "\x2\xff\x1\x38\x1\x65\x1\x73\x1\x69\x1\x61\x1\x7a\x1\x74\x1\x6d\x1\xff" .
    "\x1\x64\x1\x7a\x1\x6e\x1\x62\x2\x7a\x1\x63\x1\x74\x1\xff\x1\x7a\x1\x65" .
    "\x1\x73\x1\xff\x1\x7a\x5\xff\x1\x7a\x1\x65\x1\xff\x1\x6e\x1\x7a\x2\xff" .
    "\x1\x7a\x1\x74\x2\xff\x1\x73\x1\x7a\x1\xff";
    $accept = "\x1\xff\x1\x1\x1\xff\x1\x3\x1\x4\x5\xff\x1\xa\x1\xff\x1\xd" .
    "\x1\xe\x1\x11\x1\xff\x1\x15\x1\x16\x1\x17\x1\x18\x1\x19\x2\xff\x1\x1f" .
    "\x1\x20\x1\x21\xf\xff\x1\x5\xe\xff\x1\xb\x5\xff\x1\x9\x1\xc\x8\xff\x1" .
    "\x6\x8\xff\x1\x1e\x3\xff\x1\x7\x1\xff\x1\xf\x1\x10\x1\x1b\x1\x1a\x1" .
    "\x12\x2\xff\x1\x2\x2\xff\x1\x8\x1\x1c\x2\xff\x1\x13\x1\x1d\x2\xff\x1" .
    "\x14";
    $special = "\x6a\xff";
    $transitionS = array(
        "\x2\x19\x15\xff\x1\x19\x7\xff\x1\xc\x1\xd\x1\xff\x1\x1\x1\xa\x1" .
        "\xff\x1\x14\x1\xff\xa\x18\x1\x3\x1\x4\x1\xff\x1\xe\x1d\xff\x1\x12" .
        "\x1\xff\x1\x13\x3\xff\x1\x2\x1\x16\x1\xf\x1\x17\x1\x6\x1\xb\x2\x17" .
        "\x1\x5\x6\x17\x1\x15\x1\x17\x1\x8\x3\x17\x1\x9\x1\x7\x3\x17\x1\x10" .
        "\x1\xff\x1\x11",
        "",
        "\x1\x1a",
        "",
        "",
        "\x1\x1b\x6\xff\x1\x1d\x1\x1c",
        "\x1\x1e\xb\xff\x1\x1f",
        "\x1\x20",
        "\x1\x21",
        "\x1\x22",
        "",
        "\x1\x23",
        "",
        "",
        "",
        "\x1\x24",
        "",
        "",
        "",
        "",
        "",
        "\x1\x26\x2\xff\x1\x25",
        "\x1\x27",
        "",
        "",
        "",
        "\x1\x28",
        "\x1a\x17",
        "\x1\x2a",
        "\x1\x2b",
        "\x1\x2c",
        "\x1\x2d",
        "\x1\x2e",
        "\x1\x2f",
        "\x1\x30",
        "\x1\x32\x2\xff\x1\x31",
        "\x1\x33",
        "\x1\x34",
        "\x1\x35",
        "\x1\x36",
        "\x1\x37",
        "",
        "\x1a\x17",
        "\x1\x39",
        "\x1\x3a",
        "\x1\x3b",
        "\x1\x3c",
        "\x1\x3d",
        "\x1a\x17",
        "\x1a\x17",
        "\x1\x40\x47\xff\x1\x41",
        "\x1\x42",
        "\x1\x43",
        "\x1\x44",
        "\x1\x45",
        "\x1\x46",
        "",
        "\x1\x47",
        "\x1a\x17",
        "\x1\x49",
        "\x1\x4a",
        "\x1\x4b",
        "",
        "",
        "\x1\x4c",
        "\x1\x4d",
        "\x1\x4e",
        "\x1\x4f",
        "\x1\x50",
        "\x1a\x17",
        "\x1\x52",
        "\x1\x53",
        "",
        "\x1\x54",
        "\x1a\x17",
        "\x1\x56",
        "\x1\x57\x1\x58",
        "\x1\x59\x2e\xff\x1a\x17",
        "\x1a\x17",
        "\x1\x5c",
        "\x1\x5d",
        "",
        "\x1a\x17",
        "\x1\x5f",
        "\x1\x60",
        "",
        "\x1a\x17",
        "",
        "",
        "",
        "",
        "",
        "\x1a\x17",
        "\x1\x63",
        "",
        "\x1\x64",
        "\x1a\x17",
        "",
        "",
        "\x1a\x17",
        "\x1\x67",
        "",
        "",
        "\x1\x68",
        "\x1a\x17",
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

class t042astLexer_DFA4 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t042astLexer_DFA4_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 4;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "1:1: Tokens : ( T__16 | T__17 | T__18 | T__19 | T__20 | T__21 | T__22 | T__23 | T__24 | T__25 | T__26 | T__27 | T__28 | T__29 | T__30 | T__31 | T__32 | T__33 | T__34 | T__35 | T__36 | T__37 | T__38 | T__39 | T__40 | T__41 | T__42 | T__43 | T__44 | T__45 | ID | INT | WS );";
    }
}
 

class t042astLexer extends Lexer {
    const T_T__29=29;
    const T_T__28=28;
    const T_T__27=27;
    const T_T__26=26;
    const T_T__25=25;
    const T_T__24=24;
    const T_T__23=23;
    const T_T__22=22;
    const T_T__21=21;
    const T_T__20=20;
    const T_FLOAT=5;
    const T_ID=14;
    const T_EOF=-1;
    const T_INDEX=11;
    const T_T__19=19;
    const T_EXPR=6;
    const T_T__16=16;
    const T_T__18=18;
    const T_T__17=17;
    const T_VARDEF=4;
    const T_T__42=42;
    const T_T__43=43;
    const T_T__40=40;
    const T_T__41=41;
    const T_T__44=44;
    const T_T__45=45;
    const T_INT=13;
    const T_T__30=30;
    const T_T__31=31;
    const T_T__32=32;
    const T_WS=15;
    const T_T__33=33;
    const T_FIELDACCESS=12;
    const T_T__34=34;
    const T_T__35=35;
    const T_VARIABLE=8;
    const T_T__36=36;
    const T_T__37=37;
    const T_T__38=38;
    const T_T__39=39;
    const T_BLOCK=7;
    const T_FIELD=9;
    const T_CALL=10;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


            $this->dfa4 = new t042astLexer_DFA4($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t042ast.g"; }

    // $ANTLR start "T__16"
    function mT__16(){
        try {
            $_type = t042astLexer::T_T__16;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchChar(43); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__16"

    // $ANTLR start "T__17"
    function mT__17(){
        try {
            $_type = t042astLexer::T_T__17;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("assert"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__17"

    // $ANTLR start "T__18"
    function mT__18(){
        try {
            $_type = t042astLexer::T_T__18;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchChar(58); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__18"

    // $ANTLR start "T__19"
    function mT__19(){
        try {
            $_type = t042astLexer::T_T__19;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
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
    // $ANTLR end "T__19"

    // $ANTLR start "T__20"
    function mT__20(){
        try {
            $_type = t042astLexer::T_T__20;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("if"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__20"

    // $ANTLR start "T__21"
    function mT__21(){
        try {
            $_type = t042astLexer::T_T__21;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("else"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__21"

    // $ANTLR start "T__22"
    function mT__22(){
        try {
            $_type = t042astLexer::T_T__22;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("while"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__22"

    // $ANTLR start "T__23"
    function mT__23(){
        try {
            $_type = t042astLexer::T_T__23;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("return"); 


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
            $_type = t042astLexer::T_T__24;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("var"); 


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
            $_type = t042astLexer::T_T__25;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
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
            $_type = t042astLexer::T_T__26;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
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
    // $ANTLR end "T__26"

    // $ANTLR start "T__27"
    function mT__27(){
        try {
            $_type = t042astLexer::T_T__27;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("for"); 


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
            $_type = t042astLexer::T_T__28;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
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
    // $ANTLR end "T__28"

    // $ANTLR start "T__29"
    function mT__29(){
        try {
            $_type = t042astLexer::T_T__29;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
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
    // $ANTLR end "T__29"

    // $ANTLR start "T__30"
    function mT__30(){
        try {
            $_type = t042astLexer::T_T__30;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("foo28a"); 


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
            $_type = t042astLexer::T_T__31;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("foo28b"); 


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
            $_type = t042astLexer::T_T__32;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchChar(61); 

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
            $_type = t042astLexer::T_T__33;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("class"); 


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
            $_type = t042astLexer::T_T__34;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("extends"); 


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
            $_type = t042astLexer::T_T__35;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("implements"); 


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
            $_type = t042astLexer::T_T__36;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
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
    // $ANTLR end "T__36"

    // $ANTLR start "T__37"
    function mT__37(){
        try {
            $_type = t042astLexer::T_T__37;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchChar(125); 

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
            $_type = t042astLexer::T_T__38;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
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
    // $ANTLR end "T__38"

    // $ANTLR start "T__39"
    function mT__39(){
        try {
            $_type = t042astLexer::T_T__39;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
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
    // $ANTLR end "T__39"

    // $ANTLR start "T__40"
    function mT__40(){
        try {
            $_type = t042astLexer::T_T__40;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchChar(46); 

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
            $_type = t042astLexer::T_T__41;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("fooze"); 


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
            $_type = t042astLexer::T_T__42;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("fooze2"); 


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
            $_type = t042astLexer::T_T__43;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("public"); 


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
            $_type = t042astLexer::T_T__44;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("private"); 


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
            $_type = t042astLexer::T_T__45;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            $this->matchString("bool"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__45"

    // $ANTLR start "ID"
    function mID(){
        try {
            $_type = t042astLexer::T_ID;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            	    {
            	    $this->matchRange(97,122); 

            	    }
            	    break;

            	default :
            	    if ( $cnt1 >= 1 ) break 2;//loop1;
                        $eee =
                            new EarlyExitException(1, $this->input);
                        throw $eee;
                }
                $cnt1++;
            } while (true);


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ID"

    // $ANTLR start "INT"
    function mINT(){
        try {
            $_type = t042astLexer::T_INT;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            $cnt2=0;
            //loop2:
            do {
                $alt2=2;
                $LA2_0 = $this->input->LA(1);

                if ( (($LA2_0>=$this->getToken('48') && $LA2_0<=$this->getToken('57'))) ) {
                    $alt2=1;
                }


                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            	    {
            	    $this->matchRange(48,57); 

            	    }
            	    break;

            	default :
            	    if ( $cnt2 >= 1 ) break 2;//loop2;
                        $eee =
                            new EarlyExitException(2, $this->input);
                        throw $eee;
                }
                $cnt2++;
            } while (true);


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "INT"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t042astLexer::T_WS;
            $_channel = t042astLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            $cnt3=0;
            //loop3:
            do {
                $alt3=2;
                $LA3_0 = $this->input->LA(1);

                if ( (($LA3_0>=$this->getToken('9') && $LA3_0<=$this->getToken('10'))||$LA3_0==$this->getToken('32')) ) {
                    $alt3=1;
                }


                switch ($alt3) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('9') && $this->input->LA(1)<=$this->getToken('10'))||$this->input->LA(1)==$this->getToken('32') ) {
            	        $this->input->consume();

            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


            	    }
            	    break;

            	default :
            	    if ( $cnt3 >= 1 ) break 2;//loop3;
                        $eee =
                            new EarlyExitException(3, $this->input);
                        throw $eee;
                }
                $cnt3++;
            } while (true);

              $_channel = \self::HIDDEN;;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "WS"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
        $alt4=33;
        $alt4 = $this->dfa4->predict($this->input);
        switch ($alt4) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__16(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__17(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__18(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__19(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__20(); 

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__21(); 

                }
                break;
            case 7 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__22(); 

                }
                break;
            case 8 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__23(); 

                }
                break;
            case 9 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__24(); 

                }
                break;
            case 10 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__25(); 

                }
                break;
            case 11 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__26(); 

                }
                break;
            case 12 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__27(); 

                }
                break;
            case 13 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__28(); 

                }
                break;
            case 14 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__29(); 

                }
                break;
            case 15 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__30(); 

                }
                break;
            case 16 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__31(); 

                }
                break;
            case 17 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__32(); 

                }
                break;
            case 18 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__33(); 

                }
                break;
            case 19 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__34(); 

                }
                break;
            case 20 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__35(); 

                }
                break;
            case 21 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__36(); 

                }
                break;
            case 22 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__37(); 

                }
                break;
            case 23 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__38(); 

                }
                break;
            case 24 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__39(); 

                }
                break;
            case 25 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__40(); 

                }
                break;
            case 26 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__41(); 

                }
                break;
            case 27 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__42(); 

                }
                break;
            case 28 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__43(); 

                }
                break;
            case 29 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__44(); 

                }
                break;
            case 30 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mT__45(); 

                }
                break;
            case 31 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mID(); 

                }
                break;
            case 32 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mINT(); 

                }
                break;
            case 33 :
                // runtime/Php/test/Antlr/Tests/grammers/t042ast.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
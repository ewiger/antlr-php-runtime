<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t014parser.g 2010-09-10 19:39:21


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


function t014parserLexer_DFA2_static(){
    $eot = "\x1\xff\x1\x5\x5\xff\x1\x5\x1\x9\x1\xff";
    $eof = "\xa\xff";
    $min = "\x1\x9\x1\x61\x5\xff\x1\x72\x1\x30\x1\xff";
    $max = "\x1\x7a\x1\x61\x5\xff\x1\x72\x1\x7a\x1\xff";
    $accept = "\x2\xff\x1\x2\x1\x3\x1\x4\x1\x5\x1\x6\x2\xff\x1\x1";
    $special = "\xa\xff";
    $transitionS = array(
        "\x2\x6\x2\xff\x1\x6\x12\xff\x1\x6\x7\xff\x1\x3\x1\x4\x11\xff\x1" .
        "\x2\x5\xff\x1a\x5\x4\xff\x1\x5\x1\xff\x15\x5\x1\x1\x4\x5",
        "\x1\x7",
        "",
        "",
        "",
        "",
        "",
        "\x1\x8",
        "\xa\x5\x7\xff\x1a\x5\x4\xff\x1\x5\x1\xff\x1a\x5",
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

class t014parserLexer_DFA2 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t014parserLexer_DFA2_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 2;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "1:1: Tokens : ( T__6 | T__7 | T__8 | T__9 | IDENTIFIER | WS );";
    }
}
 

class t014parserLexer extends Lexer {
    const T_WS=5;
    const T_IDENTIFIER=4;
    const T_EOF=-1;
    const T_T__9=9;
    const T_T__8=8;
    const T_T__7=7;
    const T_T__6=6;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


            $this->dfa2 = new t014parserLexer_DFA2($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t014parser.g"; }

    // $ANTLR start "T__6"
    function mT__6(){
        try {
            $_type = t014parserLexer::T_T__6;
            $_channel = t014parserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
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
    // $ANTLR end "T__6"

    // $ANTLR start "T__7"
    function mT__7(){
        try {
            $_type = t014parserLexer::T_T__7;
            $_channel = t014parserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
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
    // $ANTLR end "T__7"

    // $ANTLR start "T__8"
    function mT__8(){
        try {
            $_type = t014parserLexer::T_T__8;
            $_channel = t014parserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
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
    // $ANTLR end "T__8"

    // $ANTLR start "T__9"
    function mT__9(){
        try {
            $_type = t014parserLexer::T_T__9;
            $_channel = t014parserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
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
    // $ANTLR end "T__9"

    // $ANTLR start "IDENTIFIER"
    function mIDENTIFIER(){
        try {
            $_type = t014parserLexer::T_IDENTIFIER;
            $_channel = t014parserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('48') && $LA1_0<=$this->getToken('57'))||($LA1_0>=$this->getToken('65') && $LA1_0<=$this->getToken('90'))||$LA1_0==$this->getToken('95')||($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
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

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t014parserLexer::T_WS;
            $_channel = t014parserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('9') && $this->input->LA(1)<=$this->getToken('10'))||$this->input->LA(1)==$this->getToken('13')||$this->input->LA(1)==$this->getToken('32') ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

              $_channel=Token::HIDDEN_CHANNEL;

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
        // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
        $alt2=6;
        $alt2 = $this->dfa2->predict($this->input);
        switch ($alt2) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
                {
                $this->mT__6(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
                {
                $this->mT__7(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
                {
                $this->mT__8(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
                {
                $this->mT__9(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
                {
                $this->mIDENTIFIER(); 

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
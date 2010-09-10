<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g 2010-09-10 19:39:48


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


function t046rewriteLexer_DFA4_static(){
    $eot = "\x1\xff\x1\xa\xb\xff\x4\xa\x1\x12\x1\xff";
    $eof = "\x13\xff";
    $min = "\x1\x9\x1\x65\xb\xff\x1\x74\x1\x68\x1\x6f\x1\x64\x1\x41\x1\xff";
    $max = "\x1\x7d\x1\x65\xb\xff\x1\x74\x1\x68\x1\x6f\x1\x64\x1\x7a\x1\xff";
    $accept = "\x2\xff\x1\x2\x1\x3\x1\x4\x1\x5\x1\x6\x1\x7\x1\x8\x1\x9\x1" .
    "\xa\x1\xb\x1\xc\x5\xff\x1\x1";
    $special = "\x13\xff";
    $transitionS = array(
        "\x2\xc\x15\xff\x1\xc\x7\xff\x1\x2\x1\x3\x1\x9\x1\x8\x4\xff\xa\xb" .
        "\x1\xff\x1\x7\x1\xff\x1\x6\x3\xff\x1a\xa\x6\xff\xc\xa\x1\x1\xd\xa" .
        "\x1\x4\x1\xff\x1\x5",
        "\x1\xd",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "\x1\xe",
        "\x1\xf",
        "\x1\x10",
        "\x1\x11",
        "\x1a\xa\x6\xff\x1a\xa",
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

class t046rewriteLexer_DFA4 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t046rewriteLexer_DFA4_static();
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
        return "1:1: Tokens : ( T__7 | T__8 | T__9 | T__10 | T__11 | T__12 | T__13 | T__14 | T__15 | ID | INT | WS );";
    }
}
 

class t046rewriteLexer extends Lexer {
    const T_WS=6;
    const T_T__15=15;
    const T_T__12=12;
    const T_T__11=11;
    const T_T__14=14;
    const T_T__13=13;
    const T_T__10=10;
    const T_INT=5;
    const T_ID=4;
    const T_EOF=-1;
    const T_T__9=9;
    const T_T__8=8;
    const T_T__7=7;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


            $this->dfa4 = new t046rewriteLexer_DFA4($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g"; }

    // $ANTLR start "T__7"
    function mT__7(){
        try {
            $_type = t046rewriteLexer::T_T__7;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            {
            $this->matchString("method"); 


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
            $_type = t046rewriteLexer::T_T__8;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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
            $_type = t046rewriteLexer::T_T__9;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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

    // $ANTLR start "T__10"
    function mT__10(){
        try {
            $_type = t046rewriteLexer::T_T__10;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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
    // $ANTLR end "T__10"

    // $ANTLR start "T__11"
    function mT__11(){
        try {
            $_type = t046rewriteLexer::T_T__11;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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
    // $ANTLR end "T__11"

    // $ANTLR start "T__12"
    function mT__12(){
        try {
            $_type = t046rewriteLexer::T_T__12;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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
    // $ANTLR end "T__12"

    // $ANTLR start "T__13"
    function mT__13(){
        try {
            $_type = t046rewriteLexer::T_T__13;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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
    // $ANTLR end "T__13"

    // $ANTLR start "T__14"
    function mT__14(){
        try {
            $_type = t046rewriteLexer::T_T__14;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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
    // $ANTLR end "T__14"

    // $ANTLR start "T__15"
    function mT__15(){
        try {
            $_type = t046rewriteLexer::T_T__15;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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
    // $ANTLR end "T__15"

    // $ANTLR start "ID"
    function mID(){
        try {
            $_type = t046rewriteLexer::T_ID;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('65') && $LA1_0<=$this->getToken('90'))||($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
            	        $this->input->consume();

            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


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
            $_type = t046rewriteLexer::T_INT;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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
            $_type = t046rewriteLexer::T_WS;
            $_channel = t046rewriteLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
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

              $_channel=\self::HIDDEN;;

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
        // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
        $alt4=12;
        $alt4 = $this->dfa4->predict($this->input);
        switch ($alt4) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mT__7(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mT__8(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mT__9(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mT__10(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mT__11(); 

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mT__12(); 

                }
                break;
            case 7 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mT__13(); 

                }
                break;
            case 8 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mT__14(); 

                }
                break;
            case 9 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mT__15(); 

                }
                break;
            case 10 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mID(); 

                }
                break;
            case 11 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mINT(); 

                }
                break;
            case 12 :
                // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
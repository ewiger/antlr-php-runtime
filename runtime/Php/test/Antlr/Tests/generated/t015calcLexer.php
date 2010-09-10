<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t015calc.g 2010-09-10 19:39:22


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


function t015calcLexer_DFA5_static(){
    $eot = "\xb\xff\x1\xd\x3\xff";
    $eof = "\xf\xff";
    $min = "\x1\x9\xa\xff\x1\x2e\x3\xff";
    $max = "\x1\x6c\xa\xff\x1\x39\x3\xff";
    $accept = "\x1\xff\x1\x1\x1\x2\x1\x3\x1\x4\x1\x5\x1\x6\x1\x7\x1\x8\x1" .
    "\x9\x1\xa\x1\xff\x1\xd\x1\xb\x1\xc";
    $special = "\xf\xff";
    $transitionS = array(
        "\x2\xc\x15\xff\x1\xc\x7\xff\x1\x7\x1\x8\x1\x3\x1\x1\x1\xff\x1\x2" .
        "\x1\xff\x1\x4\xa\xb\xb\xff\x1\xa\xa\xff\x1\x9\xd\xff\x1\x6\xd\xff" .
        "\x1\x5",
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
        "\x1\xe\x1\xff\xa\xb",
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

class t015calcLexer_DFA5 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t015calcLexer_DFA5_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 5;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "1:1: Tokens : ( T__8 | T__9 | T__10 | T__11 | T__12 | T__13 | T__14 | T__15 | T__16 | T__17 | INTEGER | DECIMAL | WS );";
    }
}
 

class t015calcLexer extends Lexer {
    const T_INTEGER=4;
    const T_WS=7;
    const T_T__16=16;
    const T_T__15=15;
    const T_T__17=17;
    const T_DECIMAL=5;
    const T_T__12=12;
    const T_T__11=11;
    const T_T__14=14;
    const T_T__13=13;
    const T_T__10=10;
    const T_DIGIT=6;
    const T_EOF=-1;
    const T_T__9=9;
    const T_T__8=8;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


            $this->dfa5 = new t015calcLexer_DFA5($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t015calc.g"; }

    // $ANTLR start "T__8"
    function mT__8(){
        try {
            $_type = t015calcLexer::T_T__8;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
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
    // $ANTLR end "T__8"

    // $ANTLR start "T__9"
    function mT__9(){
        try {
            $_type = t015calcLexer::T_T__9;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            $this->matchChar(45); 

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
            $_type = t015calcLexer::T_T__10;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
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
    // $ANTLR end "T__10"

    // $ANTLR start "T__11"
    function mT__11(){
        try {
            $_type = t015calcLexer::T_T__11;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            $this->matchChar(47); 

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
            $_type = t015calcLexer::T_T__12;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            $this->matchString("ln"); 


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
            $_type = t015calcLexer::T_T__13;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            $this->matchChar(94); 

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
            $_type = t015calcLexer::T_T__14;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
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
    // $ANTLR end "T__14"

    // $ANTLR start "T__15"
    function mT__15(){
        try {
            $_type = t015calcLexer::T_T__15;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
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
    // $ANTLR end "T__15"

    // $ANTLR start "T__16"
    function mT__16(){
        try {
            $_type = t015calcLexer::T_T__16;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            $this->matchString("PI"); 


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
            $_type = t015calcLexer::T_T__17;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            $this->matchChar(69); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__17"

    // $ANTLR start "INTEGER"
    function mINTEGER(){
        try {
            $_type = t015calcLexer::T_INTEGER;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('48') && $LA1_0<=$this->getToken('57'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            	    {
            	    $this->mDIGIT(); 

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
    // $ANTLR end "INTEGER"

    // $ANTLR start "DECIMAL"
    function mDECIMAL(){
        try {
            $_type = t015calcLexer::T_DECIMAL;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            	    {
            	    $this->mDIGIT(); 

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

            $this->matchChar(46); 
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            $cnt3=0;
            //loop3:
            do {
                $alt3=2;
                $LA3_0 = $this->input->LA(1);

                if ( (($LA3_0>=$this->getToken('48') && $LA3_0<=$this->getToken('57'))) ) {
                    $alt3=1;
                }


                switch ($alt3) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            	    {
            	    $this->mDIGIT(); 

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


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "DECIMAL"

    // $ANTLR start "DIGIT"
    function mDIGIT(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            $this->matchRange(48,57); 

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "DIGIT"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t015calcLexer::T_WS;
            $_channel = t015calcLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            $cnt4=0;
            //loop4:
            do {
                $alt4=2;
                $LA4_0 = $this->input->LA(1);

                if ( (($LA4_0>=$this->getToken('9') && $LA4_0<=$this->getToken('10'))||$LA4_0==$this->getToken('32')) ) {
                    $alt4=1;
                }


                switch ($alt4) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
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
            	    if ( $cnt4 >= 1 ) break 2;//loop4;
                        $eee =
                            new EarlyExitException(4, $this->input);
                        throw $eee;
                }
                $cnt4++;
            } while (true);

              $_channel = Token::HIDDEN_CHANNEL;

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
        // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
        $alt5=13;
        $alt5 = $this->dfa5->predict($this->input);
        switch ($alt5) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mT__8(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mT__9(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mT__10(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mT__11(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mT__12(); 

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mT__13(); 

                }
                break;
            case 7 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mT__14(); 

                }
                break;
            case 8 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mT__15(); 

                }
                break;
            case 9 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mT__16(); 

                }
                break;
            case 10 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mT__17(); 

                }
                break;
            case 11 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mINTEGER(); 

                }
                break;
            case 12 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mDECIMAL(); 

                }
                break;
            case 13 :
                // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
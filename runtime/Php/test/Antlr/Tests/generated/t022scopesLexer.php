<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t022scopes.g 2010-09-10 19:39:28


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


function t022scopesLexer_DFA4_static(){
    $eot = "\x3\xff\x1\x6\x5\xff\x1\x6\x1\xb\x1\xff";
    $eof = "\xc\xff";
    $min = "\x1\xa\x2\xff\x1\x6e\x5\xff\x1\x74\x1\x61\x1\xff";
    $max = "\x1\x7d\x2\xff\x1\x6e\x5\xff\x1\x74\x1\x7a\x1\xff";
    $accept = "\x1\xff\x1\x1\x1\x2\x1\xff\x1\x4\x1\x5\x1\x6\x1\x7\x1\x8\x2" .
    "\xff\x1\x3";
    $special = "\xc\xff";
    $transitionS = array(
        "\x1\x8\x2\xff\x1\x8\x12\xff\x1\x8\xf\xff\xa\x7\x1\xff\x1\x4\x1\xff" .
        "\x1\x5\x23\xff\x8\x6\x1\x3\x11\x6\x1\x1\x1\xff\x1\x2",
        "",
        "",
        "\x1\x9",
        "",
        "",
        "",
        "",
        "",
        "\x1\xa",
        "\x1a\x6",
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

class t022scopesLexer_DFA4 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t022scopesLexer_DFA4_static();
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
        return "1:1: Tokens : ( T__7 | T__8 | T__9 | T__10 | T__11 | ID | NUM | WS );";
    }
}
 

class t022scopesLexer extends Lexer {
    const T_WS=6;
    const T_T__11=11;
    const T_T__10=10;
    const T_ID=4;
    const T_EOF=-1;
    const T_T__9=9;
    const T_T__8=8;
    const T_T__7=7;
    const T_NUM=5;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


            $this->dfa4 = new t022scopesLexer_DFA4($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t022scopes.g"; }

    // $ANTLR start "T__7"
    function mT__7(){
        try {
            $_type = t022scopesLexer::T_T__7;
            $_channel = t022scopesLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
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
    // $ANTLR end "T__7"

    // $ANTLR start "T__8"
    function mT__8(){
        try {
            $_type = t022scopesLexer::T_T__8;
            $_channel = t022scopesLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
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
    // $ANTLR end "T__8"

    // $ANTLR start "T__9"
    function mT__9(){
        try {
            $_type = t022scopesLexer::T_T__9;
            $_channel = t022scopesLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
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
    // $ANTLR end "T__9"

    // $ANTLR start "T__10"
    function mT__10(){
        try {
            $_type = t022scopesLexer::T_T__10;
            $_channel = t022scopesLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
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
    // $ANTLR end "T__10"

    // $ANTLR start "T__11"
    function mT__11(){
        try {
            $_type = t022scopesLexer::T_T__11;
            $_channel = t022scopesLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
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
    // $ANTLR end "T__11"

    // $ANTLR start "ID"
    function mID(){
        try {
            $_type = t022scopesLexer::T_ID;
            $_channel = t022scopesLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
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

    // $ANTLR start "NUM"
    function mNUM(){
        try {
            $_type = t022scopesLexer::T_NUM;
            $_channel = t022scopesLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
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
    // $ANTLR end "NUM"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t022scopesLexer::T_WS;
            $_channel = t022scopesLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            $cnt3=0;
            //loop3:
            do {
                $alt3=2;
                $LA3_0 = $this->input->LA(1);

                if ( ($LA3_0==$this->getToken('10')||$LA3_0==$this->getToken('13')||$LA3_0==$this->getToken('32')) ) {
                    $alt3=1;
                }


                switch ($alt3) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            	    {
            	    if ( $this->input->LA(1)==$this->getToken('10')||$this->input->LA(1)==$this->getToken('13')||$this->input->LA(1)==$this->getToken('32') ) {
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

              $_channel=self::$HIDDEN;

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
        // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
        $alt4=8;
        $alt4 = $this->dfa4->predict($this->input);
        switch ($alt4) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                {
                $this->mT__7(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                {
                $this->mT__8(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                {
                $this->mT__9(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                {
                $this->mT__10(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                {
                $this->mT__11(); 

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                {
                $this->mID(); 

                }
                break;
            case 7 :
                // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                {
                $this->mNUM(); 

                }
                break;
            case 8 :
                // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
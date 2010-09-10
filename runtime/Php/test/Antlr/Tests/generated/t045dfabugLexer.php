<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g 2010-09-10 19:39:47


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


function t045dfabugLexer_DFA4_static(){
    $eot = "\x2\xff\x2\x4\x3\xff\x9\x4\x1\x14\x2\x4\x2\xff\x1\x17\x1\x4\x1" .
    "\xff\x1\x19\x1\xff";
    $eof = "\x1a\xff";
    $min = "\x1\x9\x1\xff\x1\x6f\x1\x72\x3\xff\x1\x6f\x1\x62\x1\x69\x1\x7a" .
    "\x1\x6c\x1\x76\x1\x65\x1\x69\x1\x61\x1\x32\x1\x63\x1\x74\x2\xff\x1\x61" .
    "\x1\x65\x1\xff\x1\x61\x1\xff";
    $max = "\x1\x7a\x1\xff\x1\x6f\x1\x75\x3\xff\x1\x6f\x1\x62\x1\x69\x1\x7a" .
    "\x1\x6c\x1\x76\x1\x65\x1\x69\x1\x61\x1\x7a\x1\x63\x1\x74\x2\xff\x1\x7a" .
    "\x1\x65\x1\xff\x1\x7a\x1\xff";
    $accept = "\x1\xff\x1\x1\x2\xff\x1\x6\x1\x7\x1\x8\xc\xff\x1\x3\x1\x2" .
    "\x2\xff\x1\x4\x1\xff\x1\x5";
    $special = "\x1a\xff";
    $transitionS = array(
        "\x2\x6\x15\xff\x1\x6\xa\xff\x1\x1\x4\xff\xa\x5\x27\xff\x5\x4\x1" .
        "\x2\x9\x4\x1\x3\xa\x4",
        "",
        "\x1\x7",
        "\x1\x9\x2\xff\x1\x8",
        "",
        "",
        "",
        "\x1\xa",
        "\x1\xb",
        "\x1\xc",
        "\x1\xd",
        "\x1\xe",
        "\x1\xf",
        "\x1\x10",
        "\x1\x11",
        "\x1\x12",
        "\x1\x13\x2e\xff\x1a\x4",
        "\x1\x15",
        "\x1\x16",
        "",
        "",
        "\x1a\x4",
        "\x1\x18",
        "",
        "\x1a\x4",
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

class t045dfabugLexer_DFA4 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t045dfabugLexer_DFA4_static();
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
        return "1:1: Tokens : ( T__7 | T__8 | T__9 | T__10 | T__11 | ID | INT | WS );";
    }
}
 

class t045dfabugLexer extends Lexer {
    const T_WS=6;
    const T_T__11=11;
    const T_T__10=10;
    const T_INT=4;
    const T_ID=5;
    const T_EOF=-1;
    const T_T__9=9;
    const T_T__8=8;
    const T_T__7=7;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


            $this->dfa4 = new t045dfabugLexer_DFA4($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g"; }

    // $ANTLR start "T__7"
    function mT__7(){
        try {
            $_type = t045dfabugLexer::T_T__7;
            $_channel = t045dfabugLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
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
    // $ANTLR end "T__7"

    // $ANTLR start "T__8"
    function mT__8(){
        try {
            $_type = t045dfabugLexer::T_T__8;
            $_channel = t045dfabugLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
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
    // $ANTLR end "T__8"

    // $ANTLR start "T__9"
    function mT__9(){
        try {
            $_type = t045dfabugLexer::T_T__9;
            $_channel = t045dfabugLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
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
    // $ANTLR end "T__9"

    // $ANTLR start "T__10"
    function mT__10(){
        try {
            $_type = t045dfabugLexer::T_T__10;
            $_channel = t045dfabugLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
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
    // $ANTLR end "T__10"

    // $ANTLR start "T__11"
    function mT__11(){
        try {
            $_type = t045dfabugLexer::T_T__11;
            $_channel = t045dfabugLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
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
    // $ANTLR end "T__11"

    // $ANTLR start "ID"
    function mID(){
        try {
            $_type = t045dfabugLexer::T_ID;
            $_channel = t045dfabugLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
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
            $_type = t045dfabugLexer::T_INT;
            $_channel = t045dfabugLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
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
            $_type = t045dfabugLexer::T_WS;
            $_channel = t045dfabugLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
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
        // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
        $alt4=8;
        $alt4 = $this->dfa4->predict($this->input);
        switch ($alt4) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
                {
                $this->mT__7(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
                {
                $this->mT__8(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
                {
                $this->mT__9(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
                {
                $this->mT__10(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
                {
                $this->mT__11(); 

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
                {
                $this->mID(); 

                }
                break;
            case 7 :
                // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
                {
                $this->mINT(); 

                }
                break;
            case 8 :
                // runtime/Php/test/Antlr/Tests/grammers/t045dfabug.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
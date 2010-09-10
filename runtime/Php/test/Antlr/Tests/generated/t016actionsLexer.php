<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t016actions.g 2010-09-10 19:39:23


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


function t016actionsLexer_DFA3_static(){
    $eot = "\x2\xff\x3\x5\x2\xff\x3\x5\x1\xd\x2\x5\x1\xff\x1\x10\x1\x11\x2" .
    "\xff";
    $eof = "\x12\xff";
    $min = "\x1\x9\x1\xff\x1\x6e\x1\x68\x1\x6f\x2\xff\x1\x74\x1\x61\x1\x69" .
    "\x1\x30\x1\x72\x1\x64\x1\xff\x2\x30\x2\xff";
    $max = "\x1\x7a\x1\xff\x1\x6e\x1\x68\x1\x6f\x2\xff\x1\x74\x1\x61\x1\x69" .
    "\x1\x7a\x1\x72\x1\x64\x1\xff\x2\x7a\x2\xff";
    $accept = "\x1\xff\x1\x1\x3\xff\x1\x5\x1\x6\x6\xff\x1\x2\x2\xff\x1\x3" .
    "\x1\x4";
    $special = "\x12\xff";
    $transitionS = array(
        "\x2\x6\x2\xff\x1\x6\x12\xff\x1\x6\x1a\xff\x1\x1\x5\xff\x1a\x5\x4" .
        "\xff\x1\x5\x1\xff\x2\x5\x1\x3\x5\x5\x1\x2\xc\x5\x1\x4\x4\x5",
        "",
        "\x1\x7",
        "\x1\x8",
        "\x1\x9",
        "",
        "",
        "\x1\xa",
        "\x1\xb",
        "\x1\xc",
        "\xa\x5\x7\xff\x1a\x5\x4\xff\x1\x5\x1\xff\x1a\x5",
        "\x1\xe",
        "\x1\xf",
        "",
        "\xa\x5\x7\xff\x1a\x5\x4\xff\x1\x5\x1\xff\x1a\x5",
        "\xa\x5\x7\xff\x1a\x5\x4\xff\x1\x5\x1\xff\x1a\x5",
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

class t016actionsLexer_DFA3 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t016actionsLexer_DFA3_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 3;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "1:1: Tokens : ( T__6 | T__7 | T__8 | T__9 | ID | WS );";
    }
}
 

class t016actionsLexer extends Lexer {
    const T_WS=5;
    const T_ID=4;
    const T_EOF=-1;
    const T_T__9=9;
    const T_T__8=8;
    const T_T__7=7;
    const T_T__6=6;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


            $this->dfa3 = new t016actionsLexer_DFA3($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t016actions.g"; }

    // $ANTLR start "T__6"
    function mT__6(){
        try {
            $_type = t016actionsLexer::T_T__6;
            $_channel = t016actionsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
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
    // $ANTLR end "T__6"

    // $ANTLR start "T__7"
    function mT__7(){
        try {
            $_type = t016actionsLexer::T_T__7;
            $_channel = t016actionsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
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
    // $ANTLR end "T__7"

    // $ANTLR start "T__8"
    function mT__8(){
        try {
            $_type = t016actionsLexer::T_T__8;
            $_channel = t016actionsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
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
    // $ANTLR end "T__8"

    // $ANTLR start "T__9"
    function mT__9(){
        try {
            $_type = t016actionsLexer::T_T__9;
            $_channel = t016actionsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
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
    // $ANTLR end "T__9"

    // $ANTLR start "ID"
    function mID(){
        try {
            $_type = t016actionsLexer::T_ID;
            $_channel = t016actionsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('48') && $LA1_0<=$this->getToken('57'))||($LA1_0>=$this->getToken('65') && $LA1_0<=$this->getToken('90'))||$LA1_0==$this->getToken('95')||($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
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
    // $ANTLR end "ID"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t016actionsLexer::T_WS;
            $_channel = t016actionsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            $cnt2=0;
            //loop2:
            do {
                $alt2=2;
                $LA2_0 = $this->input->LA(1);

                if ( (($LA2_0>=$this->getToken('9') && $LA2_0<=$this->getToken('10'))||$LA2_0==$this->getToken('13')||$LA2_0==$this->getToken('32')) ) {
                    $alt2=1;
                }


                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('9') && $this->input->LA(1)<=$this->getToken('10'))||$this->input->LA(1)==$this->getToken('13')||$this->input->LA(1)==$this->getToken('32') ) {
            	        $this->input->consume();

            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


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
        // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
        $alt3=6;
        $alt3 = $this->dfa3->predict($this->input);
        switch ($alt3) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
                {
                $this->mT__6(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
                {
                $this->mT__7(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
                {
                $this->mT__8(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
                {
                $this->mT__9(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
                {
                $this->mID(); 

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
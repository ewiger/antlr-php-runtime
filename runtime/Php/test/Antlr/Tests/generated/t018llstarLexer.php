<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t018llstar.g 2010-09-10 19:39:25


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


function t018llstarLexer_DFA4_static(){
    $eot = "\x5\xff\x3\xe\x2\xff\x1\xe\x1\x16\x5\xff\x4\xe\x2\xff\x1\x1b" .
    "\x2\xe\x1\x1e\x1\xff\x1\x1f\x1\x20\x3\xff";
    $eof = "\x21\xff";
    $min = "\x1\x9\x4\xff\x1\x6e\x1\x68\x1\x6f\x2\xff\x1\x6f\x1\x3d\x5\xff" .
    "\x1\x74\x1\x61\x1\x69\x1\x72\x2\xff\x1\x30\x1\x72\x1\x64\x1\x30\x1\xff" .
    "\x2\x30\x3\xff";
    $max = "\x1\x7d\x4\xff\x1\x6e\x1\x68\x1\x6f\x2\xff\x1\x6f\x1\x3d\x5\xff" .
    "\x1\x74\x1\x61\x1\x69\x1\x72\x2\xff\x1\x7a\x1\x72\x1\x64\x1\x7a\x1\xff" .
    "\x2\x7a\x3\xff";
    $accept = "\x1\xff\x1\x1\x1\x2\x1\x3\x1\x4\x3\xff\x1\x8\x1\x9\x2\xff" .
    "\x1\xd\x1\xe\x1\xf\x1\x10\x1\x11\x4\xff\x1\xc\x1\xb\x4\xff\x1\x5\x2" .
    "\xff\x1\xa\x1\x6\x1\x7";
    $special = "\x21\xff";
    $transitionS = array(
        "\x2\x10\x2\xff\x1\x10\x12\xff\x1\x10\x7\xff\x1\x2\x1\x4\x1\xff\x1" .
        "\xd\x1\x3\x3\xff\xa\xf\x1\xff\x1\x1\x1\xc\x1\xb\x3\xff\x1a\xe\x4" .
        "\xff\x1\xe\x1\xff\x2\xe\x1\x6\x2\xe\x1\xa\x2\xe\x1\x5\xc\xe\x1\x7" .
        "\x4\xe\x1\x8\x1\xff\x1\x9",
        "",
        "",
        "",
        "",
        "\x1\x11",
        "\x1\x12",
        "\x1\x13",
        "",
        "",
        "\x1\x14",
        "\x1\x15",
        "",
        "",
        "",
        "",
        "",
        "\x1\x17",
        "\x1\x18",
        "\x1\x19",
        "\x1\x1a",
        "",
        "",
        "\xa\xe\x7\xff\x1a\xe\x4\xff\x1\xe\x1\xff\x1a\xe",
        "\x1\x1c",
        "\x1\x1d",
        "\xa\xe\x7\xff\x1a\xe\x4\xff\x1\xe\x1\xff\x1a\xe",
        "",
        "\xa\xe\x7\xff\x1a\xe\x4\xff\x1\xe\x1\xff\x1a\xe",
        "\xa\xe\x7\xff\x1a\xe\x4\xff\x1\xe\x1\xff\x1a\xe",
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

class t018llstarLexer_DFA4 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t018llstarLexer_DFA4_static();
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
        return "1:1: Tokens : ( T__7 | T__8 | T__9 | T__10 | T__11 | T__12 | T__13 | T__14 | T__15 | T__16 | T__17 | T__18 | T__19 | T__20 | ID | INT | WS );";
    }
}
 

class t018llstarLexer extends Lexer {
    const T_T__20=20;
    const T_INT=5;
    const T_ID=4;
    const T_EOF=-1;
    const T_T__9=9;
    const T_T__8=8;
    const T_T__7=7;
    const T_T__19=19;
    const T_WS=6;
    const T_T__16=16;
    const T_T__15=15;
    const T_T__18=18;
    const T_T__17=17;
    const T_T__12=12;
    const T_T__11=11;
    const T_T__14=14;
    const T_T__13=13;
    const T_T__10=10;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


            $this->dfa4 = new t018llstarLexer_DFA4($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t018llstar.g"; }

    // $ANTLR start "T__7"
    function mT__7(){
        try {
            $_type = t018llstarLexer::T_T__7;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
            $_type = t018llstarLexer::T_T__8;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
            $_type = t018llstarLexer::T_T__9;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
    // $ANTLR end "T__9"

    // $ANTLR start "T__10"
    function mT__10(){
        try {
            $_type = t018llstarLexer::T_T__10;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
    // $ANTLR end "T__10"

    // $ANTLR start "T__11"
    function mT__11(){
        try {
            $_type = t018llstarLexer::T_T__11;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
    // $ANTLR end "T__11"

    // $ANTLR start "T__12"
    function mT__12(){
        try {
            $_type = t018llstarLexer::T_T__12;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
    // $ANTLR end "T__12"

    // $ANTLR start "T__13"
    function mT__13(){
        try {
            $_type = t018llstarLexer::T_T__13;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
    // $ANTLR end "T__13"

    // $ANTLR start "T__14"
    function mT__14(){
        try {
            $_type = t018llstarLexer::T_T__14;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
    // $ANTLR end "T__14"

    // $ANTLR start "T__15"
    function mT__15(){
        try {
            $_type = t018llstarLexer::T_T__15;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
    // $ANTLR end "T__15"

    // $ANTLR start "T__16"
    function mT__16(){
        try {
            $_type = t018llstarLexer::T_T__16;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
    // $ANTLR end "T__16"

    // $ANTLR start "T__17"
    function mT__17(){
        try {
            $_type = t018llstarLexer::T_T__17;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
    // $ANTLR end "T__17"

    // $ANTLR start "T__18"
    function mT__18(){
        try {
            $_type = t018llstarLexer::T_T__18;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->matchString("=="); 


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
            $_type = t018llstarLexer::T_T__19;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->matchChar(60); 

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
            $_type = t018llstarLexer::T_T__20;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
    // $ANTLR end "T__20"

    // $ANTLR start "ID"
    function mID(){
        try {
            $_type = t018llstarLexer::T_ID;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('48') && $LA1_0<=$this->getToken('57'))||($LA1_0>=$this->getToken('65') && $LA1_0<=$this->getToken('90'))||$LA1_0==$this->getToken('95')||($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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

    // $ANTLR start "INT"
    function mINT(){
        try {
            $_type = t018llstarLexer::T_INT;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
            $_type = t018llstarLexer::T_WS;
            $_channel = t018llstarLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            $cnt3=0;
            //loop3:
            do {
                $alt3=2;
                $LA3_0 = $this->input->LA(1);

                if ( (($LA3_0>=$this->getToken('9') && $LA3_0<=$this->getToken('10'))||$LA3_0==$this->getToken('13')||$LA3_0==$this->getToken('32')) ) {
                    $alt3=1;
                }


                switch ($alt3) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
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
        // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
        $alt4=17;
        $alt4 = $this->dfa4->predict($this->input);
        switch ($alt4) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__7(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__8(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__9(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__10(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__11(); 

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__12(); 

                }
                break;
            case 7 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__13(); 

                }
                break;
            case 8 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__14(); 

                }
                break;
            case 9 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__15(); 

                }
                break;
            case 10 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__16(); 

                }
                break;
            case 11 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__17(); 

                }
                break;
            case 12 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__18(); 

                }
                break;
            case 13 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__19(); 

                }
                break;
            case 14 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mT__20(); 

                }
                break;
            case 15 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mID(); 

                }
                break;
            case 16 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mINT(); 

                }
                break;
            case 17 :
                // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t044trace.g 2010-09-10 19:39:46


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


 

class t044traceLexer extends Lexer {
    const T_WS=5;
    const T_INT=4;
    const T_EOF=-1;
    const T_T__8=8;
    const T_T__7=7;
    const T_T__6=6;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t044trace.g"; }

    // $ANTLR start "T__6"
    function mT__6(){
        try {
            $_type = t044traceLexer::T_T__6;
            $_channel = t044traceLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
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
    // $ANTLR end "T__6"

    // $ANTLR start "T__7"
    function mT__7(){
        try {
            $_type = t044traceLexer::T_T__7;
            $_channel = t044traceLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            {
            $this->matchChar(62); 

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
            $_type = t044traceLexer::T_T__8;
            $_channel = t044traceLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
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

    // $ANTLR start "INT"
    function mINT(){
        try {
            $_type = t044traceLexer::T_INT;
            $_channel = t044traceLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            	    {
            	    $this->matchRange(48,57); 

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
    // $ANTLR end "INT"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t044traceLexer::T_WS;
            $_channel = t044traceLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            $cnt2=0;
            //loop2:
            do {
                $alt2=2;
                $LA2_0 = $this->input->LA(1);

                if ( (($LA2_0>=$this->getToken('9') && $LA2_0<=$this->getToken('10'))||$LA2_0==$this->getToken('32')) ) {
                    $alt2=1;
                }


                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
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
            	    if ( $cnt2 >= 1 ) break 2;//loop2;
                        $eee =
                            new EarlyExitException(2, $this->input);
                        throw $eee;
                }
                $cnt2++;
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
        // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
        $alt3=5;
        $LA3 = $this->input->LA(1);
        if($this->getToken('60')== $LA3)
            {
            $alt3=1;
            }
        else if($this->getToken('62')== $LA3)
            {
            $alt3=2;
            }
        else if($this->getToken('43')== $LA3)
            {
            $alt3=3;
            }
        else if($this->getToken('48')== $LA3||$this->getToken('49')== $LA3||$this->getToken('50')== $LA3||$this->getToken('51')== $LA3||$this->getToken('52')== $LA3||$this->getToken('53')== $LA3||$this->getToken('54')== $LA3||$this->getToken('55')== $LA3||$this->getToken('56')== $LA3||$this->getToken('57')== $LA3)
            {
            $alt3=4;
            }
        else if($this->getToken('9')== $LA3||$this->getToken('10')== $LA3||$this->getToken('32')== $LA3)
            {
            $alt3=5;
            }
        else{
            $nvae =
                new NoViableAltException("", 3, 0, $this->input);

            throw $nvae;
        }

        switch ($alt3) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
                {
                $this->mT__6(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
                {
                $this->mT__7(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
                {
                $this->mT__8(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
                {
                $this->mINT(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
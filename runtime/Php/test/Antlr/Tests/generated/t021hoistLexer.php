<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t021hoist.g 2010-09-10 19:39:27


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


 

class t021hoistLexer extends Lexer {
    const T_WS=6;
    const T_INT=5;
    const T_ID=4;
    const T_EOF=-1;
    const T_T__7=7;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t021hoist.g"; }

    // $ANTLR start "T__7"
    function mT__7(){
        try {
            $_type = t021hoistLexer::T_T__7;
            $_channel = t021hoistLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            {
            $this->matchString("enum"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__7"

    // $ANTLR start "ID"
    function mID(){
        try {
            $_type = t021hoistLexer::T_ID;
            $_channel = t021hoistLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('48') && $LA1_0<=$this->getToken('57'))||($LA1_0>=$this->getToken('65') && $LA1_0<=$this->getToken('90'))||$LA1_0==$this->getToken('95')||($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
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
            $_type = t021hoistLexer::T_INT;
            $_channel = t021hoistLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
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
            $_type = t021hoistLexer::T_WS;
            $_channel = t021hoistLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
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
        // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
        $alt4=4;
        $LA4 = $this->input->LA(1);
        if($this->getToken('101')== $LA4)
            {
            $LA4_1 = $this->input->LA(2);

            if ( ($LA4_1==$this->getToken('110')) ) {
                $LA4_5 = $this->input->LA(3);

                if ( ($LA4_5==$this->getToken('117')) ) {
                    $LA4_6 = $this->input->LA(4);

                    if ( ($LA4_6==$this->getToken('109')) ) {
                        $LA4_7 = $this->input->LA(5);

                        if ( (($LA4_7>=$this->getToken('48') && $LA4_7<=$this->getToken('57'))||($LA4_7>=$this->getToken('65') && $LA4_7<=$this->getToken('90'))||$LA4_7==$this->getToken('95')||($LA4_7>=$this->getToken('97') && $LA4_7<=$this->getToken('122'))) ) {
                            $alt4=2;
                        }
                        else {
                            $alt4=1;}
                    }
                    else {
                        $alt4=2;}
                }
                else {
                    $alt4=2;}
            }
            else {
                $alt4=2;}
            }
        else if($this->getToken('65')== $LA4||$this->getToken('66')== $LA4||$this->getToken('67')== $LA4||$this->getToken('68')== $LA4||$this->getToken('69')== $LA4||$this->getToken('70')== $LA4||$this->getToken('71')== $LA4||$this->getToken('72')== $LA4||$this->getToken('73')== $LA4||$this->getToken('74')== $LA4||$this->getToken('75')== $LA4||$this->getToken('76')== $LA4||$this->getToken('77')== $LA4||$this->getToken('78')== $LA4||$this->getToken('79')== $LA4||$this->getToken('80')== $LA4||$this->getToken('81')== $LA4||$this->getToken('82')== $LA4||$this->getToken('83')== $LA4||$this->getToken('84')== $LA4||$this->getToken('85')== $LA4||$this->getToken('86')== $LA4||$this->getToken('87')== $LA4||$this->getToken('88')== $LA4||$this->getToken('89')== $LA4||$this->getToken('90')== $LA4||$this->getToken('95')== $LA4||$this->getToken('97')== $LA4||$this->getToken('98')== $LA4||$this->getToken('99')== $LA4||$this->getToken('100')== $LA4||$this->getToken('102')== $LA4||$this->getToken('103')== $LA4||$this->getToken('104')== $LA4||$this->getToken('105')== $LA4||$this->getToken('106')== $LA4||$this->getToken('107')== $LA4||$this->getToken('108')== $LA4||$this->getToken('109')== $LA4||$this->getToken('110')== $LA4||$this->getToken('111')== $LA4||$this->getToken('112')== $LA4||$this->getToken('113')== $LA4||$this->getToken('114')== $LA4||$this->getToken('115')== $LA4||$this->getToken('116')== $LA4||$this->getToken('117')== $LA4||$this->getToken('118')== $LA4||$this->getToken('119')== $LA4||$this->getToken('120')== $LA4||$this->getToken('121')== $LA4||$this->getToken('122')== $LA4)
            {
            $alt4=2;
            }
        else if($this->getToken('48')== $LA4||$this->getToken('49')== $LA4||$this->getToken('50')== $LA4||$this->getToken('51')== $LA4||$this->getToken('52')== $LA4||$this->getToken('53')== $LA4||$this->getToken('54')== $LA4||$this->getToken('55')== $LA4||$this->getToken('56')== $LA4||$this->getToken('57')== $LA4)
            {
            $alt4=3;
            }
        else if($this->getToken('9')== $LA4||$this->getToken('10')== $LA4||$this->getToken('13')== $LA4||$this->getToken('32')== $LA4)
            {
            $alt4=4;
            }
        else{
            $nvae =
                new NoViableAltException("", 4, 0, $this->input);

            throw $nvae;
        }

        switch ($alt4) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
                {
                $this->mT__7(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
                {
                $this->mID(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
                {
                $this->mINT(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
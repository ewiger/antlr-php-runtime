<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g 2010-09-10 19:39:35


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


 

class t031emptyAltLexer extends Lexer {
    const T_NAME=4;
    const T_WS=5;
    const T_EOF=-1;
    const T_NUMBER=6;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g"; }

    // $ANTLR start "NAME"
    function mNAME(){
        try {
            $_type = t031emptyAltLexer::T_NAME;
            $_channel = t031emptyAltLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            {
            $this->matchRange(97,122); 

            }

            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('48') && $LA1_0<=$this->getToken('57'))||($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
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
    // $ANTLR end "NAME"

    // $ANTLR start "NUMBER"
    function mNUMBER(){
        try {
            $_type = t031emptyAltLexer::T_NUMBER;
            $_channel = t031emptyAltLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
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
    // $ANTLR end "NUMBER"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t031emptyAltLexer::T_WS;
            $_channel = t031emptyAltLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            $cnt3=0;
            //loop3:
            do {
                $alt3=2;
                $LA3_0 = $this->input->LA(1);

                if ( ($LA3_0==$this->getToken('32')) ) {
                    $alt3=1;
                }


                switch ($alt3) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            	    {
            	    $this->matchChar(32); 

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
    // $ANTLR end "WS"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
        $alt4=3;
        $LA4 = $this->input->LA(1);
        if($this->getToken('97')== $LA4||$this->getToken('98')== $LA4||$this->getToken('99')== $LA4||$this->getToken('100')== $LA4||$this->getToken('101')== $LA4||$this->getToken('102')== $LA4||$this->getToken('103')== $LA4||$this->getToken('104')== $LA4||$this->getToken('105')== $LA4||$this->getToken('106')== $LA4||$this->getToken('107')== $LA4||$this->getToken('108')== $LA4||$this->getToken('109')== $LA4||$this->getToken('110')== $LA4||$this->getToken('111')== $LA4||$this->getToken('112')== $LA4||$this->getToken('113')== $LA4||$this->getToken('114')== $LA4||$this->getToken('115')== $LA4||$this->getToken('116')== $LA4||$this->getToken('117')== $LA4||$this->getToken('118')== $LA4||$this->getToken('119')== $LA4||$this->getToken('120')== $LA4||$this->getToken('121')== $LA4||$this->getToken('122')== $LA4)
            {
            $alt4=1;
            }
        else if($this->getToken('48')== $LA4||$this->getToken('49')== $LA4||$this->getToken('50')== $LA4||$this->getToken('51')== $LA4||$this->getToken('52')== $LA4||$this->getToken('53')== $LA4||$this->getToken('54')== $LA4||$this->getToken('55')== $LA4||$this->getToken('56')== $LA4||$this->getToken('57')== $LA4)
            {
            $alt4=2;
            }
        else if($this->getToken('32')== $LA4)
            {
            $alt4=3;
            }
        else{
            $nvae =
                new NoViableAltException("", 4, 0, $this->input);

            throw $nvae;
        }

        switch ($alt4) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
                {
                $this->mNAME(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
                {
                $this->mNUMBER(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
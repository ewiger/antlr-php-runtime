<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t039labels.g 2010-09-10 19:39:42


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


 

class t039labelsLexer extends Lexer {
    const T_D=7;
    const T_E=9;
    const T_F=8;
    const T_WS=10;
    const T_A=4;
    const T_B=5;
    const T_C=6;
    const T_T__11=11;
    const T_EOF=-1;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t039labels.g"; }

    // $ANTLR start "T__11"
    function mT__11(){
        try {
            $_type = t039labelsLexer::T_T__11;
            $_channel = t039labelsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
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
    // $ANTLR end "T__11"

    // $ANTLR start "A"
    function mA(){
        try {
            $_type = t039labelsLexer::T_A;
            $_channel = t039labelsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            {
            $this->matchRange(97,122); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "A"

    // $ANTLR start "B"
    function mB(){
        try {
            $_type = t039labelsLexer::T_B;
            $_channel = t039labelsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            {
            $this->matchRange(48,57); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "B"

    // $ANTLR start "C"
    function mC(){
        try {
            $_type = t039labelsLexer::T_C;
            $_channel = t039labelsLexer::DEFAULT_TOKEN_CHANNEL;
            $a = 0;

            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            {
            $a = $this->input->LA(1);
            $this->matchChar(65); 
               

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "C"

    // $ANTLR start "D"
    function mD(){
        try {
            $_type = t039labelsLexer::T_D;
            $_channel = t039labelsLexer::DEFAULT_TOKEN_CHANNEL;
            $a=null;

            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            {
            $start = $this->getCharIndex();
            $this->matchString("FOOBAR");
            $a = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $start, $this->getCharIndex()-1);
               

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "D"

    // $ANTLR start "E"
    function mE(){
        try {
            $_type = t039labelsLexer::T_E;
            $_channel = t039labelsLexer::DEFAULT_TOKEN_CHANNEL;
            $a = 0;

            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            {
            $this->matchString("GNU"); 

            $a = $this->input->LA(1);
            $this->matchAny(); 
               

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "E"

    // $ANTLR start "F"
    function mF(){
        try {
            $_type = t039labelsLexer::T_F;
            $_channel = t039labelsLexer::DEFAULT_TOKEN_CHANNEL;
            $a=null;

            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            {
            $this->matchString("BLARZ"); 

            $aStart90 = $this->getCharIndex();
            $this->matchChar(self::T_EOF); 
            $a = new CommonToken($this->input, self::T_EOF, Token::DEFAULT_CHANNEL, $aStart90, $this->getCharIndex()-1);
               

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "F"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t039labelsLexer::T_WS;
            $_channel = t039labelsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('32')) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            	    {
            	    $this->matchChar(32); 

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

               $_channel = self::HIDDEN; 

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
        // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
        $alt2=8;
        $LA2 = $this->input->LA(1);
        if($this->getToken('44')== $LA2)
            {
            $alt2=1;
            }
        else if($this->getToken('97')== $LA2||$this->getToken('98')== $LA2||$this->getToken('99')== $LA2||$this->getToken('100')== $LA2||$this->getToken('101')== $LA2||$this->getToken('102')== $LA2||$this->getToken('103')== $LA2||$this->getToken('104')== $LA2||$this->getToken('105')== $LA2||$this->getToken('106')== $LA2||$this->getToken('107')== $LA2||$this->getToken('108')== $LA2||$this->getToken('109')== $LA2||$this->getToken('110')== $LA2||$this->getToken('111')== $LA2||$this->getToken('112')== $LA2||$this->getToken('113')== $LA2||$this->getToken('114')== $LA2||$this->getToken('115')== $LA2||$this->getToken('116')== $LA2||$this->getToken('117')== $LA2||$this->getToken('118')== $LA2||$this->getToken('119')== $LA2||$this->getToken('120')== $LA2||$this->getToken('121')== $LA2||$this->getToken('122')== $LA2)
            {
            $alt2=2;
            }
        else if($this->getToken('48')== $LA2||$this->getToken('49')== $LA2||$this->getToken('50')== $LA2||$this->getToken('51')== $LA2||$this->getToken('52')== $LA2||$this->getToken('53')== $LA2||$this->getToken('54')== $LA2||$this->getToken('55')== $LA2||$this->getToken('56')== $LA2||$this->getToken('57')== $LA2)
            {
            $alt2=3;
            }
        else if($this->getToken('65')== $LA2)
            {
            $alt2=4;
            }
        else if($this->getToken('70')== $LA2)
            {
            $alt2=5;
            }
        else if($this->getToken('71')== $LA2)
            {
            $alt2=6;
            }
        else if($this->getToken('66')== $LA2)
            {
            $alt2=7;
            }
        else if($this->getToken('32')== $LA2)
            {
            $alt2=8;
            }
        else{
            $nvae =
                new NoViableAltException("", 2, 0, $this->input);

            throw $nvae;
        }

        switch ($alt2) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
                {
                $this->mT__11(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
                {
                $this->mA(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
                {
                $this->mB(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
                {
                $this->mC(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
                {
                $this->mD(); 

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
                {
                $this->mE(); 

                }
                break;
            case 7 :
                // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
                {
                $this->mF(); 

                }
                break;
            case 8 :
                // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
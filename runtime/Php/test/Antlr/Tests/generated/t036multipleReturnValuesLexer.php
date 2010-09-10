<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g 2010-09-10 19:39:39


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


 

class t036multipleReturnValuesLexer extends Lexer {
    const T_WS=5;
    const T_A=4;
    const T_EOF=-1;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g"; }

    // $ANTLR start "A"
    function mA(){
        try {
            $_type = t036multipleReturnValuesLexer::T_A;
            $_channel = t036multipleReturnValuesLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
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

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t036multipleReturnValuesLexer::T_WS;
            $_channel = t036multipleReturnValuesLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            $cnt2=0;
            //loop2:
            do {
                $alt2=4;
                $LA2 = $this->input->LA(1);
                if($this->getToken('32')== $LA2)
                    {
                    $alt2=1;
                    }
                else if($this->getToken('9')== $LA2)
                    {
                    $alt2=2;
                    }
                else if($this->getToken('10')== $LA2||$this->getToken('13')== $LA2)
                    {
                    $alt2=3;
                    }



                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            	    {
            	    $this->matchChar(32); 

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            	    {
            	    $this->matchChar(9); 

            	    }
            	    break;
            	case 3 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            	    {
            	    // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            	    $alt1=3;
            	    $LA1_0 = $this->input->LA(1);

            	    if ( ($LA1_0==$this->getToken('10')) ) {
            	        $alt1=1;
            	    }
            	    else if ( ($LA1_0==$this->getToken('13')) ) {
            	        $LA1_2 = $this->input->LA(2);

            	        if ( ($LA1_2==$this->getToken('10')) ) {
            	            $alt1=2;
            	        }
            	        else {
            	            $alt1=3;}
            	    }
            	    else {
            	        $nvae = new NoViableAltException("", 1, 0, $this->input);

            	        throw $nvae;
            	    }
            	    switch ($alt1) {
            	        case 1 :
            	            // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            	            {
            	            $this->matchChar(10); 

            	            }
            	            break;
            	        case 2 :
            	            // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            	            {
            	            $this->matchString("\r\n"); 


            	            }
            	            break;
            	        case 3 :
            	            // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            	            {
            	            $this->matchChar(13); 

            	            }
            	            break;

            	    }


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
        // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
        $alt3=2;
        $LA3_0 = $this->input->LA(1);

        if ( (($LA3_0>=$this->getToken('97') && $LA3_0<=$this->getToken('122'))) ) {
            $alt3=1;
        }
        else if ( (($LA3_0>=$this->getToken('9') && $LA3_0<=$this->getToken('10'))||$LA3_0==$this->getToken('13')||$LA3_0==$this->getToken('32')) ) {
            $alt3=2;
        }
        else {
            $nvae = new NoViableAltException("", 3, 0, $this->input);

            throw $nvae;
        }
        switch ($alt3) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
                {
                $this->mA(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
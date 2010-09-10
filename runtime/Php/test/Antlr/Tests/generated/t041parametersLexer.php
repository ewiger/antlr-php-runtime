<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t041parameters.g 2010-09-10 19:39:43


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


 

class t041parametersLexer extends Lexer {
    const T_WS=5;
    const T_A=4;
    const T_EOF=-1;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t041parameters.g"; }

    // $ANTLR start "A"
    function mA(){
        try {
            $_type = t041parametersLexer::T_A;
            $_channel = t041parametersLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
            // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
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
            $_type = t041parametersLexer::T_WS;
            $_channel = t041parametersLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
            // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
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
        // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
        $alt2=2;
        $LA2_0 = $this->input->LA(1);

        if ( (($LA2_0>=$this->getToken('97') && $LA2_0<=$this->getToken('122'))) ) {
            $alt2=1;
        }
        else if ( ($LA2_0==$this->getToken('32')) ) {
            $alt2=2;
        }
        else {
            $nvae = new NoViableAltException("", 2, 0, $this->input);

            throw $nvae;
        }
        switch ($alt2) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
                {
                $this->mA(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
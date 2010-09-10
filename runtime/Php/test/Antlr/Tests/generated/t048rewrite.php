<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g 2010-09-10 19:39:51


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


 

class t048rewrite extends Lexer {
    const T_A=4;
    const T_B=5;
    const T_C=6;
    const T_EOF=-1;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g"; }

    // $ANTLR start "A"
    function mA(){
        try {
            $_type = t048rewrite::T_A;
            $_channel = t048rewrite::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g
            {
            $this->matchChar(97); 

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
            $_type = t048rewrite::T_B;
            $_channel = t048rewrite::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g
            {
            $this->matchChar(98); 

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
            $_type = t048rewrite::T_C;
            $_channel = t048rewrite::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g
            {
            $this->matchChar(99); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "C"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g
        $alt1=3;
        $LA1 = $this->input->LA(1);
        if($this->getToken('97')== $LA1)
            {
            $alt1=1;
            }
        else if($this->getToken('98')== $LA1)
            {
            $alt1=2;
            }
        else if($this->getToken('99')== $LA1)
            {
            $alt1=3;
            }
        else{
            $nvae =
                new NoViableAltException("", 1, 0, $this->input);

            throw $nvae;
        }

        switch ($alt1) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g
                {
                $this->mA(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g
                {
                $this->mB(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t048rewrite.g
                {
                $this->mC(); 

                }
                break;

        }

    }



}
?>
<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t003lexer.g 2010-09-10 19:39:12


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


 

class t003lexer extends Lexer {
    const T_FOOZE=6;
    const T_ONE=5;
    const T_EOF=-1;
    const T_ZERO=4;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t003lexer.g"; }

    // $ANTLR start "ZERO"
    function mZERO(){
        try {
            $_type = t003lexer::T_ZERO;
            $_channel = t003lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t003lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t003lexer.g
            {
            $this->matchChar(48); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ZERO"

    // $ANTLR start "ONE"
    function mONE(){
        try {
            $_type = t003lexer::T_ONE;
            $_channel = t003lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t003lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t003lexer.g
            {
            $this->matchChar(49); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ONE"

    // $ANTLR start "FOOZE"
    function mFOOZE(){
        try {
            $_type = t003lexer::T_FOOZE;
            $_channel = t003lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t003lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t003lexer.g
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
    // $ANTLR end "FOOZE"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t003lexer.g
        $alt1=3;
        $LA1 = $this->input->LA(1);
        if($this->getToken('48')== $LA1)
            {
            $alt1=1;
            }
        else if($this->getToken('49')== $LA1)
            {
            $alt1=2;
            }
        else if($this->getToken('102')== $LA1)
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
                // runtime/Php/test/Antlr/Tests/grammers/t003lexer.g
                {
                $this->mZERO(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t003lexer.g
                {
                $this->mONE(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t003lexer.g
                {
                $this->mFOOZE(); 

                }
                break;

        }

    }



}
?>
<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t043synpred.g 2010-09-10 19:39:45


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


 

class t043synpredLexer extends Lexer {
    const T_E=4;
    const T_P=5;
    const T_S=6;
    const T_EOF=-1;
    const T_T__7=7;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t043synpred.g"; }

    // $ANTLR start "T__7"
    function mT__7(){
        try {
            $_type = t043synpredLexer::T_T__7;
            $_channel = t043synpredLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            {
            $this->matchString("foo"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__7"

    // $ANTLR start "S"
    function mS(){
        try {
            $_type = t043synpredLexer::T_S;
            $_channel = t043synpredLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            {
            $this->matchChar(32); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "S"

    // $ANTLR start "P"
    function mP(){
        try {
            $_type = t043synpredLexer::T_P;
            $_channel = t043synpredLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
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
    // $ANTLR end "P"

    // $ANTLR start "E"
    function mE(){
        try {
            $_type = t043synpredLexer::T_E;
            $_channel = t043synpredLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
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
    // $ANTLR end "E"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
        $alt1=4;
        $LA1 = $this->input->LA(1);
        if($this->getToken('102')== $LA1)
            {
            $alt1=1;
            }
        else if($this->getToken('32')== $LA1)
            {
            $alt1=2;
            }
        else if($this->getToken('43')== $LA1)
            {
            $alt1=3;
            }
        else if($this->getToken('62')== $LA1)
            {
            $alt1=4;
            }
        else{
            $nvae =
                new NoViableAltException("", 1, 0, $this->input);

            throw $nvae;
        }

        switch ($alt1) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
                {
                $this->mT__7(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
                {
                $this->mS(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
                {
                $this->mP(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
                {
                $this->mE(); 

                }
                break;

        }

    }



}
?>
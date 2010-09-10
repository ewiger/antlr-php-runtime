<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g 2010-09-10 19:39:35


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


 

class t032subrulePredictLexer extends Lexer {
    const T_WS=4;
    const T_EOF=-1;
    const T_T__7=7;
    const T_T__6=6;
    const T_T__5=5;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g"; }

    // $ANTLR start "T__5"
    function mT__5(){
        try {
            $_type = t032subrulePredictLexer::T_T__5;
            $_channel = t032subrulePredictLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            {
            $this->matchString("BEGIN"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__5"

    // $ANTLR start "T__6"
    function mT__6(){
        try {
            $_type = t032subrulePredictLexer::T_T__6;
            $_channel = t032subrulePredictLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            {
            $this->matchString("END"); 


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
            $_type = t032subrulePredictLexer::T_T__7;
            $_channel = t032subrulePredictLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            {
            $this->matchChar(65); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__7"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t032subrulePredictLexer::T_WS;
            $_channel = t032subrulePredictLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
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
    // $ANTLR end "WS"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
        $alt1=4;
        $LA1 = $this->input->LA(1);
        if($this->getToken('66')== $LA1)
            {
            $alt1=1;
            }
        else if($this->getToken('69')== $LA1)
            {
            $alt1=2;
            }
        else if($this->getToken('65')== $LA1)
            {
            $alt1=3;
            }
        else if($this->getToken('32')== $LA1)
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
                // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
                {
                $this->mT__5(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
                {
                $this->mT__6(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
                {
                $this->mT__7(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
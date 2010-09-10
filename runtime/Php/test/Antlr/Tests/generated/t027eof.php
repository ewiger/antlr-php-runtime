<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t027eof.g 2010-09-10 19:39:32


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


 

class t027eof extends Lexer {
    const T_END=4;
    const T_SPACE=5;
    const T_EOF=-1;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t027eof.g"; }

    // $ANTLR start "END"
    function mEND(){
        try {
            $_type = t027eof::T_END;
            $_channel = t027eof::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t027eof.g
            // runtime/Php/test/Antlr/Tests/grammers/t027eof.g
            {
            $this->matchChar(self::T_EOF); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "END"

    // $ANTLR start "SPACE"
    function mSPACE(){
        try {
            $_type = t027eof::T_SPACE;
            $_channel = t027eof::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t027eof.g
            // runtime/Php/test/Antlr/Tests/grammers/t027eof.g
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
    // $ANTLR end "SPACE"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t027eof.g
        $alt1=2;
        $LA1_0 = $this->input->LA(1);

        if ( ($LA1_0==$this->getToken('32')) ) {
            $alt1=2;
        }
        else {
            $alt1=1;}
        switch ($alt1) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t027eof.g
                {
                $this->mEND(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t027eof.g
                {
                $this->mSPACE(); 

                }
                break;

        }

    }



}
?>
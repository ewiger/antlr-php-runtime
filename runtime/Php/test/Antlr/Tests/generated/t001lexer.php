<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t001lexer.g 2010-09-10 19:39:11


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


 

class t001lexer extends Lexer {
    const T_EOF=-1;
    const T_ZERO=4;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t001lexer.g"; }

    // $ANTLR start "ZERO"
    function mZERO(){
        try {
            $_type = t001lexer::T_ZERO;
            $_channel = t001lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t001lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t001lexer.g
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

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t001lexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t001lexer.g
        {
        $this->mZERO(); 

        }


    }



}
?>
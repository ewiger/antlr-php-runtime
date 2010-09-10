<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t002lexer.g 2010-09-10 19:39:11


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


 

class t002lexer extends Lexer {
    const T_ONE=5;
    const T_EOF=-1;
    const T_ZERO=4;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t002lexer.g"; }

    // $ANTLR start "ZERO"
    function mZERO(){
        try {
            $_type = t002lexer::T_ZERO;
            $_channel = t002lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t002lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t002lexer.g
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
            $_type = t002lexer::T_ONE;
            $_channel = t002lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t002lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t002lexer.g
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

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t002lexer.g
        $alt1=2;
        $LA1_0 = $this->input->LA(1);

        if ( ($LA1_0==$this->getToken('48')) ) {
            $alt1=1;
        }
        else if ( ($LA1_0==$this->getToken('49')) ) {
            $alt1=2;
        }
        else {
            $nvae = new NoViableAltException("", 1, 0, $this->input);

            throw $nvae;
        }
        switch ($alt1) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t002lexer.g
                {
                $this->mZERO(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t002lexer.g
                {
                $this->mONE(); 

                }
                break;

        }

    }



}
?>
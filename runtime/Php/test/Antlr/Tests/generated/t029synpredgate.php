<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g 2010-09-10 19:39:33


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


 

class t029synpredgate extends Lexer {
    const T_A=4;
    const T_B=5;
    const T_EOF=-1;
    const T_FOO=6;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g"; }

    // $ANTLR start "FOO"
    function mFOO(){
        try {
            $_type = t029synpredgate::T_FOO;
            $_channel = t029synpredgate::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
            $alt1=2;
            $LA1_0 = $this->input->LA(1);

            if ( ($LA1_0==$this->getToken('97')) ) {
                $LA1_1 = $this->input->LA(2);

                if ( ($this->synpred1_t029synpredgate()) ) {
                    $alt1=1;
                }
                else if ( ($this->synpred2_t029synpredgate()) ) {
                    $alt1=2;
                }
                else {
                    if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                    $nvae = new NoViableAltException("", 1, 1, $this->input);

                    throw $nvae;
                }
            }
            else {
                if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                $nvae = new NoViableAltException("", 1, 0, $this->input);

                throw $nvae;
            }
            switch ($alt1) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
                    {
                    $this->mA(); if ($this->state->failed) return ;

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
                    {
                    $this->mB(); if ($this->state->failed) return ;

                    }
                    break;

            }
            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "FOO"

    // $ANTLR start "A"
    function mA(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
            // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
            {
            $this->matchChar(97); if ($this->state->failed) return ;

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "A"

    // $ANTLR start "B"
    function mB(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
            // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
            {
            $this->matchChar(97); if ($this->state->failed) return ;

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "B"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
        // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
        {
        $this->mFOO(); if ($this->state->failed) return ;

        }


    }

    // $ANTLR start synpred1_t029synpredgate
    public function synpred1_t029synpredgate_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
        // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
        {
        $this->matchString("ab"); if ($this->state->failed) return ;


        }
    }
    // $ANTLR end synpred1_t029synpredgate

    // $ANTLR start synpred2_t029synpredgate
    public function synpred2_t029synpredgate_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
        // runtime/Php/test/Antlr/Tests/grammers/t029synpredgate.g
        {
        $this->matchString("ac"); if ($this->state->failed) return ;


        }
    }
    // $ANTLR end synpred2_t029synpredgate

    public function synpred2_t029synpredgate() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred2_t029synpredgate_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred1_t029synpredgate() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred1_t029synpredgate_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }



}
?>
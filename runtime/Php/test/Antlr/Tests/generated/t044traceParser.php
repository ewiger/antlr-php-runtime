<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t044trace.g 2010-09-10 19:39:46


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

class t044traceParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "INT", "WS", "'<'", "'>'", "'+'"
    );
    public $WS=5;
    public $INT=4;
    public $EOF=-1;
    public $T__8=8;
    public $T__7=7;
    public $T__6=6;

    // delegates
    // delegators


    static public $FOLLOW_6_in_a28 = array(4 => 4);
    static public $FOLLOW_b_in_a37 = array(7 => 7);
    static public $FOLLOW_c_in_a39 = array(7 => 7);
    static public $FOLLOW_7_in_a42 = array(1 => 1);
    static public $FOLLOW_c_in_b48 = array(1 => 1, 8 => 8);
    static public $FOLLOW_8_in_b51 = array(4 => 4);
    static public $FOLLOW_c_in_b53 = array(1 => 1, 8 => 8);
    static public $FOLLOW_INT_in_c61 = array(1 => 1);
    static public $FOLLOW_INT_in_synpred1_t044trace32 = array(8 => 8);
    static public $FOLLOW_8_in_synpred1_t044trace34 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t044traceParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t044trace.g"; }



    // $ANTLR start "a"
    // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
    public function a(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            {
            $this->match($this->input,$this->getToken('6'),self::$FOLLOW_6_in_a28); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            $alt1=2;
            $LA1_0 = $this->input->LA(1);

            if ( ($LA1_0==$this->getToken('INT')) ) {
                $LA1_1 = $this->input->LA(2);

                if ( ($this->synpred1_t044trace()) ) {
                    $alt1=1;
                }
                else if ( (true) ) {
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
                    // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
                    {
                    $this->pushFollow(self::$FOLLOW_b_in_a37);
                    $this->b();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
                    {
                    $this->pushFollow(self::$FOLLOW_c_in_a39);
                    $this->c();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;

                    }
                    break;

            }

            $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_a42); if ($this->state->failed) return ;

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "a"


    // $ANTLR start "b"
    // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
    public function b(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            {
            $this->pushFollow(self::$FOLLOW_c_in_b48);
            $this->c();

            $this->state->_fsp--;
            if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            //loop2:
            do {
                $alt2=2;
                $LA2_0 = $this->input->LA(1);

                if ( ($LA2_0==$this->getToken('8')) ) {
                    $alt2=1;
                }


                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            	    {
            	    $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_b51); if ($this->state->failed) return ;
            	    $this->pushFollow(self::$FOLLOW_c_in_b53);
            	    $this->c();

            	    $this->state->_fsp--;
            	    if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop2;
                }
            } while (true);


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "b"


    // $ANTLR start "c"
    // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
    public function c(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
            {
            $this->match($this->input,$this->getToken('INT'),self::$FOLLOW_INT_in_c61); if ($this->state->failed) return ;
            if ( $this->state->backtracking==0 ) {

                      if (!$this->_stack) {
                          $this->_stack = $this->getRuleInvocationStack();
                      }
                  
            }

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return ;
    }
    // $ANTLR end "c"

    // $ANTLR start synpred1_t044trace
    public function synpred1_t044trace_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
        // runtime/Php/test/Antlr/Tests/grammers/t044trace.g
        {
        $this->match($this->input,$this->getToken('INT'),self::$FOLLOW_INT_in_synpred1_t044trace32); if ($this->state->failed) return ;
        $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_synpred1_t044trace34); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred1_t044trace

    // Delegated rules

    public function synpred1_t044trace() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred1_t044trace_fragment(); // can never throw exception
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
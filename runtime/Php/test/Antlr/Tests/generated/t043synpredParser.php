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

class t043synpredParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "E", "P", "S", "'foo'"
    );
    public $E=4;
    public $P=5;
    public $S=6;
    public $EOF=-1;
    public $T__7=7;

    // delegates
    // delegators


    static public $FOLLOW_s_in_a31 = array(5 => 5, 6 => 6);
    static public $FOLLOW_b_in_a34 = array(4 => 4);
    static public $FOLLOW_E_in_a38 = array(1 => 1);
    static public $FOLLOW_P_in_b44 = array(7 => 7);
    static public $FOLLOW_7_in_b46 = array(1 => 1);
    static public $FOLLOW_S_in_s53 = array(1 => 1);
    static public $FOLLOW_s_in_synpred1_t043synpred24 = array(5 => 5, 6 => 6);
    static public $FOLLOW_P_in_synpred1_t043synpred27 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t043synpredParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t043synpred.g"; }



    // $ANTLR start "a"
    // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
    public function a(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            $alt2=2;
            $LA2_0 = $this->input->LA(1);

            if ( ($LA2_0==$this->getToken('S')) && ($this->synpred1_t043synpred())) {
                $alt2=1;
            }
            switch ($alt2) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
                    {
                    // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
                    $cnt1=0;
                    //loop1:
                    do {
                        $alt1=2;
                        $LA1_0 = $this->input->LA(1);

                        if ( ($LA1_0==$this->getToken('S')) ) {
                            $alt1=1;
                        }


                        switch ($alt1) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
                    	    {
                    	    $this->pushFollow(self::$FOLLOW_s_in_a31);
                    	    $this->s();

                    	    $this->state->_fsp--;
                    	    if ($this->state->failed) return ;

                    	    }
                    	    break;

                    	default :
                    	    if ( $cnt1 >= 1 ) break 2;//loop1;
                    	    if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                                $eee =
                                    new EarlyExitException(1, $this->input);
                                throw $eee;
                        }
                        $cnt1++;
                    } while (true);

                    $this->pushFollow(self::$FOLLOW_b_in_a34);
                    $this->b();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;

                    }
                    break;

            }

            $this->match($this->input,$this->getToken('E'),self::$FOLLOW_E_in_a38); if ($this->state->failed) return ;

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
    // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
    public function b(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            {
            $this->match($this->input,$this->getToken('P'),self::$FOLLOW_P_in_b44); if ($this->state->failed) return ;
            $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_b46); if ($this->state->failed) return ;

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


    // $ANTLR start "s"
    // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
    public function s(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
            {
            $this->match($this->input,$this->getToken('S'),self::$FOLLOW_S_in_s53); if ($this->state->failed) return ;

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
    // $ANTLR end "s"

    // $ANTLR start synpred1_t043synpred
    public function synpred1_t043synpred_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
        // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
        {
        // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
        $cnt3=0;
        //loop3:
        do {
            $alt3=2;
            $LA3_0 = $this->input->LA(1);

            if ( ($LA3_0==$this->getToken('S')) ) {
                $alt3=1;
            }


            switch ($alt3) {
        	case 1 :
        	    // runtime/Php/test/Antlr/Tests/grammers/t043synpred.g
        	    {
        	    $this->pushFollow(self::$FOLLOW_s_in_synpred1_t043synpred24);
        	    $this->s();

        	    $this->state->_fsp--;
        	    if ($this->state->failed) return ;

        	    }
        	    break;

        	default :
        	    if ( $cnt3 >= 1 ) break 2;//loop3;
        	    if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                    $eee =
                        new EarlyExitException(3, $this->input);
                    throw $eee;
            }
            $cnt3++;
        } while (true);

        $this->match($this->input,$this->getToken('P'),self::$FOLLOW_P_in_synpred1_t043synpred27); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred1_t043synpred

    // Delegated rules

    public function synpred1_t043synpred() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred1_t043synpred_fragment(); // can never throw exception
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
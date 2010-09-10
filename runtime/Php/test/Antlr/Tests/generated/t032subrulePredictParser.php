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

class t032subrulePredictParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "WS", "'BEGIN'", "'END'", "'A'"
    );
    public $WS=4;
    public $EOF=-1;
    public $T__7=7;
    public $T__6=6;
    public $T__5=5;

    // delegates
    // delegators


    static public $FOLLOW_5_in_a22 = array(4 => 4);
    static public $FOLLOW_b_in_a24 = array(4 => 4);
    static public $FOLLOW_WS_in_a26 = array(4 => 4, 6 => 6);
    static public $FOLLOW_6_in_a29 = array(1 => 1);
    static public $FOLLOW_WS_in_b37 = array(4 => 4, 7 => 7);
    static public $FOLLOW_7_in_b40 = array(1 => 1, 4 => 4);


    protected $dfa3;


        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

            $this->dfa3 = new t032subrulePredictParser_DFA3($this);
        }
        

    public function getTokenNames() { return t032subrulePredictParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g"; }



    // $ANTLR start "a"
    // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
    public function a(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            {
            $this->match($this->input,$this->getToken('5'),self::$FOLLOW_5_in_a22); 
            $this->pushFollow(self::$FOLLOW_b_in_a24);
            $this->b();

            $this->state->_fsp--;

            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('WS')) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            	    {
            	    $this->match($this->input,$this->getToken('WS'),self::$FOLLOW_WS_in_a26); 

            	    }
            	    break;

            	default :
            	    if ( $cnt1 >= 1 ) break 2;//loop1;
                        $eee =
                            new EarlyExitException(1, $this->input);
                        throw $eee;
                }
                $cnt1++;
            } while (true);

            $this->match($this->input,$this->getToken('6'),self::$FOLLOW_6_in_a29); 

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
    // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
    public function b(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            $cnt3=0;
            //loop3:
            do {
                $alt3=2;
                $alt3 = $this->dfa3->predict($this->input);
                switch ($alt3) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            	    {
            	    // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            	    $cnt2=0;
            	    //loop2:
            	    do {
            	        $alt2=2;
            	        $LA2_0 = $this->input->LA(1);

            	        if ( ($LA2_0==$this->getToken('WS')) ) {
            	            $alt2=1;
            	        }


            	        switch ($alt2) {
            	    	case 1 :
            	    	    // runtime/Php/test/Antlr/Tests/grammers/t032subrulePredict.g
            	    	    {
            	    	    $this->match($this->input,$this->getToken('WS'),self::$FOLLOW_WS_in_b37); 

            	    	    }
            	    	    break;

            	    	default :
            	    	    if ( $cnt2 >= 1 ) break 2;//loop2;
            	                $eee =
            	                    new EarlyExitException(2, $this->input);
            	                throw $eee;
            	        }
            	        $cnt2++;
            	    } while (true);

            	    $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_b40); 

            	    }
            	    break;

            	default :
            	    if ( $cnt3 >= 1 ) break 2;//loop3;
                        $eee =
                            new EarlyExitException(3, $this->input);
                        throw $eee;
                }
                $cnt3++;
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

    // Delegated rules



}

function t032subrulePredictParser_DFA3_static(){
    $eot = "\x4\xff";
    $eof = "\x4\xff";
    $min = "\x2\x4\x2\xff";
    $max = "\x1\x4\x1\x7\x2\xff";
    $accept = "\x2\xff\x1\x1\x1\x2";
    $special = "\x4\xff";
    $transitionS = array(
        "\x1\x1",
        "\x1\x1\x1\xff\x1\x3\x1\x2",
        "",
        ""
    );

    $arr = array();
    $arr['eot'] = DFA::unpackRLE($eot);
    $arr['eof'] = DFA::unpackRLE($eof);
    $arr['min'] = DFA::unpackRLE($min, true);
    $arr['max'] = DFA::unpackRLE($max, true);
    $arr['accept'] = DFA::unpackRLE($accept);
    $arr['special'] = DFA::unpackRLE($special);


    $numStates = sizeof($transitionS);
    $arr['transition'] = array();
    for ($i=0; $i<$numStates; $i++) {
        $arr['transition'][$i] = DFA::unpackRLE($transitionS[$i]);
    }
    return $arr;
}

class t032subrulePredictParser_DFA3 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t032subrulePredictParser_DFA3_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 3;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "()+ loopback of 7:4: ( ( WS )+ 'A' )+";
    }
}
 
?>
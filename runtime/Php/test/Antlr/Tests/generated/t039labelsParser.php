<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t039labels.g 2010-09-10 19:39:42


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

class t039labelsParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "A", "B", "C", "D", "F", "E", "WS", "','"
    );
    public $D=7;
    public $E=9;
    public $F=8;
    public $WS=10;
    public $A=4;
    public $B=5;
    public $C=6;
    public $T__11=11;
    public $EOF=-1;

    // delegates
    // delegators


    static public $FOLLOW_A_in_a33 = array(6 => 6, 11 => 11);
    static public $FOLLOW_11_in_a37 = array(4 => 4, 5 => 5);
    static public $FOLLOW_set_in_a41 = array(6 => 6, 11 => 11);
    static public $FOLLOW_C_in_a50 = array(7 => 7);
    static public $FOLLOW_D_in_a52 = array(4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10, 11 => 11);
    static public $FOLLOW_F_in_a62 = array();
    static public $FOLLOW_EOF_in_a64 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t039labelsParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t039labels.g"; }



    // $ANTLR start "a"
    // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
    public function a(){
        $l = null;

        $w = null;
        $ids = null;
        $list_ids = array();

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            {
            $ids=$this->match($this->input,$this->getToken('A'),self::$FOLLOW_A_in_a33); 
            $list_ids[] = $ids;

            // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('11')) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t039labels.g
            	    {
            	    $this->match($this->input,$this->getToken('11'),self::$FOLLOW_11_in_a37); 
            	    $ids = $this->input->LT(1);
            	    if ( ($this->input->LA(1)>=$this->getToken('A') && $this->input->LA(1)<=$this->getToken('B')) ) {
            	        $this->input->consume();
            	        $this->state->errorRecovery=false;
            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        throw $mse;
            	    }

            	    $list_ids[] = $ids;


            	    }
            	    break;

            	default :
            	    break 2;//loop1;
                }
            } while (true);

            $this->match($this->input,$this->getToken('C'),self::$FOLLOW_C_in_a50); 
            $this->match($this->input,$this->getToken('D'),self::$FOLLOW_D_in_a52); 
            $w = $this->input->LT(1);
            $this->matchAny($this->input); 
            $ids = $this->input->LT(1);
            $this->matchAny($this->input); 
            $list_ids[] = $ids;

            $this->match($this->input,$this->getToken('F'),self::$FOLLOW_F_in_a62); 
            $this->match($this->input,$this->getToken('EOF'),self::$FOLLOW_EOF_in_a64); 
               $l = array($list_ids, $w); 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $l;
    }
    // $ANTLR end "a"

    // Delegated rules



}

 
?>
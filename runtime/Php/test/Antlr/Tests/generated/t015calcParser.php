<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t015calc.g 2010-09-10 19:39:22


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

class t015calcParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "INTEGER", "DECIMAL", "DIGIT", "WS", "'+'", "'-'", "'*'", "'/'", "'ln'", "'^'", "'('", "')'", "'PI'", "'E'"
    );
    public $INTEGER=4;
    public $WS=7;
    public $T__16=16;
    public $T__15=15;
    public $DECIMAL=5;
    public $T__17=17;
    public $T__12=12;
    public $T__11=11;
    public $T__14=14;
    public $T__13=13;
    public $T__10=10;
    public $DIGIT=6;
    public $EOF=-1;
    public $T__9=9;
    public $T__8=8;

    // delegates
    // delegators


    static public $FOLLOW_expression_in_evaluate47 = array(1 => 1);
    static public $FOLLOW_mult_in_expression62 = array(1 => 1, 8 => 8, 9 => 9);
    static public $FOLLOW_8_in_expression70 = array(4 => 4, 5 => 5, 12 => 12, 14 => 14, 16 => 16, 17 => 17);
    static public $FOLLOW_mult_in_expression74 = array(1 => 1, 8 => 8, 9 => 9);
    static public $FOLLOW_9_in_expression82 = array(4 => 4, 5 => 5, 12 => 12, 14 => 14, 16 => 16, 17 => 17);
    static public $FOLLOW_mult_in_expression86 = array(1 => 1, 8 => 8, 9 => 9);
    static public $FOLLOW_log_in_mult108 = array(1 => 1, 10 => 10, 11 => 11);
    static public $FOLLOW_10_in_mult116 = array(4 => 4, 5 => 5, 12 => 12, 14 => 14, 16 => 16, 17 => 17);
    static public $FOLLOW_log_in_mult120 = array(1 => 1, 10 => 10, 11 => 11);
    static public $FOLLOW_11_in_mult128 = array(4 => 4, 5 => 5, 12 => 12, 14 => 14, 16 => 16, 17 => 17);
    static public $FOLLOW_log_in_mult132 = array(1 => 1, 10 => 10, 11 => 11);
    static public $FOLLOW_12_in_log153 = array(4 => 4, 5 => 5, 12 => 12, 14 => 14, 16 => 16, 17 => 17);
    static public $FOLLOW_exp_in_log157 = array(1 => 1);
    static public $FOLLOW_exp_in_log169 = array(1 => 1);
    static public $FOLLOW_atom_in_exp189 = array(1 => 1, 13 => 13);
    static public $FOLLOW_13_in_exp192 = array(4 => 4, 5 => 5, 12 => 12, 14 => 14, 16 => 16, 17 => 17);
    static public $FOLLOW_atom_in_exp196 = array(1 => 1);
    static public $FOLLOW_INTEGER_in_atom225 = array(1 => 1);
    static public $FOLLOW_DECIMAL_in_atom235 = array(1 => 1);
    static public $FOLLOW_14_in_atom244 = array(4 => 4, 5 => 5, 12 => 12, 14 => 14, 16 => 16, 17 => 17);
    static public $FOLLOW_expression_in_atom248 = array(15 => 15);
    static public $FOLLOW_15_in_atom252 = array(1 => 1);
    static public $FOLLOW_16_in_atom258 = array(1 => 1);
    static public $FOLLOW_17_in_atom266 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t015calcParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t015calc.g"; }


    public $reportedErrors = array();

    function emitErrorMessage($msg){
        $this->reportedErrors[] = $msg;
    }



    // $ANTLR start "evaluate"
    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
    public function evaluate(){
        $result = null;

        $r = null;


        try {
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            $this->pushFollow(self::$FOLLOW_expression_in_evaluate47);
            $r = $this->expression();

            $this->state->_fsp--;

              $result = $r;

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $result;
    }
    // $ANTLR end "evaluate"


    // $ANTLR start "expression"
    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
    public function expression(){
        $result = null;

        $r = null;

        $r2 = null;


        try {
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            $this->pushFollow(self::$FOLLOW_mult_in_expression62);
            $r = $this->mult();

            $this->state->_fsp--;

            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            //loop1:
            do {
                $alt1=3;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('8')) ) {
                    $alt1=1;
                }
                else if ( ($LA1_0==$this->getToken('9')) ) {
                    $alt1=2;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            	    {
            	    $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_expression70); 
            	    $this->pushFollow(self::$FOLLOW_mult_in_expression74);
            	    $r2 = $this->mult();

            	    $this->state->_fsp--;

            	      $r += $r2;

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            	    {
            	    $this->match($this->input,$this->getToken('9'),self::$FOLLOW_9_in_expression82); 
            	    $this->pushFollow(self::$FOLLOW_mult_in_expression86);
            	    $r2 = $this->mult();

            	    $this->state->_fsp--;

            	      $r -= $r2;

            	    }
            	    break;

            	default :
            	    break 2;//loop1;
                }
            } while (true);

              $result = $r;

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $result;
    }
    // $ANTLR end "expression"


    // $ANTLR start "mult"
    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
    public function mult(){
        $result = null;

        $r = null;

        $r2 = null;


        try {
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            $this->pushFollow(self::$FOLLOW_log_in_mult108);
            $r = $this->log();

            $this->state->_fsp--;

            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            //loop2:
            do {
                $alt2=3;
                $LA2_0 = $this->input->LA(1);

                if ( ($LA2_0==$this->getToken('10')) ) {
                    $alt2=1;
                }
                else if ( ($LA2_0==$this->getToken('11')) ) {
                    $alt2=2;
                }


                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            	    {
            	    $this->match($this->input,$this->getToken('10'),self::$FOLLOW_10_in_mult116); 
            	    $this->pushFollow(self::$FOLLOW_log_in_mult120);
            	    $r2 = $this->log();

            	    $this->state->_fsp--;

            	      $r *= $r2;

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            	    {
            	    $this->match($this->input,$this->getToken('11'),self::$FOLLOW_11_in_mult128); 
            	    $this->pushFollow(self::$FOLLOW_log_in_mult132);
            	    $r2 = $this->log();

            	    $this->state->_fsp--;

            	      $r /= $r2;

            	    }
            	    break;

            	default :
            	    break 2;//loop2;
                }
            } while (true);

              $result = $r;

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $result;
    }
    // $ANTLR end "mult"


    // $ANTLR start "log"
    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
    public function log(){
        $result = null;

        $r = null;


        try {
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            $alt3=2;
            $LA3_0 = $this->input->LA(1);

            if ( ($LA3_0==$this->getToken('12')) ) {
                $alt3=1;
            }
            else if ( (($LA3_0>=$this->getToken('INTEGER') && $LA3_0<=$this->getToken('DECIMAL'))||$LA3_0==$this->getToken('14')||($LA3_0>=$this->getToken('16') && $LA3_0<=$this->getToken('17'))) ) {
                $alt3=2;
            }
            else {
                $nvae = new NoViableAltException("", 3, 0, $this->input);

                throw $nvae;
            }
            switch ($alt3) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                    {
                    $this->match($this->input,$this->getToken('12'),self::$FOLLOW_12_in_log153); 
                    $this->pushFollow(self::$FOLLOW_exp_in_log157);
                    $r = $this->exp();

                    $this->state->_fsp--;

                      $result = math.log(r);

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                    {
                    $this->pushFollow(self::$FOLLOW_exp_in_log169);
                    $r = $this->exp();

                    $this->state->_fsp--;

                      $result = $r;

                    }
                    break;

            }
        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $result;
    }
    // $ANTLR end "log"


    // $ANTLR start "exp"
    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
    public function exp(){
        $result = null;

        $r = null;

        $r2 = null;


        try {
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            {
            $this->pushFollow(self::$FOLLOW_atom_in_exp189);
            $r = $this->atom();

            $this->state->_fsp--;

            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            $alt4=2;
            $LA4_0 = $this->input->LA(1);

            if ( ($LA4_0==$this->getToken('13')) ) {
                $alt4=1;
            }
            switch ($alt4) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                    {
                    $this->match($this->input,$this->getToken('13'),self::$FOLLOW_13_in_exp192); 
                    $this->pushFollow(self::$FOLLOW_atom_in_exp196);
                    $r2 = $this->atom();

                    $this->state->_fsp--;

                      $r = math.pow($r,$r2);

                    }
                    break;

            }

              $result = $r;

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $result;
    }
    // $ANTLR end "exp"


    // $ANTLR start "atom"
    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
    public function atom(){
        $result = null;

        $n = null;
        $r = null;


        try {
            // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
            $alt5=5;
            $LA5 = $this->input->LA(1);
            if($this->getToken('INTEGER')== $LA5)
                {
                $alt5=1;
                }
            else if($this->getToken('DECIMAL')== $LA5)
                {
                $alt5=2;
                }
            else if($this->getToken('14')== $LA5)
                {
                $alt5=3;
                }
            else if($this->getToken('16')== $LA5)
                {
                $alt5=4;
                }
            else if($this->getToken('17')== $LA5)
                {
                $alt5=5;
                }
            else{
                $nvae =
                    new NoViableAltException("", 5, 0, $this->input);

                throw $nvae;
            }

            switch ($alt5) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                    {
                    $n=$this->match($this->input,$this->getToken('INTEGER'),self::$FOLLOW_INTEGER_in_atom225); 
                      $result = (int)(($n!=null?$n->getText():null));

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                    {
                    $n=$this->match($this->input,$this->getToken('DECIMAL'),self::$FOLLOW_DECIMAL_in_atom235); 
                      $result = (float)(($n!=null?$n->getText():null));

                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                    {
                    $this->match($this->input,$this->getToken('14'),self::$FOLLOW_14_in_atom244); 
                    $this->pushFollow(self::$FOLLOW_expression_in_atom248);
                    $r = $this->expression();

                    $this->state->_fsp--;

                      $result = $r;
                    $this->match($this->input,$this->getToken('15'),self::$FOLLOW_15_in_atom252); 

                    }
                    break;
                case 4 :
                    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                    {
                    $this->match($this->input,$this->getToken('16'),self::$FOLLOW_16_in_atom258); 
                      $result = math.pi;

                    }
                    break;
                case 5 :
                    // runtime/Php/test/Antlr/Tests/grammers/t015calc.g
                    {
                    $this->match($this->input,$this->getToken('17'),self::$FOLLOW_17_in_atom266); 
                      $result = math.e;

                    }
                    break;

            }
        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $result;
    }
    // $ANTLR end "atom"

    // Delegated rules



}

 
?>
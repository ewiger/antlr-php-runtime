<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g 2010-09-10 19:39:48


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

class t046rewriteParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "ID", "INT", "WS", "'method'", "'('", "')'", "'{'", "'}'", "'='", "';'", "'+'", "'*'"
    );
    public $WS=6;
    public $T__15=15;
    public $T__12=12;
    public $T__11=11;
    public $T__14=14;
    public $T__13=13;
    public $T__10=10;
    public $INT=5;
    public $ID=4;
    public $EOF=-1;
    public $T__9=9;
    public $T__8=8;
    public $T__7=7;

    // delegates
    // delegators


    static public $FOLLOW_method_in_program34 = array(1 => 1, 7 => 7);
    static public $FOLLOW_7_in_method66 = array(4 => 4);
    static public $FOLLOW_ID_in_method68 = array(8 => 8);
    static public $FOLLOW_8_in_method70 = array(9 => 9);
    static public $FOLLOW_9_in_method72 = array(10 => 10);
    static public $FOLLOW_body_in_method74 = array(1 => 1);
    static public $FOLLOW_10_in_body115 = array(4 => 4, 11 => 11);
    static public $FOLLOW_stat_in_body117 = array(4 => 4, 11 => 11);
    static public $FOLLOW_11_in_body120 = array(1 => 1);
    static public $FOLLOW_ID_in_stat144 = array(12 => 12);
    static public $FOLLOW_12_in_stat146 = array(4 => 4, 5 => 5);
    static public $FOLLOW_expr_in_stat148 = array(13 => 13);
    static public $FOLLOW_13_in_stat150 = array(1 => 1);
    static public $FOLLOW_mul_in_expr166 = array(1 => 1, 14 => 14);
    static public $FOLLOW_14_in_expr169 = array(4 => 4, 5 => 5);
    static public $FOLLOW_mul_in_expr171 = array(1 => 1, 14 => 14);
    static public $FOLLOW_atom_in_mul189 = array(1 => 1, 15 => 15);
    static public $FOLLOW_15_in_mul192 = array(4 => 4, 5 => 5);
    static public $FOLLOW_atom_in_mul194 = array(1 => 1, 15 => 15);
    static public $FOLLOW_set_in_atom0 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t046rewriteParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g"; }



    // $ANTLR start "program"
    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
    public function program(){
        $method1 = null;



            start = $this->input->LT(1)

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('7')) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_method_in_program34);
            	    $method1 = $this->method();

            	    $this->state->_fsp--;


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


                      $this->input->insertBefore(start,"public class Wrapper {\n")
                      $this->input->insertAfter(($method1!=null?($method1->stop):null), "\n}\n")
                      

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
    // $ANTLR end "program"

    public static function method_return() {
        $retval = new ParserRuleReturnScope();
    	return $retval;
    }

    // $ANTLR start "method"
    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
    public function method(){
        $retval = $this->method_return();
        $retval->start = $this->input->LT(1);


        $m = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            {
            $m=$this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_method66); 
            $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_method68); 
            $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_method70); 
            $this->match($this->input,$this->getToken('9'),self::$FOLLOW_9_in_method72); 
            $this->pushFollow(self::$FOLLOW_body_in_method74);
            $this->body();

            $this->state->_fsp--;

              $this->input->replace(m, "public void");

            }

            $retval->stop = $this->input->LT(-1);

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $retval;
    }
    // $ANTLR end "method"

    protected $body_scope = array(
        "decls" => "",
    );
    protected $body_stack = array();


    // $ANTLR start "body"
    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
    public function body(){
        array_push($this->body_stack, $this->body_scope);
        $lcurly = null;


            $this->body_stack[count($this->body_stack)-1]['decls'] = set()

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            {
            $lcurly=$this->match($this->input,$this->getToken('10'),self::$FOLLOW_10_in_body115); 
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            //loop2:
            do {
                $alt2=2;
                $LA2_0 = $this->input->LA(1);

                if ( ($LA2_0==$this->getToken('ID')) ) {
                    $alt2=1;
                }


                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_stat_in_body117);
            	    $this->stat();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    break 2;//loop2;
                }
            } while (true);

            $this->match($this->input,$this->getToken('11'),self::$FOLLOW_11_in_body120); 

                      foreach ( $this->body_stack[count($this->body_stack)-1]['decls'] AS $var):
                          $this->input->insertAfter(lcurly, "\nint "+$it+";")
                      

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            array_pop($this->body_stack);
            throw $e;
        }
        array_pop($this->body_stack);

        return ;
    }
    // $ANTLR end "body"


    // $ANTLR start "stat"
    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
    public function stat(){
        $ID2 = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            {
            $ID2=$this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_stat144); 
            $this->match($this->input,$this->getToken('12'),self::$FOLLOW_12_in_stat146); 
            $this->pushFollow(self::$FOLLOW_expr_in_stat148);
            $this->expr();

            $this->state->_fsp--;

            $this->match($this->input,$this->getToken('13'),self::$FOLLOW_13_in_stat150); 
              $this->body_stack[count($this->body_stack)-1]['decls'].add(($ID2!=null?$ID2->getText():null));

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
    // $ANTLR end "stat"


    // $ANTLR start "expr"
    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
    public function expr(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            {
            $this->pushFollow(self::$FOLLOW_mul_in_expr166);
            $this->mul();

            $this->state->_fsp--;

            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            //loop3:
            do {
                $alt3=2;
                $LA3_0 = $this->input->LA(1);

                if ( ($LA3_0==$this->getToken('14')) ) {
                    $alt3=1;
                }


                switch ($alt3) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            	    {
            	    $this->match($this->input,$this->getToken('14'),self::$FOLLOW_14_in_expr169); 
            	    $this->pushFollow(self::$FOLLOW_mul_in_expr171);
            	    $this->mul();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    break 2;//loop3;
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
    // $ANTLR end "expr"


    // $ANTLR start "mul"
    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
    public function mul(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            {
            $this->pushFollow(self::$FOLLOW_atom_in_mul189);
            $this->atom();

            $this->state->_fsp--;

            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            //loop4:
            do {
                $alt4=2;
                $LA4_0 = $this->input->LA(1);

                if ( ($LA4_0==$this->getToken('15')) ) {
                    $alt4=1;
                }


                switch ($alt4) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            	    {
            	    $this->match($this->input,$this->getToken('15'),self::$FOLLOW_15_in_mul192); 
            	    $this->pushFollow(self::$FOLLOW_atom_in_mul194);
            	    $this->atom();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    break 2;//loop4;
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
    // $ANTLR end "mul"


    // $ANTLR start "atom"
    // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
    public function atom(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            // runtime/Php/test/Antlr/Tests/grammers/t046rewrite.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('ID') && $this->input->LA(1)<=$this->getToken('INT')) ) {
                $this->input->consume();
                $this->state->errorRecovery=false;
            } else {
                $mse = new MismatchedSetException(null,$this->input);
                throw $mse;
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
    // $ANTLR end "atom"

    // Delegated rules



}

 
?>
<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t022scopes.g 2010-09-10 19:39:28


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

class t022scopesParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "ID", "NUM", "WS", "'{'", "'}'", "'int'", "';'", "'='"
    );
    public $WS=6;
    public $T__11=11;
    public $T__10=10;
    public $ID=4;
    public $EOF=-1;
    public $T__9=9;
    public $T__8=8;
    public $T__7=7;
    public $NUM=5;

    // delegates
    // delegators

    protected $aScope_scope = array(
        "names" => "",
    );
    protected $aScope_stack = array();


    static public $FOLLOW_ID_in_a47 = array(1 => 1, 4 => 4);
    static public $FOLLOW_b2_in_b76 = array(1 => 1);
    static public $FOLLOW_b3_in_b293 = array(1 => 1);
    static public $FOLLOW_ID_in_b3114 = array(1 => 1);
    static public $FOLLOW_NUM_in_b3123 = array(1 => 1);
    static public $FOLLOW_7_in_c157 = array(4 => 4, 9 => 9);
    static public $FOLLOW_c1_in_c159 = array(4 => 4, 9 => 9);
    static public $FOLLOW_c2_in_c162 = array(4 => 4, 8 => 8, 9 => 9);
    static public $FOLLOW_8_in_c165 = array(1 => 1);
    static public $FOLLOW_9_in_c1192 = array(4 => 4);
    static public $FOLLOW_ID_in_c1194 = array(10 => 10);
    static public $FOLLOW_10_in_c1198 = array(1 => 1);
    static public $FOLLOW_ID_in_c2215 = array(11 => 11);
    static public $FOLLOW_11_in_c2217 = array(5 => 5);
    static public $FOLLOW_NUM_in_c2219 = array(10 => 10);
    static public $FOLLOW_10_in_c2221 = array(1 => 1);
    static public $FOLLOW_7_in_d264 = array(4 => 4, 7 => 7, 8 => 8, 9 => 9);
    static public $FOLLOW_d1_in_d266 = array(4 => 4, 7 => 7, 8 => 8, 9 => 9);
    static public $FOLLOW_d2_in_d269 = array(4 => 4, 7 => 7, 8 => 8);
    static public $FOLLOW_8_in_d272 = array(1 => 1);
    static public $FOLLOW_9_in_d1299 = array(4 => 4);
    static public $FOLLOW_ID_in_d1301 = array(10 => 10);
    static public $FOLLOW_10_in_d1305 = array(1 => 1);
    static public $FOLLOW_ID_in_d2322 = array(11 => 11);
    static public $FOLLOW_11_in_d2324 = array(5 => 5);
    static public $FOLLOW_NUM_in_d2326 = array(10 => 10);
    static public $FOLLOW_10_in_d2328 = array(1 => 1);
    static public $FOLLOW_d_in_d2346 = array(1 => 1);
    static public $FOLLOW_NUM_in_e379 = array(1 => 1);
    static public $FOLLOW_7_in_e389 = array(5 => 5, 7 => 7);
    static public $FOLLOW_e_in_e391 = array(8 => 8);
    static public $FOLLOW_8_in_e393 = array(1 => 1);
    static public $FOLLOW_NUM_in_f427 = array(1 => 1);
    static public $FOLLOW_7_in_f437 = array(5 => 5, 7 => 7);
    static public $FOLLOW_f_in_f439 = array(8 => 8);
    static public $FOLLOW_8_in_f441 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t022scopesParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t022scopes.g"; }



    // $ANTLR start "a"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function a(){
        array_push($this->aScope_stack, $this->aScope_scope);

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            {
              $this->aScope_stack[count($this->aScope_stack)-1]['names'] =  array();
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('ID')) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            	    {
            	    $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_a47); 

            	    }
            	    break;

            	default :
            	    break 2;//loop1;
                }
            } while (true);


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            array_pop($this->aScope_stack);

            throw $e;
        }
        array_pop($this->aScope_stack);


        return ;
    }
    // $ANTLR end "a"

    protected $b_scope = array(
        "x" => "",
    );
    protected $b_stack = array();


    // $ANTLR start "b"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function b($v){
        array_push($this->b_stack, $this->b_scope);
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            {
              $this->b_stack[count($this->b_stack)-1]['x'] =  $v;
            $this->pushFollow(self::$FOLLOW_b2_in_b76);
            $this->b2();

            $this->state->_fsp--;


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            array_pop($this->b_stack);
            throw $e;
        }
        array_pop($this->b_stack);

        return ;
    }
    // $ANTLR end "b"


    // $ANTLR start "b2"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function b2(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            {
            $this->pushFollow(self::$FOLLOW_b3_in_b293);
            $this->b3();

            $this->state->_fsp--;


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
    // $ANTLR end "b2"


    // $ANTLR start "b3"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function b3(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            $alt2=2;
            $LA2_0 = $this->input->LA(1);

            if ( ($LA2_0==$this->getToken('ID')) && (($this->b_stack[count($this->b_stack)-1]['x']))) {
                $alt2=1;
            }
            else if ( ($LA2_0==$this->getToken('NUM')) ) {
                $alt2=2;
            }
            else {
                $nvae = new NoViableAltException("", 2, 0, $this->input);

                throw $nvae;
            }
            switch ($alt2) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                    {
                    if ( !(($this->b_stack[count($this->b_stack)-1]['x'])) ) {
                        throw new FailedPredicateException($this->input, "b3", '$b::x');
                    }
                    $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_b3114); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                    {
                    $this->match($this->input,$this->getToken('NUM'),self::$FOLLOW_NUM_in_b3123); 

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

        return ;
    }
    // $ANTLR end "b3"

    protected $c_scope = array(
        "symbols" => "",
    );
    protected $c_stack = array();


    // $ANTLR start "c"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function c(){
        array_push($this->c_stack, $this->c_scope);
        $res = null;


            $this->c_stack[count($this->c_stack)-1]['symbols'] =  array();

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            {
            $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_c157); 
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            //loop3:
            do {
                $alt3=2;
                $LA3_0 = $this->input->LA(1);

                if ( ($LA3_0==$this->getToken('9')) ) {
                    $alt3=1;
                }


                switch ($alt3) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_c1_in_c159);
            	    $this->c1();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    break 2;//loop3;
                }
            } while (true);

            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            $cnt4=0;
            //loop4:
            do {
                $alt4=2;
                $LA4_0 = $this->input->LA(1);

                if ( ($LA4_0==$this->getToken('ID')) ) {
                    $alt4=1;
                }


                switch ($alt4) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_c2_in_c162);
            	    $this->c2();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    if ( $cnt4 >= 1 ) break 2;//loop4;
                        $eee =
                            new EarlyExitException(4, $this->input);
                        throw $eee;
                }
                $cnt4++;
            } while (true);

            $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_c165); 
               $res = $this->c_stack[count($this->c_stack)-1]['symbols']; 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            array_pop($this->c_stack);
            throw $e;
        }
        array_pop($this->c_stack);

        return $res;
    }
    // $ANTLR end "c"


    // $ANTLR start "c1"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function c1(){
        $ID1 = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            {
            $this->match($this->input,$this->getToken('9'),self::$FOLLOW_9_in_c1192); 
            $ID1=$this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_c1194); 
              array_push($this->c_stack[count($this->c_stack)-1]['symbols'], ($ID1!=null?$ID1->getText():null));
            $this->match($this->input,$this->getToken('10'),self::$FOLLOW_10_in_c1198); 

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
    // $ANTLR end "c1"


    // $ANTLR start "c2"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function c2(){
        $ID2 = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            {
            $ID2=$this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_c2215); 
            $this->match($this->input,$this->getToken('11'),self::$FOLLOW_11_in_c2217); 
            $this->match($this->input,$this->getToken('NUM'),self::$FOLLOW_NUM_in_c2219); 
            $this->match($this->input,$this->getToken('10'),self::$FOLLOW_10_in_c2221); 

                          if(!in_array(($ID2!=null?$ID2->getText():null), $this->c_stack[count($this->c_stack)-1]['symbols'])){
                              throw new Exception(($ID2!=null?$ID2->getText():null));
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
    // $ANTLR end "c2"

    protected $d_scope = array(
        "symbols" => "",
    );
    protected $d_stack = array();


    // $ANTLR start "d"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function d(){
        array_push($this->d_stack, $this->d_scope);
        $res = null;


            $this->d_stack[count($this->d_stack)-1]['symbols'] =  array();

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            {
            $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_d264); 
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            //loop5:
            do {
                $alt5=2;
                $LA5_0 = $this->input->LA(1);

                if ( ($LA5_0==$this->getToken('9')) ) {
                    $alt5=1;
                }


                switch ($alt5) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_d1_in_d266);
            	    $this->d1();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    break 2;//loop5;
                }
            } while (true);

            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            //loop6:
            do {
                $alt6=2;
                $LA6_0 = $this->input->LA(1);

                if ( ($LA6_0==$this->getToken('ID')||$LA6_0==$this->getToken('7')) ) {
                    $alt6=1;
                }


                switch ($alt6) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_d2_in_d269);
            	    $this->d2();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    break 2;//loop6;
                }
            } while (true);

            $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_d272); 
               $res = $this->d_stack[count($this->d_stack)-1]['symbols']; 

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            array_pop($this->d_stack);
            throw $e;
        }
        array_pop($this->d_stack);

        return $res;
    }
    // $ANTLR end "d"


    // $ANTLR start "d1"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function d1(){
        $ID3 = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            {
            $this->match($this->input,$this->getToken('9'),self::$FOLLOW_9_in_d1299); 
            $ID3=$this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_d1301); 
              array_push($this->d_stack[count($this->d_stack)-1]['symbols'], ($ID3!=null?$ID3->getText():null));
            $this->match($this->input,$this->getToken('10'),self::$FOLLOW_10_in_d1305); 

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
    // $ANTLR end "d1"


    // $ANTLR start "d2"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function d2(){
        $ID4 = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            $alt7=2;
            $LA7_0 = $this->input->LA(1);

            if ( ($LA7_0==$this->getToken('ID')) ) {
                $alt7=1;
            }
            else if ( ($LA7_0==$this->getToken('7')) ) {
                $alt7=2;
            }
            else {
                $nvae = new NoViableAltException("", 7, 0, $this->input);

                throw $nvae;
            }
            switch ($alt7) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                    {
                    $ID4=$this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_d2322); 
                    $this->match($this->input,$this->getToken('11'),self::$FOLLOW_11_in_d2324); 
                    $this->match($this->input,$this->getToken('NUM'),self::$FOLLOW_NUM_in_d2326); 
                    $this->match($this->input,$this->getToken('10'),self::$FOLLOW_10_in_d2328); 

                      			for($i=count($this->d_stack)-1;$i>=0;$i++){
                      				if(in_array(($ID4!=null?$ID4->getText():null), $this->d_stack[$i]['symbols'])){
                      					break;
                      				}
                      			}
                      			if($i==count($this->d_stack)){
                      				throw new Exception(($ID4!=null?$ID4->getText():null));
                      			}
                              

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                    {
                    $this->pushFollow(self::$FOLLOW_d_in_d2346);
                    $this->d();

                    $this->state->_fsp--;


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

        return ;
    }
    // $ANTLR end "d2"

    protected $e_scope = array(
        "a" => "",
    );
    protected $e_stack = array();


    // $ANTLR start "e"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function e(){
        array_push($this->e_stack, $this->e_scope);
        $res = null;

        $NUM5 = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            $alt8=2;
            $LA8_0 = $this->input->LA(1);

            if ( ($LA8_0==$this->getToken('NUM')) ) {
                $alt8=1;
            }
            else if ( ($LA8_0==$this->getToken('7')) ) {
                $alt8=2;
            }
            else {
                $nvae = new NoViableAltException("", 8, 0, $this->input);

                throw $nvae;
            }
            switch ($alt8) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                    {
                    $NUM5=$this->match($this->input,$this->getToken('NUM'),self::$FOLLOW_NUM_in_e379); 
                       $this->e_stack[0]['a'] = (int)(($NUM5!=null?$NUM5->getText():null)); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                    {
                    $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_e389); 
                    $this->pushFollow(self::$FOLLOW_e_in_e391);
                    $this->e();

                    $this->state->_fsp--;

                    $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_e393); 

                    }
                    break;

            }

                  $res = $this->e_stack[count($this->e_stack)-1]['a'];

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            array_pop($this->e_stack);
            throw $e;
        }
        array_pop($this->e_stack);

        return $res;
    }
    // $ANTLR end "e"

    protected $f_scope = array(
        "a" => "",
    );
    protected $f_stack = array();


    // $ANTLR start "f"
    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
    public function f(){
        array_push($this->f_stack, $this->f_scope);
        $res = null;

        $NUM6 = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
            $alt9=2;
            $LA9_0 = $this->input->LA(1);

            if ( ($LA9_0==$this->getToken('NUM')) ) {
                $alt9=1;
            }
            else if ( ($LA9_0==$this->getToken('7')) ) {
                $alt9=2;
            }
            else {
                $nvae = new NoViableAltException("", 9, 0, $this->input);

                throw $nvae;
            }
            switch ($alt9) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                    {
                    $NUM6=$this->match($this->input,$this->getToken('NUM'),self::$FOLLOW_NUM_in_f427); 
                       $this->f_stack[count($this->f_stack)-2-1]['a'] = (int)(($NUM6!=null?$NUM6->getText():null)); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t022scopes.g
                    {
                    $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_f437); 
                    $this->pushFollow(self::$FOLLOW_f_in_f439);
                    $this->f();

                    $this->state->_fsp--;

                    $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_f441); 

                    }
                    break;

            }

                  $res = $this->f_stack[count($this->f_stack)-1]['a'];

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            array_pop($this->f_stack);
            throw $e;
        }
        array_pop($this->f_stack);

        return $res;
    }
    // $ANTLR end "f"

    // Delegated rules



}

 
?>
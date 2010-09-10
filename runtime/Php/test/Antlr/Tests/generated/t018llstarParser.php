<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t018llstar.g 2010-09-10 19:39:24




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

class t018llstarParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "ID", "INT", "WS", "';'", "'('", "','", "')'", "'int'", "'char'", "'void'", "'{'", "'}'", "'for'", "'='", "'=='", "'<'", "'+'"
    );
    public $T__20=20;
    public $INT=5;
    public $ID=4;
    public $EOF=-1;
    public $T__9=9;
    public $T__8=8;
    public $T__7=7;
    public $T__19=19;
    public $WS=6;
    public $T__16=16;
    public $T__15=15;
    public $T__18=18;
    public $T__17=17;
    public $T__12=12;
    public $T__11=11;
    public $T__14=14;
    public $T__13=13;
    public $T__10=10;

    // delegates
    // delegators


    static public $FOLLOW_declaration_in_program51 = array(1 => 1, 4 => 4, 11 => 11, 12 => 12, 13 => 13);
    static public $FOLLOW_variable_in_declaration73 = array(1 => 1);
    static public $FOLLOW_functionHeader_in_declaration83 = array(7 => 7);
    static public $FOLLOW_7_in_declaration85 = array(1 => 1);
    static public $FOLLOW_functionHeader_in_declaration98 = array(14 => 14);
    static public $FOLLOW_block_in_declaration100 = array(1 => 1);
    static public $FOLLOW_type_in_variable122 = array(4 => 4);
    static public $FOLLOW_declarator_in_variable124 = array(7 => 7);
    static public $FOLLOW_7_in_variable126 = array(1 => 1);
    static public $FOLLOW_ID_in_declarator145 = array(1 => 1);
    static public $FOLLOW_type_in_functionHeader169 = array(4 => 4);
    static public $FOLLOW_ID_in_functionHeader171 = array(8 => 8);
    static public $FOLLOW_8_in_functionHeader173 = array(4 => 4, 10 => 10, 11 => 11, 12 => 12, 13 => 13);
    static public $FOLLOW_formalParameter_in_functionHeader177 = array(9 => 9, 10 => 10);
    static public $FOLLOW_9_in_functionHeader181 = array(4 => 4, 11 => 11, 12 => 12, 13 => 13);
    static public $FOLLOW_formalParameter_in_functionHeader183 = array(9 => 9, 10 => 10);
    static public $FOLLOW_10_in_functionHeader191 = array(1 => 1);
    static public $FOLLOW_type_in_formalParameter213 = array(4 => 4);
    static public $FOLLOW_declarator_in_formalParameter215 = array(1 => 1);
    static public $FOLLOW_set_in_type0 = array(1 => 1);
    static public $FOLLOW_14_in_block304 = array(4 => 4, 5 => 5, 7 => 7, 8 => 8, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15, 16 => 16);
    static public $FOLLOW_variable_in_block318 = array(4 => 4, 5 => 5, 7 => 7, 8 => 8, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15, 16 => 16);
    static public $FOLLOW_stat_in_block333 = array(4 => 4, 5 => 5, 7 => 7, 8 => 8, 14 => 14, 15 => 15, 16 => 16);
    static public $FOLLOW_15_in_block344 = array(1 => 1);
    static public $FOLLOW_forStat_in_stat356 = array(1 => 1);
    static public $FOLLOW_expr_in_stat364 = array(7 => 7);
    static public $FOLLOW_7_in_stat366 = array(1 => 1);
    static public $FOLLOW_block_in_stat380 = array(1 => 1);
    static public $FOLLOW_assignStat_in_stat388 = array(7 => 7);
    static public $FOLLOW_7_in_stat390 = array(1 => 1);
    static public $FOLLOW_7_in_stat398 = array(1 => 1);
    static public $FOLLOW_16_in_forStat417 = array(8 => 8);
    static public $FOLLOW_8_in_forStat419 = array(4 => 4);
    static public $FOLLOW_assignStat_in_forStat421 = array(7 => 7);
    static public $FOLLOW_7_in_forStat423 = array(4 => 4, 5 => 5, 8 => 8);
    static public $FOLLOW_expr_in_forStat425 = array(7 => 7);
    static public $FOLLOW_7_in_forStat427 = array(4 => 4);
    static public $FOLLOW_assignStat_in_forStat429 = array(10 => 10);
    static public $FOLLOW_10_in_forStat431 = array(14 => 14);
    static public $FOLLOW_block_in_forStat433 = array(1 => 1);
    static public $FOLLOW_ID_in_assignStat460 = array(17 => 17);
    static public $FOLLOW_17_in_assignStat462 = array(4 => 4, 5 => 5, 8 => 8);
    static public $FOLLOW_expr_in_assignStat464 = array(1 => 1);
    static public $FOLLOW_condExpr_in_expr486 = array(1 => 1);
    static public $FOLLOW_aexpr_in_condExpr505 = array(1 => 1, 18 => 18, 19 => 19);
    static public $FOLLOW_set_in_condExpr509 = array(4 => 4, 5 => 5, 8 => 8);
    static public $FOLLOW_aexpr_in_condExpr517 = array(1 => 1);
    static public $FOLLOW_atom_in_aexpr539 = array(1 => 1, 20 => 20);
    static public $FOLLOW_20_in_aexpr543 = array(4 => 4, 5 => 5, 8 => 8);
    static public $FOLLOW_atom_in_aexpr545 = array(1 => 1, 20 => 20);
    static public $FOLLOW_ID_in_atom565 = array(1 => 1);
    static public $FOLLOW_INT_in_atom579 = array(1 => 1);
    static public $FOLLOW_8_in_atom593 = array(4 => 4, 5 => 5, 8 => 8);
    static public $FOLLOW_expr_in_atom595 = array(10 => 10);
    static public $FOLLOW_10_in_atom597 = array(1 => 1);


    protected $dfa2;


        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

            $this->dfa2 = new t018llstarParser_DFA2($this);
        }
        

    public function getTokenNames() { return t018llstarParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t018llstar.g"; }


    	function write($text){
    		$this->out.= $text;
    	}



    // $ANTLR start "program"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function program(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('ID')||($LA1_0>=$this->getToken('11') && $LA1_0<=$this->getToken('13'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_declaration_in_program51);
            	    $this->declaration();

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


    // $ANTLR start "declaration"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function declaration(){
        $functionHeader1 = null;

        $functionHeader2 = null;


        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            $alt2=3;
            $alt2 = $this->dfa2->predict($this->input);
            switch ($alt2) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->pushFollow(self::$FOLLOW_variable_in_declaration73);
                    $this->variable();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->pushFollow(self::$FOLLOW_functionHeader_in_declaration83);
                    $functionHeader1 = $this->functionHeader();

                    $this->state->_fsp--;

                    $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_declaration85); 
                      $this->write($functionHeader1." is a declaration\n");

                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->pushFollow(self::$FOLLOW_functionHeader_in_declaration98);
                    $functionHeader2 = $this->functionHeader();

                    $this->state->_fsp--;

                    $this->pushFollow(self::$FOLLOW_block_in_declaration100);
                    $this->block();

                    $this->state->_fsp--;

                      $this->write($functionHeader2." is a definition\n");

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
    // $ANTLR end "declaration"


    // $ANTLR start "variable"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function variable(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->pushFollow(self::$FOLLOW_type_in_variable122);
            $this->type();

            $this->state->_fsp--;

            $this->pushFollow(self::$FOLLOW_declarator_in_variable124);
            $this->declarator();

            $this->state->_fsp--;

            $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_variable126); 

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
    // $ANTLR end "variable"


    // $ANTLR start "declarator"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function declarator(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_declarator145); 

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
    // $ANTLR end "declarator"


    // $ANTLR start "functionHeader"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function functionHeader(){
        $name = null;

        $ID3 = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->pushFollow(self::$FOLLOW_type_in_functionHeader169);
            $this->type();

            $this->state->_fsp--;

            $ID3=$this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_functionHeader171); 
            $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_functionHeader173); 
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            $alt4=2;
            $LA4_0 = $this->input->LA(1);

            if ( ($LA4_0==$this->getToken('ID')||($LA4_0>=$this->getToken('11') && $LA4_0<=$this->getToken('13'))) ) {
                $alt4=1;
            }
            switch ($alt4) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->pushFollow(self::$FOLLOW_formalParameter_in_functionHeader177);
                    $this->formalParameter();

                    $this->state->_fsp--;

                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    //loop3:
                    do {
                        $alt3=2;
                        $LA3_0 = $this->input->LA(1);

                        if ( ($LA3_0==$this->getToken('9')) ) {
                            $alt3=1;
                        }


                        switch ($alt3) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    	    {
                    	    $this->match($this->input,$this->getToken('9'),self::$FOLLOW_9_in_functionHeader181); 
                    	    $this->pushFollow(self::$FOLLOW_formalParameter_in_functionHeader183);
                    	    $this->formalParameter();

                    	    $this->state->_fsp--;


                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop3;
                        }
                    } while (true);


                    }
                    break;

            }

            $this->match($this->input,$this->getToken('10'),self::$FOLLOW_10_in_functionHeader191); 
              $name = ($ID3!=null?$ID3->getText():null);

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $name;
    }
    // $ANTLR end "functionHeader"


    // $ANTLR start "formalParameter"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function formalParameter(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->pushFollow(self::$FOLLOW_type_in_formalParameter213);
            $this->type();

            $this->state->_fsp--;

            $this->pushFollow(self::$FOLLOW_declarator_in_formalParameter215);
            $this->declarator();

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
    // $ANTLR end "formalParameter"


    // $ANTLR start "type"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function type(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            if ( $this->input->LA(1)==$this->getToken('ID')||($this->input->LA(1)>=$this->getToken('11') && $this->input->LA(1)<=$this->getToken('13')) ) {
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
    // $ANTLR end "type"


    // $ANTLR start "block"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function block(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->match($this->input,$this->getToken('14'),self::$FOLLOW_14_in_block304); 
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            //loop5:
            do {
                $alt5=2;
                $LA5_0 = $this->input->LA(1);

                if ( ($LA5_0==$this->getToken('ID')) ) {
                    $LA5_2 = $this->input->LA(2);

                    if ( ($LA5_2==$this->getToken('ID')) ) {
                        $alt5=1;
                    }


                }
                else if ( (($LA5_0>=$this->getToken('11') && $LA5_0<=$this->getToken('13'))) ) {
                    $alt5=1;
                }


                switch ($alt5) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_variable_in_block318);
            	    $this->variable();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    break 2;//loop5;
                }
            } while (true);

            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            //loop6:
            do {
                $alt6=2;
                $LA6_0 = $this->input->LA(1);

                if ( (($LA6_0>=$this->getToken('ID') && $LA6_0<=$this->getToken('INT'))||($LA6_0>=$this->getToken('7') && $LA6_0<=$this->getToken('8'))||$LA6_0==$this->getToken('14')||$LA6_0==$this->getToken('16')) ) {
                    $alt6=1;
                }


                switch ($alt6) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_stat_in_block333);
            	    $this->stat();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    break 2;//loop6;
                }
            } while (true);

            $this->match($this->input,$this->getToken('15'),self::$FOLLOW_15_in_block344); 

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
    // $ANTLR end "block"


    // $ANTLR start "stat"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function stat(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            $alt7=5;
            $LA7 = $this->input->LA(1);
            if($this->getToken('16')== $LA7)
                {
                $alt7=1;
                }
            else if($this->getToken('ID')== $LA7)
                {
                $LA7_2 = $this->input->LA(2);

                if ( ($LA7_2==$this->getToken('17')) ) {
                    $alt7=4;
                }
                else if ( ($LA7_2==$this->getToken('7')||($LA7_2>=$this->getToken('18') && $LA7_2<=$this->getToken('20'))) ) {
                    $alt7=2;
                }
                else {
                    $nvae = new NoViableAltException("", 7, 2, $this->input);

                    throw $nvae;
                }
                }
            else if($this->getToken('INT')== $LA7||$this->getToken('8')== $LA7)
                {
                $alt7=2;
                }
            else if($this->getToken('14')== $LA7)
                {
                $alt7=3;
                }
            else if($this->getToken('7')== $LA7)
                {
                $alt7=5;
                }
            else{
                $nvae =
                    new NoViableAltException("", 7, 0, $this->input);

                throw $nvae;
            }

            switch ($alt7) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->pushFollow(self::$FOLLOW_forStat_in_stat356);
                    $this->forStat();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->pushFollow(self::$FOLLOW_expr_in_stat364);
                    $this->expr();

                    $this->state->_fsp--;

                    $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_stat366); 

                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->pushFollow(self::$FOLLOW_block_in_stat380);
                    $this->block();

                    $this->state->_fsp--;


                    }
                    break;
                case 4 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->pushFollow(self::$FOLLOW_assignStat_in_stat388);
                    $this->assignStat();

                    $this->state->_fsp--;

                    $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_stat390); 

                    }
                    break;
                case 5 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_stat398); 

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
    // $ANTLR end "stat"


    // $ANTLR start "forStat"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function forStat(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->match($this->input,$this->getToken('16'),self::$FOLLOW_16_in_forStat417); 
            $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_forStat419); 
            $this->pushFollow(self::$FOLLOW_assignStat_in_forStat421);
            $this->assignStat();

            $this->state->_fsp--;

            $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_forStat423); 
            $this->pushFollow(self::$FOLLOW_expr_in_forStat425);
            $this->expr();

            $this->state->_fsp--;

            $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_forStat427); 
            $this->pushFollow(self::$FOLLOW_assignStat_in_forStat429);
            $this->assignStat();

            $this->state->_fsp--;

            $this->match($this->input,$this->getToken('10'),self::$FOLLOW_10_in_forStat431); 
            $this->pushFollow(self::$FOLLOW_block_in_forStat433);
            $this->block();

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
    // $ANTLR end "forStat"


    // $ANTLR start "assignStat"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function assignStat(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_assignStat460); 
            $this->match($this->input,$this->getToken('17'),self::$FOLLOW_17_in_assignStat462); 
            $this->pushFollow(self::$FOLLOW_expr_in_assignStat464);
            $this->expr();

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
    // $ANTLR end "assignStat"


    // $ANTLR start "expr"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function expr(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->pushFollow(self::$FOLLOW_condExpr_in_expr486);
            $this->condExpr();

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
    // $ANTLR end "expr"


    // $ANTLR start "condExpr"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function condExpr(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->pushFollow(self::$FOLLOW_aexpr_in_condExpr505);
            $this->aexpr();

            $this->state->_fsp--;

            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            $alt8=2;
            $LA8_0 = $this->input->LA(1);

            if ( (($LA8_0>=$this->getToken('18') && $LA8_0<=$this->getToken('19'))) ) {
                $alt8=1;
            }
            switch ($alt8) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    if ( ($this->input->LA(1)>=$this->getToken('18') && $this->input->LA(1)<=$this->getToken('19')) ) {
                        $this->input->consume();
                        $this->state->errorRecovery=false;
                    } else {
                        $mse = new MismatchedSetException(null,$this->input);
                        throw $mse;
                    }

                    $this->pushFollow(self::$FOLLOW_aexpr_in_condExpr517);
                    $this->aexpr();

                    $this->state->_fsp--;


                    }
                    break;

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
    // $ANTLR end "condExpr"


    // $ANTLR start "aexpr"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function aexpr(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            {
            $this->pushFollow(self::$FOLLOW_atom_in_aexpr539);
            $this->atom();

            $this->state->_fsp--;

            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            //loop9:
            do {
                $alt9=2;
                $LA9_0 = $this->input->LA(1);

                if ( ($LA9_0==$this->getToken('20')) ) {
                    $alt9=1;
                }


                switch ($alt9) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            	    {
            	    $this->match($this->input,$this->getToken('20'),self::$FOLLOW_20_in_aexpr543); 
            	    $this->pushFollow(self::$FOLLOW_atom_in_aexpr545);
            	    $this->atom();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    break 2;//loop9;
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
    // $ANTLR end "aexpr"


    // $ANTLR start "atom"
    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
    public function atom(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
            $alt10=3;
            $LA10 = $this->input->LA(1);
            if($this->getToken('ID')== $LA10)
                {
                $alt10=1;
                }
            else if($this->getToken('INT')== $LA10)
                {
                $alt10=2;
                }
            else if($this->getToken('8')== $LA10)
                {
                $alt10=3;
                }
            else{
                $nvae =
                    new NoViableAltException("", 10, 0, $this->input);

                throw $nvae;
            }

            switch ($alt10) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_atom565); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->match($this->input,$this->getToken('INT'),self::$FOLLOW_INT_in_atom579); 

                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t018llstar.g
                    {
                    $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_atom593); 
                    $this->pushFollow(self::$FOLLOW_expr_in_atom595);
                    $this->expr();

                    $this->state->_fsp--;

                    $this->match($this->input,$this->getToken('10'),self::$FOLLOW_10_in_atom597); 

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
    // $ANTLR end "atom"

    // Delegated rules



}

function t018llstarParser_DFA2_static(){
    $eot = "\xd\xff";
    $eof = "\xd\xff";
    $min = "\x2\x4\x1\x7\x1\x4\x1\xff\x1\x4\x1\x7\x1\x9\x2\xff\x2\x4\x1\x9";
    $max = "\x1\xd\x1\x4\x1\x8\x1\xd\x1\xff\x1\x4\x1\xe\x1\xa\x2\xff\x1\xd" .
    "\x1\x4\x1\xa";
    $accept = "\x4\xff\x1\x1\x3\xff\x1\x2\x1\x3\x3\xff";
    $special = "\xd\xff";
    $transitionS = array(
        "\x1\x1\x6\xff\x3\x1",
        "\x1\x2",
        "\x1\x4\x1\x3",
        "\x1\x5\x5\xff\x1\x6\x3\x5",
        "",
        "\x1\x7",
        "\x1\x8\x6\xff\x1\x9",
        "\x1\xa\x1\x6",
        "",
        "",
        "\x1\xb\x6\xff\x3\xb",
        "\x1\xc",
        "\x1\xa\x1\x6"
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

class t018llstarParser_DFA2 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t018llstarParser_DFA2_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 2;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "22:1: declaration : ( variable | functionHeader ';' | functionHeader block );";
    }
}
 
?>
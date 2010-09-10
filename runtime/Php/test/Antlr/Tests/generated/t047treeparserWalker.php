<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g 2010-09-10 19:39:49


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

class t047treeparserWalker extends TreeParser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "FUNC_DECL", "FUNC_DEF", "VAR_DEF", "ID", "FUNC_HDR", "ARG_DEF", "BLOCK", "EQEQ", "LT", "PLUS", "EQ", "INT", "'int'", "'char'", "'void'", "'for'"
    );
    public $LT=12;
    public $FUNC_HDR=8;
    public $INT=15;
    public $FUNC_DEF=5;
    public $ID=7;
    public $EOF=-1;
    public $FUNC_DECL=4;
    public $ARG_DEF=9;
    public $T__19=19;
    public $T__16=16;
    public $T__18=18;
    public $T__17=17;
    public $BLOCK=10;
    public $PLUS=13;
    public $EQ=14;
    public $VAR_DEF=6;
    public $EQEQ=11;

    // delegates
    // delegators


    static public $FOLLOW_declaration_in_program49 = array(1 => 1, 4 => 4, 5 => 5, 6 => 6);
    static public $FOLLOW_variable_in_declaration69 = array(1 => 1);
    static public $FOLLOW_FUNC_DECL_in_declaration80 = array(2 => 2);
    static public $FOLLOW_functionHeader_in_declaration82 = array(3 => 3);
    static public $FOLLOW_FUNC_DEF_in_declaration94 = array(2 => 2);
    static public $FOLLOW_functionHeader_in_declaration96 = array(10 => 10);
    static public $FOLLOW_block_in_declaration98 = array(3 => 3);
    static public $FOLLOW_VAR_DEF_in_variable123 = array(2 => 2);
    static public $FOLLOW_type_in_variable125 = array(7 => 7);
    static public $FOLLOW_declarator_in_variable127 = array(3 => 3);
    static public $FOLLOW_ID_in_declarator157 = array(1 => 1);
    static public $FOLLOW_FUNC_HDR_in_functionHeader178 = array(2 => 2);
    static public $FOLLOW_type_in_functionHeader180 = array(7 => 7);
    static public $FOLLOW_ID_in_functionHeader182 = array(9 => 9);
    static public $FOLLOW_formalParameter_in_functionHeader184 = array(3 => 3, 9 => 9);
    static public $FOLLOW_ARG_DEF_in_formalParameter206 = array(2 => 2);
    static public $FOLLOW_type_in_formalParameter208 = array(7 => 7);
    static public $FOLLOW_declarator_in_formalParameter210 = array(3 => 3);
    static public $FOLLOW_set_in_type0 = array(1 => 1);
    static public $FOLLOW_BLOCK_in_block288 = array(2 => 2);
    static public $FOLLOW_variable_in_block290 = array(3 => 3, 6 => 6, 7 => 7, 10 => 10, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15, 19 => 19);
    static public $FOLLOW_stat_in_block293 = array(3 => 3, 7 => 7, 10 => 10, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15, 19 => 19);
    static public $FOLLOW_forStat_in_stat307 = array(1 => 1);
    static public $FOLLOW_expr_in_stat315 = array(1 => 1);
    static public $FOLLOW_block_in_stat323 = array(1 => 1);
    static public $FOLLOW_19_in_forStat343 = array(2 => 2);
    static public $FOLLOW_expr_in_forStat345 = array(7 => 7, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15);
    static public $FOLLOW_expr_in_forStat347 = array(7 => 7, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15);
    static public $FOLLOW_expr_in_forStat349 = array(10 => 10);
    static public $FOLLOW_block_in_forStat351 = array(3 => 3);
    static public $FOLLOW_EQEQ_in_expr367 = array(2 => 2);
    static public $FOLLOW_expr_in_expr369 = array(7 => 7, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15);
    static public $FOLLOW_expr_in_expr371 = array(3 => 3);
    static public $FOLLOW_LT_in_expr383 = array(2 => 2);
    static public $FOLLOW_expr_in_expr385 = array(7 => 7, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15);
    static public $FOLLOW_expr_in_expr387 = array(3 => 3);
    static public $FOLLOW_PLUS_in_expr399 = array(2 => 2);
    static public $FOLLOW_expr_in_expr401 = array(7 => 7, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15);
    static public $FOLLOW_expr_in_expr403 = array(3 => 3);
    static public $FOLLOW_EQ_in_expr415 = array(2 => 2);
    static public $FOLLOW_ID_in_expr417 = array(7 => 7, 11 => 11, 12 => 12, 13 => 13, 14 => 14, 15 => 15);
    static public $FOLLOW_expr_in_expr419 = array(3 => 3);
    static public $FOLLOW_atom_in_expr430 = array(1 => 1);
    static public $FOLLOW_set_in_atom0 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t047treeparserWalker::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g"; }



    // $ANTLR start "program"
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function program(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('FUNC_DECL') && $LA1_0<=$this->getToken('VAR_DEF'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_declaration_in_program49);
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
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function declaration(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            $alt2=3;
            $LA2 = $this->input->LA(1);
            if($this->getToken('VAR_DEF')== $LA2)
                {
                $alt2=1;
                }
            else if($this->getToken('FUNC_DECL')== $LA2)
                {
                $alt2=2;
                }
            else if($this->getToken('FUNC_DEF')== $LA2)
                {
                $alt2=3;
                }
            else{
                $nvae =
                    new NoViableAltException("", 2, 0, $this->input);

                throw $nvae;
            }

            switch ($alt2) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                    {
                    $this->pushFollow(self::$FOLLOW_variable_in_declaration69);
                    $this->variable();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                    {
                    $this->match($this->input,$this->getToken('FUNC_DECL'),self::$FOLLOW_FUNC_DECL_in_declaration80); 

                    match(input, Token.DOWN, null); 
                    $this->pushFollow(self::$FOLLOW_functionHeader_in_declaration82);
                    $this->functionHeader();

                    $this->state->_fsp--;


                    match(input, Token.UP, null); 

                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                    {
                    $this->match($this->input,$this->getToken('FUNC_DEF'),self::$FOLLOW_FUNC_DEF_in_declaration94); 

                    match(input, Token.DOWN, null); 
                    $this->pushFollow(self::$FOLLOW_functionHeader_in_declaration96);
                    $this->functionHeader();

                    $this->state->_fsp--;

                    $this->pushFollow(self::$FOLLOW_block_in_declaration98);
                    $this->block();

                    $this->state->_fsp--;


                    match(input, Token.UP, null); 

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
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function variable(){
        $res = null;

        $declarator1 = null;


        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            {
            $this->match($this->input,$this->getToken('VAR_DEF'),self::$FOLLOW_VAR_DEF_in_variable123); 

            match(input, Token.DOWN, null); 
            $this->pushFollow(self::$FOLLOW_type_in_variable125);
            $this->type();

            $this->state->_fsp--;

            $this->pushFollow(self::$FOLLOW_declarator_in_variable127);
            $declarator1 = $this->declarator();

            $this->state->_fsp--;


            match(input, Token.UP, null); 
               
                          $res = ($declarator1!=null?($this->input->getTokenStream()->toString(
                $this->input->getTreeAdaptor()->getTokenStartIndex($declarator1->start),
                $this->input->getTreeAdaptor()->getTokenStopIndex($declarator1->start))):null); 
                      

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $res;
    }
    // $ANTLR end "variable"

    public static function declarator_return() {
        $retval = new TreeRuleReturnScope();
    	return $retval;
    }

    // $ANTLR start "declarator"
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function declarator(){
        $retval = $this->declarator_return();
        $retval->start = $this->input->LT(1);


        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            {
            $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_declarator157); 

            }

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
    // $ANTLR end "declarator"


    // $ANTLR start "functionHeader"
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function functionHeader(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            {
            $this->match($this->input,$this->getToken('FUNC_HDR'),self::$FOLLOW_FUNC_HDR_in_functionHeader178); 

            match(input, Token.DOWN, null); 
            $this->pushFollow(self::$FOLLOW_type_in_functionHeader180);
            $this->type();

            $this->state->_fsp--;

            $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_functionHeader182); 
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            $cnt3=0;
            //loop3:
            do {
                $alt3=2;
                $LA3_0 = $this->input->LA(1);

                if ( ($LA3_0==$this->getToken('ARG_DEF')) ) {
                    $alt3=1;
                }


                switch ($alt3) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_formalParameter_in_functionHeader184);
            	    $this->formalParameter();

            	    $this->state->_fsp--;


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


            match(input, Token.UP, null); 

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
    // $ANTLR end "functionHeader"


    // $ANTLR start "formalParameter"
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function formalParameter(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            {
            $this->match($this->input,$this->getToken('ARG_DEF'),self::$FOLLOW_ARG_DEF_in_formalParameter206); 

            match(input, Token.DOWN, null); 
            $this->pushFollow(self::$FOLLOW_type_in_formalParameter208);
            $this->type();

            $this->state->_fsp--;

            $this->pushFollow(self::$FOLLOW_declarator_in_formalParameter210);
            $this->declarator();

            $this->state->_fsp--;


            match(input, Token.UP, null); 

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
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function type(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            {
            if ( $this->input->LA(1)==$this->getToken('ID')||($this->input->LA(1)>=$this->getToken('16') && $this->input->LA(1)<=$this->getToken('18')) ) {
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
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function block(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            {
            $this->match($this->input,$this->getToken('BLOCK'),self::$FOLLOW_BLOCK_in_block288); 

            if ( input.LA(1)==Token.DOWN ) {
                match(input, Token.DOWN, null); 
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                //loop4:
                do {
                    $alt4=2;
                    $LA4_0 = $this->input->LA(1);

                    if ( ($LA4_0==$this->getToken('VAR_DEF')) ) {
                        $alt4=1;
                    }


                    switch ($alt4) {
                	case 1 :
                	    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                	    {
                	    $this->pushFollow(self::$FOLLOW_variable_in_block290);
                	    $this->variable();

                	    $this->state->_fsp--;


                	    }
                	    break;

                	default :
                	    break 2;//loop4;
                    }
                } while (true);

                // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                //loop5:
                do {
                    $alt5=2;
                    $LA5_0 = $this->input->LA(1);

                    if ( ($LA5_0==$this->getToken('ID')||($LA5_0>=$this->getToken('BLOCK') && $LA5_0<=$this->getToken('INT'))||$LA5_0==$this->getToken('19')) ) {
                        $alt5=1;
                    }


                    switch ($alt5) {
                	case 1 :
                	    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                	    {
                	    $this->pushFollow(self::$FOLLOW_stat_in_block293);
                	    $this->stat();

                	    $this->state->_fsp--;


                	    }
                	    break;

                	default :
                	    break 2;//loop5;
                    }
                } while (true);


                match(input, Token.UP, null); 
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
    // $ANTLR end "block"


    // $ANTLR start "stat"
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function stat(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            $alt6=3;
            $LA6 = $this->input->LA(1);
            if($this->getToken('19')== $LA6)
                {
                $alt6=1;
                }
            else if($this->getToken('ID')== $LA6||$this->getToken('EQEQ')== $LA6||$this->getToken('LT')== $LA6||$this->getToken('PLUS')== $LA6||$this->getToken('EQ')== $LA6||$this->getToken('INT')== $LA6)
                {
                $alt6=2;
                }
            else if($this->getToken('BLOCK')== $LA6)
                {
                $alt6=3;
                }
            else{
                $nvae =
                    new NoViableAltException("", 6, 0, $this->input);

                throw $nvae;
            }

            switch ($alt6) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                    {
                    $this->pushFollow(self::$FOLLOW_forStat_in_stat307);
                    $this->forStat();

                    $this->state->_fsp--;


                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                    {
                    $this->pushFollow(self::$FOLLOW_expr_in_stat315);
                    $this->expr();

                    $this->state->_fsp--;


                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                    {
                    $this->pushFollow(self::$FOLLOW_block_in_stat323);
                    $this->block();

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
    // $ANTLR end "stat"


    // $ANTLR start "forStat"
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function forStat(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            {
            $this->match($this->input,$this->getToken('19'),self::$FOLLOW_19_in_forStat343); 

            match(input, Token.DOWN, null); 
            $this->pushFollow(self::$FOLLOW_expr_in_forStat345);
            $this->expr();

            $this->state->_fsp--;

            $this->pushFollow(self::$FOLLOW_expr_in_forStat347);
            $this->expr();

            $this->state->_fsp--;

            $this->pushFollow(self::$FOLLOW_expr_in_forStat349);
            $this->expr();

            $this->state->_fsp--;

            $this->pushFollow(self::$FOLLOW_block_in_forStat351);
            $this->block();

            $this->state->_fsp--;


            match(input, Token.UP, null); 

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


    // $ANTLR start "expr"
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function expr(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            $alt7=5;
            $LA7 = $this->input->LA(1);
            if($this->getToken('EQEQ')== $LA7)
                {
                $alt7=1;
                }
            else if($this->getToken('LT')== $LA7)
                {
                $alt7=2;
                }
            else if($this->getToken('PLUS')== $LA7)
                {
                $alt7=3;
                }
            else if($this->getToken('EQ')== $LA7)
                {
                $alt7=4;
                }
            else if($this->getToken('ID')== $LA7||$this->getToken('INT')== $LA7)
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
                    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                    {
                    $this->match($this->input,$this->getToken('EQEQ'),self::$FOLLOW_EQEQ_in_expr367); 

                    match(input, Token.DOWN, null); 
                    $this->pushFollow(self::$FOLLOW_expr_in_expr369);
                    $this->expr();

                    $this->state->_fsp--;

                    $this->pushFollow(self::$FOLLOW_expr_in_expr371);
                    $this->expr();

                    $this->state->_fsp--;


                    match(input, Token.UP, null); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                    {
                    $this->match($this->input,$this->getToken('LT'),self::$FOLLOW_LT_in_expr383); 

                    match(input, Token.DOWN, null); 
                    $this->pushFollow(self::$FOLLOW_expr_in_expr385);
                    $this->expr();

                    $this->state->_fsp--;

                    $this->pushFollow(self::$FOLLOW_expr_in_expr387);
                    $this->expr();

                    $this->state->_fsp--;


                    match(input, Token.UP, null); 

                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                    {
                    $this->match($this->input,$this->getToken('PLUS'),self::$FOLLOW_PLUS_in_expr399); 

                    match(input, Token.DOWN, null); 
                    $this->pushFollow(self::$FOLLOW_expr_in_expr401);
                    $this->expr();

                    $this->state->_fsp--;

                    $this->pushFollow(self::$FOLLOW_expr_in_expr403);
                    $this->expr();

                    $this->state->_fsp--;


                    match(input, Token.UP, null); 

                    }
                    break;
                case 4 :
                    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                    {
                    $this->match($this->input,$this->getToken('EQ'),self::$FOLLOW_EQ_in_expr415); 

                    match(input, Token.DOWN, null); 
                    $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_expr417); 
                    $this->pushFollow(self::$FOLLOW_expr_in_expr419);
                    $this->expr();

                    $this->state->_fsp--;


                    match(input, Token.UP, null); 

                    }
                    break;
                case 5 :
                    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
                    {
                    $this->pushFollow(self::$FOLLOW_atom_in_expr430);
                    $this->atom();

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
    // $ANTLR end "expr"


    // $ANTLR start "atom"
    // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
    public function atom(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparserWalker.g
            {
            if ( $this->input->LA(1)==$this->getToken('ID')||$this->input->LA(1)==$this->getToken('INT') ) {
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
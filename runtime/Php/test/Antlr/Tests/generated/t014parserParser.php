<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t014parser.g 2010-09-10 19:39:21


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

class t014parserParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "IDENTIFIER", "WS", "'var'", "';'", "'('", "')'"
    );
    public $WS=5;
    public $IDENTIFIER=4;
    public $EOF=-1;
    public $T__9=9;
    public $T__8=8;
    public $T__7=7;
    public $T__6=6;

    // delegates
    // delegators


    static public $FOLLOW_declaration_in_document59 = array(4 => 4, 6 => 6);
    static public $FOLLOW_call_in_document71 = array(4 => 4, 6 => 6);
    static public $FOLLOW_EOF_in_document92 = array(1 => 1);
    static public $FOLLOW_6_in_declaration112 = array(4 => 4);
    static public $FOLLOW_IDENTIFIER_in_declaration116 = array(7 => 7);
    static public $FOLLOW_7_in_declaration118 = array(1 => 1);
    static public $FOLLOW_IDENTIFIER_in_call150 = array(8 => 8);
    static public $FOLLOW_8_in_call152 = array(9 => 9);
    static public $FOLLOW_9_in_call154 = array(7 => 7);
    static public $FOLLOW_7_in_call156 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t014parserParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t014parser.g"; }


    public $events = array();
    public $reportedErrors = array();

    function emitErrorMessage($msg){
        $this->reportedErrors[] = $msg;
    }



    // $ANTLR start "document"
    // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
    public function document(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            //loop1:
            do {
                $alt1=3;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('6')) ) {
                    $alt1=1;
                }
                else if ( ($LA1_0==$this->getToken('IDENTIFIER')) ) {
                    $alt1=2;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_declaration_in_document59);
            	    $this->declaration();

            	    $this->state->_fsp--;


            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_call_in_document71);
            	    $this->call();

            	    $this->state->_fsp--;


            	    }
            	    break;

            	default :
            	    break 2;//loop1;
                }
            } while (true);

            $this->match($this->input,$this->getToken('EOF'),self::$FOLLOW_EOF_in_document92); 

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
    // $ANTLR end "document"


    // $ANTLR start "declaration"
    // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
    public function declaration(){
        $t = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            {
            $this->match($this->input,$this->getToken('6'),self::$FOLLOW_6_in_declaration112); 
            $t=$this->match($this->input,$this->getToken('IDENTIFIER'),self::$FOLLOW_IDENTIFIER_in_declaration116); 
            $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_declaration118); 
              $this->events[] = array('decl', ($t!=null?$t->getText():null));

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


    // $ANTLR start "call"
    // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
    public function call(){
        $t = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            // runtime/Php/test/Antlr/Tests/grammers/t014parser.g
            {
            $t=$this->match($this->input,$this->getToken('IDENTIFIER'),self::$FOLLOW_IDENTIFIER_in_call150); 
            $this->match($this->input,$this->getToken('8'),self::$FOLLOW_8_in_call152); 
            $this->match($this->input,$this->getToken('9'),self::$FOLLOW_9_in_call154); 
            $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_call156); 
              $this->events[] = array('call', ($t!=null?$t->getText():null));

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
    // $ANTLR end "call"

    // Delegated rules



}

 
?>
<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t016actions.g 2010-09-10 19:39:23


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

class t016actionsParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "ID", "WS", "';'", "'int'", "'char'", "'void'"
    );
    public $WS=5;
    public $ID=4;
    public $EOF=-1;
    public $T__9=9;
    public $T__8=8;
    public $T__7=7;
    public $T__6=6;

    // delegates
    // delegators


    static public $FOLLOW_functionHeader_in_declaration33 = array(6 => 6);
    static public $FOLLOW_6_in_declaration35 = array(1 => 1);
    static public $FOLLOW_type_in_functionHeader68 = array(4 => 4);
    static public $FOLLOW_ID_in_functionHeader70 = array(1 => 1);
    static public $FOLLOW_set_in_type0 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t016actionsParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t016actions.g"; }



    // $ANTLR start "declaration"
    // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
    public function declaration(){
        $name = null;

        $functionHeader1 = null;


        try {
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            {
            $this->pushFollow(self::$FOLLOW_functionHeader_in_declaration33);
            $functionHeader1 = $this->functionHeader();

            $this->state->_fsp--;

            $this->match($this->input,$this->getToken('6'),self::$FOLLOW_6_in_declaration35); 
              $name = $functionHeader1;

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
    // $ANTLR end "declaration"


    // $ANTLR start "functionHeader"
    // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
    public function functionHeader(){
        $name = null;

        $ID2 = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            {
            $this->pushFollow(self::$FOLLOW_type_in_functionHeader68);
            $this->type();

            $this->state->_fsp--;

            $ID2=$this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_functionHeader70); 
              $name = ($ID2!=null?$ID2->getText():null);

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


    // $ANTLR start "type"
    // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
    public function type(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t016actions.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('7') && $this->input->LA(1)<=$this->getToken('9')) ) {
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

    // Delegated rules



}

 
?>
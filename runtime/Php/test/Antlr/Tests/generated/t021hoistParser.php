<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t021hoist.g 2010-09-10 19:39:27


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

class t021hoistParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "ID", "INT", "WS", "'enum'"
    );
    public $WS=6;
    public $INT=5;
    public $ID=4;
    public $EOF=-1;
    public $T__7=7;

    // delegates
    // delegators


    static public $FOLLOW_identifier_in_stat42 = array(1 => 1);
    static public $FOLLOW_enumAsKeyword_in_stat55 = array(1 => 1);
    static public $FOLLOW_ID_in_identifier74 = array(1 => 1);
    static public $FOLLOW_enumAsID_in_identifier82 = array(1 => 1);
    static public $FOLLOW_7_in_enumAsKeyword97 = array(1 => 1);
    static public $FOLLOW_7_in_enumAsID108 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t021hoistParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t021hoist.g"; }



    // $ANTLR start "stat"
    // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
    public function stat(){
        $enumIs = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            $alt1=2;
            $LA1_0 = $this->input->LA(1);

            if ( ($LA1_0==$this->getToken('ID')) ) {
                $alt1=1;
            }
            else if ( ($LA1_0==$this->getToken('7')) ) {
                $LA1_2 = $this->input->LA(2);

                if ( ((!$this->enableEnum)) ) {
                    $alt1=1;
                }
                else if ( (($this->enableEnum)) ) {
                    $alt1=2;
                }
                else {
                    $nvae = new NoViableAltException("", 1, 2, $this->input);

                    throw $nvae;
                }
            }
            else {
                $nvae = new NoViableAltException("", 1, 0, $this->input);

                throw $nvae;
            }
            switch ($alt1) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
                    {
                    $this->pushFollow(self::$FOLLOW_identifier_in_stat42);
                    $this->identifier();

                    $this->state->_fsp--;

                      $enumIs = "ID";

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
                    {
                    $this->pushFollow(self::$FOLLOW_enumAsKeyword_in_stat55);
                    $this->enumAsKeyword();

                    $this->state->_fsp--;

                      $enumIs = "keyword";

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

        return $enumIs;
    }
    // $ANTLR end "stat"


    // $ANTLR start "identifier"
    // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
    public function identifier(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            $alt2=2;
            $LA2_0 = $this->input->LA(1);

            if ( ($LA2_0==$this->getToken('ID')) ) {
                $alt2=1;
            }
            else if ( ($LA2_0==$this->getToken('7')) ) {
                $alt2=2;
            }
            else {
                $nvae = new NoViableAltException("", 2, 0, $this->input);

                throw $nvae;
            }
            switch ($alt2) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
                    {
                    $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_identifier74); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
                    {
                    $this->pushFollow(self::$FOLLOW_enumAsID_in_identifier82);
                    $this->enumAsID();

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
    // $ANTLR end "identifier"


    // $ANTLR start "enumAsKeyword"
    // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
    public function enumAsKeyword(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            {
            if ( !(($this->enableEnum)) ) {
                throw new FailedPredicateException($this->input, "enumAsKeyword", '\\$this->enableEnum');
            }
            $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_enumAsKeyword97); 

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
    // $ANTLR end "enumAsKeyword"


    // $ANTLR start "enumAsID"
    // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
    public function enumAsID(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            // runtime/Php/test/Antlr/Tests/grammers/t021hoist.g
            {
            if ( !((!$this->enableEnum)) ) {
                throw new FailedPredicateException($this->input, "enumAsID", '!\\$this->enableEnum');
            }
            $this->match($this->input,$this->getToken('7'),self::$FOLLOW_7_in_enumAsID108); 

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
    // $ANTLR end "enumAsID"

    // Delegated rules



}

 
?>
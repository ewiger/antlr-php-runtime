<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g 2010-09-10 19:39:39


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

class t036multipleReturnValuesParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "A", "WS"
    );
    public $WS=5;
    public $A=4;
    public $EOF=-1;

    // delegates
    // delegators


    static public $FOLLOW_A_in_a26 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t036multipleReturnValuesParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g"; }


    public static function a_return() {
        $retval = new ParserRuleReturnScope();
    	$retval->foo=null;
    	$retval->bar=null;
    	return $retval;
    }

    // $ANTLR start "a"
    // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
    public function a(){
        $retval = $this->a_return();
        $retval->start = $this->input->LT(1);

        $retval->foo = &$foo;
        $retval->bar = &$bar;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            // runtime/Php/test/Antlr/Tests/grammers/t036multipleReturnValues.g
            {
            $this->match($this->input,$this->getToken('A'),self::$FOLLOW_A_in_a26); 

                          $retval->foo = "foo";
                          $retval->bar = "bar";
                      

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
    // $ANTLR end "a"

    // Delegated rules



}

 
?>
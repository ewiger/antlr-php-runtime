<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t024finally.g 2010-09-10 19:39:30


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

class t024finallyParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "ID", "WS"
    );
    public $WS=5;
    public $ID=4;
    public $EOF=-1;

    // delegates
    // delegators


    static public $FOLLOW_ID_in_prog44 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t024finallyParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t024finally.g"; }



    // $ANTLR start "prog"
    // runtime/Php/test/Antlr/Tests/grammers/t024finally.g
    public function prog(){
        $events = null;

        $events = array();
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t024finally.g
            // runtime/Php/test/Antlr/Tests/grammers/t024finally.g
            {
            $this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_prog44); 
              throw new Exception();

            }

              $events[] = 'after';
        }
        catch (Exception $ex) {
            $events[] = 'catch';
        }
        catch(Exception $e) {
            $events[] = 'finally';
            throw $e;
        }
        $events[] = 'finally';

        return $events;
    }
    // $ANTLR end "prog"

    // Delegated rules



}

 
?>
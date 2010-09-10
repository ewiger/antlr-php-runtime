<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t026actions.g 2010-09-10 19:39:31


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

class t026actionsParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "IDENTIFIER", "WS"
    );
    public $WS=5;
    public $EOF=-1;
    public $IDENTIFIER=4;

    // delegates
    // delegators


    static public $FOLLOW_IDENTIFIER_in_prog48 = array();
    static public $FOLLOW_EOF_in_prog50 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t026actionsParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t026actions.g"; }



    // $ANTLR start "prog"
    // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
    public function prog(){

            $this->capture('init;');

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
            {
            $this->match($this->input,$this->getToken('IDENTIFIER'),self::$FOLLOW_IDENTIFIER_in_prog48); 
            $this->match($this->input,$this->getToken('EOF'),self::$FOLLOW_EOF_in_prog50); 

            }


                  $this->capture('after;');

        }
        catch ( RecognitionException $exc ) {

                    $this->capture('catch;');
                    throw $exc;
                
        }
        catch(Exception $e) {

                    $this->capture('finally;');
                
            throw $e;
        }

                $this->capture('finally;');
            

        return ;
    }
    // $ANTLR end "prog"

    // Delegated rules



}

 
?>
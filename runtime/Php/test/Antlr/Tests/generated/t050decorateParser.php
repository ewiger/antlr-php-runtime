<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t050decorate.g 2010-09-10 19:39:52

    def logme(func):
        def decorated(self, *args, **kwargs):
            self.events.append('before')
            try:
                return func(self, *args, **kwargs)
            finally:
                self.events.append('after')

        return decorated



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

class t050decorateParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "IDENTIFIER"
    );
    public $EOF=-1;
    public $IDENTIFIER=4;

    // delegates
    // delegators


    static public $FOLLOW_IDENTIFIER_in_document47 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t050decorateParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t050decorate.g"; }



    // $ANTLR start "document"
    // runtime/Php/test/Antlr/Tests/grammers/t050decorate.g
    public function document(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t050decorate.g
            // runtime/Php/test/Antlr/Tests/grammers/t050decorate.g
            {
            $this->match($this->input,$this->getToken('IDENTIFIER'),self::$FOLLOW_IDENTIFIER_in_document47); 

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

    // Delegated rules



}

 
?>
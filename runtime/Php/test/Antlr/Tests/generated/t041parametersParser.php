<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t041parameters.g 2010-09-10 19:39:43


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

class t041parametersParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "A", "WS"
    );
    public $WS=5;
    public $A=4;
    public $EOF=-1;

    // delegates
    // delegators


    static public $FOLLOW_A_in_a32 = array(4 => 4);
    static public $FOLLOW_EOF_in_a35 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t041parametersParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t041parameters.g"; }



    // $ANTLR start "a"
    // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
    public function a($arg1, $arg2){
        $l = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
            // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( ($LA1_0==$this->getToken('A')) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t041parameters.g
            	    {
            	    $this->match($this->input,$this->getToken('A'),self::$FOLLOW_A_in_a32); 

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

            $this->match($this->input,$this->getToken('EOF'),self::$FOLLOW_EOF_in_a35); 
               
                          $l = array($arg1, $arg2);
                          $arg1 = "gnarz";
                      

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $l;
    }
    // $ANTLR end "a"

    // Delegated rules



}

 
?>
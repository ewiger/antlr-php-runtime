<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t035ruleLabelPropertyRef.g 2010-09-10 19:39:38


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

class t035ruleLabelPropertyRefParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "A", "WS"
    );
    public $WS=5;
    public $A=4;
    public $EOF=-1;

    // delegates
    // delegators


    static public $FOLLOW_b_in_a28 = array(1 => 1);
    static public $FOLLOW_A_in_b37 = array(1 => 1, 4 => 4);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t035ruleLabelPropertyRefParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t035ruleLabelPropertyRef.g"; }



    // $ANTLR start "a"
    // runtime/Php/test/Antlr/Tests/grammers/t035ruleLabelPropertyRef.g
    public function a(){
        $bla = null;

        $t = null;


        try {
            // runtime/Php/test/Antlr/Tests/grammers/t035ruleLabelPropertyRef.g
            // runtime/Php/test/Antlr/Tests/grammers/t035ruleLabelPropertyRef.g
            {
            $this->pushFollow(self::$FOLLOW_b_in_a28);
            $this->b();

            $this->state->_fsp--;


                  $bla = $t->start . $t->stop . $t->text;


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            throw $e;
        }

        return $bla;
    }
    // $ANTLR end "a"


    // $ANTLR start "b"
    // runtime/Php/test/Antlr/Tests/grammers/t035ruleLabelPropertyRef.g
    public function b(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t035ruleLabelPropertyRef.g
            // runtime/Php/test/Antlr/Tests/grammers/t035ruleLabelPropertyRef.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t035ruleLabelPropertyRef.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t035ruleLabelPropertyRef.g
            	    {
            	    $this->match($this->input,$this->getToken('A'),self::$FOLLOW_A_in_b37); 

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
    // $ANTLR end "b"

    // Delegated rules



}

 
?>
<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g 2010-09-10 19:39:34


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

class t031emptyAltParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "NAME", "WS", "NUMBER"
    );
    public $NAME=4;
    public $WS=5;
    public $EOF=-1;
    public $NUMBER=6;

    // delegates
    // delegators


    static public $FOLLOW_NAME_in_r27 = array(5 => 5);
    static public $FOLLOW_WS_in_r43 = array(4 => 4, 5 => 5);
    static public $FOLLOW_NAME_in_r46 = array();
    static public $FOLLOW_EOF_in_r77 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t031emptyAltParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g"; }



    // $ANTLR start "r"
    // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
    public function r(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            {
            $this->match($this->input,$this->getToken('NAME'),self::$FOLLOW_NAME_in_r27); 
            // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
            $alt2=2;
            $LA2_0 = $this->input->LA(1);

            if ( ($LA2_0==$this->getToken('WS')) && (($this->cond))) {
                $alt2=1;
            }
            else if ( ($LA2_0==$this->getToken('EOF')) ) {
                $alt2=2;
            }
            else {
                $nvae = new NoViableAltException("", 2, 0, $this->input);

                throw $nvae;
            }
            switch ($alt2) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
                    {
                    if ( !(($this->cond)) ) {
                        throw new FailedPredicateException($this->input, "r", '\\$this->cond');
                    }
                    // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
                    $cnt1=0;
                    //loop1:
                    do {
                        $alt1=2;
                        $LA1_0 = $this->input->LA(1);

                        if ( ($LA1_0==$this->getToken('WS')) ) {
                            $alt1=1;
                        }


                        switch ($alt1) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
                    	    {
                    	    $this->match($this->input,$this->getToken('WS'),self::$FOLLOW_WS_in_r43); 

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

                    $this->match($this->input,$this->getToken('NAME'),self::$FOLLOW_NAME_in_r46); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t031emptyAlt.g
                    {
                    }
                    break;

            }

            $this->match($this->input,$this->getToken('EOF'),self::$FOLLOW_EOF_in_r77); 

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
    // $ANTLR end "r"

    // Delegated rules



}

 
?>
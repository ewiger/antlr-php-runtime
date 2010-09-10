<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t040bug80.g 2010-09-10 19:39:42


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


 

class t040bug80 extends Lexer {
    const T_ID_LIKE=5;
    const T_EOF=-1;
    const T_Identifier=4;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t040bug80.g"; }

    // $ANTLR start "ID_LIKE"
    function mID_LIKE(){
        try {
            $_type = t040bug80::T_ID_LIKE;
            $_channel = t040bug80::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t040bug80.g
            $alt1=3;
            $LA1_0 = $this->input->LA(1);

            if ( ($LA1_0==$this->getToken('100')) ) {
                $LA1_1 = $this->input->LA(2);

                if ( ($LA1_1==$this->getToken('101')) ) {
                    $alt1=1;
                }
                else if ( ((False)) ) {
                    $alt1=2;
                }
                else if ( (true) ) {
                    $alt1=3;
                }
                else {
                    $nvae = new NoViableAltException("", 1, 1, $this->input);

                    throw $nvae;
                }
            }
            else if ( (($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('99'))||($LA1_0>=$this->getToken('101') && $LA1_0<=$this->getToken('122'))) ) {
                $LA1_2 = $this->input->LA(2);

                if ( ((False)) ) {
                    $alt1=2;
                }
                else if ( (true) ) {
                    $alt1=3;
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
                    // runtime/Php/test/Antlr/Tests/grammers/t040bug80.g
                    {
                    $this->matchString("defined"); 


                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t040bug80.g
                    {
                    if ( !((False)) ) {
                        throw new FailedPredicateException($this->input, "ID_LIKE", 'False');
                    }
                    $this->mIdentifier(); 

                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t040bug80.g
                    {
                    $this->mIdentifier(); 

                    }
                    break;

            }
            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ID_LIKE"

    // $ANTLR start "Identifier"
    function mIdentifier(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t040bug80.g
            // runtime/Php/test/Antlr/Tests/grammers/t040bug80.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t040bug80.g
            $cnt2=0;
            //loop2:
            do {
                $alt2=2;
                $LA2_0 = $this->input->LA(1);

                if ( (($LA2_0>=$this->getToken('97') && $LA2_0<=$this->getToken('122'))) ) {
                    $alt2=1;
                }


                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t040bug80.g
            	    {
            	    $this->matchRange(97,122); 

            	    }
            	    break;

            	default :
            	    if ( $cnt2 >= 1 ) break 2;//loop2;
                        $eee =
                            new EarlyExitException(2, $this->input);
                        throw $eee;
                }
                $cnt2++;
            } while (true);


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "Identifier"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t040bug80.g
        // runtime/Php/test/Antlr/Tests/grammers/t040bug80.g
        {
        $this->mID_LIKE(); 

        }


    }



}
?>
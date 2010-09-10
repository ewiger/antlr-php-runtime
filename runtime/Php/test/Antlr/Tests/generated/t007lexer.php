<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t007lexer.g 2010-09-10 19:39:15


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


 

class t007lexer extends Lexer {
    const T_EOF=-1;
    const T_FOO=4;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t007lexer.g"; }

    // $ANTLR start "FOO"
    function mFOO(){
        try {
            $_type = t007lexer::T_FOO;
            $_channel = t007lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t007lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t007lexer.g
            {
            $this->matchChar(102); 
            // runtime/Php/test/Antlr/Tests/grammers/t007lexer.g
            //loop2:
            do {
                $alt2=3;
                $LA2_0 = $this->input->LA(1);

                if ( ($LA2_0==$this->getToken('111')) ) {
                    $alt2=1;
                }
                else if ( ($LA2_0==$this->getToken('97')) ) {
                    $alt2=2;
                }


                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t007lexer.g
            	    {
            	    $this->matchChar(111); 

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t007lexer.g
            	    {
            	    $this->matchChar(97); 
            	    // runtime/Php/test/Antlr/Tests/grammers/t007lexer.g
            	    $cnt1=0;
            	    //loop1:
            	    do {
            	        $alt1=2;
            	        $LA1_0 = $this->input->LA(1);

            	        if ( ($LA1_0==$this->getToken('98')) ) {
            	            $alt1=1;
            	        }


            	        switch ($alt1) {
            	    	case 1 :
            	    	    // runtime/Php/test/Antlr/Tests/grammers/t007lexer.g
            	    	    {
            	    	    $this->matchChar(98); 

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
            	    break;

            	default :
            	    break 2;//loop2;
                }
            } while (true);


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "FOO"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t007lexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t007lexer.g
        {
        $this->mFOO(); 

        }


    }



}
?>
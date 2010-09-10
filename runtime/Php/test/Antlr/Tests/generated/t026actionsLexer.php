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


 

class t026actionsLexer extends Lexer {
    const T_WS=5;
    const T_EOF=-1;
    const T_IDENTIFIER=4;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);



            //TODO:This is causing some issues with antlr
            $this->foobar = 'attribute;';

    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t026actions.g"; }

    // $ANTLR start "IDENTIFIER"
    function mIDENTIFIER(){
        try {
            $_type = t026actionsLexer::T_IDENTIFIER;
            $_channel = t026actionsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('48') && $LA1_0<=$this->getToken('57'))||($LA1_0>=$this->getToken('65') && $LA1_0<=$this->getToken('90'))||$LA1_0==$this->getToken('95')||($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
            	        $this->input->consume();

            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


            	    }
            	    break;

            	default :
            	    break 2;//loop1;
                }
            } while (true);


                          # a comment
                        $this->capture('action;');
                        $this->capture(implode(" ", array($this->getText(), $_type, $this->state->tokenStartLine, $this->state->tokenStartCharPositionInLine, -1, $_channel, $this->state->tokenStartCharIndex, ($this->getCharIndex()-1))));
                        if(true) $this->capture($this->foobar);
                      

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "IDENTIFIER"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t026actionsLexer::T_WS;
            $_channel = t026actionsLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
            // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
            $cnt2=0;
            //loop2:
            do {
                $alt2=2;
                $LA2_0 = $this->input->LA(1);

                if ( ($LA2_0==$this->getToken('10')||$LA2_0==$this->getToken('32')) ) {
                    $alt2=1;
                }


                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
            	    {
            	    if ( $this->input->LA(1)==$this->getToken('10')||$this->input->LA(1)==$this->getToken('32') ) {
            	        $this->input->consume();

            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


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

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "WS"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
        $alt3=2;
        $LA3_0 = $this->input->LA(1);

        if ( (($LA3_0>=$this->getToken('65') && $LA3_0<=$this->getToken('90'))||$LA3_0==$this->getToken('95')||($LA3_0>=$this->getToken('97') && $LA3_0<=$this->getToken('122'))) ) {
            $alt3=1;
        }
        else if ( ($LA3_0==$this->getToken('10')||$LA3_0==$this->getToken('32')) ) {
            $alt3=2;
        }
        else {
            $nvae = new NoViableAltException("", 3, 0, $this->input);

            throw $nvae;
        }
        switch ($alt3) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
                {
                $this->mIDENTIFIER(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t026actions.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
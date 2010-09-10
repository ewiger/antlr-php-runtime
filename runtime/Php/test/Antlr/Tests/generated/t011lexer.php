<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t011lexer.g 2010-09-10 19:39:18


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


 

class t011lexer extends Lexer {
    const T_WS=5;
    const T_EOF=-1;
    const T_IDENTIFIER=4;

        public $wsCounter = 0;


    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t011lexer.g"; }

    // $ANTLR start "IDENTIFIER"
    function mIDENTIFIER(){
        try {
            $_type = t011lexer::T_IDENTIFIER;
            $_channel = t011lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
            //loop1:
            do {
                $alt1=5;
                $LA1 = $this->input->LA(1);
                if($this->getToken('97')== $LA1||$this->getToken('98')== $LA1||$this->getToken('99')== $LA1||$this->getToken('100')== $LA1||$this->getToken('101')== $LA1||$this->getToken('102')== $LA1||$this->getToken('103')== $LA1||$this->getToken('104')== $LA1||$this->getToken('105')== $LA1||$this->getToken('106')== $LA1||$this->getToken('107')== $LA1||$this->getToken('108')== $LA1||$this->getToken('109')== $LA1||$this->getToken('110')== $LA1||$this->getToken('111')== $LA1||$this->getToken('112')== $LA1||$this->getToken('113')== $LA1||$this->getToken('114')== $LA1||$this->getToken('115')== $LA1||$this->getToken('116')== $LA1||$this->getToken('117')== $LA1||$this->getToken('118')== $LA1||$this->getToken('119')== $LA1||$this->getToken('120')== $LA1||$this->getToken('121')== $LA1||$this->getToken('122')== $LA1)
                    {
                    $alt1=1;
                    }
                else if($this->getToken('65')== $LA1||$this->getToken('66')== $LA1||$this->getToken('67')== $LA1||$this->getToken('68')== $LA1||$this->getToken('69')== $LA1||$this->getToken('70')== $LA1||$this->getToken('71')== $LA1||$this->getToken('72')== $LA1||$this->getToken('73')== $LA1||$this->getToken('74')== $LA1||$this->getToken('75')== $LA1||$this->getToken('76')== $LA1||$this->getToken('77')== $LA1||$this->getToken('78')== $LA1||$this->getToken('79')== $LA1||$this->getToken('80')== $LA1||$this->getToken('81')== $LA1||$this->getToken('82')== $LA1||$this->getToken('83')== $LA1||$this->getToken('84')== $LA1||$this->getToken('85')== $LA1||$this->getToken('86')== $LA1||$this->getToken('87')== $LA1||$this->getToken('88')== $LA1||$this->getToken('89')== $LA1||$this->getToken('90')== $LA1)
                    {
                    $alt1=2;
                    }
                else if($this->getToken('48')== $LA1||$this->getToken('49')== $LA1||$this->getToken('50')== $LA1||$this->getToken('51')== $LA1||$this->getToken('52')== $LA1||$this->getToken('53')== $LA1||$this->getToken('54')== $LA1||$this->getToken('55')== $LA1||$this->getToken('56')== $LA1||$this->getToken('57')== $LA1)
                    {
                    $alt1=3;
                    }
                else if($this->getToken('95')== $LA1)
                    {
                    $alt1=4;
                    }



                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
            	    {
            	    $this->matchRange(97,122); 

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
            	    {
            	    $this->matchRange(65,90); 

            	    }
            	    break;
            	case 3 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
            	    {
            	    $this->matchRange(48,57); 

            	    }
            	    break;
            	case 4 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
            	    {
            	    $this->matchChar(95); 
            	       
            	      $this->wsCounter++;
            	                  

            	    }
            	    break;

            	default :
            	    break 2;//loop1;
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
    // $ANTLR end "IDENTIFIER"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t011lexer::T_WS;
            $_channel = t011lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
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
        // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
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
                // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
                {
                $this->mIDENTIFIER(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t011lexer.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
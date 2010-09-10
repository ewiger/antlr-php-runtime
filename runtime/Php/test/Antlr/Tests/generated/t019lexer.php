<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t019lexer.g 2010-09-10 19:39:25


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


 

class t019lexer extends Lexer {
    const T_CLASS=10;
    const T_IMPORT=6;
    const T_WS=4;
    const T_ARG=16;
    const T_QIDStar=5;
    const T_ESC=12;
    const T_RETURN=7;
    const T_CHAR=14;
    const T_COMMENT=11;
    const T_ID=8;
    const T_EOF=-1;
    const T_TYPE=15;
    const T_STRING=13;
    const T_QID=9;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t019lexer.g"; }

    public function nextToken() {
        while (true) {
            if ( $this->input->LA(1) == CharStream::EOF ) {
                return Token::EOF_TOKEN();
            }
            $this->state->token = null;
            $this->state->channel = Token::DEFAULT_CHANNEL;
            $this->state->tokenStartCharIndex = $this->input->index();
            $this->state->tokenStartCharPositionInLine = $this->input->getCharPositionInLine();
            $this->state->tokenStartLine = $this->input->getLine();
            $this->state->text = null;
            try {
                $m = $this->input->mark();
                $this->state->backtracking = 1; 
                $this->state->failed = false;
                $this->mTokens();
                $this->state->backtracking=0;

                if ( $this->state->failed ) {
                    $this->input->rewind($m);
                    $this->input->consume(); 
                }
                else {
                    $this->emit();
                    return $this->state->token;
                }
            }
            catch (RecognitionException $e) {
                // shouldn't happen in backtracking mode, but...
                $this->reportError($re);
                // match() routine has already called recover()
            }
        }
    }

    public function memoize($input, $ruleIndex, $ruleStartIndex)
    {
        if ( $this->state->backtracking > 1 ) {
            parent::memoize($input, $ruleIndex, $ruleStartIndex);
        }
    }

    /**
     * @param IntStream $input
     * @param int $ruleIndex
     * @return bool
     */
    public function alreadyParsedRule($input, $ruleIndex) {
        if ( $this->state->backtracking>1 ) {
            return parent::alreadyParsedRule($input, $ruleIndex);
        }
        return false;
    }// $ANTLR start "IMPORT"
    function mIMPORT(){
        try {
            $_type = t019lexer::T_IMPORT;
            $_channel = t019lexer::DEFAULT_TOKEN_CHANNEL;
            $name=null;

            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            $this->matchString("import"); if ($this->state->failed) return ;

            $this->mWS(); if ($this->state->failed) return ;
            $nameStart41 = $this->getCharIndex();
            $this->mQIDStar(); if ($this->state->failed) return ;
            $name = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $nameStart41, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            $alt1=2;
            $LA1_0 = $this->input->LA(1);

            if ( (($LA1_0>=$this->getToken('9') && $LA1_0<=$this->getToken('10'))||$LA1_0==$this->getToken('32')) ) {
                $alt1=1;
            }
            switch ($alt1) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    {
                    $this->mWS(); if ($this->state->failed) return ;

                    }
                    break;

            }

            $this->matchChar(59); if ($this->state->failed) return ;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "IMPORT"

    // $ANTLR start "RETURN"
    function mRETURN(){
        try {
            $_type = t019lexer::T_RETURN;
            $_channel = t019lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            $this->matchString("return"); if ($this->state->failed) return ;

            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            //loop2:
            do {
                $alt2=2;
                $LA2_0 = $this->input->LA(1);

                if ( ($LA2_0==$this->getToken('59')) ) {
                    $alt2=2;
                }
                else if ( (($LA2_0>=$this->getToken('0') && $LA2_0<=$this->getToken('58'))||($LA2_0>=$this->getToken('60') && $LA2_0<=$this->getToken('65535'))) ) {
                    $alt2=1;
                }


                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            	    {
            	    $this->matchAny(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop2;
                }
            } while (true);

            $this->matchChar(59); if ($this->state->failed) return ;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "RETURN"

    // $ANTLR start "CLASS"
    function mCLASS(){
        try {
            $_type = t019lexer::T_CLASS;
            $_channel = t019lexer::DEFAULT_TOKEN_CHANNEL;
            $name=null;

            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            $this->matchString("class"); if ($this->state->failed) return ;

            $this->mWS(); if ($this->state->failed) return ;
            $nameStart91 = $this->getCharIndex();
            $this->mID(); if ($this->state->failed) return ;
            $name = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $nameStart91, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            $alt3=2;
            $LA3_0 = $this->input->LA(1);

            if ( (($LA3_0>=$this->getToken('9') && $LA3_0<=$this->getToken('10'))||$LA3_0==$this->getToken('32')) ) {
                $alt3=1;
            }
            switch ($alt3) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    {
                    $this->mWS(); if ($this->state->failed) return ;

                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            $alt5=2;
            $LA5_0 = $this->input->LA(1);

            if ( ($LA5_0==$this->getToken('101')) ) {
                $alt5=1;
            }
            switch ($alt5) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    {
                    $this->matchString("extends"); if ($this->state->failed) return ;

                    $this->mWS(); if ($this->state->failed) return ;
                    $this->mQID(); if ($this->state->failed) return ;
                    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    $alt4=2;
                    $LA4_0 = $this->input->LA(1);

                    if ( (($LA4_0>=$this->getToken('9') && $LA4_0<=$this->getToken('10'))||$LA4_0==$this->getToken('32')) ) {
                        $alt4=1;
                    }
                    switch ($alt4) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                            {
                            $this->mWS(); if ($this->state->failed) return ;

                            }
                            break;

                    }


                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            $alt10=2;
            $LA10_0 = $this->input->LA(1);

            if ( ($LA10_0==$this->getToken('105')) ) {
                $alt10=1;
            }
            switch ($alt10) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    {
                    $this->matchString("implements"); if ($this->state->failed) return ;

                    $this->mWS(); if ($this->state->failed) return ;
                    $this->mQID(); if ($this->state->failed) return ;
                    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    $alt6=2;
                    $LA6_0 = $this->input->LA(1);

                    if ( (($LA6_0>=$this->getToken('9') && $LA6_0<=$this->getToken('10'))||$LA6_0==$this->getToken('32')) ) {
                        $alt6=1;
                    }
                    switch ($alt6) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                            {
                            $this->mWS(); if ($this->state->failed) return ;

                            }
                            break;

                    }

                    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    //loop9:
                    do {
                        $alt9=2;
                        $LA9_0 = $this->input->LA(1);

                        if ( ($LA9_0==$this->getToken('44')) ) {
                            $alt9=1;
                        }


                        switch ($alt9) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    	    {
                    	    $this->matchChar(44); if ($this->state->failed) return ;
                    	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    	    $alt7=2;
                    	    $LA7_0 = $this->input->LA(1);

                    	    if ( (($LA7_0>=$this->getToken('9') && $LA7_0<=$this->getToken('10'))||$LA7_0==$this->getToken('32')) ) {
                    	        $alt7=1;
                    	    }
                    	    switch ($alt7) {
                    	        case 1 :
                    	            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    	            {
                    	            $this->mWS(); if ($this->state->failed) return ;

                    	            }
                    	            break;

                    	    }

                    	    $this->mQID(); if ($this->state->failed) return ;
                    	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    	    $alt8=2;
                    	    $LA8_0 = $this->input->LA(1);

                    	    if ( (($LA8_0>=$this->getToken('9') && $LA8_0<=$this->getToken('10'))||$LA8_0==$this->getToken('32')) ) {
                    	        $alt8=1;
                    	    }
                    	    switch ($alt8) {
                    	        case 1 :
                    	            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    	            {
                    	            $this->mWS(); if ($this->state->failed) return ;

                    	            }
                    	            break;

                    	    }


                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop9;
                        }
                    } while (true);


                    }
                    break;

            }

            $this->matchChar(123); if ($this->state->failed) return ;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "CLASS"

    // $ANTLR start "COMMENT"
    function mCOMMENT(){
        try {
            $_type = t019lexer::T_COMMENT;
            $_channel = t019lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            $this->matchString("/*"); if ($this->state->failed) return ;

            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            //loop11:
            do {
                $alt11=2;
                $LA11_0 = $this->input->LA(1);

                if ( ($LA11_0==$this->getToken('42')) ) {
                    $LA11_1 = $this->input->LA(2);

                    if ( ($LA11_1==$this->getToken('47')) ) {
                        $alt11=2;
                    }
                    else if ( (($LA11_1>=$this->getToken('0') && $LA11_1<=$this->getToken('46'))||($LA11_1>=$this->getToken('48') && $LA11_1<=$this->getToken('65535'))) ) {
                        $alt11=1;
                    }


                }
                else if ( (($LA11_0>=$this->getToken('0') && $LA11_0<=$this->getToken('41'))||($LA11_0>=$this->getToken('43') && $LA11_0<=$this->getToken('65535'))) ) {
                    $alt11=1;
                }


                switch ($alt11) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            	    {
            	    $this->matchAny(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop11;
                }
            } while (true);

            $this->matchString("*/"); if ($this->state->failed) return ;


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "COMMENT"

    // $ANTLR start "STRING"
    function mSTRING(){
        try {
            $_type = t019lexer::T_STRING;
            $_channel = t019lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            $this->matchChar(34); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            //loop12:
            do {
                $alt12=3;
                $LA12_0 = $this->input->LA(1);

                if ( ($LA12_0==$this->getToken('34')) ) {
                    $alt12=3;
                }
                else if ( ($LA12_0==$this->getToken('92')) ) {
                    $LA12_2 = $this->input->LA(2);

                    if ( ($LA12_2==$this->getToken('34')) ) {
                        $alt12=1;
                    }
                    else if ( ($LA12_2==$this->getToken('92')) ) {
                        $alt12=1;
                    }
                    else if ( ($LA12_2==$this->getToken('39')) ) {
                        $alt12=1;
                    }
                    else if ( (($LA12_2>=$this->getToken('0') && $LA12_2<=$this->getToken('33'))||($LA12_2>=$this->getToken('35') && $LA12_2<=$this->getToken('38'))||($LA12_2>=$this->getToken('40') && $LA12_2<=$this->getToken('91'))||($LA12_2>=$this->getToken('93') && $LA12_2<=$this->getToken('65535'))) ) {
                        $alt12=2;
                    }


                }
                else if ( (($LA12_0>=$this->getToken('0') && $LA12_0<=$this->getToken('33'))||($LA12_0>=$this->getToken('35') && $LA12_0<=$this->getToken('91'))||($LA12_0>=$this->getToken('93') && $LA12_0<=$this->getToken('65535'))) ) {
                    $alt12=2;
                }


                switch ($alt12) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            	    {
            	    $this->mESC(); if ($this->state->failed) return ;

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            	    {
            	    $this->matchAny(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop12;
                }
            } while (true);

            $this->matchChar(34); if ($this->state->failed) return ;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "STRING"

    // $ANTLR start "CHAR"
    function mCHAR(){
        try {
            $_type = t019lexer::T_CHAR;
            $_channel = t019lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            $this->matchChar(39); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            //loop13:
            do {
                $alt13=3;
                $LA13_0 = $this->input->LA(1);

                if ( ($LA13_0==$this->getToken('39')) ) {
                    $alt13=3;
                }
                else if ( ($LA13_0==$this->getToken('92')) ) {
                    $LA13_2 = $this->input->LA(2);

                    if ( ($LA13_2==$this->getToken('39')) ) {
                        $alt13=1;
                    }
                    else if ( ($LA13_2==$this->getToken('92')) ) {
                        $alt13=1;
                    }
                    else if ( ($LA13_2==$this->getToken('34')) ) {
                        $alt13=1;
                    }
                    else if ( (($LA13_2>=$this->getToken('0') && $LA13_2<=$this->getToken('33'))||($LA13_2>=$this->getToken('35') && $LA13_2<=$this->getToken('38'))||($LA13_2>=$this->getToken('40') && $LA13_2<=$this->getToken('91'))||($LA13_2>=$this->getToken('93') && $LA13_2<=$this->getToken('65535'))) ) {
                        $alt13=2;
                    }


                }
                else if ( (($LA13_0>=$this->getToken('0') && $LA13_0<=$this->getToken('38'))||($LA13_0>=$this->getToken('40') && $LA13_0<=$this->getToken('91'))||($LA13_0>=$this->getToken('93') && $LA13_0<=$this->getToken('65535'))) ) {
                    $alt13=2;
                }


                switch ($alt13) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            	    {
            	    $this->mESC(); if ($this->state->failed) return ;

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            	    {
            	    $this->matchAny(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop13;
                }
            } while (true);

            $this->matchChar(39); if ($this->state->failed) return ;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "CHAR"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t019lexer::T_WS;
            $_channel = t019lexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            $cnt14=0;
            //loop14:
            do {
                $alt14=2;
                $LA14_0 = $this->input->LA(1);

                if ( (($LA14_0>=$this->getToken('9') && $LA14_0<=$this->getToken('10'))||$LA14_0==$this->getToken('32')) ) {
                    $alt14=1;
                }


                switch ($alt14) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('9') && $this->input->LA(1)<=$this->getToken('10'))||$this->input->LA(1)==$this->getToken('32') ) {
            	        $this->input->consume();
            	    $this->state->failed=false;
            	    } else {
            	        if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


            	    }
            	    break;

            	default :
            	    if ( $cnt14 >= 1 ) break 2;//loop14;
            	    if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                        $eee =
                            new EarlyExitException(14, $this->input);
                        throw $eee;
                }
                $cnt14++;
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

    // $ANTLR start "QID"
    function mQID(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            $this->mID(); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            //loop15:
            do {
                $alt15=2;
                $LA15_0 = $this->input->LA(1);

                if ( ($LA15_0==$this->getToken('46')) ) {
                    $alt15=1;
                }


                switch ($alt15) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            	    {
            	    $this->matchChar(46); if ($this->state->failed) return ;
            	    $this->mID(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop15;
                }
            } while (true);


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "QID"

    // $ANTLR start "QIDStar"
    function mQIDStar(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            $this->mID(); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            //loop16:
            do {
                $alt16=2;
                $LA16_0 = $this->input->LA(1);

                if ( ($LA16_0==$this->getToken('46')) ) {
                    $LA16_1 = $this->input->LA(2);

                    if ( (($LA16_1>=$this->getToken('65') && $LA16_1<=$this->getToken('90'))||$LA16_1==$this->getToken('95')||($LA16_1>=$this->getToken('97') && $LA16_1<=$this->getToken('122'))) ) {
                        $alt16=1;
                    }


                }


                switch ($alt16) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            	    {
            	    $this->matchChar(46); if ($this->state->failed) return ;
            	    $this->mID(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop16;
                }
            } while (true);

            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            $alt17=2;
            $LA17_0 = $this->input->LA(1);

            if ( ($LA17_0==$this->getToken('46')) ) {
                $alt17=1;
            }
            switch ($alt17) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    {
                    $this->matchString(".*"); if ($this->state->failed) return ;


                    }
                    break;

            }


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "QIDStar"

    // $ANTLR start "TYPE"
    function mTYPE(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            $this->mQID(); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            $alt18=2;
            $LA18_0 = $this->input->LA(1);

            if ( ($LA18_0==$this->getToken('91')) ) {
                $alt18=1;
            }
            switch ($alt18) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                    {
                    $this->matchString("[]"); if ($this->state->failed) return ;


                    }
                    break;

            }


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "TYPE"

    // $ANTLR start "ARG"
    function mARG(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            $this->mTYPE(); if ($this->state->failed) return ;
            $this->mWS(); if ($this->state->failed) return ;
            $this->mID(); if ($this->state->failed) return ;

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ARG"

    // $ANTLR start "ID"
    function mID(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();
            $this->state->failed=false;
            } else {
                if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            //loop19:
            do {
                $alt19=2;
                $LA19_0 = $this->input->LA(1);

                if ( (($LA19_0>=$this->getToken('48') && $LA19_0<=$this->getToken('57'))||($LA19_0>=$this->getToken('65') && $LA19_0<=$this->getToken('90'))||$LA19_0==$this->getToken('95')||($LA19_0>=$this->getToken('97') && $LA19_0<=$this->getToken('122'))) ) {
                    $alt19=1;
                }


                switch ($alt19) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('48') && $this->input->LA(1)<=$this->getToken('57'))||($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
            	        $this->input->consume();
            	    $this->state->failed=false;
            	    } else {
            	        if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


            	    }
            	    break;

            	default :
            	    break 2;//loop19;
                }
            } while (true);


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ID"

    // $ANTLR start "ESC"
    function mESC(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
            {
            $this->matchChar(92); if ($this->state->failed) return ;
            if ( $this->input->LA(1)==$this->getToken('34')||$this->input->LA(1)==$this->getToken('39')||$this->input->LA(1)==$this->getToken('92') ) {
                $this->input->consume();
            $this->state->failed=false;
            } else {
                if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ESC"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
        $alt20=7;
        $LA20 = $this->input->LA(1);
        if($this->getToken('105')== $LA20)
            {
            $alt20=1;
            }
        else if($this->getToken('114')== $LA20)
            {
            $alt20=2;
            }
        else if($this->getToken('99')== $LA20)
            {
            $alt20=3;
            }
        else if($this->getToken('47')== $LA20)
            {
            $alt20=4;
            }
        else if($this->getToken('34')== $LA20)
            {
            $alt20=5;
            }
        else if($this->getToken('39')== $LA20)
            {
            $alt20=6;
            }
        else if($this->getToken('9')== $LA20||$this->getToken('10')== $LA20||$this->getToken('32')== $LA20)
            {
            $alt20=7;
            }
        else{
            if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
            $nvae =
                new NoViableAltException("", 20, 0, $this->input);

            throw $nvae;
        }

        switch ($alt20) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                {
                $this->mIMPORT(); if ($this->state->failed) return ;

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                {
                $this->mRETURN(); if ($this->state->failed) return ;

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                {
                $this->mCLASS(); if ($this->state->failed) return ;

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                {
                $this->mCOMMENT(); if ($this->state->failed) return ;

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                {
                $this->mSTRING(); if ($this->state->failed) return ;

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                {
                $this->mCHAR(); if ($this->state->failed) return ;

                }
                break;
            case 7 :
                // runtime/Php/test/Antlr/Tests/grammers/t019lexer.g
                {
                $this->mWS(); if ($this->state->failed) return ;

                }
                break;

        }

    }



}
?>
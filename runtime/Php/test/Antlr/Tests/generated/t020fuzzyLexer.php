<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g 2010-09-10 19:39:26




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


function t020fuzzyLexer_DFA38_static(){
    $eot = "\x13\xff";
    $eof = "\x13\xff";
    $min = "\x1\x9\x1\x0\x3\xff\x1\x0\x5\xff\x2\x0\x1\xff\x1\x0\x2\xff\x1" .
    "\x0\x1\xff";
    $max = "\x1\x7a\x1\x0\x3\xff\x1\x0\x5\xff\x2\x0\x1\xff\x1\x0\x2\xff\x1" .
    "\x0\x1\xff";
    $accept = "\x2\xff\x1\x8\x1\x9\x1\xc\x1\xff\x1\x1\x1\x4\x1\x5\x1\x6\x1" .
    "\x7\x2\xff\x1\x2\x1\xff\x1\x3\x1\xb\x1\xff\x1\xa";
    $special = "\x1\xff\x1\x0\x3\xff\x1\x1\x5\xff\x1\x2\x1\x3\x1\xff\x1\x4" .
    "\x2\xff\x1\x5\x1\xff";
    $transitionS = array(
        "\x2\x4\x15\xff\x1\x4\x1\xff\x1\x12\x4\xff\x1\x10\x7\xff\x1\x1\x11" .
        "\xff\x1a\xb\x4\xff\x1\xb\x1\xff\x2\xb\x1\xe\x2\xb\x1\x11\x2\xb\x1" .
        "\x5\x8\xb\x1\xc\x1\x11\x3\xb\x1\x11\x3\xb",
        "\x1\xff",
        "",
        "",
        "",
        "\x1\xff",
        "",
        "",
        "",
        "",
        "",
        "\x1\xff",
        "\x1\xff",
        "",
        "\x1\xff",
        "",
        "",
        "\x1\xff",
        ""
    );

    $arr = array();
    $arr['eot'] = DFA::unpackRLE($eot);
    $arr['eof'] = DFA::unpackRLE($eof);
    $arr['min'] = DFA::unpackRLE($min, true);
    $arr['max'] = DFA::unpackRLE($max, true);
    $arr['accept'] = DFA::unpackRLE($accept);
    $arr['special'] = DFA::unpackRLE($special);


    $numStates = sizeof($transitionS);
    $arr['transition'] = array();
    for ($i=0; $i<$numStates; $i++) {
        $arr['transition'][$i] = DFA::unpackRLE($transitionS[$i]);
    }
    return $arr;
}

class t020fuzzyLexer_DFA38 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t020fuzzyLexer_DFA38_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 38;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "1:1: Tokens options {k=1; backtrack=true; } : ( IMPORT | RETURN | CLASS | METHOD | FIELD | STAT | CALL | COMMENT | SL_COMMENT | STRING | CHAR | WS );";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA38_1 = $input->LA(1);

                     
                    $index38_1 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred8_t020fuzzyLexer()) ) {$s = 2;}

                    else if ( ($this->synpred9_t020fuzzyLexer()) ) {$s = 3;}

                     
                    $input->seek($index38_1);
                    if ( $s>=0 ) return $s;
                    break;
                case 1 : 
                    $LA38_5 = $input->LA(1);

                     
                    $index38_5 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred1_t020fuzzyLexer()) ) {$s = 6;}

                    else if ( ($this->synpred4_t020fuzzyLexer()) ) {$s = 7;}

                    else if ( ($this->synpred5_t020fuzzyLexer()) ) {$s = 8;}

                    else if ( ($this->synpred6_t020fuzzyLexer()) ) {$s = 9;}

                    else if ( ($this->synpred7_t020fuzzyLexer()) ) {$s = 10;}

                     
                    $input->seek($index38_5);
                    if ( $s>=0 ) return $s;
                    break;
                case 2 : 
                    $LA38_11 = $input->LA(1);

                     
                    $index38_11 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t020fuzzyLexer()) ) {$s = 7;}

                    else if ( ($this->synpred5_t020fuzzyLexer()) ) {$s = 8;}

                    else if ( ($this->synpred7_t020fuzzyLexer()) ) {$s = 10;}

                     
                    $input->seek($index38_11);
                    if ( $s>=0 ) return $s;
                    break;
                case 3 : 
                    $LA38_12 = $input->LA(1);

                     
                    $index38_12 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred2_t020fuzzyLexer()) ) {$s = 13;}

                    else if ( ($this->synpred4_t020fuzzyLexer()) ) {$s = 7;}

                    else if ( ($this->synpred5_t020fuzzyLexer()) ) {$s = 8;}

                    else if ( ($this->synpred7_t020fuzzyLexer()) ) {$s = 10;}

                     
                    $input->seek($index38_12);
                    if ( $s>=0 ) return $s;
                    break;
                case 4 : 
                    $LA38_14 = $input->LA(1);

                     
                    $index38_14 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred3_t020fuzzyLexer()) ) {$s = 15;}

                    else if ( ($this->synpred4_t020fuzzyLexer()) ) {$s = 7;}

                    else if ( ($this->synpred5_t020fuzzyLexer()) ) {$s = 8;}

                    else if ( ($this->synpred7_t020fuzzyLexer()) ) {$s = 10;}

                     
                    $input->seek($index38_14);
                    if ( $s>=0 ) return $s;
                    break;
                case 5 : 
                    $LA38_17 = $input->LA(1);

                     
                    $index38_17 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t020fuzzyLexer()) ) {$s = 7;}

                    else if ( ($this->synpred5_t020fuzzyLexer()) ) {$s = 8;}

                    else if ( ($this->synpred6_t020fuzzyLexer()) ) {$s = 9;}

                    else if ( ($this->synpred7_t020fuzzyLexer()) ) {$s = 10;}

                     
                    $input->seek($index38_17);
                    if ( $s>=0 ) return $s;
                    break;
        }
        if ($this->recognizer->state->backtracking>0) {$this->recognizer->state->failed=true; return -1;}
        $nvae =
            new NoViableAltException($this->getDescription(), 38, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
 

class t020fuzzyLexer extends Lexer {
    const T_STAT=15;
    const T_CLASS=10;
    const T_ESC=19;
    const T_CHAR=21;
    const T_ID=8;
    const T_EOF=-1;
    const T_QID=9;
    const T_TYPE=11;
    const T_IMPORT=6;
    const T_WS=4;
    const T_ARG=12;
    const T_QIDStar=5;
    const T_SL_COMMENT=18;
    const T_RETURN=7;
    const T_FIELD=14;
    const T_CALL=16;
    const T_COMMENT=17;
    const T_METHOD=13;
    const T_STRING=20;

    	function write($text){
    		$this->out.= $text;
    	}


    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);



        	$this->out = "";

            $this->dfa38 = new t020fuzzyLexer_DFA38($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g"; }

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
            $_type = t020fuzzyLexer::T_IMPORT;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            $name=null;

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->matchString("import"); if ($this->state->failed) return ;

            $this->mWS(); if ($this->state->failed) return ;
            $nameStart58 = $this->getCharIndex();
            $this->mQIDStar(); if ($this->state->failed) return ;
            $name = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $nameStart58, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt1=2;
            $LA1_0 = $this->input->LA(1);

            if ( (($LA1_0>=$this->getToken('9') && $LA1_0<=$this->getToken('10'))||$LA1_0==$this->getToken('32')) ) {
                $alt1=1;
            }
            switch ($alt1) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
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
            $_type = t020fuzzyLexer::T_RETURN;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->matchString("return"); if ($this->state->failed) return ;

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
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
            	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
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
            $_type = t020fuzzyLexer::T_CLASS;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            $name=null;

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->matchString("class"); if ($this->state->failed) return ;

            $this->mWS(); if ($this->state->failed) return ;
            $nameStart108 = $this->getCharIndex();
            $this->mID(); if ($this->state->failed) return ;
            $name = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $nameStart108, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt3=2;
            $LA3_0 = $this->input->LA(1);

            if ( (($LA3_0>=$this->getToken('9') && $LA3_0<=$this->getToken('10'))||$LA3_0==$this->getToken('32')) ) {
                $alt3=1;
            }
            switch ($alt3) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->mWS(); if ($this->state->failed) return ;

                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt5=2;
            $LA5_0 = $this->input->LA(1);

            if ( ($LA5_0==$this->getToken('101')) ) {
                $alt5=1;
            }
            switch ($alt5) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->matchString("extends"); if ($this->state->failed) return ;

                    $this->mWS(); if ($this->state->failed) return ;
                    $this->mQID(); if ($this->state->failed) return ;
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    $alt4=2;
                    $LA4_0 = $this->input->LA(1);

                    if ( (($LA4_0>=$this->getToken('9') && $LA4_0<=$this->getToken('10'))||$LA4_0==$this->getToken('32')) ) {
                        $alt4=1;
                    }
                    switch ($alt4) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                            {
                            $this->mWS(); if ($this->state->failed) return ;

                            }
                            break;

                    }


                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt10=2;
            $LA10_0 = $this->input->LA(1);

            if ( ($LA10_0==$this->getToken('105')) ) {
                $alt10=1;
            }
            switch ($alt10) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->matchString("implements"); if ($this->state->failed) return ;

                    $this->mWS(); if ($this->state->failed) return ;
                    $this->mQID(); if ($this->state->failed) return ;
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    $alt6=2;
                    $LA6_0 = $this->input->LA(1);

                    if ( (($LA6_0>=$this->getToken('9') && $LA6_0<=$this->getToken('10'))||$LA6_0==$this->getToken('32')) ) {
                        $alt6=1;
                    }
                    switch ($alt6) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                            {
                            $this->mWS(); if ($this->state->failed) return ;

                            }
                            break;

                    }

                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    //loop9:
                    do {
                        $alt9=2;
                        $LA9_0 = $this->input->LA(1);

                        if ( ($LA9_0==$this->getToken('44')) ) {
                            $alt9=1;
                        }


                        switch ($alt9) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	    {
                    	    $this->matchChar(44); if ($this->state->failed) return ;
                    	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	    $alt7=2;
                    	    $LA7_0 = $this->input->LA(1);

                    	    if ( (($LA7_0>=$this->getToken('9') && $LA7_0<=$this->getToken('10'))||$LA7_0==$this->getToken('32')) ) {
                    	        $alt7=1;
                    	    }
                    	    switch ($alt7) {
                    	        case 1 :
                    	            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	            {
                    	            $this->mWS(); if ($this->state->failed) return ;

                    	            }
                    	            break;

                    	    }

                    	    $this->mQID(); if ($this->state->failed) return ;
                    	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	    $alt8=2;
                    	    $LA8_0 = $this->input->LA(1);

                    	    if ( (($LA8_0>=$this->getToken('9') && $LA8_0<=$this->getToken('10'))||$LA8_0==$this->getToken('32')) ) {
                    	        $alt8=1;
                    	    }
                    	    switch ($alt8) {
                    	        case 1 :
                    	            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
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
            if ( state.backtracking==1 ) {
              $this->write("found class ".($name!=null?$name->getText():null)."\n");
            }

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "CLASS"

    // $ANTLR start "METHOD"
    function mMETHOD(){
        try {
            $_type = t020fuzzyLexer::T_METHOD;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            $name=null;

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->mTYPE(); if ($this->state->failed) return ;
            $this->mWS(); if ($this->state->failed) return ;
            $nameStart185 = $this->getCharIndex();
            $this->mID(); if ($this->state->failed) return ;
            $name = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $nameStart185, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt11=2;
            $LA11_0 = $this->input->LA(1);

            if ( (($LA11_0>=$this->getToken('9') && $LA11_0<=$this->getToken('10'))||$LA11_0==$this->getToken('32')) ) {
                $alt11=1;
            }
            switch ($alt11) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->mWS(); if ($this->state->failed) return ;

                    }
                    break;

            }

            $this->matchChar(40); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt16=2;
            $LA16_0 = $this->input->LA(1);

            if ( (($LA16_0>=$this->getToken('65') && $LA16_0<=$this->getToken('90'))||$LA16_0==$this->getToken('95')||($LA16_0>=$this->getToken('97') && $LA16_0<=$this->getToken('122'))) ) {
                $alt16=1;
            }
            switch ($alt16) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->mARG(); if ($this->state->failed) return ;
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    $alt12=2;
                    $LA12_0 = $this->input->LA(1);

                    if ( (($LA12_0>=$this->getToken('9') && $LA12_0<=$this->getToken('10'))||$LA12_0==$this->getToken('32')) ) {
                        $alt12=1;
                    }
                    switch ($alt12) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                            {
                            $this->mWS(); if ($this->state->failed) return ;

                            }
                            break;

                    }

                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    //loop15:
                    do {
                        $alt15=2;
                        $LA15_0 = $this->input->LA(1);

                        if ( ($LA15_0==$this->getToken('44')) ) {
                            $alt15=1;
                        }


                        switch ($alt15) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	    {
                    	    $this->matchChar(44); if ($this->state->failed) return ;
                    	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	    $alt13=2;
                    	    $LA13_0 = $this->input->LA(1);

                    	    if ( (($LA13_0>=$this->getToken('9') && $LA13_0<=$this->getToken('10'))||$LA13_0==$this->getToken('32')) ) {
                    	        $alt13=1;
                    	    }
                    	    switch ($alt13) {
                    	        case 1 :
                    	            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	            {
                    	            $this->mWS(); if ($this->state->failed) return ;

                    	            }
                    	            break;

                    	    }

                    	    $this->mARG(); if ($this->state->failed) return ;
                    	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	    $alt14=2;
                    	    $LA14_0 = $this->input->LA(1);

                    	    if ( (($LA14_0>=$this->getToken('9') && $LA14_0<=$this->getToken('10'))||$LA14_0==$this->getToken('32')) ) {
                    	        $alt14=1;
                    	    }
                    	    switch ($alt14) {
                    	        case 1 :
                    	            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	            {
                    	            $this->mWS(); if ($this->state->failed) return ;

                    	            }
                    	            break;

                    	    }


                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop15;
                        }
                    } while (true);


                    }
                    break;

            }

            $this->matchChar(41); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt17=2;
            $LA17_0 = $this->input->LA(1);

            if ( (($LA17_0>=$this->getToken('9') && $LA17_0<=$this->getToken('10'))||$LA17_0==$this->getToken('32')) ) {
                $alt17=1;
            }
            switch ($alt17) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->mWS(); if ($this->state->failed) return ;

                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt22=2;
            $LA22_0 = $this->input->LA(1);

            if ( ($LA22_0==$this->getToken('116')) ) {
                $alt22=1;
            }
            switch ($alt22) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->matchString("throws"); if ($this->state->failed) return ;

                    $this->mWS(); if ($this->state->failed) return ;
                    $this->mQID(); if ($this->state->failed) return ;
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    $alt18=2;
                    $LA18_0 = $this->input->LA(1);

                    if ( (($LA18_0>=$this->getToken('9') && $LA18_0<=$this->getToken('10'))||$LA18_0==$this->getToken('32')) ) {
                        $alt18=1;
                    }
                    switch ($alt18) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                            {
                            $this->mWS(); if ($this->state->failed) return ;

                            }
                            break;

                    }

                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    //loop21:
                    do {
                        $alt21=2;
                        $LA21_0 = $this->input->LA(1);

                        if ( ($LA21_0==$this->getToken('44')) ) {
                            $alt21=1;
                        }


                        switch ($alt21) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	    {
                    	    $this->matchChar(44); if ($this->state->failed) return ;
                    	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	    $alt19=2;
                    	    $LA19_0 = $this->input->LA(1);

                    	    if ( (($LA19_0>=$this->getToken('9') && $LA19_0<=$this->getToken('10'))||$LA19_0==$this->getToken('32')) ) {
                    	        $alt19=1;
                    	    }
                    	    switch ($alt19) {
                    	        case 1 :
                    	            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	            {
                    	            $this->mWS(); if ($this->state->failed) return ;

                    	            }
                    	            break;

                    	    }

                    	    $this->mQID(); if ($this->state->failed) return ;
                    	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	    $alt20=2;
                    	    $LA20_0 = $this->input->LA(1);

                    	    if ( (($LA20_0>=$this->getToken('9') && $LA20_0<=$this->getToken('10'))||$LA20_0==$this->getToken('32')) ) {
                    	        $alt20=1;
                    	    }
                    	    switch ($alt20) {
                    	        case 1 :
                    	            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    	            {
                    	            $this->mWS(); if ($this->state->failed) return ;

                    	            }
                    	            break;

                    	    }


                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop21;
                        }
                    } while (true);


                    }
                    break;

            }

            $this->matchChar(123); if ($this->state->failed) return ;
            if ( state.backtracking==1 ) {
              $this->write("found method ".($name!=null?$name->getText():null)."\n");
            }

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "METHOD"

    // $ANTLR start "FIELD"
    function mFIELD(){
        try {
            $_type = t020fuzzyLexer::T_FIELD;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            $name=null;

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->mTYPE(); if ($this->state->failed) return ;
            $this->mWS(); if ($this->state->failed) return ;
            $nameStart288 = $this->getCharIndex();
            $this->mID(); if ($this->state->failed) return ;
            $name = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $nameStart288, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt23=2;
            $LA23_0 = $this->input->LA(1);

            if ( ($LA23_0==$this->getToken('91')) ) {
                $alt23=1;
            }
            switch ($alt23) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->matchString("[]"); if ($this->state->failed) return ;


                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt24=2;
            $LA24_0 = $this->input->LA(1);

            if ( (($LA24_0>=$this->getToken('9') && $LA24_0<=$this->getToken('10'))||$LA24_0==$this->getToken('32')) ) {
                $alt24=1;
            }
            switch ($alt24) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->mWS(); if ($this->state->failed) return ;

                    }
                    break;

            }

            if ( $this->input->LA(1)==$this->getToken('59')||$this->input->LA(1)==$this->getToken('61') ) {
                $this->input->consume();
            $this->state->failed=false;
            } else {
                if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            if ( state.backtracking==1 ) {
              $this->write("found var ".($name!=null?$name->getText():null)."\n");
            }

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "FIELD"

    // $ANTLR start "STAT"
    function mSTAT(){
        try {
            $_type = t020fuzzyLexer::T_STAT;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt25=4;
            $LA25 = $this->input->LA(1);
            if($this->getToken('105')== $LA25)
                {
                $alt25=1;
                }
            else if($this->getToken('119')== $LA25)
                {
                $alt25=2;
                }
            else if($this->getToken('115')== $LA25)
                {
                $alt25=3;
                }
            else if($this->getToken('102')== $LA25)
                {
                $alt25=4;
                }
            else{
                if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                $nvae =
                    new NoViableAltException("", 25, 0, $this->input);

                throw $nvae;
            }

            switch ($alt25) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->matchString("if"); if ($this->state->failed) return ;


                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->matchString("while"); if ($this->state->failed) return ;


                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->matchString("switch"); if ($this->state->failed) return ;


                    }
                    break;
                case 4 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->matchString("for"); if ($this->state->failed) return ;


                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt26=2;
            $LA26_0 = $this->input->LA(1);

            if ( (($LA26_0>=$this->getToken('9') && $LA26_0<=$this->getToken('10'))||$LA26_0==$this->getToken('32')) ) {
                $alt26=1;
            }
            switch ($alt26) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->mWS(); if ($this->state->failed) return ;

                    }
                    break;

            }

            $this->matchChar(40); if ($this->state->failed) return ;

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "STAT"

    // $ANTLR start "CALL"
    function mCALL(){
        try {
            $_type = t020fuzzyLexer::T_CALL;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            $name=null;

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $nameStart353 = $this->getCharIndex();
            $this->mQID(); if ($this->state->failed) return ;
            $name = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $nameStart353, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt27=2;
            $LA27_0 = $this->input->LA(1);

            if ( (($LA27_0>=$this->getToken('9') && $LA27_0<=$this->getToken('10'))||$LA27_0==$this->getToken('32')) ) {
                $alt27=1;
            }
            switch ($alt27) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                    {
                    $this->mWS(); if ($this->state->failed) return ;

                    }
                    break;

            }

            $this->matchChar(40); if ($this->state->failed) return ;
            if ( state.backtracking==1 ) {
              $this->write("found call ".($name!=null?$name->getText():null)."\n");
            }

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "CALL"

    // $ANTLR start "COMMENT"
    function mCOMMENT(){
        try {
            $_type = t020fuzzyLexer::T_COMMENT;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->matchString("/*"); if ($this->state->failed) return ;

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            //loop28:
            do {
                $alt28=2;
                $LA28_0 = $this->input->LA(1);

                if ( ($LA28_0==$this->getToken('42')) ) {
                    $LA28_1 = $this->input->LA(2);

                    if ( ($LA28_1==$this->getToken('47')) ) {
                        $alt28=2;
                    }
                    else if ( (($LA28_1>=$this->getToken('0') && $LA28_1<=$this->getToken('46'))||($LA28_1>=$this->getToken('48') && $LA28_1<=$this->getToken('65535'))) ) {
                        $alt28=1;
                    }


                }
                else if ( (($LA28_0>=$this->getToken('0') && $LA28_0<=$this->getToken('41'))||($LA28_0>=$this->getToken('43') && $LA28_0<=$this->getToken('65535'))) ) {
                    $alt28=1;
                }


                switch ($alt28) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            	    {
            	    $this->matchAny(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop28;
                }
            } while (true);

            $this->matchString("*/"); if ($this->state->failed) return ;

            if ( state.backtracking==1 ) {
              $this->write("found comment ".$this->getText()."\n");
            }

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "COMMENT"

    // $ANTLR start "SL_COMMENT"
    function mSL_COMMENT(){
        try {
            $_type = t020fuzzyLexer::T_SL_COMMENT;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->matchString("//"); if ($this->state->failed) return ;

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            //loop29:
            do {
                $alt29=2;
                $LA29_0 = $this->input->LA(1);

                if ( ($LA29_0==$this->getToken('10')) ) {
                    $alt29=2;
                }
                else if ( (($LA29_0>=$this->getToken('0') && $LA29_0<=$this->getToken('9'))||($LA29_0>=$this->getToken('11') && $LA29_0<=$this->getToken('65535'))) ) {
                    $alt29=1;
                }


                switch ($alt29) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            	    {
            	    $this->matchAny(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop29;
                }
            } while (true);

            $this->matchChar(10); if ($this->state->failed) return ;
            if ( state.backtracking==1 ) {
              $this->write("found // comment ".$this->getText()."\n");
            }

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "SL_COMMENT"

    // $ANTLR start "STRING"
    function mSTRING(){
        try {
            $_type = t020fuzzyLexer::T_STRING;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->matchChar(34); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            //loop30:
            do {
                $alt30=3;
                $LA30_0 = $this->input->LA(1);

                if ( ($LA30_0==$this->getToken('34')) ) {
                    $alt30=3;
                }
                else if ( ($LA30_0==$this->getToken('92')) ) {
                    $LA30_2 = $this->input->LA(2);

                    if ( ($LA30_2==$this->getToken('34')) ) {
                        $alt30=1;
                    }
                    else if ( ($LA30_2==$this->getToken('92')) ) {
                        $alt30=1;
                    }
                    else if ( ($LA30_2==$this->getToken('39')) ) {
                        $alt30=1;
                    }
                    else if ( (($LA30_2>=$this->getToken('0') && $LA30_2<=$this->getToken('33'))||($LA30_2>=$this->getToken('35') && $LA30_2<=$this->getToken('38'))||($LA30_2>=$this->getToken('40') && $LA30_2<=$this->getToken('91'))||($LA30_2>=$this->getToken('93') && $LA30_2<=$this->getToken('65535'))) ) {
                        $alt30=2;
                    }


                }
                else if ( (($LA30_0>=$this->getToken('0') && $LA30_0<=$this->getToken('33'))||($LA30_0>=$this->getToken('35') && $LA30_0<=$this->getToken('91'))||($LA30_0>=$this->getToken('93') && $LA30_0<=$this->getToken('65535'))) ) {
                    $alt30=2;
                }


                switch ($alt30) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            	    {
            	    $this->mESC(); if ($this->state->failed) return ;

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            	    {
            	    $this->matchAny(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop30;
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
            $_type = t020fuzzyLexer::T_CHAR;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->matchChar(39); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            //loop31:
            do {
                $alt31=3;
                $LA31_0 = $this->input->LA(1);

                if ( ($LA31_0==$this->getToken('39')) ) {
                    $alt31=3;
                }
                else if ( ($LA31_0==$this->getToken('92')) ) {
                    $LA31_2 = $this->input->LA(2);

                    if ( ($LA31_2==$this->getToken('39')) ) {
                        $alt31=1;
                    }
                    else if ( ($LA31_2==$this->getToken('92')) ) {
                        $alt31=1;
                    }
                    else if ( ($LA31_2==$this->getToken('34')) ) {
                        $alt31=1;
                    }
                    else if ( (($LA31_2>=$this->getToken('0') && $LA31_2<=$this->getToken('33'))||($LA31_2>=$this->getToken('35') && $LA31_2<=$this->getToken('38'))||($LA31_2>=$this->getToken('40') && $LA31_2<=$this->getToken('91'))||($LA31_2>=$this->getToken('93') && $LA31_2<=$this->getToken('65535'))) ) {
                        $alt31=2;
                    }


                }
                else if ( (($LA31_0>=$this->getToken('0') && $LA31_0<=$this->getToken('38'))||($LA31_0>=$this->getToken('40') && $LA31_0<=$this->getToken('91'))||($LA31_0>=$this->getToken('93') && $LA31_0<=$this->getToken('65535'))) ) {
                    $alt31=2;
                }


                switch ($alt31) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            	    {
            	    $this->mESC(); if ($this->state->failed) return ;

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            	    {
            	    $this->matchAny(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop31;
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
            $_type = t020fuzzyLexer::T_WS;
            $_channel = t020fuzzyLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $cnt32=0;
            //loop32:
            do {
                $alt32=2;
                $LA32_0 = $this->input->LA(1);

                if ( (($LA32_0>=$this->getToken('9') && $LA32_0<=$this->getToken('10'))||$LA32_0==$this->getToken('32')) ) {
                    $alt32=1;
                }


                switch ($alt32) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
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
            	    if ( $cnt32 >= 1 ) break 2;//loop32;
            	    if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                        $eee =
                            new EarlyExitException(32, $this->input);
                        throw $eee;
                }
                $cnt32++;
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
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->mID(); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            //loop33:
            do {
                $alt33=2;
                $LA33_0 = $this->input->LA(1);

                if ( ($LA33_0==$this->getToken('46')) ) {
                    $alt33=1;
                }


                switch ($alt33) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            	    {
            	    $this->matchChar(46); if ($this->state->failed) return ;
            	    $this->mID(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop33;
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
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->mID(); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            //loop34:
            do {
                $alt34=2;
                $LA34_0 = $this->input->LA(1);

                if ( ($LA34_0==$this->getToken('46')) ) {
                    $LA34_1 = $this->input->LA(2);

                    if ( (($LA34_1>=$this->getToken('65') && $LA34_1<=$this->getToken('90'))||$LA34_1==$this->getToken('95')||($LA34_1>=$this->getToken('97') && $LA34_1<=$this->getToken('122'))) ) {
                        $alt34=1;
                    }


                }


                switch ($alt34) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            	    {
            	    $this->matchChar(46); if ($this->state->failed) return ;
            	    $this->mID(); if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop34;
                }
            } while (true);

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt35=2;
            $LA35_0 = $this->input->LA(1);

            if ( ($LA35_0==$this->getToken('46')) ) {
                $alt35=1;
            }
            switch ($alt35) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
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
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            $this->mQID(); if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            $alt36=2;
            $LA36_0 = $this->input->LA(1);

            if ( ($LA36_0==$this->getToken('91')) ) {
                $alt36=1;
            }
            switch ($alt36) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
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
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
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
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();
            $this->state->failed=false;
            } else {
                if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            //loop37:
            do {
                $alt37=2;
                $LA37_0 = $this->input->LA(1);

                if ( (($LA37_0>=$this->getToken('48') && $LA37_0<=$this->getToken('57'))||($LA37_0>=$this->getToken('65') && $LA37_0<=$this->getToken('90'))||$LA37_0==$this->getToken('95')||($LA37_0>=$this->getToken('97') && $LA37_0<=$this->getToken('122'))) ) {
                    $alt37=1;
                }


                switch ($alt37) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
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
            	    break 2;//loop37;
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
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
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
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        $alt38=12;
        $alt38 = $this->dfa38->predict($this->input);
        switch ($alt38) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mIMPORT(); if ($this->state->failed) return ;

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mRETURN(); if ($this->state->failed) return ;

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mCLASS(); if ($this->state->failed) return ;

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mMETHOD(); if ($this->state->failed) return ;

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mFIELD(); if ($this->state->failed) return ;

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mSTAT(); if ($this->state->failed) return ;

                }
                break;
            case 7 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mCALL(); if ($this->state->failed) return ;

                }
                break;
            case 8 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mCOMMENT(); if ($this->state->failed) return ;

                }
                break;
            case 9 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mSL_COMMENT(); if ($this->state->failed) return ;

                }
                break;
            case 10 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mSTRING(); if ($this->state->failed) return ;

                }
                break;
            case 11 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mCHAR(); if ($this->state->failed) return ;

                }
                break;
            case 12 :
                // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
                {
                $this->mWS(); if ($this->state->failed) return ;

                }
                break;

        }

    }

    // $ANTLR start synpred1_t020fuzzyLexer
    public function synpred1_t020fuzzyLexer_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        {
        $this->mIMPORT(); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred1_t020fuzzyLexer

    // $ANTLR start synpred2_t020fuzzyLexer
    public function synpred2_t020fuzzyLexer_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        {
        $this->mRETURN(); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred2_t020fuzzyLexer

    // $ANTLR start synpred3_t020fuzzyLexer
    public function synpred3_t020fuzzyLexer_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        {
        $this->mCLASS(); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred3_t020fuzzyLexer

    // $ANTLR start synpred4_t020fuzzyLexer
    public function synpred4_t020fuzzyLexer_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        {
        $this->mMETHOD(); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred4_t020fuzzyLexer

    // $ANTLR start synpred5_t020fuzzyLexer
    public function synpred5_t020fuzzyLexer_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        {
        $this->mFIELD(); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred5_t020fuzzyLexer

    // $ANTLR start synpred6_t020fuzzyLexer
    public function synpred6_t020fuzzyLexer_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        {
        $this->mSTAT(); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred6_t020fuzzyLexer

    // $ANTLR start synpred7_t020fuzzyLexer
    public function synpred7_t020fuzzyLexer_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        {
        $this->mCALL(); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred7_t020fuzzyLexer

    // $ANTLR start synpred8_t020fuzzyLexer
    public function synpred8_t020fuzzyLexer_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        {
        $this->mCOMMENT(); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred8_t020fuzzyLexer

    // $ANTLR start synpred9_t020fuzzyLexer
    public function synpred9_t020fuzzyLexer_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t020fuzzyLexer.g
        {
        $this->mSL_COMMENT(); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred9_t020fuzzyLexer

    public function synpred4_t020fuzzyLexer() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred4_t020fuzzyLexer_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred8_t020fuzzyLexer() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred8_t020fuzzyLexer_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred6_t020fuzzyLexer() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred6_t020fuzzyLexer_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred9_t020fuzzyLexer() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred9_t020fuzzyLexer_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred7_t020fuzzyLexer() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred7_t020fuzzyLexer_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred1_t020fuzzyLexer() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred1_t020fuzzyLexer_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred5_t020fuzzyLexer() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred5_t020fuzzyLexer_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred3_t020fuzzyLexer() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred3_t020fuzzyLexer_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred2_t020fuzzyLexer() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred2_t020fuzzyLexer_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }



}
?>
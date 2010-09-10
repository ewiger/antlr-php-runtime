<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g 2010-09-10 19:39:49


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


function t047treeparserLexer_DFA4_static(){
    $eot = "\x7\xff\x4\xb\x2\xff\x1\x16\x3\xff\x4\xb\x2\xff\x1\x1b\x1\x1c" .
    "\x2\xb\x2\xff\x1\x1f\x1\x20\x2\xff";
    $eof = "\x21\xff";
    $min = "\x1\x9\x6\xff\x1\x6f\x1\x6e\x1\x68\x1\x6f\x2\xff\x1\x3d\x3\xff" .
    "\x1\x72\x1\x74\x1\x61\x1\x69\x2\xff\x2\x30\x1\x72\x1\x64\x2\xff\x2\x30" .
    "\x2\xff";
    $max = "\x1\x7d\x6\xff\x1\x6f\x1\x6e\x1\x68\x1\x6f\x2\xff\x1\x3d\x3\xff" .
    "\x1\x72\x1\x74\x1\x61\x1\x69\x2\xff\x2\x7a\x1\x72\x1\x64\x2\xff\x2\x7a" .
    "\x2\xff";
    $accept = "\x1\xff\x1\x1\x1\x2\x1\x3\x1\x4\x1\x5\x1\x6\x4\xff\x1\xb\x1" .
    "\xc\x1\xff\x1\xf\x1\x10\x1\x11\x4\xff\x1\xe\x1\xd\x4\xff\x1\x7\x1\x8" .
    "\x2\xff\x1\x9\x1\xa";
    $special = "\x21\xff";
    $transitionS = array(
        "\x2\x10\x2\xff\x1\x10\x12\xff\x1\x10\x7\xff\x1\x2\x1\x4\x1\xff\x1" .
        "\xf\x1\x3\x3\xff\xa\xc\x1\xff\x1\x1\x1\xe\x1\xd\x3\xff\x1a\xb\x4" .
        "\xff\x1\xb\x1\xff\x2\xb\x1\x9\x2\xb\x1\x7\x2\xb\x1\x8\xc\xb\x1\xa" .
        "\x4\xb\x1\x5\x1\xff\x1\x6",
        "",
        "",
        "",
        "",
        "",
        "",
        "\x1\x11",
        "\x1\x12",
        "\x1\x13",
        "\x1\x14",
        "",
        "",
        "\x1\x15",
        "",
        "",
        "",
        "\x1\x17",
        "\x1\x18",
        "\x1\x19",
        "\x1\x1a",
        "",
        "",
        "\xa\xb\x7\xff\x1a\xb\x4\xff\x1\xb\x1\xff\x1a\xb",
        "\xa\xb\x7\xff\x1a\xb\x4\xff\x1\xb\x1\xff\x1a\xb",
        "\x1\x1d",
        "\x1\x1e",
        "",
        "",
        "\xa\xb\x7\xff\x1a\xb\x4\xff\x1\xb\x1\xff\x1a\xb",
        "\xa\xb\x7\xff\x1a\xb\x4\xff\x1\xb\x1\xff\x1a\xb",
        "",
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

class t047treeparserLexer_DFA4 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t047treeparserLexer_DFA4_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 4;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "1:1: Tokens : ( T__21 | T__22 | T__23 | T__24 | T__25 | T__26 | FOR | INT_TYPE | CHAR | VOID | ID | INT | EQ | EQEQ | LT | PLUS | WS );";
    }
}
 

class t047treeparserLexer extends Lexer {
    const T_LT=18;
    const T_T__26=26;
    const T_T__25=25;
    const T_T__24=24;
    const T_T__23=23;
    const T_T__22=22;
    const T_T__21=21;
    const T_CHAR=15;
    const T_FOR=13;
    const T_FUNC_HDR=6;
    const T_INT=12;
    const T_FUNC_DEF=8;
    const T_INT_TYPE=14;
    const T_ID=10;
    const T_EOF=-1;
    const T_FUNC_DECL=7;
    const T_ARG_DEF=5;
    const T_WS=20;
    const T_BLOCK=9;
    const T_PLUS=19;
    const T_VOID=16;
    const T_EQ=11;
    const T_VAR_DEF=4;
    const T_EQEQ=17;

    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);


            $this->dfa4 = new t047treeparserLexer_DFA4($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g"; }

    // $ANTLR start "T__21"
    function mT__21(){
        try {
            $_type = t047treeparserLexer::T_T__21;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchChar(59); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__21"

    // $ANTLR start "T__22"
    function mT__22(){
        try {
            $_type = t047treeparserLexer::T_T__22;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchChar(40); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__22"

    // $ANTLR start "T__23"
    function mT__23(){
        try {
            $_type = t047treeparserLexer::T_T__23;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchChar(44); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__23"

    // $ANTLR start "T__24"
    function mT__24(){
        try {
            $_type = t047treeparserLexer::T_T__24;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchChar(41); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__24"

    // $ANTLR start "T__25"
    function mT__25(){
        try {
            $_type = t047treeparserLexer::T_T__25;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchChar(123); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__25"

    // $ANTLR start "T__26"
    function mT__26(){
        try {
            $_type = t047treeparserLexer::T_T__26;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchChar(125); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "T__26"

    // $ANTLR start "FOR"
    function mFOR(){
        try {
            $_type = t047treeparserLexer::T_FOR;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchString("for"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "FOR"

    // $ANTLR start "INT_TYPE"
    function mINT_TYPE(){
        try {
            $_type = t047treeparserLexer::T_INT_TYPE;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchString("int"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "INT_TYPE"

    // $ANTLR start "CHAR"
    function mCHAR(){
        try {
            $_type = t047treeparserLexer::T_CHAR;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchString("char"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "CHAR"

    // $ANTLR start "VOID"
    function mVOID(){
        try {
            $_type = t047treeparserLexer::T_VOID;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchString("void"); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "VOID"

    // $ANTLR start "ID"
    function mID(){
        try {
            $_type = t047treeparserLexer::T_ID;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            //loop1:
            do {
                $alt1=2;
                $LA1_0 = $this->input->LA(1);

                if ( (($LA1_0>=$this->getToken('48') && $LA1_0<=$this->getToken('57'))||($LA1_0>=$this->getToken('65') && $LA1_0<=$this->getToken('90'))||$LA1_0==$this->getToken('95')||($LA1_0>=$this->getToken('97') && $LA1_0<=$this->getToken('122'))) ) {
                    $alt1=1;
                }


                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
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


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ID"

    // $ANTLR start "INT"
    function mINT(){
        try {
            $_type = t047treeparserLexer::T_INT;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            $cnt2=0;
            //loop2:
            do {
                $alt2=2;
                $LA2_0 = $this->input->LA(1);

                if ( (($LA2_0>=$this->getToken('48') && $LA2_0<=$this->getToken('57'))) ) {
                    $alt2=1;
                }


                switch ($alt2) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            	    {
            	    $this->matchRange(48,57); 

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
    // $ANTLR end "INT"

    // $ANTLR start "EQ"
    function mEQ(){
        try {
            $_type = t047treeparserLexer::T_EQ;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchChar(61); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "EQ"

    // $ANTLR start "EQEQ"
    function mEQEQ(){
        try {
            $_type = t047treeparserLexer::T_EQEQ;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchString("=="); 


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "EQEQ"

    // $ANTLR start "LT"
    function mLT(){
        try {
            $_type = t047treeparserLexer::T_LT;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchChar(60); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "LT"

    // $ANTLR start "PLUS"
    function mPLUS(){
        try {
            $_type = t047treeparserLexer::T_PLUS;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            $this->matchChar(43); 

            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "PLUS"

    // $ANTLR start "WS"
    function mWS(){
        try {
            $_type = t047treeparserLexer::T_WS;
            $_channel = t047treeparserLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            $cnt3=0;
            //loop3:
            do {
                $alt3=2;
                $LA3_0 = $this->input->LA(1);

                if ( (($LA3_0>=$this->getToken('9') && $LA3_0<=$this->getToken('10'))||$LA3_0==$this->getToken('13')||$LA3_0==$this->getToken('32')) ) {
                    $alt3=1;
                }


                switch ($alt3) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('9') && $this->input->LA(1)<=$this->getToken('10'))||$this->input->LA(1)==$this->getToken('13')||$this->input->LA(1)==$this->getToken('32') ) {
            	        $this->input->consume();

            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


            	    }
            	    break;

            	default :
            	    if ( $cnt3 >= 1 ) break 2;//loop3;
                        $eee =
                            new EarlyExitException(3, $this->input);
                        throw $eee;
                }
                $cnt3++;
            } while (true);

               $_channel=self::HIDDEN; 

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
        // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
        $alt4=17;
        $alt4 = $this->dfa4->predict($this->input);
        switch ($alt4) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mT__21(); 

                }
                break;
            case 2 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mT__22(); 

                }
                break;
            case 3 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mT__23(); 

                }
                break;
            case 4 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mT__24(); 

                }
                break;
            case 5 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mT__25(); 

                }
                break;
            case 6 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mT__26(); 

                }
                break;
            case 7 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mFOR(); 

                }
                break;
            case 8 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mINT_TYPE(); 

                }
                break;
            case 9 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mCHAR(); 

                }
                break;
            case 10 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mVOID(); 

                }
                break;
            case 11 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mID(); 

                }
                break;
            case 12 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mINT(); 

                }
                break;
            case 13 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mEQ(); 

                }
                break;
            case 14 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mEQEQ(); 

                }
                break;
            case 15 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mLT(); 

                }
                break;
            case 16 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mPLUS(); 

                }
                break;
            case 17 :
                // runtime/Php/test/Antlr/Tests/grammers/t047treeparser.g
                {
                $this->mWS(); 

                }
                break;

        }

    }



}
?>
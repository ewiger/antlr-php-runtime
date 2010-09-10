<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g 2010-09-10 19:39:19





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


function t012lexerXMLLexer_DFA18_static(){
    $eot = "\x25\xff";
    $eof = "\x25\xff";
    $min = "\x1\x3c\xa\x9\x2\xff\xa\x9\x2\x0\x7\x9\x1\x0\x1\x9\x1\x0\x2\x9";
    $max = "\x1\x3c\xa\x7a\x2\xff\x7\x7a\x1\x27\x1\x7a\x1\x27\x2\xff\x6\x7a" .
    "\x1\x3d\x1\xff\x1\x7a\x1\xff\x2\x7a";
    $accept = "\xb\xff\x1\x2\x1\x1\x18\xff";
    $special = "\x17\xff\x1\x0\x1\x2\x7\xff\x1\x3\x1\xff\x1\x1\x2\xff";
    $transitionS = array(
        "\x1\x1",
        "\x2\x2\x2\xff\x1\x2\x12\xff\x1\x2\x19\xff\x1\x3\x6\xff\x1a\x3\x4" .
        "\xff\x1\x3\x1\xff\x1a\x3",
        "\x2\x2\x2\xff\x1\x2\x12\xff\x1\x2\x19\xff\x1\x3\x6\xff\x1a\x3\x4" .
        "\xff\x1\x3\x1\xff\x1a\x3",
        "\x2\xa\x2\xff\x1\xa\x12\xff\x1\xa\xc\xff\x1\x7\x1\x6\x1\xb\xa\x5" .
        "\x1\x9\x3\xff\x1\xc\x2\xff\x1a\x4\x4\xff\x1\x8\x1\xff\x1a\x4",
        "\x2\x13\x2\xff\x1\x13\x12\xff\x1\x13\xc\xff\x1\x10\x1\xf\x1\xb" .
        "\xa\xe\x1\x12\x2\xff\x1\x14\x1\xc\x2\xff\x1a\xd\x4\xff\x1\x11\x1" .
        "\xff\x1a\xd",
        "\x2\xa\x2\xff\x1\xa\x12\xff\x1\xa\xc\xff\x1\x7\x1\x6\x1\xb\xa\x5" .
        "\x1\x9\x3\xff\x1\xc\x2\xff\x1a\x4\x4\xff\x1\x8\x1\xff\x1a\x4",
        "\x2\xa\x2\xff\x1\xa\x12\xff\x1\xa\xc\xff\x1\x7\x1\x6\x1\xb\xa\x5" .
        "\x1\x9\x3\xff\x1\xc\x2\xff\x1a\x4\x4\xff\x1\x8\x1\xff\x1a\x4",
        "\x2\xa\x2\xff\x1\xa\x12\xff\x1\xa\xc\xff\x1\x7\x1\x6\x1\xb\xa\x5" .
        "\x1\x9\x3\xff\x1\xc\x2\xff\x1a\x4\x4\xff\x1\x8\x1\xff\x1a\x4",
        "\x2\x13\x2\xff\x1\x13\x12\xff\x1\x13\xc\xff\x1\x10\x1\xf\x1\xb" .
        "\xa\xe\x1\x12\x2\xff\x1\x14\x1\xc\x2\xff\x1a\xd\x4\xff\x1\x11\x1" .
        "\xff\x1a\xd",
        "\x2\x13\x2\xff\x1\x13\x12\xff\x1\x13\xc\xff\x1\x10\x1\xf\x1\xb" .
        "\xa\xe\x1\x12\x2\xff\x1\x14\x1\xc\x2\xff\x1a\xd\x4\xff\x1\x11\x1" .
        "\xff\x1a\xd",
        "\x2\xa\x2\xff\x1\xa\x12\xff\x1\xa\xe\xff\x1\xb\xa\xff\x1\x15\x3" .
        "\xff\x1\xc\x2\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "",
        "",
        "\x2\x13\x2\xff\x1\x13\x12\xff\x1\x13\xc\xff\x1\x10\x1\xf\x1\xb" .
        "\xa\xe\x1\x12\x2\xff\x1\x14\x1\xc\x2\xff\x1a\xd\x4\xff\x1\x11\x1" .
        "\xff\x1a\xd",
        "\x2\x13\x2\xff\x1\x13\x12\xff\x1\x13\xc\xff\x1\x10\x1\xf\x1\xb" .
        "\xa\xe\x1\x12\x2\xff\x1\x14\x1\xc\x2\xff\x1a\xd\x4\xff\x1\x11\x1" .
        "\xff\x1a\xd",
        "\x2\x13\x2\xff\x1\x13\x12\xff\x1\x13\xc\xff\x1\x10\x1\xf\x1\xb" .
        "\xa\xe\x1\x12\x2\xff\x1\x14\x1\xc\x2\xff\x1a\xd\x4\xff\x1\x11\x1" .
        "\xff\x1a\xd",
        "\x2\x13\x2\xff\x1\x13\x12\xff\x1\x13\xc\xff\x1\x10\x1\xf\x1\xb" .
        "\xa\xe\x1\x12\x2\xff\x1\x14\x1\xc\x2\xff\x1a\xd\x4\xff\x1\x11\x1" .
        "\xff\x1a\xd",
        "\x2\x13\x2\xff\x1\x13\x12\xff\x1\x13\xc\xff\x1\x10\x1\xf\x1\xb" .
        "\xa\xe\x1\x12\x2\xff\x1\x14\x1\xc\x2\xff\x1a\xd\x4\xff\x1\x11\x1" .
        "\xff\x1a\xd",
        "\x2\x13\x2\xff\x1\x13\x12\xff\x1\x13\xc\xff\x1\x10\x1\xf\x1\xb" .
        "\xa\xe\x1\x12\x2\xff\x1\x14\x1\xc\x2\xff\x1a\xd\x4\xff\x1\x11\x1" .
        "\xff\x1a\xd",
        "\x2\x13\x2\xff\x1\x13\x12\xff\x1\x13\xe\xff\x1\xb\xa\xff\x1\x15" .
        "\x2\xff\x1\x14\x1\xc\x2\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x2\x16\x2\xff\x1\x16\x12\xff\x1\x16\x1\xff\x1\x17\x4\xff\x1\x18",
        "\x2\x1f\x2\xff\x1\x1f\x12\xff\x1\x1f\xc\xff\x1\x1c\x1\x1b\x1\xff" .
        "\xa\x1a\x1\x1e\x2\xff\x1\x14\x3\xff\x1a\x19\x4\xff\x1\x1d\x1\xff" .
        "\x1a\x19",
        "\x2\x16\x2\xff\x1\x16\x12\xff\x1\x16\x1\xff\x1\x17\x4\xff\x1\x18",
        "\x22\x20\x1\x21\xdd\x20",
        "\x27\x22\x1\x23\xd8\x22",
        "\x2\x1f\x2\xff\x1\x1f\x12\xff\x1\x1f\xc\xff\x1\x1c\x1\x1b\x1\xff" .
        "\xa\x1a\x1\x1e\x2\xff\x1\x14\x3\xff\x1a\x19\x4\xff\x1\x1d\x1\xff" .
        "\x1a\x19",
        "\x2\x1f\x2\xff\x1\x1f\x12\xff\x1\x1f\xc\xff\x1\x1c\x1\x1b\x1\xff" .
        "\xa\x1a\x1\x1e\x2\xff\x1\x14\x3\xff\x1a\x19\x4\xff\x1\x1d\x1\xff" .
        "\x1a\x19",
        "\x2\x1f\x2\xff\x1\x1f\x12\xff\x1\x1f\xc\xff\x1\x1c\x1\x1b\x1\xff" .
        "\xa\x1a\x1\x1e\x2\xff\x1\x14\x3\xff\x1a\x19\x4\xff\x1\x1d\x1\xff" .
        "\x1a\x19",
        "\x2\x1f\x2\xff\x1\x1f\x12\xff\x1\x1f\xc\xff\x1\x1c\x1\x1b\x1\xff" .
        "\xa\x1a\x1\x1e\x2\xff\x1\x14\x3\xff\x1a\x19\x4\xff\x1\x1d\x1\xff" .
        "\x1a\x19",
        "\x2\x1f\x2\xff\x1\x1f\x12\xff\x1\x1f\xc\xff\x1\x1c\x1\x1b\x1\xff" .
        "\xa\x1a\x1\x1e\x2\xff\x1\x14\x3\xff\x1a\x19\x4\xff\x1\x1d\x1\xff" .
        "\x1a\x19",
        "\x2\x1f\x2\xff\x1\x1f\x12\xff\x1\x1f\xc\xff\x1\x1c\x1\x1b\x1\xff" .
        "\xa\x1a\x1\x1e\x2\xff\x1\x14\x3\xff\x1a\x19\x4\xff\x1\x1d\x1\xff" .
        "\x1a\x19",
        "\x2\x1f\x2\xff\x1\x1f\x12\xff\x1\x1f\x1c\xff\x1\x14",
        "\x22\x20\x1\x21\xdd\x20",
        "\x2\x24\x2\xff\x1\x24\x12\xff\x1\x24\xe\xff\x1\xb\xa\xff\x1\x15" .
        "\x3\xff\x1\xc\x2\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x27\x22\x1\x23\xd8\x22",
        "\x2\x24\x2\xff\x1\x24\x12\xff\x1\x24\xe\xff\x1\xb\xa\xff\x1\x15" .
        "\x3\xff\x1\xc\x2\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15",
        "\x2\x24\x2\xff\x1\x24\x12\xff\x1\x24\xe\xff\x1\xb\xa\xff\x1\x15" .
        "\x3\xff\x1\xc\x2\xff\x1a\x15\x4\xff\x1\x15\x1\xff\x1a\x15"
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

class t012lexerXMLLexer_DFA18 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t012lexerXMLLexer_DFA18_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 18;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "61:7: ( START_TAG ( ELEMENT | t= PCDATA | t= CDATA | t= COMMENT | pi= PI )* END_TAG | EMPTY_ELEMENT )";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA18_23 = $input->LA(1);

                    $s = -1;
                    if ( (($LA18_23>=$this->getToken('0') && $LA18_23<=$this->getToken('33'))||($LA18_23>=$this->getToken('35') && $LA18_23<=$this->getToken('65535'))) ) {$s = 32;}

                    else if ( ($LA18_23==$this->getToken('34')) ) {$s = 33;}

                    if ( $s>=0 ) return $s;
                    break;
                case 1 : 
                    $LA18_34 = $input->LA(1);

                    $s = -1;
                    if ( ($LA18_34==$this->getToken('39')) ) {$s = 35;}

                    else if ( (($LA18_34>=$this->getToken('0') && $LA18_34<=$this->getToken('38'))||($LA18_34>=$this->getToken('40') && $LA18_34<=$this->getToken('65535'))) ) {$s = 34;}

                    if ( $s>=0 ) return $s;
                    break;
                case 2 : 
                    $LA18_24 = $input->LA(1);

                    $s = -1;
                    if ( (($LA18_24>=$this->getToken('0') && $LA18_24<=$this->getToken('38'))||($LA18_24>=$this->getToken('40') && $LA18_24<=$this->getToken('65535'))) ) {$s = 34;}

                    else if ( ($LA18_24==$this->getToken('39')) ) {$s = 35;}

                    if ( $s>=0 ) return $s;
                    break;
                case 3 : 
                    $LA18_32 = $input->LA(1);

                    $s = -1;
                    if ( ($LA18_32==$this->getToken('34')) ) {$s = 33;}

                    else if ( (($LA18_32>=$this->getToken('0') && $LA18_32<=$this->getToken('33'))||($LA18_32>=$this->getToken('35') && $LA18_32<=$this->getToken('65535'))) ) {$s = 32;}

                    if ( $s>=0 ) return $s;
                    break;
        }
        $nvae =
            new NoViableAltException($this->getDescription(), 18, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
 

class t012lexerXMLLexer extends Lexer {
    const T_CDATA=16;
    const T_END_TAG=18;
    const T_EMPTY_ELEMENT=19;
    const T_LETTER=20;
    const T_ATTRIBUTE=12;
    const T_XMLDECL=4;
    const T_START_TAG=14;
    const T_VALUE=10;
    const T_INTERNAL_DTD=11;
    const T_EOF=-1;
    const T_PCDATA=15;
    const T_WS=5;
    const T_DOCUMENT=8;
    const T_GENERIC_ID=9;
    const T_ELEMENT=7;
    const T_DOCTYPE=6;
    const T_PI=13;
    const T_COMMENT=17;

    function output($line){
        $this->buf=$this->buf.$line."\n";
    }


    // delegates
    // delegators

    function __construct($input, $state=null){
        parent::__construct($input,$state);



        	$this->buf = "";

            $this->dfa18 = new t012lexerXMLLexer_DFA18($this);
    }
    function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g"; }

    // $ANTLR start "DOCUMENT"
    function mDOCUMENT(){
        try {
            $_type = t012lexerXMLLexer::T_DOCUMENT;
            $_channel = t012lexerXMLLexer::DEFAULT_TOKEN_CHANNEL;
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt1=2;
            $LA1_0 = $this->input->LA(1);

            if ( ($LA1_0==$this->getToken('60')) ) {
                $LA1_1 = $this->input->LA(2);

                if ( ($LA1_1==$this->getToken('63')) ) {
                    $alt1=1;
                }
            }
            switch ($alt1) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mXMLDECL(); 

                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt2=2;
            $LA2_0 = $this->input->LA(1);

            if ( (($LA2_0>=$this->getToken('9') && $LA2_0<=$this->getToken('10'))||$LA2_0==$this->getToken('13')||$LA2_0==$this->getToken('32')) ) {
                $alt2=1;
            }
            switch ($alt2) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt3=2;
            $LA3_0 = $this->input->LA(1);

            if ( ($LA3_0==$this->getToken('60')) ) {
                $LA3_1 = $this->input->LA(2);

                if ( ($LA3_1==$this->getToken('33')) ) {
                    $alt3=1;
                }
            }
            switch ($alt3) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mDOCTYPE(); 

                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt4=2;
            $LA4_0 = $this->input->LA(1);

            if ( (($LA4_0>=$this->getToken('9') && $LA4_0<=$this->getToken('10'))||$LA4_0==$this->getToken('13')||$LA4_0==$this->getToken('32')) ) {
                $alt4=1;
            }
            switch ($alt4) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

            $this->mELEMENT(); 
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt5=2;
            $LA5_0 = $this->input->LA(1);

            if ( (($LA5_0>=$this->getToken('9') && $LA5_0<=$this->getToken('10'))||$LA5_0==$this->getToken('13')||$LA5_0==$this->getToken('32')) ) {
                $alt5=1;
            }
            switch ($alt5) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }


            }

            $this->state->type = $_type;
            $this->state->channel = $_channel;
        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "DOCUMENT"

    // $ANTLR start "DOCTYPE"
    function mDOCTYPE(){
        try {
            $rootElementName=null;
            $sys1=null;
            $pub=null;
            $sys2=null;
            $dtd=null;

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            $this->matchString("<!DOCTYPE"); 

            $this->mWS(); 
            $rootElementNameStart103 = $this->getCharIndex();
            $this->mGENERIC_ID(); 
            $rootElementName = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $rootElementNameStart103, $this->getCharIndex()-1);
              $this->output("ROOTELEMENT: ". ($rootElementName!=null?$rootElementName->getText():null));
            $this->mWS(); 
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt8=2;
            $LA8_0 = $this->input->LA(1);

            if ( ($LA8_0==$this->getToken('80')||$LA8_0==$this->getToken('83')) ) {
                $alt8=1;
            }
            switch ($alt8) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    $alt6=2;
                    $LA6_0 = $this->input->LA(1);

                    if ( ($LA6_0==$this->getToken('83')) ) {
                        $alt6=1;
                    }
                    else if ( ($LA6_0==$this->getToken('80')) ) {
                        $alt6=2;
                    }
                    else {
                        $nvae = new NoViableAltException("", 6, 0, $this->input);

                        throw $nvae;
                    }
                    switch ($alt6) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                            {
                            $this->matchString("SYSTEM"); 

                            $this->mWS(); 
                            $sys1Start157 = $this->getCharIndex();
                            $this->mVALUE(); 
                            $sys1 = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $sys1Start157, $this->getCharIndex()-1);
                              $this->output("SYSTEM: ".($sys1!=null?$sys1->getText():null));

                            }
                            break;
                        case 2 :
                            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                            {
                            $this->matchString("PUBLIC"); 

                            $this->mWS(); 
                            $pubStart214 = $this->getCharIndex();
                            $this->mVALUE(); 
                            $pub = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $pubStart214, $this->getCharIndex()-1);
                            $this->mWS(); 
                            $sys2Start220 = $this->getCharIndex();
                            $this->mVALUE(); 
                            $sys2 = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $sys2Start220, $this->getCharIndex()-1);
                              $this->output("PUBLIC: ". ($pub!=null?$pub->getText():null));
                              $this->output("SYSTEM: ". ($sys2!=null?$sys2->getText():null));

                            }
                            break;

                    }

                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    $alt7=2;
                    $LA7_0 = $this->input->LA(1);

                    if ( (($LA7_0>=$this->getToken('9') && $LA7_0<=$this->getToken('10'))||$LA7_0==$this->getToken('13')||$LA7_0==$this->getToken('32')) ) {
                        $alt7=1;
                    }
                    switch ($alt7) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                            {
                            $this->mWS(); 

                            }
                            break;

                    }


                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt9=2;
            $LA9_0 = $this->input->LA(1);

            if ( ($LA9_0==$this->getToken('91')) ) {
                $alt9=1;
            }
            switch ($alt9) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $dtdStart317 = $this->getCharIndex();
                    $this->mINTERNAL_DTD(); 
                    $dtd = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $dtdStart317, $this->getCharIndex()-1);
                      $this->output("INTERNAL DTD: ". ($dtd!=null?$dtd->getText():null));

                    }
                    break;

            }

            $this->matchChar(62); 

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "DOCTYPE"

    // $ANTLR start "INTERNAL_DTD"
    function mINTERNAL_DTD(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            $this->matchChar(91); 
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            //loop10:
            do {
                $alt10=2;
                $LA10_0 = $this->input->LA(1);

                if ( ($LA10_0==$this->getToken('93')) ) {
                    $alt10=2;
                }
                else if ( (($LA10_0>=$this->getToken('0') && $LA10_0<=$this->getToken('92'))||($LA10_0>=$this->getToken('94') && $LA10_0<=$this->getToken('65535'))) ) {
                    $alt10=1;
                }


                switch ($alt10) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->matchAny(); 

            	    }
            	    break;

            	default :
            	    break 2;//loop10;
                }
            } while (true);

            $this->matchChar(93); 

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "INTERNAL_DTD"

    // $ANTLR start "PI"
    function mPI(){
        try {
            $target=null;

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            $this->matchString("<?"); 

            $targetStart397 = $this->getCharIndex();
            $this->mGENERIC_ID(); 
            $target = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $targetStart397, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt11=2;
            $LA11_0 = $this->input->LA(1);

            if ( (($LA11_0>=$this->getToken('9') && $LA11_0<=$this->getToken('10'))||$LA11_0==$this->getToken('13')||$LA11_0==$this->getToken('32')) ) {
                $alt11=1;
            }
            switch ($alt11) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

              $this->output("PI: ". ($target!=null?$target->getText():null));
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            //loop13:
            do {
                $alt13=2;
                $LA13_0 = $this->input->LA(1);

                if ( ($LA13_0==$this->getToken('58')||($LA13_0>=$this->getToken('65') && $LA13_0<=$this->getToken('90'))||$LA13_0==$this->getToken('95')||($LA13_0>=$this->getToken('97') && $LA13_0<=$this->getToken('122'))) ) {
                    $alt13=1;
                }


                switch ($alt13) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->mATTRIBUTE(); 
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    $alt12=2;
            	    $LA12_0 = $this->input->LA(1);

            	    if ( (($LA12_0>=$this->getToken('9') && $LA12_0<=$this->getToken('10'))||$LA12_0==$this->getToken('13')||$LA12_0==$this->getToken('32')) ) {
            	        $alt12=1;
            	    }
            	    switch ($alt12) {
            	        case 1 :
            	            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	            {
            	            $this->mWS(); 

            	            }
            	            break;

            	    }


            	    }
            	    break;

            	default :
            	    break 2;//loop13;
                }
            } while (true);

            $this->matchString("?>"); 


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "PI"

    // $ANTLR start "XMLDECL"
    function mXMLDECL(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            $this->matchString("<?"); 

            if ( $this->input->LA(1)==$this->getToken('88')||$this->input->LA(1)==$this->getToken('120') ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            if ( $this->input->LA(1)==$this->getToken('77')||$this->input->LA(1)==$this->getToken('109') ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            if ( $this->input->LA(1)==$this->getToken('76')||$this->input->LA(1)==$this->getToken('108') ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt14=2;
            $LA14_0 = $this->input->LA(1);

            if ( (($LA14_0>=$this->getToken('9') && $LA14_0<=$this->getToken('10'))||$LA14_0==$this->getToken('13')||$LA14_0==$this->getToken('32')) ) {
                $alt14=1;
            }
            switch ($alt14) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

              $this->output("XML declaration");
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            //loop16:
            do {
                $alt16=2;
                $LA16_0 = $this->input->LA(1);

                if ( ($LA16_0==$this->getToken('58')||($LA16_0>=$this->getToken('65') && $LA16_0<=$this->getToken('90'))||$LA16_0==$this->getToken('95')||($LA16_0>=$this->getToken('97') && $LA16_0<=$this->getToken('122'))) ) {
                    $alt16=1;
                }


                switch ($alt16) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->mATTRIBUTE(); 
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    $alt15=2;
            	    $LA15_0 = $this->input->LA(1);

            	    if ( (($LA15_0>=$this->getToken('9') && $LA15_0<=$this->getToken('10'))||$LA15_0==$this->getToken('13')||$LA15_0==$this->getToken('32')) ) {
            	        $alt15=1;
            	    }
            	    switch ($alt15) {
            	        case 1 :
            	            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	            {
            	            $this->mWS(); 

            	            }
            	            break;

            	    }


            	    }
            	    break;

            	default :
            	    break 2;//loop16;
                }
            } while (true);

            $this->matchString("?>"); 


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "XMLDECL"

    // $ANTLR start "ELEMENT"
    function mELEMENT(){
        try {
            $t=null;
            $pi=null;

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt18=2;
            $alt18 = $this->dfa18->predict($this->input);
            switch ($alt18) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mSTART_TAG(); 
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    //loop17:
                    do {
                        $alt17=6;
                        $LA17_0 = $this->input->LA(1);

                        if ( ($LA17_0==$this->getToken('60')) ) {
                            $LA17 = $this->input->LA(2);
                            if($this->getToken('33')== $LA17)
                                {
                                $LA17_4 = $this->input->LA(3);

                                if ( ($LA17_4==$this->getToken('91')) ) {
                                    $alt17=3;
                                }
                                else if ( ($LA17_4==$this->getToken('45')) ) {
                                    $alt17=4;
                                }


                                }
                            else if($this->getToken('63')== $LA17)
                                {
                                $alt17=5;
                                }
                            else if($this->getToken('9')== $LA17||$this->getToken('10')== $LA17||$this->getToken('13')== $LA17||$this->getToken('32')== $LA17||$this->getToken('58')== $LA17||$this->getToken('65')== $LA17||$this->getToken('66')== $LA17||$this->getToken('67')== $LA17||$this->getToken('68')== $LA17||$this->getToken('69')== $LA17||$this->getToken('70')== $LA17||$this->getToken('71')== $LA17||$this->getToken('72')== $LA17||$this->getToken('73')== $LA17||$this->getToken('74')== $LA17||$this->getToken('75')== $LA17||$this->getToken('76')== $LA17||$this->getToken('77')== $LA17||$this->getToken('78')== $LA17||$this->getToken('79')== $LA17||$this->getToken('80')== $LA17||$this->getToken('81')== $LA17||$this->getToken('82')== $LA17||$this->getToken('83')== $LA17||$this->getToken('84')== $LA17||$this->getToken('85')== $LA17||$this->getToken('86')== $LA17||$this->getToken('87')== $LA17||$this->getToken('88')== $LA17||$this->getToken('89')== $LA17||$this->getToken('90')== $LA17||$this->getToken('95')== $LA17||$this->getToken('97')== $LA17||$this->getToken('98')== $LA17||$this->getToken('99')== $LA17||$this->getToken('100')== $LA17||$this->getToken('101')== $LA17||$this->getToken('102')== $LA17||$this->getToken('103')== $LA17||$this->getToken('104')== $LA17||$this->getToken('105')== $LA17||$this->getToken('106')== $LA17||$this->getToken('107')== $LA17||$this->getToken('108')== $LA17||$this->getToken('109')== $LA17||$this->getToken('110')== $LA17||$this->getToken('111')== $LA17||$this->getToken('112')== $LA17||$this->getToken('113')== $LA17||$this->getToken('114')== $LA17||$this->getToken('115')== $LA17||$this->getToken('116')== $LA17||$this->getToken('117')== $LA17||$this->getToken('118')== $LA17||$this->getToken('119')== $LA17||$this->getToken('120')== $LA17||$this->getToken('121')== $LA17||$this->getToken('122')== $LA17)
                                {
                                $alt17=1;
                                }



                        }
                        else if ( (($LA17_0>=$this->getToken('0') && $LA17_0<=$this->getToken('59'))||($LA17_0>=$this->getToken('61') && $LA17_0<=$this->getToken('65535'))) ) {
                            $alt17=2;
                        }


                        switch ($alt17) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    	    {
                    	    $this->mELEMENT(); 

                    	    }
                    	    break;
                    	case 2 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    	    {
                    	    $tStart561 = $this->getCharIndex();
                    	    $this->mPCDATA(); 
                    	    $t = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $tStart561, $this->getCharIndex()-1);
                    	      $this->output("PCDATA: \"". ($t!=null?$t->getText():null) ."\"");

                    	    }
                    	    break;
                    	case 3 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    	    {
                    	    $tStart597 = $this->getCharIndex();
                    	    $this->mCDATA(); 
                    	    $t = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $tStart597, $this->getCharIndex()-1);
                    	      $this->output("CDATA: \"". ($t!=null?$t->getText():null) ."\"");

                    	    }
                    	    break;
                    	case 4 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    	    {
                    	    $tStart633 = $this->getCharIndex();
                    	    $this->mCOMMENT(); 
                    	    $t = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $tStart633, $this->getCharIndex()-1);
                    	      $this->output("Comment: \"". ($t!=null?$t->getText():null) ."\"");

                    	    }
                    	    break;
                    	case 5 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    	    {
                    	    $piStart669 = $this->getCharIndex();
                    	    $this->mPI(); 
                    	    $pi = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $piStart669, $this->getCharIndex()-1);

                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop17;
                        }
                    } while (true);

                    $this->mEND_TAG(); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mEMPTY_ELEMENT(); 

                    }
                    break;

            }


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ELEMENT"

    // $ANTLR start "START_TAG"
    function mSTART_TAG(){
        try {
            $name=null;

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            $this->matchChar(60); 
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt19=2;
            $LA19_0 = $this->input->LA(1);

            if ( (($LA19_0>=$this->getToken('9') && $LA19_0<=$this->getToken('10'))||$LA19_0==$this->getToken('13')||$LA19_0==$this->getToken('32')) ) {
                $alt19=1;
            }
            switch ($alt19) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

            $nameStart747 = $this->getCharIndex();
            $this->mGENERIC_ID(); 
            $name = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $nameStart747, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt20=2;
            $LA20_0 = $this->input->LA(1);

            if ( (($LA20_0>=$this->getToken('9') && $LA20_0<=$this->getToken('10'))||$LA20_0==$this->getToken('13')||$LA20_0==$this->getToken('32')) ) {
                $alt20=1;
            }
            switch ($alt20) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

              $this->output("Start Tag: ".($name!=null?$name->getText():null));
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            //loop22:
            do {
                $alt22=2;
                $LA22_0 = $this->input->LA(1);

                if ( ($LA22_0==$this->getToken('58')||($LA22_0>=$this->getToken('65') && $LA22_0<=$this->getToken('90'))||$LA22_0==$this->getToken('95')||($LA22_0>=$this->getToken('97') && $LA22_0<=$this->getToken('122'))) ) {
                    $alt22=1;
                }


                switch ($alt22) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->mATTRIBUTE(); 
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    $alt21=2;
            	    $LA21_0 = $this->input->LA(1);

            	    if ( (($LA21_0>=$this->getToken('9') && $LA21_0<=$this->getToken('10'))||$LA21_0==$this->getToken('13')||$LA21_0==$this->getToken('32')) ) {
            	        $alt21=1;
            	    }
            	    switch ($alt21) {
            	        case 1 :
            	            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	            {
            	            $this->mWS(); 

            	            }
            	            break;

            	    }


            	    }
            	    break;

            	default :
            	    break 2;//loop22;
                }
            } while (true);

            $this->matchChar(62); 

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "START_TAG"

    // $ANTLR start "EMPTY_ELEMENT"
    function mEMPTY_ELEMENT(){
        try {
            $name=null;

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            $this->matchChar(60); 
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt23=2;
            $LA23_0 = $this->input->LA(1);

            if ( (($LA23_0>=$this->getToken('9') && $LA23_0<=$this->getToken('10'))||$LA23_0==$this->getToken('13')||$LA23_0==$this->getToken('32')) ) {
                $alt23=1;
            }
            switch ($alt23) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

            $nameStart809 = $this->getCharIndex();
            $this->mGENERIC_ID(); 
            $name = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $nameStart809, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt24=2;
            $LA24_0 = $this->input->LA(1);

            if ( (($LA24_0>=$this->getToken('9') && $LA24_0<=$this->getToken('10'))||$LA24_0==$this->getToken('13')||$LA24_0==$this->getToken('32')) ) {
                $alt24=1;
            }
            switch ($alt24) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

              $this->output("Empty Element: ".($name!=null?$name->getText():null));
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            //loop26:
            do {
                $alt26=2;
                $LA26_0 = $this->input->LA(1);

                if ( ($LA26_0==$this->getToken('58')||($LA26_0>=$this->getToken('65') && $LA26_0<=$this->getToken('90'))||$LA26_0==$this->getToken('95')||($LA26_0>=$this->getToken('97') && $LA26_0<=$this->getToken('122'))) ) {
                    $alt26=1;
                }


                switch ($alt26) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->mATTRIBUTE(); 
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    $alt25=2;
            	    $LA25_0 = $this->input->LA(1);

            	    if ( (($LA25_0>=$this->getToken('9') && $LA25_0<=$this->getToken('10'))||$LA25_0==$this->getToken('13')||$LA25_0==$this->getToken('32')) ) {
            	        $alt25=1;
            	    }
            	    switch ($alt25) {
            	        case 1 :
            	            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	            {
            	            $this->mWS(); 

            	            }
            	            break;

            	    }


            	    }
            	    break;

            	default :
            	    break 2;//loop26;
                }
            } while (true);

            $this->matchString("/>"); 


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "EMPTY_ELEMENT"

    // $ANTLR start "ATTRIBUTE"
    function mATTRIBUTE(){
        try {
            $name=null;
            $value=null;

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            $nameStart866 = $this->getCharIndex();
            $this->mGENERIC_ID(); 
            $name = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $nameStart866, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt27=2;
            $LA27_0 = $this->input->LA(1);

            if ( (($LA27_0>=$this->getToken('9') && $LA27_0<=$this->getToken('10'))||$LA27_0==$this->getToken('13')||$LA27_0==$this->getToken('32')) ) {
                $alt27=1;
            }
            switch ($alt27) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

            $this->matchChar(61); 
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt28=2;
            $LA28_0 = $this->input->LA(1);

            if ( (($LA28_0>=$this->getToken('9') && $LA28_0<=$this->getToken('10'))||$LA28_0==$this->getToken('13')||$LA28_0==$this->getToken('32')) ) {
                $alt28=1;
            }
            switch ($alt28) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

            $valueStart878 = $this->getCharIndex();
            $this->mVALUE(); 
            $value = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $valueStart878, $this->getCharIndex()-1);
              $this->output("Attr: ".($name!=null?$name->getText():null)."=".($value!=null?$value->getText():null));

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "ATTRIBUTE"

    // $ANTLR start "END_TAG"
    function mEND_TAG(){
        try {
            $name=null;

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            $this->matchString("</"); 

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt29=2;
            $LA29_0 = $this->input->LA(1);

            if ( (($LA29_0>=$this->getToken('9') && $LA29_0<=$this->getToken('10'))||$LA29_0==$this->getToken('13')||$LA29_0==$this->getToken('32')) ) {
                $alt29=1;
            }
            switch ($alt29) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

            $nameStart915 = $this->getCharIndex();
            $this->mGENERIC_ID(); 
            $name = new CommonToken($this->input, Token::INVALID_TOKEN_TYPE, Token::DEFAULT_CHANNEL, $nameStart915, $this->getCharIndex()-1);
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt30=2;
            $LA30_0 = $this->input->LA(1);

            if ( (($LA30_0>=$this->getToken('9') && $LA30_0<=$this->getToken('10'))||$LA30_0==$this->getToken('13')||$LA30_0==$this->getToken('32')) ) {
                $alt30=1;
            }
            switch ($alt30) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->mWS(); 

                    }
                    break;

            }

            $this->matchChar(62); 
              $this->output("End Tag: ".($name!=null?$name->getText():null));

            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "END_TAG"

    // $ANTLR start "COMMENT"
    function mCOMMENT(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            $this->matchString("<!--"); 

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            //loop31:
            do {
                $alt31=2;
                $LA31_0 = $this->input->LA(1);

                if ( ($LA31_0==$this->getToken('45')) ) {
                    $LA31_1 = $this->input->LA(2);

                    if ( ($LA31_1==$this->getToken('45')) ) {
                        $LA31_3 = $this->input->LA(3);

                        if ( ($LA31_3==$this->getToken('62')) ) {
                            $alt31=2;
                        }
                        else if ( (($LA31_3>=$this->getToken('0') && $LA31_3<=$this->getToken('61'))||($LA31_3>=$this->getToken('63') && $LA31_3<=$this->getToken('65535'))) ) {
                            $alt31=1;
                        }


                    }
                    else if ( (($LA31_1>=$this->getToken('0') && $LA31_1<=$this->getToken('44'))||($LA31_1>=$this->getToken('46') && $LA31_1<=$this->getToken('65535'))) ) {
                        $alt31=1;
                    }


                }
                else if ( (($LA31_0>=$this->getToken('0') && $LA31_0<=$this->getToken('44'))||($LA31_0>=$this->getToken('46') && $LA31_0<=$this->getToken('65535'))) ) {
                    $alt31=1;
                }


                switch ($alt31) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->matchAny(); 

            	    }
            	    break;

            	default :
            	    break 2;//loop31;
                }
            } while (true);

            $this->matchString("-->"); 


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "COMMENT"

    // $ANTLR start "CDATA"
    function mCDATA(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            $this->matchString("<![CDATA["); 

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            //loop32:
            do {
                $alt32=2;
                $LA32_0 = $this->input->LA(1);

                if ( ($LA32_0==$this->getToken('93')) ) {
                    $LA32_1 = $this->input->LA(2);

                    if ( ($LA32_1==$this->getToken('93')) ) {
                        $LA32_3 = $this->input->LA(3);

                        if ( ($LA32_3==$this->getToken('62')) ) {
                            $alt32=2;
                        }
                        else if ( (($LA32_3>=$this->getToken('0') && $LA32_3<=$this->getToken('61'))||($LA32_3>=$this->getToken('63') && $LA32_3<=$this->getToken('65535'))) ) {
                            $alt32=1;
                        }


                    }
                    else if ( (($LA32_1>=$this->getToken('0') && $LA32_1<=$this->getToken('92'))||($LA32_1>=$this->getToken('94') && $LA32_1<=$this->getToken('65535'))) ) {
                        $alt32=1;
                    }


                }
                else if ( (($LA32_0>=$this->getToken('0') && $LA32_0<=$this->getToken('92'))||($LA32_0>=$this->getToken('94') && $LA32_0<=$this->getToken('65535'))) ) {
                    $alt32=1;
                }


                switch ($alt32) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->matchAny(); 

            	    }
            	    break;

            	default :
            	    break 2;//loop32;
                }
            } while (true);

            $this->matchString("]]>"); 


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "CDATA"

    // $ANTLR start "PCDATA"
    function mPCDATA(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $cnt33=0;
            //loop33:
            do {
                $alt33=2;
                $LA33_0 = $this->input->LA(1);

                if ( (($LA33_0>=$this->getToken('0') && $LA33_0<=$this->getToken('59'))||($LA33_0>=$this->getToken('61') && $LA33_0<=$this->getToken('65535'))) ) {
                    $alt33=1;
                }


                switch ($alt33) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('59'))||($this->input->LA(1)>=$this->getToken('61') && $this->input->LA(1)<=$this->getToken('65535')) ) {
            	        $this->input->consume();

            	    } else {
            	        $mse = new MismatchedSetException(null,$this->input);
            	        $this->recover($mse);
            	        throw $mse;}


            	    }
            	    break;

            	default :
            	    if ( $cnt33 >= 1 ) break 2;//loop33;
                        $eee =
                            new EarlyExitException(33, $this->input);
                        throw $eee;
                }
                $cnt33++;
            } while (true);


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "PCDATA"

    // $ANTLR start "VALUE"
    function mVALUE(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $alt36=2;
            $LA36_0 = $this->input->LA(1);

            if ( ($LA36_0==$this->getToken('34')) ) {
                $alt36=1;
            }
            else if ( ($LA36_0==$this->getToken('39')) ) {
                $alt36=2;
            }
            else {
                $nvae = new NoViableAltException("", 36, 0, $this->input);

                throw $nvae;
            }
            switch ($alt36) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->matchChar(34); 
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    //loop34:
                    do {
                        $alt34=2;
                        $LA34_0 = $this->input->LA(1);

                        if ( (($LA34_0>=$this->getToken('0') && $LA34_0<=$this->getToken('33'))||($LA34_0>=$this->getToken('35') && $LA34_0<=$this->getToken('65535'))) ) {
                            $alt34=1;
                        }


                        switch ($alt34) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    	    {
                    	    if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('33'))||($this->input->LA(1)>=$this->getToken('35') && $this->input->LA(1)<=$this->getToken('65535')) ) {
                    	        $this->input->consume();

                    	    } else {
                    	        $mse = new MismatchedSetException(null,$this->input);
                    	        $this->recover($mse);
                    	        throw $mse;}


                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop34;
                        }
                    } while (true);

                    $this->matchChar(34); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    {
                    $this->matchChar(39); 
                    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    //loop35:
                    do {
                        $alt35=2;
                        $LA35_0 = $this->input->LA(1);

                        if ( (($LA35_0>=$this->getToken('0') && $LA35_0<=$this->getToken('38'))||($LA35_0>=$this->getToken('40') && $LA35_0<=$this->getToken('65535'))) ) {
                            $alt35=1;
                        }


                        switch ($alt35) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
                    	    {
                    	    if ( ($this->input->LA(1)>=$this->getToken('0') && $this->input->LA(1)<=$this->getToken('38'))||($this->input->LA(1)>=$this->getToken('40') && $this->input->LA(1)<=$this->getToken('65535')) ) {
                    	        $this->input->consume();

                    	    } else {
                    	        $mse = new MismatchedSetException(null,$this->input);
                    	        $this->recover($mse);
                    	        throw $mse;}


                    	    }
                    	    break;

                    	default :
                    	    break 2;//loop35;
                        }
                    } while (true);

                    $this->matchChar(39); 

                    }
                    break;

            }


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "VALUE"

    // $ANTLR start "GENERIC_ID"
    function mGENERIC_ID(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            if ( $this->input->LA(1)==$this->getToken('58')||($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||$this->input->LA(1)==$this->getToken('95')||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}

            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            //loop37:
            do {
                $alt37=7;
                $LA37 = $this->input->LA(1);
                if($this->getToken('65')== $LA37||$this->getToken('66')== $LA37||$this->getToken('67')== $LA37||$this->getToken('68')== $LA37||$this->getToken('69')== $LA37||$this->getToken('70')== $LA37||$this->getToken('71')== $LA37||$this->getToken('72')== $LA37||$this->getToken('73')== $LA37||$this->getToken('74')== $LA37||$this->getToken('75')== $LA37||$this->getToken('76')== $LA37||$this->getToken('77')== $LA37||$this->getToken('78')== $LA37||$this->getToken('79')== $LA37||$this->getToken('80')== $LA37||$this->getToken('81')== $LA37||$this->getToken('82')== $LA37||$this->getToken('83')== $LA37||$this->getToken('84')== $LA37||$this->getToken('85')== $LA37||$this->getToken('86')== $LA37||$this->getToken('87')== $LA37||$this->getToken('88')== $LA37||$this->getToken('89')== $LA37||$this->getToken('90')== $LA37||$this->getToken('97')== $LA37||$this->getToken('98')== $LA37||$this->getToken('99')== $LA37||$this->getToken('100')== $LA37||$this->getToken('101')== $LA37||$this->getToken('102')== $LA37||$this->getToken('103')== $LA37||$this->getToken('104')== $LA37||$this->getToken('105')== $LA37||$this->getToken('106')== $LA37||$this->getToken('107')== $LA37||$this->getToken('108')== $LA37||$this->getToken('109')== $LA37||$this->getToken('110')== $LA37||$this->getToken('111')== $LA37||$this->getToken('112')== $LA37||$this->getToken('113')== $LA37||$this->getToken('114')== $LA37||$this->getToken('115')== $LA37||$this->getToken('116')== $LA37||$this->getToken('117')== $LA37||$this->getToken('118')== $LA37||$this->getToken('119')== $LA37||$this->getToken('120')== $LA37||$this->getToken('121')== $LA37||$this->getToken('122')== $LA37)
                    {
                    $alt37=1;
                    }
                else if($this->getToken('48')== $LA37||$this->getToken('49')== $LA37||$this->getToken('50')== $LA37||$this->getToken('51')== $LA37||$this->getToken('52')== $LA37||$this->getToken('53')== $LA37||$this->getToken('54')== $LA37||$this->getToken('55')== $LA37||$this->getToken('56')== $LA37||$this->getToken('57')== $LA37)
                    {
                    $alt37=2;
                    }
                else if($this->getToken('46')== $LA37)
                    {
                    $alt37=3;
                    }
                else if($this->getToken('45')== $LA37)
                    {
                    $alt37=4;
                    }
                else if($this->getToken('95')== $LA37)
                    {
                    $alt37=5;
                    }
                else if($this->getToken('58')== $LA37)
                    {
                    $alt37=6;
                    }



                switch ($alt37) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->mLETTER(); 

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->matchRange(48,57); 

            	    }
            	    break;
            	case 3 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->matchChar(46); 

            	    }
            	    break;
            	case 4 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->matchChar(45); 

            	    }
            	    break;
            	case 5 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->matchChar(95); 

            	    }
            	    break;
            	case 6 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            	    {
            	    $this->matchChar(58); 

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
    // $ANTLR end "GENERIC_ID"

    // $ANTLR start "LETTER"
    function mLETTER(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('65') && $this->input->LA(1)<=$this->getToken('90'))||($this->input->LA(1)>=$this->getToken('97') && $this->input->LA(1)<=$this->getToken('122')) ) {
                $this->input->consume();

            } else {
                $mse = new MismatchedSetException(null,$this->input);
                $this->recover($mse);
                throw $mse;}


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "LETTER"

    // $ANTLR start "WS"
    function mWS(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
            $cnt38=0;
            //loop38:
            do {
                $alt38=2;
                $LA38_0 = $this->input->LA(1);

                if ( (($LA38_0>=$this->getToken('9') && $LA38_0<=$this->getToken('10'))||$LA38_0==$this->getToken('13')||$LA38_0==$this->getToken('32')) ) {
                    $alt38=1;
                }


                switch ($alt38) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
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
            	    if ( $cnt38 >= 1 ) break 2;//loop38;
                        $eee =
                            new EarlyExitException(38, $this->input);
                        throw $eee;
                }
                $cnt38++;
            } while (true);


            }

        }
        catch(Exception $e){
            throw $e;
        }
    }
    // $ANTLR end "WS"

    function mTokens(){
        // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
        // runtime/Php/test/Antlr/Tests/grammers/t012lexerXMLLexer.g
        {
        $this->mDOCUMENT(); 

        }


    }



}
?>
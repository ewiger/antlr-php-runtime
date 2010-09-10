<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g 2010-09-10 19:39:34


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

class t030specialStatesParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "NAME", "WS", "NUMBER"
    );
    public $NAME=4;
    public $WS=5;
    public $EOF=-1;
    public $NUMBER=6;

    // delegates
    // delegators


    static public $FOLLOW_NAME_in_r43 = array(5 => 5);
    static public $FOLLOW_NAME_in_r57 = array(5 => 5);
    static public $FOLLOW_WS_in_r59 = array(4 => 4, 5 => 5);
    static public $FOLLOW_NAME_in_r62 = array(5 => 5);
    static public $FOLLOW_WS_in_r84 = array(4 => 4, 5 => 5);
    static public $FOLLOW_NAME_in_r87 = array();
    static public $FOLLOW_EOF_in_r100 = array(1 => 1);


    protected $dfa2;


        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

            $this->dfa2 = new t030specialStatesParser_DFA2($this);
        }
        

    public function getTokenNames() { return t030specialStatesParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g"; }


    public $cond = false;

    public function recover($input, $re)
    {
        throw $re;
    }



    // $ANTLR start "r"
    // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
    public function r(){
        try {
            // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
            // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
            $alt2=2;
            $alt2 = $this->dfa2->predict($this->input);
            switch ($alt2) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
                    {
                    if ( !(($this->cond)) ) {
                        throw new FailedPredicateException($this->input, "r", '\\$this->cond');
                    }
                    $this->match($this->input,$this->getToken('NAME'),self::$FOLLOW_NAME_in_r43); 

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
                    {
                    if ( !((!$this->cond)) ) {
                        throw new FailedPredicateException($this->input, "r", '!\\$this->cond');
                    }
                    $this->match($this->input,$this->getToken('NAME'),self::$FOLLOW_NAME_in_r57); 
                    // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
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
                    	    // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
                    	    {
                    	    $this->match($this->input,$this->getToken('WS'),self::$FOLLOW_WS_in_r59); 

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

                    $this->match($this->input,$this->getToken('NAME'),self::$FOLLOW_NAME_in_r62); 

                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
            $alt4=2;
            $LA4_0 = $this->input->LA(1);

            if ( ($LA4_0==$this->getToken('WS')) ) {
                $alt4=1;
            }
            switch ($alt4) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
                    {
                    // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
                    $cnt3=0;
                    //loop3:
                    do {
                        $alt3=2;
                        $LA3_0 = $this->input->LA(1);

                        if ( ($LA3_0==$this->getToken('WS')) ) {
                            $alt3=1;
                        }


                        switch ($alt3) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t030specialStates.g
                    	    {
                    	    $this->match($this->input,$this->getToken('WS'),self::$FOLLOW_WS_in_r84); 

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

                    $this->match($this->input,$this->getToken('NAME'),self::$FOLLOW_NAME_in_r87); 

                    }
                    break;

            }

            $this->match($this->input,$this->getToken('EOF'),self::$FOLLOW_EOF_in_r100); 

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

function t030specialStatesParser_DFA2_static(){
    $eot = "\x6\xff";
    $eof = "\x1\xff\x1\x3\x4\xff";
    $min = "\x1\x4\x1\x5\x1\x4\x1\xff\x1\x0\x1\xff";
    $max = "\x1\x4\x2\x5\x1\xff\x1\x0\x1\xff";
    $accept = "\x3\xff\x1\x1\x1\xff\x1\x2";
    $special = "\x4\xff\x1\x0\x1\xff";
    $transitionS = array(
        "\x1\x1",
        "\x1\x2",
        "\x1\x4\x1\x2",
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

class t030specialStatesParser_DFA2 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t030specialStatesParser_DFA2_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 2;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "20:7: ({...}? NAME | {...}? NAME ( WS )+ NAME )";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input; //(TokenStream) $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA2_4 = $input->LA(1);

                     
                    $index2_4 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->cond)) ) {$s = 3;}

                    else if ( ((!$this->cond)) ) {$s = 5;}

                     
                    $input->seek($index2_4);
                    if ( $s>=0 ) return $s;
                    break;
        }
        $nvae =
            new NoViableAltException($this->getDescription(), 2, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
 
?>
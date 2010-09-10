<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t023scopes.g 2010-09-10 19:39:29


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

class t023scopesParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "ID", "WS"
    );
    public $WS=5;
    public $ID=4;
    public $EOF=-1;

    // delegates
    // delegators


    static public $FOLLOW_ID_in_prog34 = array(1 => 1);




        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);

        }
        

    public function getTokenNames() { return t023scopesParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t023scopes.g"; }


    protected $prog_scope = array(
        "name" => "",
    );
    protected $prog_stack = array();


    // $ANTLR start "prog"
    // runtime/Php/test/Antlr/Tests/grammers/t023scopes.g
    public function prog(){
        array_push($this->prog_stack, $this->prog_scope);
        $ID1 = null;

        try {
            // runtime/Php/test/Antlr/Tests/grammers/t023scopes.g
            // runtime/Php/test/Antlr/Tests/grammers/t023scopes.g
            {
            $ID1=$this->match($this->input,$this->getToken('ID'),self::$FOLLOW_ID_in_prog34); 
              $this->prog_stack[count($this->prog_stack)-1]['name'] = ($ID1!=null?$ID1->getText():null);

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            array_pop($this->prog_stack);
            throw $e;
        }
        array_pop($this->prog_stack);

        return ;
    }
    // $ANTLR end "prog"

    // Delegated rules



}

 
?>
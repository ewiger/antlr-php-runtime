<?php
// $ANTLR 3.2 Sep 23, 2009 12:02:23 runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g 2010-09-10 19:39:36


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

class t033backtrackingParser extends Parser {
    public static $tokenNames = array(
        "<invalid>", "<EOR>", "<DOWN>", "<UP>", "IDENTIFIER", "LETTER", "EscapeSequence", "CHARACTER_LITERAL", "STRING_LITERAL", "HexDigit", "IntegerTypeSuffix", "HEX_LITERAL", "DECIMAL_LITERAL", "OCTAL_LITERAL", "Exponent", "FloatTypeSuffix", "FLOATING_POINT_LITERAL", "OctalEscape", "UnicodeEscape", "WS", "COMMENT", "LINE_COMMENT", "LINE_COMMAND", "'typedef'", "';'", "','", "'extern'", "'static'", "'auto'", "'register'", "'void'", "'char'", "'short'", "'int'", "'long'", "'float'", "'double'", "'signed'", "'unsigned'", "'const'", "'volatile'", "'('", "')'", "'['", "']'", "'*'", "'{'"
    );
    public $T__29=29;
    public $T__28=28;
    public $T__27=27;
    public $T__26=26;
    public $T__25=25;
    public $FloatTypeSuffix=15;
    public $T__24=24;
    public $T__23=23;
    public $LETTER=5;
    public $Exponent=14;
    public $EOF=-1;
    public $HexDigit=9;
    public $STRING_LITERAL=8;
    public $FLOATING_POINT_LITERAL=16;
    public $IDENTIFIER=4;
    public $HEX_LITERAL=11;
    public $COMMENT=20;
    public $T__42=42;
    public $T__43=43;
    public $T__40=40;
    public $T__41=41;
    public $T__46=46;
    public $T__44=44;
    public $T__45=45;
    public $LINE_COMMENT=21;
    public $IntegerTypeSuffix=10;
    public $CHARACTER_LITERAL=7;
    public $OCTAL_LITERAL=13;
    public $T__30=30;
    public $T__31=31;
    public $T__32=32;
    public $T__33=33;
    public $WS=19;
    public $T__34=34;
    public $T__35=35;
    public $T__36=36;
    public $T__37=37;
    public $T__38=38;
    public $T__39=39;
    public $UnicodeEscape=18;
    public $LINE_COMMAND=22;
    public $EscapeSequence=6;
    public $DECIMAL_LITERAL=12;
    public $OctalEscape=17;

    // delegates
    // delegators

    protected $Symbols_scope = array(
        "types" => "",
    );
    protected $Symbols_stack = array();


    static public $FOLLOW_external_declaration_in_translation_unit75 = array(1 => 1, 4 => 4, 23 => 23, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 41 => 41, 45 => 45);
    static public $FOLLOW_function_definition_in_external_declaration111 = array(1 => 1);
    static public $FOLLOW_declaration_in_external_declaration116 = array(1 => 1);
    static public $FOLLOW_declaration_specifiers_in_function_definition138 = array(4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 41 => 41, 45 => 45);
    static public $FOLLOW_declarator_in_function_definition141 = array(1 => 1);
    static public $FOLLOW_23_in_declaration164 = array(4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 41 => 41, 45 => 45);
    static public $FOLLOW_declaration_specifiers_in_declaration166 = array(4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 41 => 41, 45 => 45);
    static public $FOLLOW_init_declarator_list_in_declaration174 = array(24 => 24);
    static public $FOLLOW_24_in_declaration176 = array(1 => 1);
    static public $FOLLOW_declaration_specifiers_in_declaration182 = array(4 => 4, 24 => 24, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 41 => 41, 45 => 45);
    static public $FOLLOW_init_declarator_list_in_declaration184 = array(24 => 24);
    static public $FOLLOW_24_in_declaration187 = array(1 => 1);
    static public $FOLLOW_storage_class_specifier_in_declaration_specifiers204 = array(1 => 1, 4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40);
    static public $FOLLOW_type_specifier_in_declaration_specifiers212 = array(1 => 1, 4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40);
    static public $FOLLOW_type_qualifier_in_declaration_specifiers226 = array(1 => 1, 4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40);
    static public $FOLLOW_init_declarator_in_init_declarator_list248 = array(1 => 1, 25 => 25);
    static public $FOLLOW_25_in_init_declarator_list251 = array(4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 41 => 41, 45 => 45);
    static public $FOLLOW_init_declarator_in_init_declarator_list253 = array(1 => 1, 25 => 25);
    static public $FOLLOW_declarator_in_init_declarator266 = array(1 => 1);
    static public $FOLLOW_set_in_storage_class_specifier0 = array(1 => 1);
    static public $FOLLOW_30_in_type_specifier304 = array(1 => 1);
    static public $FOLLOW_31_in_type_specifier309 = array(1 => 1);
    static public $FOLLOW_32_in_type_specifier314 = array(1 => 1);
    static public $FOLLOW_33_in_type_specifier319 = array(1 => 1);
    static public $FOLLOW_34_in_type_specifier324 = array(1 => 1);
    static public $FOLLOW_35_in_type_specifier329 = array(1 => 1);
    static public $FOLLOW_36_in_type_specifier334 = array(1 => 1);
    static public $FOLLOW_37_in_type_specifier339 = array(1 => 1);
    static public $FOLLOW_38_in_type_specifier344 = array(1 => 1);
    static public $FOLLOW_type_id_in_type_specifier351 = array(1 => 1);
    static public $FOLLOW_IDENTIFIER_in_type_id369 = array(1 => 1);
    static public $FOLLOW_set_in_type_qualifier0 = array(1 => 1);
    static public $FOLLOW_pointer_in_declarator451 = array(4 => 4, 41 => 41, 45 => 45);
    static public $FOLLOW_direct_declarator_in_declarator454 = array(1 => 1);
    static public $FOLLOW_pointer_in_declarator459 = array(1 => 1);
    static public $FOLLOW_IDENTIFIER_in_direct_declarator474 = array(1 => 1, 41 => 41, 43 => 43);
    static public $FOLLOW_41_in_direct_declarator485 = array(4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 41 => 41, 45 => 45);
    static public $FOLLOW_declarator_in_direct_declarator487 = array(42 => 42);
    static public $FOLLOW_42_in_direct_declarator489 = array(1 => 1, 41 => 41, 43 => 43);
    static public $FOLLOW_declarator_suffix_in_direct_declarator503 = array(1 => 1, 41 => 41, 43 => 43);
    static public $FOLLOW_43_in_declarator_suffix521 = array(44 => 44);
    static public $FOLLOW_44_in_declarator_suffix523 = array(1 => 1);
    static public $FOLLOW_41_in_declarator_suffix535 = array(42 => 42);
    static public $FOLLOW_42_in_declarator_suffix537 = array(1 => 1);
    static public $FOLLOW_45_in_pointer548 = array(4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40);
    static public $FOLLOW_type_qualifier_in_pointer550 = array(1 => 1, 4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 45 => 45);
    static public $FOLLOW_pointer_in_pointer553 = array(1 => 1);
    static public $FOLLOW_45_in_pointer559 = array(45 => 45);
    static public $FOLLOW_pointer_in_pointer561 = array(1 => 1);
    static public $FOLLOW_45_in_pointer566 = array(1 => 1);
    static public $FOLLOW_declaration_specifiers_in_synpred2_t033backtracking98 = array(1 => 1);
    static public $FOLLOW_declaration_specifiers_in_synpred4_t033backtracking98 = array(4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 41 => 41, 45 => 45);
    static public $FOLLOW_declarator_in_synpred4_t033backtracking101 = array(4 => 4, 23 => 23, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 41 => 41, 45 => 45, 46 => 46);
    static public $FOLLOW_declaration_in_synpred4_t033backtracking103 = array(4 => 4, 23 => 23, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 41 => 41, 45 => 45, 46 => 46);
    static public $FOLLOW_46_in_synpred4_t033backtracking106 = array(1 => 1);
    static public $FOLLOW_declaration_specifiers_in_synpred5_t033backtracking138 = array(1 => 1);
    static public $FOLLOW_declaration_specifiers_in_synpred6_t033backtracking166 = array(1 => 1);
    static public $FOLLOW_type_specifier_in_synpred10_t033backtracking212 = array(1 => 1);
    static public $FOLLOW_pointer_in_synpred27_t033backtracking451 = array(4 => 4, 41 => 41, 45 => 45);
    static public $FOLLOW_direct_declarator_in_synpred27_t033backtracking454 = array(1 => 1);
    static public $FOLLOW_type_qualifier_in_synpred31_t033backtracking550 = array(1 => 1);
    static public $FOLLOW_pointer_in_synpred32_t033backtracking553 = array(1 => 1);
    static public $FOLLOW_45_in_synpred33_t033backtracking548 = array(4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40);
    static public $FOLLOW_type_qualifier_in_synpred33_t033backtracking550 = array(1 => 1, 4 => 4, 26 => 26, 27 => 27, 28 => 28, 29 => 29, 30 => 30, 31 => 31, 32 => 32, 33 => 33, 34 => 34, 35 => 35, 36 => 36, 37 => 37, 38 => 38, 39 => 39, 40 => 40, 45 => 45);
    static public $FOLLOW_pointer_in_synpred33_t033backtracking553 = array(1 => 1);
    static public $FOLLOW_45_in_synpred34_t033backtracking559 = array(45 => 45);
    static public $FOLLOW_pointer_in_synpred34_t033backtracking561 = array(1 => 1);


    protected $dfa1;
    protected $dfa2;
    protected $dfa3;
    protected $dfa6;
    protected $dfa4;
    protected $dfa7;
    protected $dfa9;
    protected $dfa11;
    protected $dfa13;
    protected $dfa17;
    protected $dfa15;
    protected $dfa16;
    protected $dfa18;
    protected $dfa19;


        public function __construct($input, $state = null) {
            if($state==null){
                $state = new RecognizerSharedState();
            }
            parent::__construct($input, $state);
            $this->state->ruleMemo = array();
             
            for ($i=0; $i < 49; $i++) {
                $this->state->ruleMemo[$i] = array();
            }

            $this->dfa1 = new t033backtrackingParser_DFA1($this);
            $this->dfa2 = new t033backtrackingParser_DFA2($this);
            $this->dfa3 = new t033backtrackingParser_DFA3($this);
            $this->dfa6 = new t033backtrackingParser_DFA6($this);
            $this->dfa4 = new t033backtrackingParser_DFA4($this);
            $this->dfa7 = new t033backtrackingParser_DFA7($this);
            $this->dfa9 = new t033backtrackingParser_DFA9($this);
            $this->dfa11 = new t033backtrackingParser_DFA11($this);
            $this->dfa13 = new t033backtrackingParser_DFA13($this);
            $this->dfa17 = new t033backtrackingParser_DFA17($this);
            $this->dfa15 = new t033backtrackingParser_DFA15($this);
            $this->dfa16 = new t033backtrackingParser_DFA16($this);
            $this->dfa18 = new t033backtrackingParser_DFA18($this);
            $this->dfa19 = new t033backtrackingParser_DFA19($this);
        }
        

    public function getTokenNames() { return t033backtrackingParser::$tokenNames; }
    public function getGrammarFileName() { return "runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g"; }


        public function isTypeName($name)
        {
            foreach (array_reverse($this->Symbols_stack) AS $scope) {
                if (in_array($name, $scope)) {
                    return true;
                }
            }
            return false;
        }



    // $ANTLR start "translation_unit"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function translation_unit(){
        array_push($this->Symbols_stack, $this->Symbols_scope);

        $translation_unit_StartIndex = $this->input->index();

          $this->Symbols_stack[count($this->Symbols_stack)-1]['types'] =  array();

        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 1) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $cnt1=0;
            //loop1:
            do {
                $alt1=2;
                $alt1 = $this->dfa1->predict($this->input);
                switch ($alt1) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_external_declaration_in_translation_unit75);
            	    $this->external_declaration();

            	    $this->state->_fsp--;
            	    if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    if ( $cnt1 >= 1 ) break 2;//loop1;
            	    if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                        $eee =
                            new EarlyExitException(1, $this->input);
                        throw $eee;
                }
                $cnt1++;
            } while (true);


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 1, $translation_unit_StartIndex); }
            array_pop($this->Symbols_stack);

            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 1, $translation_unit_StartIndex); }
        array_pop($this->Symbols_stack);


        return ;
    }
    // $ANTLR end "translation_unit"


    // $ANTLR start "external_declaration"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function external_declaration(){
        $external_declaration_StartIndex = $this->input->index();
        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 2) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt2=2;
            $alt2 = $this->dfa2->predict($this->input);
            switch ($alt2) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->pushFollow(self::$FOLLOW_function_definition_in_external_declaration111);
                    $this->function_definition();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->pushFollow(self::$FOLLOW_declaration_in_external_declaration116);
                    $this->declaration();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;

                    }
                    break;

            }
        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 2, $external_declaration_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 2, $external_declaration_StartIndex); }

        return ;
    }
    // $ANTLR end "external_declaration"


    // $ANTLR start "function_definition"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function function_definition(){
        array_push($this->Symbols_stack, $this->Symbols_scope);

        $function_definition_StartIndex = $this->input->index();

          $this->Symbols_stack[count($this->Symbols_stack)-1]['types'] =  array();

        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 3) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt3=2;
            $alt3 = $this->dfa3->predict($this->input);
            switch ($alt3) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->pushFollow(self::$FOLLOW_declaration_specifiers_in_function_definition138);
                    $this->declaration_specifiers();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;

                    }
                    break;

            }

            $this->pushFollow(self::$FOLLOW_declarator_in_function_definition141);
            $this->declarator();

            $this->state->_fsp--;
            if ($this->state->failed) return ;

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 3, $function_definition_StartIndex); }
            array_pop($this->Symbols_stack);

            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 3, $function_definition_StartIndex); }
        array_pop($this->Symbols_stack);


        return ;
    }
    // $ANTLR end "function_definition"

    protected $declaration_scope = array(
        "isTypedef" => "",
    );
    protected $declaration_stack = array();


    // $ANTLR start "declaration"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function declaration(){
        array_push($this->declaration_stack, $this->declaration_scope);
        $declaration_StartIndex = $this->input->index();

          $this->declaration_stack[count($this->declaration_stack)-1]['isTypedef'] =  false;

        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 4) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt6=2;
            $alt6 = $this->dfa6->predict($this->input);
            switch ($alt6) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('23'),self::$FOLLOW_23_in_declaration164); if ($this->state->failed) return ;
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt4=2;
                    $alt4 = $this->dfa4->predict($this->input);
                    switch ($alt4) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            $this->pushFollow(self::$FOLLOW_declaration_specifiers_in_declaration166);
                            $this->declaration_specifiers();

                            $this->state->_fsp--;
                            if ($this->state->failed) return ;

                            }
                            break;

                    }

                    if ( $this->state->backtracking==0 ) {
                      $this->declaration_stack[count($this->declaration_stack)-1]['isTypedef'] =  true;
                    }
                    $this->pushFollow(self::$FOLLOW_init_declarator_list_in_declaration174);
                    $this->init_declarator_list();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;
                    $this->match($this->input,$this->getToken('24'),self::$FOLLOW_24_in_declaration176); if ($this->state->failed) return ;

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->pushFollow(self::$FOLLOW_declaration_specifiers_in_declaration182);
                    $this->declaration_specifiers();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt5=2;
                    $LA5_0 = $this->input->LA(1);

                    if ( ($LA5_0==$this->getToken('IDENTIFIER')||$LA5_0==$this->getToken('41')||$LA5_0==$this->getToken('45')) ) {
                        $alt5=1;
                    }
                    switch ($alt5) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            $this->pushFollow(self::$FOLLOW_init_declarator_list_in_declaration184);
                            $this->init_declarator_list();

                            $this->state->_fsp--;
                            if ($this->state->failed) return ;

                            }
                            break;

                    }

                    $this->match($this->input,$this->getToken('24'),self::$FOLLOW_24_in_declaration187); if ($this->state->failed) return ;

                    }
                    break;

            }
        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 4, $declaration_StartIndex); }
            array_pop($this->declaration_stack);
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 4, $declaration_StartIndex); }
        array_pop($this->declaration_stack);

        return ;
    }
    // $ANTLR end "declaration"


    // $ANTLR start "declaration_specifiers"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function declaration_specifiers(){
        $declaration_specifiers_StartIndex = $this->input->index();
        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 5) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $cnt7=0;
            //loop7:
            do {
                $alt7=4;
                $alt7 = $this->dfa7->predict($this->input);
                switch ($alt7) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_storage_class_specifier_in_declaration_specifiers204);
            	    $this->storage_class_specifier();

            	    $this->state->_fsp--;
            	    if ($this->state->failed) return ;

            	    }
            	    break;
            	case 2 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_type_specifier_in_declaration_specifiers212);
            	    $this->type_specifier();

            	    $this->state->_fsp--;
            	    if ($this->state->failed) return ;

            	    }
            	    break;
            	case 3 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_type_qualifier_in_declaration_specifiers226);
            	    $this->type_qualifier();

            	    $this->state->_fsp--;
            	    if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    if ( $cnt7 >= 1 ) break 2;//loop7;
            	    if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                        $eee =
                            new EarlyExitException(7, $this->input);
                        throw $eee;
                }
                $cnt7++;
            } while (true);


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 5, $declaration_specifiers_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 5, $declaration_specifiers_StartIndex); }

        return ;
    }
    // $ANTLR end "declaration_specifiers"


    // $ANTLR start "init_declarator_list"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function init_declarator_list(){
        $init_declarator_list_StartIndex = $this->input->index();
        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 6) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->pushFollow(self::$FOLLOW_init_declarator_in_init_declarator_list248);
            $this->init_declarator();

            $this->state->_fsp--;
            if ($this->state->failed) return ;
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            //loop8:
            do {
                $alt8=2;
                $LA8_0 = $this->input->LA(1);

                if ( ($LA8_0==$this->getToken('25')) ) {
                    $alt8=1;
                }


                switch ($alt8) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    $this->match($this->input,$this->getToken('25'),self::$FOLLOW_25_in_init_declarator_list251); if ($this->state->failed) return ;
            	    $this->pushFollow(self::$FOLLOW_init_declarator_in_init_declarator_list253);
            	    $this->init_declarator();

            	    $this->state->_fsp--;
            	    if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop8;
                }
            } while (true);


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 6, $init_declarator_list_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 6, $init_declarator_list_StartIndex); }

        return ;
    }
    // $ANTLR end "init_declarator_list"


    // $ANTLR start "init_declarator"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function init_declarator(){
        $init_declarator_StartIndex = $this->input->index();
        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 7) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            $this->pushFollow(self::$FOLLOW_declarator_in_init_declarator266);
            $this->declarator();

            $this->state->_fsp--;
            if ($this->state->failed) return ;

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 7, $init_declarator_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 7, $init_declarator_StartIndex); }

        return ;
    }
    // $ANTLR end "init_declarator"


    // $ANTLR start "storage_class_specifier"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function storage_class_specifier(){
        $storage_class_specifier_StartIndex = $this->input->index();
        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 8) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('26') && $this->input->LA(1)<=$this->getToken('29')) ) {
                $this->input->consume();
                $this->state->errorRecovery=false;$this->state->failed=false;
            } else {
                if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                $mse = new MismatchedSetException(null,$this->input);
                throw $mse;
            }


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 8, $storage_class_specifier_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 8, $storage_class_specifier_StartIndex); }

        return ;
    }
    // $ANTLR end "storage_class_specifier"


    // $ANTLR start "type_specifier"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function type_specifier(){
        $type_specifier_StartIndex = $this->input->index();
        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 9) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt9=10;
            $alt9 = $this->dfa9->predict($this->input);
            switch ($alt9) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('30'),self::$FOLLOW_30_in_type_specifier304); if ($this->state->failed) return ;

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('31'),self::$FOLLOW_31_in_type_specifier309); if ($this->state->failed) return ;

                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('32'),self::$FOLLOW_32_in_type_specifier314); if ($this->state->failed) return ;

                    }
                    break;
                case 4 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('33'),self::$FOLLOW_33_in_type_specifier319); if ($this->state->failed) return ;

                    }
                    break;
                case 5 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('34'),self::$FOLLOW_34_in_type_specifier324); if ($this->state->failed) return ;

                    }
                    break;
                case 6 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('35'),self::$FOLLOW_35_in_type_specifier329); if ($this->state->failed) return ;

                    }
                    break;
                case 7 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('36'),self::$FOLLOW_36_in_type_specifier334); if ($this->state->failed) return ;

                    }
                    break;
                case 8 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('37'),self::$FOLLOW_37_in_type_specifier339); if ($this->state->failed) return ;

                    }
                    break;
                case 9 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('38'),self::$FOLLOW_38_in_type_specifier344); if ($this->state->failed) return ;

                    }
                    break;
                case 10 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->pushFollow(self::$FOLLOW_type_id_in_type_specifier351);
                    $this->type_id();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;

                    }
                    break;

            }
        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 9, $type_specifier_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 9, $type_specifier_StartIndex); }

        return ;
    }
    // $ANTLR end "type_specifier"


    // $ANTLR start "type_id"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function type_id(){
        $type_id_StartIndex = $this->input->index();
        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 10) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            if ( !(($this->isTypeName($this->input->LT(1)->getText()))) ) {
                if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                throw new FailedPredicateException($this->input, "type_id", '\\$this->isTypeName(\\$this->input->LT(1)->getText())');
            }
            $this->match($this->input,$this->getToken('IDENTIFIER'),self::$FOLLOW_IDENTIFIER_in_type_id369); if ($this->state->failed) return ;

            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 10, $type_id_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 10, $type_id_StartIndex); }

        return ;
    }
    // $ANTLR end "type_id"


    // $ANTLR start "type_qualifier"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function type_qualifier(){
        $type_qualifier_StartIndex = $this->input->index();
        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 11) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            if ( ($this->input->LA(1)>=$this->getToken('39') && $this->input->LA(1)<=$this->getToken('40')) ) {
                $this->input->consume();
                $this->state->errorRecovery=false;$this->state->failed=false;
            } else {
                if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                $mse = new MismatchedSetException(null,$this->input);
                throw $mse;
            }


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 11, $type_qualifier_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 11, $type_qualifier_StartIndex); }

        return ;
    }
    // $ANTLR end "type_qualifier"


    // $ANTLR start "declarator"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function declarator(){
        $declarator_StartIndex = $this->input->index();
        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 12) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt11=2;
            $alt11 = $this->dfa11->predict($this->input);
            switch ($alt11) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt10=2;
                    $LA10_0 = $this->input->LA(1);

                    if ( ($LA10_0==$this->getToken('45')) ) {
                        $alt10=1;
                    }
                    switch ($alt10) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            $this->pushFollow(self::$FOLLOW_pointer_in_declarator451);
                            $this->pointer();

                            $this->state->_fsp--;
                            if ($this->state->failed) return ;

                            }
                            break;

                    }

                    $this->pushFollow(self::$FOLLOW_direct_declarator_in_declarator454);
                    $this->direct_declarator();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->pushFollow(self::$FOLLOW_pointer_in_declarator459);
                    $this->pointer();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;

                    }
                    break;

            }
        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 12, $declarator_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 12, $declarator_StartIndex); }

        return ;
    }
    // $ANTLR end "declarator"


    // $ANTLR start "direct_declarator"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function direct_declarator(){
        $direct_declarator_StartIndex = $this->input->index();
        $IDENTIFIER1 = null;

        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 13) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            {
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt12=2;
            $LA12_0 = $this->input->LA(1);

            if ( ($LA12_0==$this->getToken('IDENTIFIER')) ) {
                $alt12=1;
            }
            else if ( ($LA12_0==$this->getToken('41')) ) {
                $alt12=2;
            }
            else {
                if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                $nvae = new NoViableAltException("", 12, 0, $this->input);

                throw $nvae;
            }
            switch ($alt12) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $IDENTIFIER1=$this->match($this->input,$this->getToken('IDENTIFIER'),self::$FOLLOW_IDENTIFIER_in_direct_declarator474); if ($this->state->failed) return ;
                    if ( $this->state->backtracking==0 ) {

                      			if (count($this->declaration_stack)>0 and $this->declaration_stack[count($this->declaration_stack)-1]['isTypedef']) {
                      				array_push($this->Symbols_stack[count($this->Symbols_stack)-1]['types'], ($IDENTIFIER1!=null?$IDENTIFIER1->getText():null));
                      			}
                                              
                    }

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('41'),self::$FOLLOW_41_in_direct_declarator485); if ($this->state->failed) return ;
                    $this->pushFollow(self::$FOLLOW_declarator_in_direct_declarator487);
                    $this->declarator();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;
                    $this->match($this->input,$this->getToken('42'),self::$FOLLOW_42_in_direct_declarator489); if ($this->state->failed) return ;

                    }
                    break;

            }

            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            //loop13:
            do {
                $alt13=2;
                $alt13 = $this->dfa13->predict($this->input);
                switch ($alt13) {
            	case 1 :
            	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            	    {
            	    $this->pushFollow(self::$FOLLOW_declarator_suffix_in_direct_declarator503);
            	    $this->declarator_suffix();

            	    $this->state->_fsp--;
            	    if ($this->state->failed) return ;

            	    }
            	    break;

            	default :
            	    break 2;//loop13;
                }
            } while (true);


            }

        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 13, $direct_declarator_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 13, $direct_declarator_StartIndex); }

        return ;
    }
    // $ANTLR end "direct_declarator"


    // $ANTLR start "declarator_suffix"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function declarator_suffix(){
        $declarator_suffix_StartIndex = $this->input->index();
        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 14) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt14=2;
            $LA14_0 = $this->input->LA(1);

            if ( ($LA14_0==$this->getToken('43')) ) {
                $alt14=1;
            }
            else if ( ($LA14_0==$this->getToken('41')) ) {
                $alt14=2;
            }
            else {
                if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                $nvae = new NoViableAltException("", 14, 0, $this->input);

                throw $nvae;
            }
            switch ($alt14) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('43'),self::$FOLLOW_43_in_declarator_suffix521); if ($this->state->failed) return ;
                    $this->match($this->input,$this->getToken('44'),self::$FOLLOW_44_in_declarator_suffix523); if ($this->state->failed) return ;

                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('41'),self::$FOLLOW_41_in_declarator_suffix535); if ($this->state->failed) return ;
                    $this->match($this->input,$this->getToken('42'),self::$FOLLOW_42_in_declarator_suffix537); if ($this->state->failed) return ;

                    }
                    break;

            }
        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 14, $declarator_suffix_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 14, $declarator_suffix_StartIndex); }

        return ;
    }
    // $ANTLR end "declarator_suffix"


    // $ANTLR start "pointer"
    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
    public function pointer(){
        $pointer_StartIndex = $this->input->index();
        try {
            if ( $this->state->backtracking>0 && $this->alreadyParsedRule($this->input, 15) ) { return ; }
            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
            $alt17=3;
            $alt17 = $this->dfa17->predict($this->input);
            switch ($alt17) {
                case 1 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('45'),self::$FOLLOW_45_in_pointer548); if ($this->state->failed) return ;
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $cnt15=0;
                    //loop15:
                    do {
                        $alt15=2;
                        $alt15 = $this->dfa15->predict($this->input);
                        switch ($alt15) {
                    	case 1 :
                    	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    	    {
                    	    $this->pushFollow(self::$FOLLOW_type_qualifier_in_pointer550);
                    	    $this->type_qualifier();

                    	    $this->state->_fsp--;
                    	    if ($this->state->failed) return ;

                    	    }
                    	    break;

                    	default :
                    	    if ( $cnt15 >= 1 ) break 2;//loop15;
                    	    if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                                $eee =
                                    new EarlyExitException(15, $this->input);
                                throw $eee;
                        }
                        $cnt15++;
                    } while (true);

                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    $alt16=2;
                    $alt16 = $this->dfa16->predict($this->input);
                    switch ($alt16) {
                        case 1 :
                            // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                            {
                            $this->pushFollow(self::$FOLLOW_pointer_in_pointer553);
                            $this->pointer();

                            $this->state->_fsp--;
                            if ($this->state->failed) return ;

                            }
                            break;

                    }


                    }
                    break;
                case 2 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('45'),self::$FOLLOW_45_in_pointer559); if ($this->state->failed) return ;
                    $this->pushFollow(self::$FOLLOW_pointer_in_pointer561);
                    $this->pointer();

                    $this->state->_fsp--;
                    if ($this->state->failed) return ;

                    }
                    break;
                case 3 :
                    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                    {
                    $this->match($this->input,$this->getToken('45'),self::$FOLLOW_45_in_pointer566); if ($this->state->failed) return ;

                    }
                    break;

            }
        }
        catch (RecognitionException $re) {
            $this->reportError($re);
            $this->recover($this->input,$re);
        }
        catch(Exception $e) {
            if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 15, $pointer_StartIndex); }
            throw $e;
        }
        if ( $this->state->backtracking>0 ) { $this->memoize($this->input, 15, $pointer_StartIndex); }

        return ;
    }
    // $ANTLR end "pointer"

    // $ANTLR start synpred2_t033backtracking
    public function synpred2_t033backtracking_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        {
        $this->pushFollow(self::$FOLLOW_declaration_specifiers_in_synpred2_t033backtracking98);
        $this->declaration_specifiers();

        $this->state->_fsp--;
        if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred2_t033backtracking

    // $ANTLR start synpred4_t033backtracking
    public function synpred4_t033backtracking_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        $alt18=2;
        $alt18 = $this->dfa18->predict($this->input);
        switch ($alt18) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->pushFollow(self::$FOLLOW_declaration_specifiers_in_synpred4_t033backtracking98);
                $this->declaration_specifiers();

                $this->state->_fsp--;
                if ($this->state->failed) return ;

                }
                break;

        }

        $this->pushFollow(self::$FOLLOW_declarator_in_synpred4_t033backtracking101);
        $this->declarator();

        $this->state->_fsp--;
        if ($this->state->failed) return ;
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        //loop19:
        do {
            $alt19=2;
            $alt19 = $this->dfa19->predict($this->input);
            switch ($alt19) {
        	case 1 :
        	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        	    {
        	    $this->pushFollow(self::$FOLLOW_declaration_in_synpred4_t033backtracking103);
        	    $this->declaration();

        	    $this->state->_fsp--;
        	    if ($this->state->failed) return ;

        	    }
        	    break;

        	default :
        	    break 2;//loop19;
            }
        } while (true);

        $this->match($this->input,$this->getToken('46'),self::$FOLLOW_46_in_synpred4_t033backtracking106); if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred4_t033backtracking

    // $ANTLR start synpred5_t033backtracking
    public function synpred5_t033backtracking_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        {
        $this->pushFollow(self::$FOLLOW_declaration_specifiers_in_synpred5_t033backtracking138);
        $this->declaration_specifiers();

        $this->state->_fsp--;
        if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred5_t033backtracking

    // $ANTLR start synpred6_t033backtracking
    public function synpred6_t033backtracking_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        {
        $this->pushFollow(self::$FOLLOW_declaration_specifiers_in_synpred6_t033backtracking166);
        $this->declaration_specifiers();

        $this->state->_fsp--;
        if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred6_t033backtracking

    // $ANTLR start synpred10_t033backtracking
    public function synpred10_t033backtracking_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        {
        $this->pushFollow(self::$FOLLOW_type_specifier_in_synpred10_t033backtracking212);
        $this->type_specifier();

        $this->state->_fsp--;
        if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred10_t033backtracking

    // $ANTLR start synpred27_t033backtracking
    public function synpred27_t033backtracking_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        $alt21=2;
        $LA21_0 = $this->input->LA(1);

        if ( ($LA21_0==$this->getToken('45')) ) {
            $alt21=1;
        }
        switch ($alt21) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->pushFollow(self::$FOLLOW_pointer_in_synpred27_t033backtracking451);
                $this->pointer();

                $this->state->_fsp--;
                if ($this->state->failed) return ;

                }
                break;

        }

        $this->pushFollow(self::$FOLLOW_direct_declarator_in_synpred27_t033backtracking454);
        $this->direct_declarator();

        $this->state->_fsp--;
        if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred27_t033backtracking

    // $ANTLR start synpred31_t033backtracking
    public function synpred31_t033backtracking_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        {
        $this->pushFollow(self::$FOLLOW_type_qualifier_in_synpred31_t033backtracking550);
        $this->type_qualifier();

        $this->state->_fsp--;
        if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred31_t033backtracking

    // $ANTLR start synpred32_t033backtracking
    public function synpred32_t033backtracking_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        {
        $this->pushFollow(self::$FOLLOW_pointer_in_synpred32_t033backtracking553);
        $this->pointer();

        $this->state->_fsp--;
        if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred32_t033backtracking

    // $ANTLR start synpred33_t033backtracking
    public function synpred33_t033backtracking_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        {
        $this->match($this->input,$this->getToken('45'),self::$FOLLOW_45_in_synpred33_t033backtracking548); if ($this->state->failed) return ;
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        $cnt22=0;
        //loop22:
        do {
            $alt22=2;
            $LA22_0 = $this->input->LA(1);

            if ( (($LA22_0>=$this->getToken('39') && $LA22_0<=$this->getToken('40'))) ) {
                $alt22=1;
            }


            switch ($alt22) {
        	case 1 :
        	    // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        	    {
        	    $this->pushFollow(self::$FOLLOW_type_qualifier_in_synpred33_t033backtracking550);
        	    $this->type_qualifier();

        	    $this->state->_fsp--;
        	    if ($this->state->failed) return ;

        	    }
        	    break;

        	default :
        	    if ( $cnt22 >= 1 ) break 2;//loop22;
        	    if ($this->state->backtracking>0) {$this->state->failed=true; return ;}
                    $eee =
                        new EarlyExitException(22, $this->input);
                    throw $eee;
            }
            $cnt22++;
        } while (true);

        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        $alt23=2;
        $LA23_0 = $this->input->LA(1);

        if ( ($LA23_0==$this->getToken('45')) ) {
            $alt23=1;
        }
        switch ($alt23) {
            case 1 :
                // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
                {
                $this->pushFollow(self::$FOLLOW_pointer_in_synpred33_t033backtracking553);
                $this->pointer();

                $this->state->_fsp--;
                if ($this->state->failed) return ;

                }
                break;

        }


        }
    }
    // $ANTLR end synpred33_t033backtracking

    // $ANTLR start synpred34_t033backtracking
    public function synpred34_t033backtracking_fragment() {
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        // runtime/Php/test/Antlr/Tests/grammers/t033backtracking.g
        {
        $this->match($this->input,$this->getToken('45'),self::$FOLLOW_45_in_synpred34_t033backtracking559); if ($this->state->failed) return ;
        $this->pushFollow(self::$FOLLOW_pointer_in_synpred34_t033backtracking561);
        $this->pointer();

        $this->state->_fsp--;
        if ($this->state->failed) return ;

        }
    }
    // $ANTLR end synpred34_t033backtracking

    // Delegated rules

    public function synpred5_t033backtracking() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred5_t033backtracking_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred4_t033backtracking() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred4_t033backtracking_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred34_t033backtracking() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred34_t033backtracking_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred6_t033backtracking() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred6_t033backtracking_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred32_t033backtracking() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred32_t033backtracking_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred31_t033backtracking() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred31_t033backtracking_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred2_t033backtracking() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred2_t033backtracking_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred27_t033backtracking() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred27_t033backtracking_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred10_t033backtracking() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred10_t033backtracking_fragment(); // can never throw exception
        } catch (RecognitionException $re) {
            echo("impossible: ".$re);
        }
        $success = !$this->state->failed;
        $this->input->rewind($start);
        $this->state->backtracking--;
        $this->state->failed=false;
        return $success;
    }
    public function synpred33_t033backtracking() {
        $this->state->backtracking++;
        $start = $this->input->mark();
        try {
            $this->synpred33_t033backtracking_fragment(); // can never throw exception
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

function t033backtrackingParser_DFA1_static(){
    $eot = "\x11\xff";
    $eof = "\x1\x1\x10\xff";
    $min = "\x1\x4\x10\xff";
    $max = "\x1\x2d\x10\xff";
    $accept = "\x1\xff\x1\x2\x1\x1\xe\xff";
    $special = "\x11\xff";
    $transitionS = array(
        "\x1\x2\x12\xff\x1\x2\x2\xff\x10\x2\x3\xff\x1\x2",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA1 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA1_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 1;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "()+ loopback of 30:4: ( external_declaration )+";
    }
}
function t033backtrackingParser_DFA2_static(){
    $eot = "\x10\xff";
    $eof = "\x10\xff";
    $min = "\x1\x4\xc\x0\x3\xff";
    $max = "\x1\x2d\xc\x0\x3\xff";
    $accept = "\xd\xff\x2\x1\x1\x2";
    $special = "\x1\x0\x1\x1\x1\x2\x1\x3\x1\x4\x1\x5\x1\x6\x1\x7\x1\x8\x1" .
    "\x9\x1\xa\x1\xb\x1\xc\x3\xff";
    $transitionS = array(
        "\x1\xb\x12\xff\x1\xf\x2\xff\x4\x1\x1\x2\x1\x3\x1\x4\x1\x5\x1\x6" .
        "\x1\x7\x1\x8\x1\x9\x1\xa\x2\xc\x1\xe\x3\xff\x1\xd",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "",
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

class t033backtrackingParser_DFA2 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA2_static();
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
        return "33:1: external_declaration options {k=1; } : ( ( ( declaration_specifiers )? declarator ( declaration )* '{' )=> function_definition | declaration );";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input; //(TokenStream) $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA2_0 = $input->LA(1);

                     
                    $index2_0 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($LA2_0>=$this->getToken('26') && $LA2_0<=$this->getToken('29'))) ) {$s = 1;}

                    else if ( ($LA2_0==$this->getToken('30')) ) {$s = 2;}

                    else if ( ($LA2_0==$this->getToken('31')) ) {$s = 3;}

                    else if ( ($LA2_0==$this->getToken('32')) ) {$s = 4;}

                    else if ( ($LA2_0==$this->getToken('33')) ) {$s = 5;}

                    else if ( ($LA2_0==$this->getToken('34')) ) {$s = 6;}

                    else if ( ($LA2_0==$this->getToken('35')) ) {$s = 7;}

                    else if ( ($LA2_0==$this->getToken('36')) ) {$s = 8;}

                    else if ( ($LA2_0==$this->getToken('37')) ) {$s = 9;}

                    else if ( ($LA2_0==$this->getToken('38')) ) {$s = 10;}

                    else if ( ($LA2_0==$this->getToken('IDENTIFIER')) ) {$s = 11;}

                    else if ( (($LA2_0>=$this->getToken('39') && $LA2_0<=$this->getToken('40'))) ) {$s = 12;}

                    else if ( ($LA2_0==$this->getToken('45')) && ($this->synpred4_t033backtracking())) {$s = 13;}

                    else if ( ($LA2_0==$this->getToken('41')) && ($this->synpred4_t033backtracking())) {$s = 14;}

                    else if ( ($LA2_0==$this->getToken('23')) ) {$s = 15;}

                     
                    $input->seek($index2_0);
                    if ( $s>=0 ) return $s;
                    break;
                case 1 : 
                    $LA2_1 = $input->LA(1);

                     
                    $index2_1 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t033backtracking()) ) {$s = 14;}

                    else if ( (true) ) {$s = 15;}

                     
                    $input->seek($index2_1);
                    if ( $s>=0 ) return $s;
                    break;
                case 2 : 
                    $LA2_2 = $input->LA(1);

                     
                    $index2_2 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t033backtracking()) ) {$s = 14;}

                    else if ( (true) ) {$s = 15;}

                     
                    $input->seek($index2_2);
                    if ( $s>=0 ) return $s;
                    break;
                case 3 : 
                    $LA2_3 = $input->LA(1);

                     
                    $index2_3 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t033backtracking()) ) {$s = 14;}

                    else if ( (true) ) {$s = 15;}

                     
                    $input->seek($index2_3);
                    if ( $s>=0 ) return $s;
                    break;
                case 4 : 
                    $LA2_4 = $input->LA(1);

                     
                    $index2_4 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t033backtracking()) ) {$s = 14;}

                    else if ( (true) ) {$s = 15;}

                     
                    $input->seek($index2_4);
                    if ( $s>=0 ) return $s;
                    break;
                case 5 : 
                    $LA2_5 = $input->LA(1);

                     
                    $index2_5 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t033backtracking()) ) {$s = 14;}

                    else if ( (true) ) {$s = 15;}

                     
                    $input->seek($index2_5);
                    if ( $s>=0 ) return $s;
                    break;
                case 6 : 
                    $LA2_6 = $input->LA(1);

                     
                    $index2_6 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t033backtracking()) ) {$s = 14;}

                    else if ( (true) ) {$s = 15;}

                     
                    $input->seek($index2_6);
                    if ( $s>=0 ) return $s;
                    break;
                case 7 : 
                    $LA2_7 = $input->LA(1);

                     
                    $index2_7 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t033backtracking()) ) {$s = 14;}

                    else if ( (true) ) {$s = 15;}

                     
                    $input->seek($index2_7);
                    if ( $s>=0 ) return $s;
                    break;
                case 8 : 
                    $LA2_8 = $input->LA(1);

                     
                    $index2_8 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t033backtracking()) ) {$s = 14;}

                    else if ( (true) ) {$s = 15;}

                     
                    $input->seek($index2_8);
                    if ( $s>=0 ) return $s;
                    break;
                case 9 : 
                    $LA2_9 = $input->LA(1);

                     
                    $index2_9 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t033backtracking()) ) {$s = 14;}

                    else if ( (true) ) {$s = 15;}

                     
                    $input->seek($index2_9);
                    if ( $s>=0 ) return $s;
                    break;
                case 10 : 
                    $LA2_10 = $input->LA(1);

                     
                    $index2_10 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t033backtracking()) ) {$s = 14;}

                    else if ( (true) ) {$s = 15;}

                     
                    $input->seek($index2_10);
                    if ( $s>=0 ) return $s;
                    break;
                case 11 : 
                    $LA2_11 = $input->LA(1);

                     
                    $index2_11 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred4_t033backtracking()||($this->synpred4_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText()))))) ) {$s = 14;}

                    else if ( (($this->isTypeName($this->input->LT(1)->getText()))) ) {$s = 15;}

                     
                    $input->seek($index2_11);
                    if ( $s>=0 ) return $s;
                    break;
                case 12 : 
                    $LA2_12 = $input->LA(1);

                     
                    $index2_12 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred4_t033backtracking()) ) {$s = 14;}

                    else if ( (true) ) {$s = 15;}

                     
                    $input->seek($index2_12);
                    if ( $s>=0 ) return $s;
                    break;
        }
        if ($this->recognizer->state->backtracking>0) {$this->recognizer->state->failed=true; return -1;}
        $nvae =
            new NoViableAltException($this->getDescription(), 2, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
function t033backtrackingParser_DFA3_static(){
    $eot = "\x20\xff";
    $eof = "\x20\xff";
    $min = "\x1\x4\xa\xff\x1\x0\x14\xff";
    $max = "\x1\x2d\xa\xff\x1\x0\x14\xff";
    $accept = "\x1\xff\x1\x1\xb\xff\x1\x2\x12\xff";
    $special = "\xb\xff\x1\x0\x14\xff";
    $transitionS = array(
        "\x1\xb\x15\xff\xf\x1\x1\xd\x3\xff\x1\xd",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "\x1\xff",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA3 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA3_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 3;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "58:4: ( declaration_specifiers )?";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input; //(TokenStream) $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA3_11 = $input->LA(1);

                     
                    $index3_11 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred5_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index3_11);
                    if ( $s>=0 ) return $s;
                    break;
        }
        if ($this->recognizer->state->backtracking>0) {$this->recognizer->state->failed=true; return -1;}
        $nvae =
            new NoViableAltException($this->getDescription(), 3, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
function t033backtrackingParser_DFA6_static(){
    $eot = "\xe\xff";
    $eof = "\xe\xff";
    $min = "\x1\x4\xd\xff";
    $max = "\x1\x28\xd\xff";
    $accept = "\x1\xff\x1\x1\x1\x2\xb\xff";
    $special = "\xe\xff";
    $transitionS = array(
        "\x1\x2\x12\xff\x1\x1\x2\xff\xf\x2",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA6 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA6_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 6;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "64:1: declaration : ( 'typedef' ( declaration_specifiers )? init_declarator_list ';' | declaration_specifiers ( init_declarator_list )? ';' );";
    }
}
function t033backtrackingParser_DFA4_static(){
    $eot = "\x20\xff";
    $eof = "\x20\xff";
    $min = "\x1\x4\xa\xff\x1\x4\x4\xff\x1\x0\xf\xff";
    $max = "\x1\x2d\xa\xff\x1\x2d\x4\xff\x1\x0\xf\xff";
    $accept = "\x1\xff\x1\x1\xb\xff\x1\x2\x12\xff";
    $special = "\x10\xff\x1\x0\xf\xff";
    $transitionS = array(
        "\x1\xb\x15\xff\xf\x1\x1\xd\x3\xff\x1\xd",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "\x1\x1\x13\xff\x2\xd\xf\x1\x1\x10\x1\xff\x1\xd\x1\xff\x1\x1",
        "",
        "",
        "",
        "",
        "\x1\xff",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA4 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA4_static();
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
        return "71:14: ( declaration_specifiers )?";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input; //(TokenStream) $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA4_16 = $input->LA(1);

                     
                    $index4_16 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred6_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index4_16);
                    if ( $s>=0 ) return $s;
                    break;
        }
        if ($this->recognizer->state->backtracking>0) {$this->recognizer->state->failed=true; return -1;}
        $nvae =
            new NoViableAltException($this->getDescription(), 4, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
function t033backtrackingParser_DFA7_static(){
    $eot = "\x25\xff";
    $eof = "\x1\x1\x24\xff";
    $min = "\x1\x4\x1\xff\x1\x0\x22\xff";
    $max = "\x1\x2d\x1\xff\x1\x0\x22\xff";
    $accept = "\x1\xff\x1\x4\x4\xff\x1\x1\x1\x2\x8\xff\x1\x3\x14\xff";
    $special = "\x2\xff\x1\x0\x22\xff";
    $transitionS = array(
        "\x1\x2\x13\xff\x1\x1\x1\xff\x4\x6\x9\x7\x2\x10\x1\x1\x3\xff\x1\x1",
        "",
        "\x1\xff",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA7 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA7_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 7;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "()+ loopback of 77:6: ( storage_class_specifier | type_specifier | type_qualifier )+";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input; //(TokenStream) $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA7_2 = $input->LA(1);

                     
                    $index7_2 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred10_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 7;}

                    else if ( (true) ) {$s = 1;}

                     
                    $input->seek($index7_2);
                    if ( $s>=0 ) return $s;
                    break;
        }
        if ($this->recognizer->state->backtracking>0) {$this->recognizer->state->failed=true; return -1;}
        $nvae =
            new NoViableAltException($this->getDescription(), 7, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
function t033backtrackingParser_DFA9_static(){
    $eot = "\xb\xff";
    $eof = "\xb\xff";
    $min = "\x1\x4\xa\xff";
    $max = "\x1\x26\xa\xff";
    $accept = "\x1\xff\x1\x1\x1\x2\x1\x3\x1\x4\x1\x5\x1\x6\x1\x7\x1\x8\x1" .
    "\x9\x1\xa";
    $special = "\xb\xff";
    $transitionS = array(
        "\x1\xa\x19\xff\x1\x1\x1\x2\x1\x3\x1\x4\x1\x5\x1\x6\x1\x7\x1\x8\x1" .
        "\x9",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA9 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA9_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 9;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "98:1: type_specifier : ( 'void' | 'char' | 'short' | 'int' | 'long' | 'float' | 'double' | 'signed' | 'unsigned' | type_id );";
    }
}
function t033backtrackingParser_DFA11_static(){
    $eot = "\x19\xff";
    $eof = "\x19\xff";
    $min = "\x1\x4\x1\x0\x17\xff";
    $max = "\x1\x2d\x1\x0\x17\xff";
    $accept = "\x2\xff\x1\x1\x15\xff\x1\x2";
    $special = "\x1\xff\x1\x0\x17\xff";
    $transitionS = array(
        "\x1\x2\x24\xff\x1\x2\x3\xff\x1\x1",
        "\x1\xff",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA11 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA11_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 11;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "174:1: declarator : ( ( pointer )? direct_declarator | pointer );";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input; //(TokenStream) $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA11_1 = $input->LA(1);

                     
                    $index11_1 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred27_t033backtracking()) ) {$s = 2;}

                    else if ( (true) ) {$s = 24;}

                     
                    $input->seek($index11_1);
                    if ( $s>=0 ) return $s;
                    break;
        }
        if ($this->recognizer->state->backtracking>0) {$this->recognizer->state->failed=true; return -1;}
        $nvae =
            new NoViableAltException($this->getDescription(), 11, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
function t033backtrackingParser_DFA13_static(){
    $eot = "\x1a\xff";
    $eof = "\x1\x1\x19\xff";
    $min = "\x1\x4\xe\xff\x1\x4\xa\xff";
    $max = "\x1\x2e\xe\xff\x1\x2d\xa\xff";
    $accept = "\x1\xff\x1\x2\x13\xff\x1\x1\x4\xff";
    $special = "\x1a\xff";
    $transitionS = array(
        "\x1\x1\x12\xff\x12\x1\x1\xf\x1\x1\x1\x15\x1\xff\x2\x1",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "\x1\x1\x24\xff\x1\x1\x1\x15\x2\xff\x1\x1",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA13 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA13_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 13;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "()* loopback of 188:9: ( declarator_suffix )*";
    }
}
function t033backtrackingParser_DFA17_static(){
    $eot = "\x18\xff";
    $eof = "\x1\xff\x1\x2\x16\xff";
    $min = "\x1\x2d\x1\x4\xd\xff\x2\x0\x7\xff";
    $max = "\x1\x2d\x1\x2e\xd\xff\x2\x0\x7\xff";
    $accept = "\x2\xff\x1\x3\x13\xff\x1\x1\x1\x2";
    $special = "\xf\xff\x1\x0\x1\x1\x7\xff";
    $transitionS = array(
        "\x1\x1",
        "\x1\x2\x12\xff\x10\x2\x2\xf\x2\x2\x2\xff\x1\x10\x1\x2",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "\x1\xff",
        "\x1\xff",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA17 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA17_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 17;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "199:1: pointer : ( '*' ( type_qualifier )+ ( pointer )? | '*' pointer | '*' );";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input; //(TokenStream) $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA17_15 = $input->LA(1);

                     
                    $index17_15 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred33_t033backtracking()) ) {$s = 22;}

                    else if ( (true) ) {$s = 2;}

                     
                    $input->seek($index17_15);
                    if ( $s>=0 ) return $s;
                    break;
                case 1 : 
                    $LA17_16 = $input->LA(1);

                     
                    $index17_16 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred34_t033backtracking()) ) {$s = 23;}

                    else if ( (true) ) {$s = 2;}

                     
                    $input->seek($index17_16);
                    if ( $s>=0 ) return $s;
                    break;
        }
        if ($this->recognizer->state->backtracking>0) {$this->recognizer->state->failed=true; return -1;}
        $nvae =
            new NoViableAltException($this->getDescription(), 17, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
function t033backtrackingParser_DFA15_static(){
    $eot = "\x2a\xff";
    $eof = "\x1\x1\x29\xff";
    $min = "\x1\x4\xe\xff\x1\x0\x1a\xff";
    $max = "\x1\x2e\xe\xff\x1\x0\x1a\xff";
    $accept = "\x1\xff\x1\x2\x27\xff\x1\x1";
    $special = "\xf\xff\x1\x0\x1a\xff";
    $transitionS = array(
        "\x1\x1\x12\xff\x10\x1\x2\xf\x2\x1\x2\xff\x2\x1",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "\x1\xff",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA15 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA15_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 15;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "()+ loopback of 200:8: ( type_qualifier )+";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input; //(TokenStream) $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA15_15 = $input->LA(1);

                     
                    $index15_15 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred31_t033backtracking()) ) {$s = 41;}

                    else if ( (true) ) {$s = 1;}

                     
                    $input->seek($index15_15);
                    if ( $s>=0 ) return $s;
                    break;
        }
        if ($this->recognizer->state->backtracking>0) {$this->recognizer->state->failed=true; return -1;}
        $nvae =
            new NoViableAltException($this->getDescription(), 15, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
function t033backtrackingParser_DFA16_static(){
    $eot = "\x2a\xff";
    $eof = "\x1\x2\x29\xff";
    $min = "\x1\x4\x1\x0\x28\xff";
    $max = "\x1\x2e\x1\x0\x28\xff";
    $accept = "\x2\xff\x1\x2\x26\xff\x1\x1";
    $special = "\x1\xff\x1\x0\x28\xff";
    $transitionS = array(
        "\x1\x2\x12\xff\x14\x2\x2\xff\x1\x1\x1\x2",
        "\x1\xff",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA16 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA16_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 16;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "200:24: ( pointer )?";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input; //(TokenStream) $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA16_1 = $input->LA(1);

                     
                    $index16_1 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( ($this->synpred32_t033backtracking()) ) {$s = 41;}

                    else if ( (true) ) {$s = 2;}

                     
                    $input->seek($index16_1);
                    if ( $s>=0 ) return $s;
                    break;
        }
        if ($this->recognizer->state->backtracking>0) {$this->recognizer->state->failed=true; return -1;}
        $nvae =
            new NoViableAltException($this->getDescription(), 16, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
function t033backtrackingParser_DFA18_static(){
    $eot = "\x20\xff";
    $eof = "\x20\xff";
    $min = "\x1\x4\xa\xff\x1\x4\x4\xff\x1\x0\x1\xff\xc\x0\x2\xff";
    $max = "\x1\x2d\xa\xff\x1\x2e\x4\xff\x1\x0\x1\xff\xc\x0\x2\xff";
    $accept = "\x1\xff\x1\x1\xb\xff\x1\x2\x12\xff";
    $special = "\x10\xff\x1\x0\x1\xff\x1\x1\x1\x2\x1\x3\x1\x4\x1\x5\x1\x6" .
    "\x1\x7\x1\x8\x1\x9\x1\xa\x1\xb\x1\xc\x2\xff";
    $transitionS = array(
        "\x1\xb\x15\xff\xf\x1\x1\xd\x3\xff\x1\xd",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "\x1\x1c\x12\xff\x1\xd\x2\xff\x4\x12\x1\x13\x1\x14\x1\x15\x1\x16" .
        "\x1\x17\x1\x18\x1\x19\x1\x1a\x1\x1b\x2\x1d\x1\x10\x1\xff\x1\xd\x1" .
        "\xff\x1\x1\x1\xd",
        "",
        "",
        "",
        "",
        "\x1\xff",
        "",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
        "\x1\xff",
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

class t033backtrackingParser_DFA18 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA18_static();
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
        return "49:6: ( declaration_specifiers )?";
    }
    public function specialStateTransition($s, IntStream $_input) {
        $input = $_input; //(TokenStream) $_input;
    	$_s = $s;
        switch ( $s ) {
                case 0 : 
                    $LA18_16 = $input->LA(1);

                     
                    $index18_16 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_16);
                    if ( $s>=0 ) return $s;
                    break;
                case 1 : 
                    $LA18_18 = $input->LA(1);

                     
                    $index18_18 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_18);
                    if ( $s>=0 ) return $s;
                    break;
                case 2 : 
                    $LA18_19 = $input->LA(1);

                     
                    $index18_19 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_19);
                    if ( $s>=0 ) return $s;
                    break;
                case 3 : 
                    $LA18_20 = $input->LA(1);

                     
                    $index18_20 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_20);
                    if ( $s>=0 ) return $s;
                    break;
                case 4 : 
                    $LA18_21 = $input->LA(1);

                     
                    $index18_21 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_21);
                    if ( $s>=0 ) return $s;
                    break;
                case 5 : 
                    $LA18_22 = $input->LA(1);

                     
                    $index18_22 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_22);
                    if ( $s>=0 ) return $s;
                    break;
                case 6 : 
                    $LA18_23 = $input->LA(1);

                     
                    $index18_23 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_23);
                    if ( $s>=0 ) return $s;
                    break;
                case 7 : 
                    $LA18_24 = $input->LA(1);

                     
                    $index18_24 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_24);
                    if ( $s>=0 ) return $s;
                    break;
                case 8 : 
                    $LA18_25 = $input->LA(1);

                     
                    $index18_25 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_25);
                    if ( $s>=0 ) return $s;
                    break;
                case 9 : 
                    $LA18_26 = $input->LA(1);

                     
                    $index18_26 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_26);
                    if ( $s>=0 ) return $s;
                    break;
                case 10 : 
                    $LA18_27 = $input->LA(1);

                     
                    $index18_27 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_27);
                    if ( $s>=0 ) return $s;
                    break;
                case 11 : 
                    $LA18_28 = $input->LA(1);

                     
                    $index18_28 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_28);
                    if ( $s>=0 ) return $s;
                    break;
                case 12 : 
                    $LA18_29 = $input->LA(1);

                     
                    $index18_29 = $input->index();
                    $input->rewind();
                    $s = -1;
                    if ( (($this->synpred2_t033backtracking()&&($this->isTypeName($this->input->LT(1)->getText())))) ) {$s = 1;}

                    else if ( (true) ) {$s = 13;}

                     
                    $input->seek($index18_29);
                    if ( $s>=0 ) return $s;
                    break;
        }
        if ($this->recognizer->state->backtracking>0) {$this->recognizer->state->failed=true; return -1;}
        $nvae =
            new NoViableAltException($this->getDescription(), 18, $_s, $input);
        $this->error($nvae);
        throw $nvae;
    }
}
function t033backtrackingParser_DFA19_static(){
    $eot = "\xf\xff";
    $eof = "\xf\xff";
    $min = "\x1\x4\xe\xff";
    $max = "\x1\x2e\xe\xff";
    $accept = "\x1\xff\x1\x2\x1\x1\xc\xff";
    $special = "\xf\xff";
    $transitionS = array(
        "\x1\x2\x12\xff\x1\x2\x2\xff\xf\x2\x5\xff\x1\x1",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
        "",
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

class t033backtrackingParser_DFA19 extends DFA {

    private static $DFA = null;

    public function __construct($recognizer) {
        if (self::$DFA === null) {
            self::$DFA = t033backtrackingParser_DFA19_static();
        }

        $this->recognizer = $recognizer;
        $this->decisionNumber = 19;
        $this->eot = self::$DFA['eot'];
        $this->eof = self::$DFA['eof'];
        $this->min = self::$DFA['min'];
        $this->max = self::$DFA['max'];
        $this->accept = self::$DFA['accept'];
        $this->special = self::$DFA['special'];
        $this->transition = self::$DFA['transition'];
    }
    public function getDescription() {
        return "()* loopback of 49:41: ( declaration )*";
    }
}
 
?>
<?php

namespace Antlr\Runtime;

abstract class Token
{
    /**
     * All tokens go to the parser (unless skip() is called in that rule)
     * on a particular "channel".  The parser tunes to a particular channel
     * so that whitespace etc... can go to the parser on a "hidden" channel.
     */
    const DEFAULT_CHANNEL = 0;

    /**
     * Anything on different channel than DEFAULT_CHANNEL is not parsed by parser.
     */
    const HIDDEN_CHANNEL = 99;

    const EOR_TOKEN_TYPE = 1;
    /** imaginary tree navigation type; traverse "get child" link */
    const DOWN = 2;
    /** imaginary tree navigation type; finish with a child list */
    const UP = 3;
    const MIN_TOKEN_TYPE = 4; // = UP+1;
    const EOF = CharStream::EOF; // = CharStream.EOF;

    static public function EOF_TOKEN()
    {
        return CommonToken::forType(self::EOF);
    }
    const INVALID_TOKEN_TYPE = 0;

    static public function INVAILD_TOKEN()
    {
        return CommonToken::forType(self::INVALID_TOKEN_TYPE);
    }

    /**
     * In an action, a lexer rule can set token to this SKIP_TOKEN and ANTLR
     * will avoid creating a token for this symbol and try to fetch another.
     */
    static public function SKIP_TOKEN()
    {
        return CommonToken::forType(self::INVALID_TOKEN_TYPE);
    }
}
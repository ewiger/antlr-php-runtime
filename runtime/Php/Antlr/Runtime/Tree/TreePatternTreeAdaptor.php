<?php

class TreePatternTreeAdaptor extends CommonTreeAdaptor
{
    public function create(Token $payload = null)
    {
        return new TreePattern($payload);
    }
}
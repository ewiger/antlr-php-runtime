grammar t037rulePropertyRef;
options {
  language = Php;
}

a returns [bla]
@after {
    $bla = $start . $stop . $text
}
    : A+
    ;

A: 'a'..'z';

WS: ' '+  { $channel = \$this->HIDDEN; };

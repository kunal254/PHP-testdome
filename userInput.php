<?php

class TextInput{
    public $input;

    public function add($text)
    {
        $this->input .= $text;
    }

    public function getValue(){
        return $this->input;
    }
}

class NumericInput extends TextInput{
    public function add($num)
    {
        if(ctype_digit($num))
            $this->input .= $num;
    }
}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('0');
echo $input->getValue();


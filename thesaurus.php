<?php

class Thesaurus{
    
    private $thesaurus;

    function __construct(array $thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms(string $word) : string
    {   
        if(array_key_exists($word, $this->thesaurus))
            return $this->res($word, $this->thesaurus[$word]);
        else
            return $this->res($word);
    }
    
    private function res($word, $syn = [])
    {
        return json_encode(
                array(
                    "word" => $word,
                    "synonyms" => $syn
                )
            );
    }
}

$thesaurus = new Thesaurus(
    [
        "buy" => array("purchase"),
        "big" => array("great", "large")
    ]
);

echo $thesaurus->getSynonyms("big");


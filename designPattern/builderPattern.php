<?php

class NutritionalFactsBuilder {
    private $sodium;
    private $fat;
    private $carbo;

    /**
     * It is preferred to call NutritionalFacts::createBuilder
     * to calling this constructor directly.
     */
    function __construct($s) {
        $this->sodium = $s;
    }

    function fat($f) {
        $this->fat = $f;
        return $this;
    }

    function carbo($c) {
        $this->carbo = $c;
        return $this;
    }

    function getSodium() {
        return $this->sodium;
    }

    function getFat() {
        return $this->fat;
    }

    function getCarbo() {
        return $this->carbo;
    }

    function build() {
        return new NutritionalFacts($this);
    }
}


class NutritionalFacts {
    private $sodium;
    private $fat;
    private $carbo;

    /**
     * It is preferred to call NutritionalFacts::createBuilder
     * to calling this constructor directly.
     */
    function __construct(NutritionalFactsBuilder $b) {
        $this->sodium = $b->getSodium();
        $this->fat = $b->getFat();
        $this->carbo = $b->getCarbo();
    }

    static function createBuilder($s) {
        return new NutritionalFactsBuilder($s);
    }
}

echo '<pre>';
var_dump(NutritionalFacts::createBuilder(10)->fat(23)->carbo(1)->build());
echo '</pre>';

// NutritionalFacts Instantiation #0
$nfb = new NutritionalFactsBuilder(10);
$nfb = $nfb->fat(23)->carbo(1);
$nf0 = new NutritionalFacts($nfb);

// NutritionalFacts Instantiation #1
$nfb = new NutritionalFactsBuilder(10);
$nf1 = $nfb->fat(23)->carbo(1)->build();

// NutritionalFacts Instantiation #2
$nf2 = NutritionalFacts::createBuilder(10)->fat(23)->carbo(1)->build();

// NutritionalFacts Instantiation #3
// $nf3 = (new NutritionalFactsBuilder(10))->fat(23)->carbo(1)->build();

?>




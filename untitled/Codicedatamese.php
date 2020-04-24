<?php


class Codicedatamese
{
    private string $codMese;
    private  $month=array("","A","B","C","D","E","H","L","M","P","R","S","T");
    public function __construct(int $mese)
    {
        return $this->codMese= $this->month[$mese];
    }
    public function getcodice(): string
    {
        return $this->codMese;
    }

    public function __toString(): string
    {
        return $this->codMese;
    }

}

?>


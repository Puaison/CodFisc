<?php


class Codicedataanno
{
    private string $codAnno;
    public function __construct(string $anno)
    {
        return $this->codAnno=substr($anno, -2);
    }
    public function getcodice(): string
    {
        return $this->codAnno;
    }

    public function __toString(): string
    {
        return $this->codAnno;
    }


}

?>
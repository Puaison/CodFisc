<?php


class Codicedatagiorno
{
    private string $codGiorno;
    public function __construct(string $giorno, string $sesso)
    {
        $split=str_split($giorno);
        if (count($split)==1){
            $this-> codGiorno= sprintf('%02d', $giorno);
        }
            else{
                $this-> codGiorno=$giorno;
        }
        if ($sesso == "F" || $sesso=="f"){

            return $this->codGiorno=(intval($this->codGiorno)+40);
        }
           else{
               return $this->codGiorno;
            }
    }
    public function getcodice(): string
    {
        return $this->codGiorno;
    }

    public function __toString(): string
    {
        return $this->codGiorno;
    }


}

?>
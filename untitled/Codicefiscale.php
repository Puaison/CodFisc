<?php



class Codicefiscale
{

    private string $codice;

    function __construct(string $nome, string $cognome, string $anno, string $mese, string $giorno, string $sesso, string $comune,string $provincia)
    {

        $this->codice = "Non ancora calcolato";
        $COD1 = new Codicecognome($cognome);
        $COD2 = new Codicenome($nome);
        $COD3 = new Codicedataanno($anno);
        $COD4 = new Codicedatamese($mese);
        $COD5 = new Codicedatagiorno($giorno, $sesso);
        $COD6 = new Codicecomune($comune,$provincia);

        $COD7 = new Codicecontrollo($COD1->getcodice() , $COD2->getcodice() , $COD3->getcodice() , $COD4->getcodice() , $COD5->getcodice() , $COD6->getcodice());

        $this->codice = ($COD1->getcodice() . $COD2->getcodice() . $COD3->getcodice() . $COD4->getcodice() . $COD5->getcodice() . $COD6->getcodice() . $COD7->getcodice());
    }

    function getcodice(): string
    {
        return $this->codice;
    }

    function __tostring(): string
    {
        return $this->codice;
    }



}
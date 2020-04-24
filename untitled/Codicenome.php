<?php

/**
 * Class Codicenome
 * @author Alespero
 */
class Codicenome
{

    private string $codnome; //Parte del codice fiscale relativa al Nome

     /**
     * Metodo costruttore che necessita del nome sotto forma di stringa, accetta spazi,caratteri lowercase e uppercase
     */
    function __construct(string $stri)
    {

        $s = strtoupper($stri);                     //Trasformazione della String in UPPERCASE
        $s = str_split($s, 1);          //Passaggio da stringa ad ARRAY


        $a=array();

        foreach ($s as $arr => $val )               //Eliminazione spazi vuoti
        {
            if ($val == " ")
                unset($s[$arr]);
        }


        foreach ($s as $x)                          //Creazione di un array con le sole consonanti
            if ($x != 'A' && $x != 'E' && $x != 'I' && $x != 'O' && $x != 'U')
                    $a[]=$x;

        if (count($a) > 3) //Taglio della seconda consonante se consonanti >3
        {
            $kk = 0;
            foreach ($a as $arr => $val)
            {
                if ($kk == 1)
                    unset($a[$arr]);
            $kk++;
            }
        }

        if (count($a) < 3)                          //Aggiunta vocali e stringa XXX se consonanti insufficienti
        {
            foreach ($s as $x)
            {
                if ($x == 'A' || $x == 'E' || $x == 'I' || $x == 'O' || $x == 'U')
                    $a[] = $x;
            }

            $xxx = array('X','X','X');
            $a=array_merge($a,$xxx);
        }

        $a = array_slice($a, 0, 3); //Taglio dell'array a 3 caratteri
        $this->codnome=implode($a);                //Trasformazione in stringa

    }

     /**
     * @return string
     * Metodo ritorna la sola stringa con i caratteri relativi al Nome
     */
    function getcodice(): string
    {
        return $this->codnome;
    }

     /**
     * Metodo To_String che ritorna lo stato dell'oggetto
     */
    function __tostring(): string
    {
        $a= "Il codice relativo al nome calcolato è : ".$this->codnome;
        return $a;
    }


}
?>
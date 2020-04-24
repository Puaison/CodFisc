<?php

/**
 * Codicecontrollo è una classe responsabile per il calcolo
 * del carattere di controllo del codice fiscale
 *
 * Class Codicecontrollo
 * @author Alespero
 */
class Codicecontrollo
{

    private string $codcontrollo;

     /**
     * Metodo costruttore che necessita del resto del codice fiscale sotto forma di stringhe
     */
    function __construct(string $a,string $b,string $c,string $d,string $e,string $f)
    {

        $compatto=$a.$b.$c.$d.$e.$f;  //Compattazione stringhe in entrata

        $Acompatto = str_split($compatto, 1);   //Trasformazione in ARRAY
        $somma=0;
        $i=1;

        foreach ($Acompatto as $arr)    //Calcolo della somma per ogni carattere
        {

 //DEBUG    $smm=$somma;

            if($i%2 == 0)
            {
                switch ($arr)  //caratteri PARI
                {
                    case $arr =="0":
                    case $arr =="A":
                        break;
                    case $arr =="1":
                    case $arr =="B":
                        $somma=$somma+1;
                        break;
                    case $arr =="2":
                    case $arr =="C":
                        $somma=$somma+2;
                        break;
                    case $arr =="3":
                    case $arr =="D":
                        $somma=$somma+3;
                        break;
                    case $arr =="4":
                    case $arr =="E":
                        $somma=$somma+4;
                        break;
                    case $arr =="5":
                    case $arr =="F":
                        $somma=$somma+5;
                        break;
                    case $arr =="6":
                    case $arr =="G":
                        $somma=$somma+6;
                        break;
                    case $arr =="7":
                    case $arr =="H":
                        $somma=$somma+7;
                        break;
                    case $arr =="8":
                    case $arr =="I":
                        $somma=$somma+8;
                        break;
                    case $arr =="9":
                    case $arr =="J":
                        $somma=$somma+9;
                        break;
                    case $arr =="K":
                        $somma=$somma+10;
                        break;
                    case $arr=="L":
                        $somma=$somma+11;
                        break;
                    case $arr=="M":
                        $somma=$somma+12;
                        break;
                    case $arr=="N":
                        $somma=$somma+13;
                        break;
                    case $arr=="O":
                        $somma=$somma+14;
                        break;
                    case $arr=="P":
                        $somma=$somma+15;
                        break;
                    case $arr=="Q":
                        $somma=$somma+16;
                        break;
                    case $arr=="R":
                        $somma=$somma+17;
                        break;
                    case $arr=="S":
                        $somma=$somma+18;
                        break;
                    case $arr=="T":
                        $somma=$somma+19;
                        break;
                    case $arr=="U":
                        $somma=$somma+20;
                        break;
                    case $arr=="V":
                        $somma=$somma+21;
                        break;
                    case $arr=="W":
                        $somma=$somma+22;
                        break;
                    case $arr=="X":
                        $somma=$somma+23;
                        break;
                    case $arr=="Y":
                        $somma=$somma+24;
                        break;
                    case $arr=="Z":
                        $somma=$somma+25;
                        break;
                    default:
                        $somma=0;
                        echo("ERRORE");
                        break;
                }
            }
            if($i%2 != 0)
            {
                switch ($arr)  //caratteri DISPARI
                {
                    case $arr =="0":
                    case $arr =="A":
                        $somma=$somma+1;
                        break;
                    case $arr =="1":
                    case $arr =="B":
                        break;
                    case $arr =="2":
                    case $arr =="C":
                        $somma=$somma+5;
                        break;
                    case $arr =="3":
                    case $arr =="D":
                        $somma=$somma+7;
                        break;
                    case $arr =="4":
                    case $arr =="E":
                        $somma=$somma+9;
                        break;
                    case $arr =="5":
                    case $arr =="F":
                        $somma=$somma+13;
                        break;
                    case $arr =="6":
                    case $arr =="G":
                        $somma=$somma+15;
                        break;
                    case $arr =="7":
                    case $arr =="H":
                        $somma=$somma+17;
                        break;
                    case $arr =="8":
                    case $arr =="I":
                        $somma=$somma+19;
                        break;
                    case $arr =="9":
                    case $arr =="J":
                        $somma=$somma+21;
                        break;
                    case $arr=="K":
                        $somma=$somma+2;
                        break;
                    case $arr=="L":
                        $somma=$somma+4;
                        break;
                    case $arr=="M":
                        $somma=$somma+18;
                        break;
                    case $arr=="N":
                        $somma=$somma+20;
                        break;
                    case $arr=="O":
                        $somma=$somma+11;
                        break;
                    case $arr=="P":
                        $somma=$somma+3;
                        break;
                    case $arr=="Q":
                        $somma=$somma+6;
                        break;
                    case $arr=="R":
                        $somma=$somma+8;
                        break;
                    case $arr=="S":
                        $somma=$somma+12;
                        break;
                    case $arr=="T":
                        $somma=$somma+14;
                        break;
                    case $arr=="U":
                        $somma=$somma+16;
                        break;
                    case $arr=="V":
                        $somma=$somma+10;
                        break;
                    case $arr=="W":
                        $somma=$somma+22;
                        break;
                    case $arr=="X":
                        $somma=$somma+25;
                        break;
                    case $arr=="Y":
                        $somma=$somma+24;
                        break;
                    case $arr=="Z":
                        $somma=$somma+23;
                        break;
                    default:
                        $somma=0;
                        echo("ERRORE");
                        break;
                }
            }

//DEBUG            print ("INIZIO \n");
//DEBUG            var_dump($arr);
//DEBUG            var_dump($somma-$smm);
//DEBUG            var_dump($somma);
//DEBUG            var_dump($i);
//DEBUG            print ("FINE \n\n");

            $i++;
        }

//DEBUG      var_dump($somma);

        $somma=$somma%26;

        switch($somma)  //Assegnazione carattere di controllo in base al resto della divisione
        {
            case 0:
                $this->codcontrollo="A";
                break;
            case 1:
                $this->codcontrollo="B";
                break;
            case 2:
                $this->codcontrollo="C";
                break;
            case 3:
                $this->codcontrollo="D";
                break;
            case 4:
                $this->codcontrollo="E";
                break;
            case 5:
                $this->codcontrollo="F";
                break;
            case 6:
                $this->codcontrollo="G";
                break;
            case 7:
                $this->codcontrollo="H";
                break;
            case 8:
                $this->codcontrollo="I";
                break;
            case 9:
                $this->codcontrollo="J";
                break;
            case 10:
                $this->codcontrollo="K";
                break;
            case 11:
                $this->codcontrollo="l";
                break;
            case 12:
                $this->codcontrollo="M";
                break;
            case 13:
                $this->codcontrollo="N";
                break;
            case 14:
                $this->codcontrollo="O";
                break;
            case 15:
                $this->codcontrollo="P";
                break;
            case 16:
                $this->codcontrollo="Q";
                break;
            case 17:
                $this->codcontrollo="R";
                break;
            case 18:
                $this->codcontrollo="S";
                break;
            case 19:
                $this->codcontrollo="T";
                break;
            case 20:
                $this->codcontrollo="U";
                break;
            case 21:
                $this->codcontrollo="V";
                break;
            case 22:
                $this->codcontrollo="W";
                break;
            case 23:
                $this->codcontrollo="X";
                break;
            case 24:
                $this->codcontrollo="Y";
                break;
            case 25:
                $this->codcontrollo="Z";
                break;
            default:
                $this->codcontrollo="ERRORE";
                break;
        }

    }

     /**
     * @return string
     * Metodo ritorna la sola stringa con il carattere di controllo
     */
    function getcodice(): string
    {
        return $this->codcontrollo;
    }

    /**
     * Metodo To_String che ritorna lo stato dell'oggetto
     */
    function __tostring(): string
    {
        $a= "Il codice di controllo calcolato è: ".$this->codcontrollo;
        return $a;
    }


}
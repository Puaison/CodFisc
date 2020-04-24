<?php
declare(strict_types=1);

class codicecomune
{
    private string $codice;
    private bool $valido;

    function __construct(string $c,string $p)
    {
        $handle = fopen ("codici_comuni_italiani.txt", "r");
        $trovato=false;
        while(!(feof($handle)) && !($trovato))
        {

            $buffer = fgets($handle);
            if(!(feof($handle)))
            {
            
                $buffer = rtrim($buffer);
                list($_codice, $comune, $provincia) = explode (";", $buffer);
                if($comune==$c && $provincia==$p)
                {
                
                    $trovato=true;
                    $this->codice=$_codice;
                }
            }  
        }
        if($trovato)
        {
            $this->valido=true;
        } 
        else $this->valido=false;
    }

    function getvalidità():bool
    {
        return $this->valido;
    }

    function getcodice():string
    {
        return $this->codice;
    }

    function __toString():string
    {
        $a="qua non parte nulla";
        if($this->valido)
        {
            $a="il codice è ".$this->codice;
        }
        else $a="codice non valido";
        return $a;
    }
}

?>
<?php 
    function Saudacao():string
    {   
        date_default_timezone_set("America/Sao_Paulo");
        $hora = date('H:i:s');
        
        if ($hora >= 0 AND $hora <= 5) {
            $saudação = "Boa madrugada!";
        } elseif($hora >= 6 && $hora <= 12){
            $saudação = "Bom dia!";
        } else if($hora >= 13 AND $hora<=18){
            $saudação = "Boa tarde!";
        } else {
            $saudação = "Boa noite!";
        }
        return $saudação;
    }

    function ResumirTexto(string $texto, int $limite, $continue = "..."):string
    {
        $texto_limpo = trim($texto);
        if(mb_strlen($texto_limpo) <= $limite){
            return $texto_limpo;
        }

        $resumirTexto = mb_substr($texto_limpo, 0, mb_strrpos(mb_substr($texto_limpo, 0, $limite), ''));

        // $sem_tags = strip_tags(); ---> Apaga Tags 
        return $resumirTexto.$continue;
    }

    echo Saudacao(),"<br>", ResumirTexto("<strong>Hello, world!</strong>", 10);
?>
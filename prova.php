<!-- atividade 1 -->

<?php

    function helloWorld(){
        echo "Hello World";
    }




//<!-- atividade 2 -->



    function nomeRecebido($nome){

        echo "Hello $nome";
    }

    nomeRecebido("Vitor");



//<!-- atividade 3 -->


   $alunos  =  ["Vitor", "Mikael", "Thaynan", "Ryan", "Jorge"];
    

    echo "$alunos[4]";




//<!-- atividade 4 -->


   $num =  [-2, -1, 1, 2, 3];





//<!-- atividade 5  -->


   $num =  [-2, -1, 1, 2, 3];

    function negativoPositivo($num){
        for($i=0; $i<5; $i++){
        if($num >0){
            echo "O numero é positivo";
        }

        elseif($num <0){
            echo "O numero é negativo";
        }

        else{
            echo "O numero é zero";
        }

    }
    
}

//<!-- atividade 6 -->

    $alunos = [

        ["nome" => "Jorge"],
        ["nome" => "Vitor"]

    ];
    echo $alunos[1]["nome"];
    echo "O nome tem 5 letras";


    //<!-- atividade 7 -->


    $escola = [

        ["nome" => "Jorge"],
        ["idade" => 15],
        ["cursoTecnico" => "informatica"]
    ];


            echo "$escola["nome"] faz $escola[cursoTecnico];
    

?>







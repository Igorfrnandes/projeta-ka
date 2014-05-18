<?php


/*
$numero = 9;

if($numero === 10){
    
    echo 'não';
    
    
}else
    
    echo 'erro';
*/


# Estudar encode

$cadastro = array(
    
    'pessoal' => array(
        
        'nome' => 'Igor',
        'sobrenome' => 'Fernandes',
        'rg' => 489993335,
        'teste' => array(
            'teste1' => 'teste1',
            'teste2' => 'teste2',
            
        ),
        
    ),
    'profissional' => array(
        'empresa' => 'timbiras',
        'cargo' => 'suporte',
    ),
    
);

#var_dump($cadastro);

#echo '<br>'.'Nome:'.$cadastro['pessoal']['nome'].' '.'Sobre Nome:'.$cadastro['pessoal']['sobrenome'].' '.'RG:'.$cadastro['pessoal']['rg'];
#echo '<br>'.$cadastro['pessoal']['teste']['teste1'].'<br>'.$cadastro['pessoal']['teste']['teste1'];



$sobre = array (    
   
    'dados' => array(
        
       'endereco' => array(
        
        'rua' => 'inverno',
        'numero' => 5,
            
),    
), 
);

#echo '<br>'.'Rua'.' '.$sobre ['dados']['endereco']['rua'].'<br>'.'numero'.' '
#$sobre['dados']['endereco']['numero'];


#var_dump($dados); # para debugar a variavel

$teste = array(
    
    "1" => "texte1",
    "2" => "texte2",
    "3" => "texte3",
    "4" => "texte4",
    "5" => "texte5",
    "6" => "texte6",
    "7" => "texte7",
    
    
);

$god = array(
    "1" => "teste1",
    "2" => "teste2",
    "3" => "teste3",
    "4" => "teste4",
    "5" => "teste5",
    
    );
    
    

for($i = 0; $i < 6; $i++) {
    
    #echo @$teste[$i];
    
    
    
}

foreach ($teste as $value) {
    
    echo $value."<br>";
    
    
}
    #echo "<br>";
    
foreach ($god as $key => $tmp ) {
    
    #echo "$god[$key] => $tmp"."<br>";
    
}

$a = array(
    "one" => 1,
    "two" => "igor",

    
    
    
);


foreach ($a as $key => $value) {
    
    #echo "$a[$key] => $value".".<br>";
    
}

$primeira = array(
    "1" => "igor",
    '2' => array(
        '1',
        '2'
        
    ),
    '3' => "nandes"
    
    
    
);

foreach ($primeira as &$value) {
    foreach ($value as $v) {
        
        
        
    }
    
}




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

$teste = array();
$teste['nome'] = 'Igor';
$teste['sobrenome'] = 'Fernandes';

echo $teste['nome'];
echo $teste['sobrenome'];
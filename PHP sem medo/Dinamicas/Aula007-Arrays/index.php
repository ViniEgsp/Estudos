<?php //Arrays "[]": Índices e valores
$nome = ['Alexandre', 'João', 'Sophie', 'Jack'];
$filmes = ['terror' => 'Pânico', 'Fantasia'=> 'Senhos dos Anéis'];
$filmes['drama'] = 'filme de drama';
$filmes['terror'] = 'Um doente matando gente burra';
$terror= $filmes['terror'];


echo $nome . '<br>'; // Echo não chama uma Array, chama variaveis q podem conter array, mas não a Array em si.

print_r($nome);//pra chamar Arrays, usa-se " print_r" (print_array(não oficial))
echo '<br>';
print_r($nome[1]);
echo '<hr>';

print_r($filmes);
echo '<br>';
print_r($filmes['terror']);
$terror= $filmes['terror'];
echo '<br>';
echo $terror;
echo '<hr>';

/*Array multidimensional. */
$livros = [
    'ficcao' => ['O senhor do seu anel', 'Harry Potter'],
    'terror' => ['chupa pescoços', 'lambisames']
];

print_r($livros['ficcao']);
echo '<br>';
print_r($livros['terror']);
echo '<br>';
print_r($livros['ficcao'][0]);
echo '<hr>';

$outrosLivros = 
    ['economia'=> ['Gostei'=>['As 6 lições', 'Padrão Bitcoin', 'A moeda na era digital',]],

    'ficcao'=> ['The Witcher', 'Eragon', 'Outro']
    ];

print_r($outrosLivros ['economia']['Gostei'][0])
?>
<hr>
<a href="./Aula008-Array-php/index.php">aula sem exercicio</a>
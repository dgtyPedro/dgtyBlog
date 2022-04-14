@extends('index')
@section('title')
Limites do PHP (Do ponto de vista de um programador PHP)
@endsection
@section('content')
O PHP assim como o Java é uma linguagem alvo de muitas previsões, 
todo mês são textos novos marcando a morte do PHP por X motivo mas a verdade 
é que essas postagens já estão ficando batidas e nem são mais 
levadas a sério. Entretanto não devemos também ignorar alguns sintomas que o PHP possuí, aqui vou citar alguns pontos que percebo e me incomodam na linguagem.

<h2>Server-Side</h2>
<p>No PHP qualquer processamento e função deve ser 
    realizada no carregamento da página, consultas em bancos de dados e requisições não podem ser feitas 
"On-demand" assim como ocorre no Javascript, e para qualquer ação a página deve ser recarregada. 
Felizmente o Javascript e o PHP andam juntos então o JS consegue dar uma boa cobertura nessa área e deixar os sistemas mais 
fluídos depêndencia de JS para o PHP, antigamente essas tech se completavam, o Javascript cuidava do front-end 
e o PHP do back-end, entretanto com o advento do Node hoje o Javascript consegue também segurar as pontas no Back-End e não depende mais do PHP 
enquanto o PHP ainda precisa do Javascript para fazer sistemas fluídos sem a necessidade de reloads.</p> 
<p>Isso não é necessariamente algo ruim da linguagem já que como o próprio nome diz a linguagem é um "Hypertext Preprocessor", 
    entretanto em 2022 vemos como essa característica pode atrapalhar na UX dos sistemas. 
</p>

<h2>Uma linguagem muito bondosa</h2>
<p>O PHP é uma linguagem que perdoa muito o desenvolvedor, muitas linhas de código que possuem problemas estruturais passam e o PHP 
    dificilmente reclama disso, é claro que isso é muito mais um problema do desenvolvedor do que da própria linguagem mas essa característica 
pode fazer erros pequenos se tornarem uma tortura na hora de fazer debugging, o Typescript é uma tech que na minha opinião acha o equilíbrio perfeito disso, 
sempre apita problemas de tipagem e estrutura mas deixa o desenvolvimento acontecer.</p>

<br/>
@endsection
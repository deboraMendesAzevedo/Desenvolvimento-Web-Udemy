<h3>Fornecedor</h3>

{{-- Para fazer comentários no blaide --}}

{{ 'para imprimir na tela'}}
<br>
<?= 'pode usar deste jeito também'?>

<br>

@php

echo 'Teste de texto'

// Para comentar 1 linha

/*
 para comentar varias linhas 

if(){

}elif(){

}else{
    }

usar função empty
valores considerados vazio
null
0
0.0
'0'
false
array()
$var  o único que não tem como testar é a variável



*/


@endphp


 {{-- @dd($fornecedores) Para imprimir uma variável  usa @ddnome_variaavel--}}


 {{-- Retorno positivo da condição 
@if(count($fornecedores)> 0 && count($fornecedores) < 10)
    <h3>Existe alguns fornecedores</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existe vários fornecedores</h3>
@else
    <h3>Ainda não tem nada cadastrado</h3>
@endif

@unless () a forma falsa da condição 
    
@endunless para finalisa a condição 

--}}
<br>
Fornecedor : {{ $fornecedores [0]['nome'] }}
<br>
Status : {{ $fornecedores[0]['status'] }}
<br>

@if($fornecedores[0]['status'] == 'N')
    Fornecedor inativo
@endif

<br>

@if(!($fornecedores[0]['status'] == 'S')) {{-- negação da condição  --}}
    Fornecedor inativo
@endif

<br>

@unless ($fornecedores[0]['status'] == 'S')  {{-- negação da condição  --}}
    Fornecedor inativo

@endunless

@isset($fornecedores) {{-- Para verificar se a variavel existe --}}
    <br>
    Fornecedor : {{ $fornecedores [0]['nome'] }}
    <br>
    Status : {{ $fornecedores[0]['status'] }}
    <br>
    @isset($fornecedores[0]['cnpj'])
        CNPJ : {{ $fornecedores[0]['cnpj'] }}    
    @endisset
        
@endisset

<br>
opção sem cnpj

@isset($fornecedores) {{-- Para verificar se a variavel existe --}}
    <br>
    Fornecedor : {{ $fornecedores [1]['nome'] }}
    <br>
    Status : {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ : {{ $fornecedores[1]['cnpj'] }}    
    @endisset
        
@endisset

@isset($fornecedores) {{-- Para verificar se a variavel existe --}}
    <br>
    Fornecedor : {{ $fornecedores [2]['nome'] }}
    <br>
    Status : {{ $fornecedores[2]['status'] }}
    <br>
    @isset($fornecedores[2]['cnpj'])
        CNPJ : {{ $fornecedores[2]['cnpj'] }} 
        @empty($fornecedores[2]['cnpj']) {{-- para mostrar quando o valor é vazio  --}}
            - Vazio
            
        @endempty   
    @endisset
        
@endisset


@isset($fornecedores) {{-- Para verificar se a variavel existe --}}
    <br>
    Fornecedor : {{ $fornecedores [1]['nome'] }}
    <br>
    Status : {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ : {{ $fornecedores[1]['cnpj'] ?? ''}}    {{-- ?? é para testar a variável de existe e se o valor não é null --}}
    @endisset
        
@endisset

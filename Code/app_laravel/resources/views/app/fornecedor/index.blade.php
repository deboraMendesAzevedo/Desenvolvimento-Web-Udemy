<h3>Fornecedor</h3>

{{-- Para fazer comentários no blaide --}}

{{ 'para imprimir na tela'}}
<br>
<?= 'pode usar deste jeito também'?>

<br>

@php

echo 'Teste de texto'

// Para comentar 1 linha

/* para comentar varias linhas

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
<br>
teste quando o valor não for informado
<br>
@isset($fornecedores) {{-- Para verificar se a variavel existe --}}
    <br>
    Fornecedor : {{ $fornecedores [2]['nome'] }}
    <br>
    Status : {{ $fornecedores[2]['status'] }}
    <br>
    CNPJ : {{ $fornecedores[2]['cnpj'] ?? ''}}    {{-- ?? é para testar a variável de existe e se o valor não é null --}}
    <br>
    Telefone : {{ $fornecedores[2]['ddd'] ?? ''}} {{ $fornecedores[2]['telefone'] ?? ''}}
    <br>
    @switch($fornecedores[2]['ddd'])
        @case('11')
            São Paulo = SP
            @break
        @case('85')
            Fortaleza - CE
            @break
        @case('32')
            Juiz de Fora - MG
        @break
        @default
            Estado não informado

    @endswitch
    <br>

@endisset

<br>
<h2>usando o for</h2>
<br>

@for($i = 0; $i < 10; $i++)
    {{ $i }} <br>
@endfor
<br>
<br>
<hr>
@isset($fornecedores) {{-- Para verificar se a variavel existe --}}
    <br>
    @for ($i = 0; isset($fornecedores[$i]); $i++)

    Fornecedor : {{ $fornecedores [$i]['nome'] }}
    <br>
    Status : {{ $fornecedores[$i]['status'] }}
    <br>
    CNPJ : {{ $fornecedores[$i]['cnpj'] ?? ''}}    {{-- ?? é para testar a variável de existe e se o valor não é null --}}
    <br>
    Telefone : {{ $fornecedores[$i]['ddd'] ?? ''}} {{ $fornecedores[$i]['telefone'] ?? ''}}
    <br>
    @switch($fornecedores[$i]['ddd'])
        @case('11')
            São Paulo = SP
            @break
        @case('85')
            Fortaleza - CE
            @break
        @case('32')
            Juiz de Fora - MG
        @break
        @default
            Estado não informado

    @endswitch
    <br>
    <hr>
    @endfor

@endisset

<h2>Usando o while</h2>

@isset($fornecedores) {{-- Para verificar se a variavel existe --}}
    <br>

    @php $i = 0  @endphp
    @while (isset($fornecedores[$i]))

    Fornecedor : {{ $fornecedores [$i]['nome'] }}
    <br>
    Status : {{ $fornecedores[$i]['status'] }}
    <br>
    CNPJ : {{ $fornecedores[$i]['cnpj'] ?? ''}}    {{-- ?? é para testar a variável de existe e se o valor não é null --}}
    <br>
    Telefone : {{ $fornecedores[$i]['ddd'] ?? ''}} {{ $fornecedores[$i]['telefone'] ?? ''}}
    <br>
    @switch($fornecedores[$i]['ddd'])
        @case('11')
            São Paulo = SP
            @break
        @case('85')
            Fortaleza - CE
            @break
        @case('32')
            Juiz de Fora - MG
        @break
        @default
            Estado não informado

    @endswitch
    <br>
    <hr>
    @php $i ++  @endphp
    @endwhile

@endisset



@isset($fornecedores) {{-- Para verificar se a variavel existe --}}
    <br>
    Fornecedor : @{{ $fornecedores [2]['nome'] }}{{-- Quando quiser que o nome seja impresso da forma que está escrito basta colocar o @  antes --}}
    <br>
    Status : @{{ $fornecedores[2]['status'] }}
    <br>
    @isset($fornecedores[2]['cnpj'])
        CNPJ : @{{ $fornecedores[2]['cnpj'] }}
        @empty($fornecedores[2]['cnpj']) {{-- para mostrar quando o valor é vazio  --}}
            - Vazio

        @endempty
    @endisset

@endisset

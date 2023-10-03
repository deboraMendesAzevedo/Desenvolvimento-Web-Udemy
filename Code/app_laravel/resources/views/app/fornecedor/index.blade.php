<h3>Fornecedor</h3>


{{-- para fazer comentário --}}


{{ 'teste'}}

<?= 'teste '?>


@php

    // Para comentários de uma linha
    /*
        Para comentários de multiplas linhas
    */
    





@endphp

@if(count($fornecedores) > 0 && count($fornecedores)<10)
    <h3>Existe fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>existem  vários fornecedores</h3>
@else
    <h3>Não existe fornecedor </h3>

@endif

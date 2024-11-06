{{-- esse é um comentario --}}
{{-- Para utilizar códigophp, colocamos o @php --}}

@php

    echo "Texto de teste"

@endphp
{{-- @endphp -> termina a parte que usa o php --}}
@dd($fornecedores)

<!-- @if(count($fornecedores)> 0 && count($fornecedores) < 10)
<h3> Existem alguns fornecedores cadastrados. </h3>
@elseif (count($fornecedores)> 10)
<h3> Existem vários fornecedores cadastrados. </h3>
@else
<h3> Ainda não existem fornecedores cadastrados. </h3>
@endif -->

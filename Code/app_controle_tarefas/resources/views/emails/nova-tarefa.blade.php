<x-mail::message>
# {{ $tarefa }}

Data limite de conclusão: {{ $data_limite_conclusao }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>



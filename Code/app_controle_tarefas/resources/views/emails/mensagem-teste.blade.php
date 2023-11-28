<x-mail::message>
# Introdução

Corpo do email

<x-mail::button :url="''">
texto do botão
</x-mail::button>

<x-mail::button :url="''">
texto do botão 2
</x-mail::button>

Obrigada!,<br>
{{ config('app.name') }}
</x-mail::message>

<h1>teste vamos ver</h1>
{{ $xss }} <!--veio do SupportController -->
<table>
    <thead>
        <th>Assunto</th>
        <th>Status</th>
        <th>Descrição</th>
        <th></th>
    </thead>
</table>

@foreach ($supports as $support)
    <tr>
        <td>{{ $support->subject }}</td>
        <td>{{ $support->status }}</td>
        <td>{{ $support->body }}</td>
        <td>
            >
        </td>
    </tr>
@endforeach

{{ $slot }}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" value ="{{ old('nome') }}" type="text" placeholder="Nome" class="borda-preta">
    @error('nome')
    {{ $message }}
    @enderror
    <br>
    <input name="telefone"  value ="{{ old('telefone') }}" type="text" placeholder="Telefone" class="borda-preta">
    <br>
    <input name="email" value ="{{ old('email') }}" type="text" placeholder="E-mail" class="borda-preta">
    <br>

    // pode criar uma foreach
    <select name= "motivo_contato" class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="1" {{ old('motivo_contato') == 1? 'selected' : ''}} >Dúvida</option>
        <option value="2"{{ old('motivo_contato') == 2? 'selected' : ''}}>Elogio</option>
        <option value="3" {{ old('motivo_contato') == 3? 'selected' : ''}}>Reclamação</option>
    </select>
    <br>
    <textarea name="mensagem" class="borda-preta">
        @if ( old('mensagem') !='' )
            {{ old('mensage') }}
        @else
        Preencha aqui a sua mensagem
        @endif
        </textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>

Site da aplicação

@auth

<h1>Usúario autenticado </h1>
<p>ID {{ Auth::user()->id }}</p>
<p>Nome {{ Auth::user()->name }}</p>
<p>Email {{ Auth::user()->email }}</p>



@endauth
@guest
    <br>Se inscreva
@endguest

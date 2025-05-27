<h1>Login</h1>
<hr>

@if ($errors->any())
<div style="color:red">
<h3>ERRO PORRA</h3>
<ul>
    @foreach ($errors->all() as $err)
    <li>{{ $err }}</li>
    @endforeach  
</ul>
</div>
@endif

<form action="{{ route('autentica.login') }}" method="POST">
@csrf
<input type="email" name="email" placeholder="Email: " value="{{ old('email') }}">
<br>
<input type="password" name="password" placeholder="Senha: ">
<br>
<input type="submit" value="Fazer Login">
</form>
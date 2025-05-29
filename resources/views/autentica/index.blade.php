<h1>Usuários</h1>
<hr>
@if (Auth::user())
    <b>Olá {{ Auth::user()->name }}.</b><br>
    <a href="{{ route('autentica.logout') }}">Sair</a>
@else
    Você não está autenticado ;-; <br>
    <a href="{{ route('autentica.login') }}">Entrar</a>
@endif
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

<form action="{{ route('autentica.gravar') }}" method="POST">
@csrf
<input type="text" name="name" placeholder="Nome: " value="{{ old('name') }}">
<br>
<input type="email" name="email" placeholder="Email: " value="{{ old('email') }}">
<br>
<input type="password" name="password" placeholder="Senha: ">
<br>
<input type="password" name="password_confirmation" placeholder="Confirme a senha: ">
<br>
<input type="submit" value="gravar">
</form>
<hr>

<ul>
@foreach ($usuarios as $usuario)
    <li>{{ $usuario->name }}</li>
@endforeach
</ul>
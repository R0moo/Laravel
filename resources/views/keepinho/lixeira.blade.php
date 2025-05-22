<h1>Keepinho</h1>
<h2>Lixeira</h2>
<hr>

<h3>Notas apagadas</h3>
@if (session('sucesso'))
<div style="color:green; background-color:lightgreen;padding:3px;margin:3px;">
    {{session('sucesso')}}
</div>
@endif
<ul>
@foreach ($lixo as $lixozinho)
<li><b>{{$lixozinho->titulo}}</b> <br> {{ $lixozinho->texto }}

<a href="{{ route('keep.restaurar', $lixozinho->id) }}">Desapagar nota</a></li>
<br>
 <br>

@endforeach
</ul>

<a href="{{ route('keep') }}">Voltar</a>
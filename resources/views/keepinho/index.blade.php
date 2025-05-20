<h1>Keepinho</h1>
<p>Seja bem vindo ao Keepinho, o melhor assistente do UNIVERSO</p>
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
<form action="{{ route('keep.gravar') }}" method="post">
@csrf
<label for="titulo">Título: </label>
<input type="text" name="titulo" value="{{ old('titulo') }}"> <br> <br>
<label for="texto">Nota: </label><br>
<textarea name="texto" id="texto" cols="30" rows="10">{{ old('texto') }}</textarea><br><br>
<input type="submit" value="Gravar nota">
</form>

<hr>
<br>
@foreach ($notas as $nota)
<div style="border:2px dashed pink;padding:8px; background-color: cyan;color:red; margin:4px; text-align:center; font-style: italic; width: 120px; text-decoration: underline">
    <b>{{ $nota->titulo }}</b><br>
    {{ $nota->texto }}
    <br>
    <a href="{{ route('keep.editar', $nota->id) }}">Editar</a> <br>

    <form action="{{ route('keep.apagar', $nota->id) }}" method="post">
    @method('DELETE')
    @csrf
        <button type="submit" style="background-color:red">Excluir</button>
    </form>
</div>
@endforeach
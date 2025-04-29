<h1>Keepinho</h1>
<p>Seja bem vindo ao Keepinho, o melhor assistente do UNIVERSO</p>
<hr>
<form action="{{ route('keep.gravar') }}" method="post">
@csrf
<textarea name="texto" id="texto" cols="30" rows="10"></textarea><br><br>
<input type="submit" value="Gravar nota">
</form>

<hr>
<br>
@foreach ($notas as $nota)
<div style="border:2px dashed pink;padding:8px; width:fit-content; background-color: cyan;color:red; margin:4px; text-align:center; display:inline; font-style: italic; text-decoration: underline">

    {{ $nota->texto }}
</div>
@endforeach
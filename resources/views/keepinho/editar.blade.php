<h1>Keepinho</h1>
<form action="{{ route('keep.editarGravar') }}" method="post">
    <!-- Altera para método PUT -->
    @method('PUT')
    @csrf

    <input type="hidden" name="id" value="{{ $nota->id }}">
    <textarea name="texto" id="texto" cols="30" rows="10">{{ $nota->texto }}</textarea>
    <br><br>
    <input type="submit" value="Editar nota">
</form>
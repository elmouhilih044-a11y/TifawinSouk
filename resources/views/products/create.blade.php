<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="nom" placeholder="Nom"><br>
    <input type="text" name="reference" placeholder="Référence"><br>
    <textarea name="description"></textarea><br>
    <input type="number" name="prix" step="0.01"><br>
    <input type="number" name="stock"><br>

    <select name="categorie_id">
        @foreach($categories as $cat)
            <option value="{{ $cat->id }}">{{ $cat->nom }}</option>
        @endforeach
    </select>

    <input type="file" name="image">

    <button type="submit">Ajouter</button>
</form>

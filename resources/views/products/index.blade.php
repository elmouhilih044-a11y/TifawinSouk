<h1>Liste des produits</h1>

@foreach($products as $product)
    <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px;">
        <h3>{{ $product->nom }}</h3>
        <p>Prix: {{ $product->prix }} DH</p>
        <p>Stock: {{ $product->stock }}</p>
    </div>
@endforeach

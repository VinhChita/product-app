<x-layout>
    <div class="card">
       x
        <h2 class="card-header">
            {{ $product->name }}
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-outline-warning"><i class="fa-solid fa-square-pen"></i> Edit</a>
        </h2>
        <div class="card-body">
            <img src="{{ asset('storage/' . $product->photo) }}"
                alt="Product Photo" width="300">
            <p class="card-text">{{ $product->description }}</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Quantity: {{ $product->qty }}</b></li>
            <li class="list-group-item"><b>Price: ${{ $product->price }}</b></li>
            <li class="list-group-item"><b>Total: ${{ $product->qty * $product->price }}</b></li>
            <li class="list-group-item">
                <form action="{{ route('products.destroy', $product) }}" method="post" onsubmit="return confirm('Are you sure you want to delete this product?')">
                    
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Delete</button>
                </form>
            </li>
        </ul>
    </div><br>
    <a href="{{ route('products.index') }}" class="btn btn-outline-dark">Product List</a>
</x-layout>
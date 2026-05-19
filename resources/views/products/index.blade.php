<x-layout>
    <h1>Product List</h1>
    <hr>
    <!-- បង្ហាញ message flash របស់ការលុបទិន្នន័យេជោគជ័យ​ -->
    @if (sesion('status'))
    <div class="alert alert-danger">{{ sesion('status')}}</div>
    @endif
    <!-- បញ្ចប់ការបញ្ចបើ message -->
    </div>
    <div>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>
    </div>
    @foreach ($products as $product)
    <div class="card">
        <h3 class="card-header">
            {{ $product->name }}
        </h3>
        <div class="card-body">
            <img src="{{ asset('storage/' . $product->photo) }}"
                alt="Product Photo" width="300">
            <h5>Price <span class="badge text-bg-danger">
                    ${{ $product->price }}</span></h5>
            <p class="card-text">{{ $product->description }}</p>
            <a href="{{ route('products.show', $product->id) }}"
                class="btn btn-secondary"><i class="fa-solid
fa-circle-info"> </i> View Details</a>
        </div>
    </div> <br>
    @endforeach
</x-layout>
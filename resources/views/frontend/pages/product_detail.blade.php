<x-layout.template>
    <x-slot name='title'>Product</x-slot>

    <!-- Navbar -->
    <x-components.navbar :cartCount=$cartCount>
    </x-components>

        <!-- Slot data goes here -->
        <div class="container-fluid bg-grey py-4 ">
            <div class="container p-3 bg-white">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset($product->image) }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-4 ">
                        <form action="/cart" method="post">
                            @csrf
                            <h2 >{{ $product->name }}</h2>
                            <div class="mt-4">
                                <span class="fw-bold fs-1 ">NRs.{{ $product->selling_price }}</span>
                                @if ($product->discount_percent>0)
                                <span class="text-secondary ms-3 fs-5 text-decoration-line-through">Nrs.{{ $product->price }}</span>
                                @endif
                            </div>
                            <input type="text" name="product_id" value="{{ $product->id }} " hidden>
                            <input type="text" name="selling_price" value="{{ $product->selling_price }}" hidden>
                            {{-- <div class="input-group">
                                <input type="button" value="-" class="button-minus" data-field="quantity">
                                <input type="number" step="1" max="10" min="1" value="1" name="qty" class="quantity-field">
                                <input type="button" value="+" class="button-plus" data-field="quantity">
                            </div> --}}
                            <input type="number" step="1" max="10" min="1" value="1" name="qty" class="quantity-field">

                            @guest
                                <a href="/login" class="btn btn-success sm">Add to Cart</a>
                            @else
                            <button type="submit"  class="btn btn-success sm">Add to Cart</button>

                            @endguest


                        </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer -->
    <x-components.footer></x-components>
</x-templates>

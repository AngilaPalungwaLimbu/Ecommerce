<div>
    <a href="/product_detail/{{ $products->id }}" class="text-dark text-decoration-none">
        <div class="card border-1 pborder rounded-0">
            <div class="card-body">
                <img src="{{ asset($products->image) }} " class="img-fluid" alt="">
            </div>
            <div class="p-3">
                <h5>{{ $products->name }}</h5>
                <p>{{ $products->selling_price }}  <span> {{ $products->unit->name }}</span></p>
            </div>
        </div>
    </a>
</div>

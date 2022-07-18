<div>
    <a href="/product_detail/{{ $products->id }}" class="text-dark text-decoration-none">
        <div class="card border-1 pborder rounded-0">
            <div class="card-body">
                <img src="{{ asset($products->image) }} " class="img-fluid" alt="">
            </div>
            <div class="p-3">
                <p class="fs-6">{{ $products->name }}</p>
                <span class="ptext fs-4">NRs.{{ $products->selling_price }}</span>
                @if ($products->discount_percent > 0)
                    <span class="text-secondary ms-2 fs-6 text-decoration-line-through">Nrs.{{ $products->price }}</span>
                @endif
                {{-- <span> per {{ $products->unit->name }}</span> --}}
            </div>
        </div>
    </a>
</div>

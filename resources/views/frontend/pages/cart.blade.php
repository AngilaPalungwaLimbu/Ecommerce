<x-layout.template>
    <x-slot name='title'>Product</x-slot>

    <!-- Navbar -->
    <x-components.navbar :cartCount=$cartCount>
        </x-components>

        <!-- Slot data goes here -->
        @if ($cartItems->isEmpty())
            <h5 class="p-4">Cart empty</h5>
        @else
            <div class="container">
                <h2>Cart</h2>
                <div class="row">
                    <div class="col-md-9">

                        <table class="table mt-3 ">
                            <tr>
                                <th>SNo.</th>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Rate</th>
                                <th>Amount</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($cartItems as $item)
                                <tr>
                                    <form action="/cart/{{ $item->id }} " method="post">
                                        @csrf
                                        @method('put')
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->product->name }}</td>
                                        <td>
                                            <input type="number" id="quantity" name="qty" min="1"
                                                max="10" value="{{ $item->qty }}">
                                            <input type="text" name="selling_price"
                                                value="{{ $item->product->selling_price }} " hidden>
                                        </td>
                                        <td>{{ $item->product->selling_price }} </td>
                                        <td>{{ $item->amount }}</td>
                                        <td style="width: 5%">
                                            <button type="submit" class="btn">
                                                <i class="fa-solid fa-rotate-right me-3 text-success"></i>
                                            </button>
                                        </td>
                                    </form>
                                    <td style="width: 5%">
                                        <form action="/cart/{{ $item->id }} " method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn">
                                                <i class="fa-solid fa-trash-can text-danger"></i>
                                            </button>
                                        </form>
                                    </td>

                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="4" class="text-end">Grand Total</td>
                                <td colspan="2">{{ $totalAmount }}</td>
                            </tr>
                            {{-- <tr>
                            <div class="container d-flex justify-content-between py-5">
                                <a href="/">
                                    <h5 class="text-secondary text-decoration-none"><i
                                            class="fa-solid fa-arrow-left me-3"></i>Continue Shopping</h5>
                                </a>

                                <form action="/cart/{{ $item->id }} " method="post">
                                    @csrf
                                    @method('put')
                                    <input type="number" id="quantity" name="qty" min="1" max="10"
                                        value="{{ $item->qty }}" hidden>
                                    <input type="text" name="selling_price"
                                        value="{{ $item->product->selling_price }} " hidden>
                                    <button type="submit" class="btn">
                                        <h5 class="text-secondary"><i class="fa-solid fa-rotate-right me-3"></i>Update
                                            Cart</h5>
                                    </button>
                                </form>
                            </div>
                        </tr> --}}
                        </table>


                    </div>
                    <div class="col-md-3">
                        <div class="container mx-5 mb-4 p-4 bg-grey">
                            <h5>Carts Total</h5>
                            <hr>
                            <div class="d-flex  justify-content-between">
                                <p>Sub Total</p>
                                <p>Nrs. {{ $totalAmount }}</p>
                            </div>
                            <hr>
                            <div class="d-flex  justify-content-between">
                                <p>Total</p>
                                <p class="fw-bold fs-4">Nrs. {{ $totalAmount }}</p>
                            </div>
                        </div>
                        <button type="" class=" pcolor border-0 w-100 mx-5  mb-4 py-2">
                            <span class="fw-bold text-white fs-5">Proceed to Checkout</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif

        <!-- Footer -->
        <x-components.footer>
            </x-components>
            </x-templates>

<x-layout.template>
    <x-slot name='title'>Product</x-slot>

    <!-- Navbar -->
    <x-components.navbar></x-components>

        <!-- Slot data goes here -->
        <div class="container-fluid bg-grey py-4 ">
            <div class="container p-3 bg-white">
                <div class="row">
                    <div class="col-md-4">
                        <img src="https://digitalcontent.api.tesco.com/v2/media/ghs/e1b956b8-f836-4cb1-b8c2-58a64551a90a/42f8ec39-3ddc-46dd-a0a1-91a740940a0f_1242783543.jpeg?h=540&w=540" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-4">
                        <form action="" method="post">
                            @csrf
                            <h2 >Moong Dal- Chata - 3 KG </h2>
                            <div class="mt-4">
                                <span class="fw-bold fs-1 ">Nrs. 500</span>
                                <span class="text-secondary ms-3 fs-5">Nrs.600</span>
                            </div>
                            <div class="input-group">
                                <input type="button" value="-" class="button-minus" data-field="quantity">
                                <input type="number" step="1" max="" value="1" name="quantity" class="quantity-field">
                                <input type="button" value="+" class="button-plus" data-field="quantity">
                            </div>
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

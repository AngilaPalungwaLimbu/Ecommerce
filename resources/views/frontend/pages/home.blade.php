<x-layout.template>
    <x-slot name='title'>Home</x-slot>

    <!-- Navbar -->
    <x-components.navbar>
        </x-components>

        <!-- Slot data goes here -->
        <div class="container-fluid bg-grey py-4 ">
           {{-- <div class="container">
            @guest

            @else
            <a href="/" class="text-dark text-decoration-none "><h2 class="fw-bold mb-3">Welcome {{ Auth::user()->name }}</h2></a>
            @endguest
           </div> --}}
            <!-- Deals-->
            <div class="container bg-white p-4 mb-4">
                <h4 class="fw-bold">DEALS OF THE DAY</h4>
                <hr>
                <div class="row g-4">
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                </div>
            </div>
            <!-- Featured Product-->
            <div class="container bg-white p-4 mb-4">
                <h4 class="fw-bold">FEATURED PRODUCT</h4>
                <hr>
                <div class="row  g-4">
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                </div>
            </div>
            <!--Recommended for you -->
            <div class="container bg-white p-4 mb-4">
                <h4 class="fw-bold">RECOMMENDED FOR YOU</h4>
                <hr>
                <div class="row  g-4">
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                    <div class="col-md-3">
                        <x-components.product>
                            </x-components>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <x-components.footer>
            </x-components>
            </x-templates>

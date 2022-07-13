<x-layout.template>
    <x-slot name='title'>Product</x-slot>

    <!-- Navbar -->
    <x-components.navbar></x-components>

        <!-- Slot data goes here -->
      <div class="container">
        <table class="table">
            <tr>
                <th>SNo.</th>
                <th>Product</th>
                <th>Qty</th>
                <th>Rate</th>
                <th>Amount</th>
                <th>Action</th>
            </tr>
          <tr>
            <td>1</td>
            <td>Premium rice</td>
            <td><input type="number" name="qty" max="10" min="1" value="1"></td>
            <td>500</td>
            <td>1000</td>
            <td>

            </td>
          </tr>
        </table>
      </div>

    <!-- Footer -->
    <x-components.footer></x-components>
</x-templates>

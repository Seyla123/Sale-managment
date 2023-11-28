<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 p-4 lg:space-y-0">
                  <div class="text-center w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <h2 class="p-10 text-2xl  text-gray-900  dark:text-white">
                      Please Fill All Fields For Create </h2>
                  </div>
                  <div class="pr-10 pl-10 pb-10 pt-3 text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400">
                    <form action="{{url('purchase/create')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="ProductID" value="{{$product->ProductID}}">
                      <input type="hidden" name="UserID" value="{{$user->id}}">
                      <div class="grid grid-cols-3 gap-3">
                        <div class="mb-6">
                          <label for="Product Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                          <input value="{{$product->ProductName}}" readonly placeholder="Product Name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="mb-6">
                          <label for="cost" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cost</label>
                          <input  readonly value="{{$product->UnitPriceOut}}" type="text" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="mb-6">
                          <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Supplier Name</label>
                          <select aria-label="Default select example" name="SupplierID" class="p-[10px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected  label="Open this select Supplier" disable>
                          @foreach ($supplier as $supplier )
                              <option value="{{$supplier->SupplierID}}">{{$supplier->SupplierName}}</option>
                          @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="grid grid-cols-2 gap-2 mb-6">
                              <div class="md-6">
                          <label for="Qauntity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qauntity</label>
                          <input type="text" placeholder="Qauntity" id="qty" name="PurchaseQty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="md-6">
                            <label for="Total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Price</label>
                            <input type="text" value="0.00" placeholder="Total " id="total" name="TotalPrice" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                          </div>
                      </div>
                      <br>
                      <div class="flex justify-between ">
                      
                      <div>
                        <a href="{{ url('product') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                         Back
                        </a>
                      </div>
                      <div>
                        <button type="submit" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                          Create
                        </button>                        
                    </div>
                    </div>
                    </form>    
            
               </div>
            </div>
        </div>
    </div>
    <script>
        $("#qty").keyup(function () {
  
  $qty = Number($("#qty").val());
  $price = Number($("#price").val());
  $Total = $qty * $price;
  $("#total").val($Total.toFixed(2));;
});
  </script>
</x-app-layout>

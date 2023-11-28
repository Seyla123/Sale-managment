<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 p-4 lg:space-y-0">
                  <div class="text-center w-full text-sm text-left text-gray-500 dark:text-gray-400 ">
                    <h2 class="p-10 text-2xl  text-gray-900  dark:text-white">
                      Please Fill All Fields For Update</h2>
                  </div>
                  <div class="pr-10 pl-10 pb-10 pt-3 text-xs text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400">
                    <form action="{{url('product/edit',[$product->ProductID])}}" method="POST" enctype="multipart/form-data">
                        {{-- //<input type="hidden" name="product_id"  value="{{$product->product_id}}"> --}}
                      @csrf
                      @method('PUT')
                      <input type="hidden" name="UpdatedBy" value="{{$user->name}}">
                      <div class="grid grid-cols-2 gap-2">
                        <div class="mb-6">
                          <label for="Product Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Name</label>
                          <input name="ProductName" value="{{$product->ProductName}}" placeholder="Product Name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="mb-6">
                          <label for="role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                          <select aria-label="Default select example" name="CategoryID" class="p-[11px] bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected label="Open this select Category" value="{{ $product->CategoryID }}" disable>
                          @foreach ($category as $category )
                          <option value="{{ $category->CategoryID }}" {{ $category->CategoryID==$product->CategoryID?'selected':'' }}>
                            {{ $category->CategoryName }}
                        </option>    
                             
                          @endforeach
                          </select>                       </div>
                      </div>
                      <div class="grid grid-cols-3 gap-3 mb-6">
                        <div class="md-6">
                    <label for="UnitPriceIn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price In</label>
                    <input type="text" value="{{$product->UnitPriceIn}}" placeholder="Unit Price In " name="UnitPriceIn" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                  </div>
                  <div class="md-6">
                    <label for="UnitPriceOut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price Out</label>
                    <input type="text" value="{{$product->UnitPriceOut}}" placeholder="Unit Price Out " name="UnitPriceOut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                  </div>
                  <div class="md-6">
                    <label for="Qty" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Qaunity</label>
                    <input type="text" value="{{$product->Qty}}" placeholder="Qaunity " name="Qty" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                  </div>

                </div>
                <div class="grid grid-cols-2 gap-2 mb-6">
                  <div class="md-6">
              <label for="Barcode" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Barcode</label>
              <input type="text" value="{{$product->Barcode}}" placeholder="Barcode " name="Barcode" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
            </div>
            <div class="md-6">
              <label for="Expiredate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expire date</label>
              <input type="date" value="{{$product->Expiredate}}" placeholder="Expire date " name="Expiredate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
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
                          Update 
                        </button>                        
                    </div>
                    </div>
                    </form>                
                    
               </div>
            </div>
        </div>
    </div>
</x-app-layout>

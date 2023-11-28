<x-app-layout>
    <div class="py-12">
      
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 p-4 lg:space-y-0">
                    <!-- Bar chart card -->       
            <div class="overflow-x-auto relative ">
              <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 " >
                  <thead class="text-xs text-center text-gray-700 uppercase bg-white dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                      <th class="py-3 px-6">No</th>
                      <th class="py-3 px-6">Product Name</th>
                      <th class="py-3 px-6">Category Type</th>
                      <th class="py-3 px-6">Qty</th>
                      <th class="py-3 px-6">Price In</th>
                      <th class="py-3 px-6">Price Out</th>
                      <th class="py-3 px-6">Barcode</th>
                      <th class="py-3 px-6">Expire Date</th>
                      <th class="py-3 px-6">Action</th>
                    </tr>
                  </thead>
                  <tbody id="table-product">
                    @php
                        $count=1;
                    @endphp
                    @foreach ($product as $product)
                    
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$count++}}
                        </th>
                        <td class="py-4 px-6">
                            {{$product->ProductName}}
                        </td>
                        <td class="py-4 px-6">
                            {{$product->category->CategoryName}}
                        </td>
                        <td class="py-4 px-6">
                          {{$product->Qty}}
                            </td>
                            <td class="py-4 px-6">
                              {{$product->UnitPriceIn}}
                          </td>
                          <td class="py-4 px-6">
                            {{$product->UnitPriceOut}}
                        </td>
                        <td class="py-4 px-6">
                          {{$product->Barcode}}
                      </td>
                      <td class="py-4 px-6">
                          {{$product->Expiredate}}
                      </td>
                        <td class="py-4 px-6 ">
                          <div class="flex items-center justify-center">
                            <a href="/sale/{{$product->ProductID }}" class="text-green-700 ">
                              <svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                              </svg>
                            </a>
                          </div>
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
              </table>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>

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
                            <a href="/purchase/{{$product->ProductID }}" class="text-green-700 ">
                              <svg class="w-8 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path></svg>  
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

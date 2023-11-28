<x-app-layout>
    <x-slot name="header">
          <div class="flex justify-between h-16">
            <div class="">
              <a href="{{url('sale')}}">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Add Sale
                  </button>
                </a>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                
            </div>
          </div>
    </x-slot>

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
                      <th class="py-3 px-6">Sale Code</th>
                      <th class="py-3 px-6">Product Name</th>
                      <th class="py-3 px-6">Qauntity</th>
                      <th class="py-3 px-6">Total Price</th>
                      <th class="py-3 px-6">Sale By</th>
                      <th class="py-3 px-6">Date</th>
                    </tr>
                  </thead>
                  <tbody id="table-product">
                    @php
                        $count=1;
                    @endphp
                    @foreach ($sale as $sale)
                    
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$count++}}
                        </th>
                        <td class="py-4 px-6">
                            {{$sale->SaleCode}}
                        </td>
                        <td class="py-4 px-6">
                            {{$sale->product->ProductName}}
                        </td>
                        <td class="py-4 px-6">
                          {{$sale->SaleQty}}
                      </td>
                      <td class="py-4 px-6">
                        {{$sale->TotalPrice}}
                    </td>
                    <td class="py-4 px-6">
                        {{$sale->user->name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$sale->created_at}}
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

<x-app-layout>
    <x-slot name="header">
          <div class="flex justify-between h-16">
            <div class="">
              <a href="{{url('purchase')}}">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Add Purchase
                  </button>
                </a>
            </div>
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                
            </div>
          </div>

        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product') }}
        </h2> --}}
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
                      <th class="py-3 px-6">Product Name</th>
                      <th class="py-3 px-6">Cost</th>
                      <th class="py-3 px-6">Quatity</th>
                      <th class="py-3 px-6">Total</th>
                      <th class="py-3 px-6">Supplier Name</th>
                      <th class="py-3 px-6">Purchase By</th>
                      <th class="py-3 px-6">Date</th>
                    </tr>
                  </thead>
                  <tbody id="table-product">
                    @php
                        $count=1;
                    @endphp
                    @foreach ($purchase as $purchase)
                    
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$count++}}
                        </th>
                        <td class="py-4 px-6">
                            {{$purchase->product->ProductName}}
                        </td>
                        <td class="py-4 px-6">
                            {{$purchase->product->UnitPriceIn}}
                        </td>
                        <td class="py-4 px-6">
                          {{$purchase->PurchaseQty}}
                      </td>
                      <td class="py-4 px-6">
                        {{$purchase->TotalPrice}}
                    </td>
                    <td class="py-4 px-6">
                        {{$purchase->supplier->SupplierName}}
                    </td>
                    <td class="py-4 px-6">
                        {{$purchase->user->name}}
                    </td>
                    <td class="py-4 px-6">
                        {{$purchase->created_at}}
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

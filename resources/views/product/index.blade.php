<x-app-layout>
    <x-slot name="header">
          <div class="flex justify-between h-16">
            <div class="">
              <a href="{{url('product/create')}}">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    Add Product
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
                        <td class="py-4 px-6 text-right">
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                  <a href="/product/edit/{{$product->ProductID }}" class="text-blue-600 ">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                   </a>
                                </div>
              
                                <div>
                                  <form action="/product/delete/{{ $product->ProductID }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                  <button type="sumbit" href="">
                                    <svg class="w-5 h-5 text-red-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg></button>
                                  </form>
                                  </div>
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

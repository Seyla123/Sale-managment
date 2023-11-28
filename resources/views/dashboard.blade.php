<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <!-- Content -->
                  <div class="mt-2">
                    <!-- State cards -->
                    <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4">
                      <!-- Value card -->
                      <div class="flex items-center  justify-between p-4 bg-white rounded-md dark:bg-darker">
                        <div>
                          <h6
                            class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
                          >
                            Purchase
                          </h6>
                          @foreach ($purchase1 as $purchase1)
                          <span class="text-xl font-semibold text-green-600">$ {{$purchase1->Total}}</span>
                          @endforeach

                        </div>
                        <div>
                          <span>
                            <svg
                              class="w-12 h-12 text-gray-300 dark:text-primary-dark"
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                              />
                            </svg>
                          </span>
                        </div>
                      </div>

                      <!-- Users card -->
                      <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                        <div>
                          <h6
                            class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
                          >
                            Users
                          </h6>
                          @foreach ($user1 as $user1)
                          <span class="text-xl font-semibold ">{{$user1->Total}}</span>
                          @endforeach                          {{-- <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                            +2.6%
                          </span> --}}
                        </div>
                        <div>
                          <span>
                            <svg
                              class="w-12 h-12 text-gray-300 dark:text-primary-dark"
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"
                              />
                            </svg>
                          </span>
                        </div>
                      </div>

                      <!-- Orders card -->
                      <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                        <div>
                          <h6
                            class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
                          >
                            Sales
                          </h6>
                          @foreach ($sale1 as $sale1)
                          <span class="text-xl font-semibold text-green-600">$ {{$sale1->Total}}</span>
                          @endforeach


                          {{-- <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                            +3.1%
                          </span> --}}
                        </div>
                        <div>
                          <span>
                            <svg
                              class="w-12 h-12 text-gray-300 dark:text-primary-dark"
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"
                              />
                            </svg>
                          </span>
                        </div>
                      </div>

                      <!-- Tickets card -->
                      <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                        <div>
                          <h6
                            class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light"
                          >
                            Products
                          </h6>
                          @foreach ($product1 as $product1)
                          <span class="text-xl font-semibold">{{$product1->Total}}</span>
                          @endforeach
                          {{-- <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                            +3.1%
                          </span> --}}
                        </div>
                        <div>
                          <span>
                            <svg
                              class="w-12 h-12 text-gray-300 dark:text-primary-dark"
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke="currentColor"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"
                              />
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>

                    <!-- Charts -->

                      <!-- Bar chart card -->
                      <div class="col-span-2 bg-white rounded-md dark:bg-darker" x-data="{ isOn: false }">
                        <!-- Card header -->
                        <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                          <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Purchase</h4>
                          <div class="flex items-center space-x-2">
                            <span class="text-sm text-blue-500 dark:text-light">
                              <a href="{{url('purchase/report')}}">See All</a>
                            </span>
                            <button
                              class="relative focus:outline-none"
                              x-cloak
                              @click="isOn = !isOn; $parent.updateBarChart(isOn)"
                            >
                              <div
                                class="w-12 h-6 transition rounded-full outline-none bg-primary-100 dark:bg-primary-darker"
                              ></div>
                              <div
                                class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform scale-110 rounded-full shadow-sm"
                                :class="{ 'translate-x-0  bg-white dark:bg-primary-100': !isOn, 'translate-x-6 bg-primary-light dark:bg-primary': isOn }"
                              ></div>
                            </button>
                          </div>
                        </div>
                        <!-- Chart -->
                        <div class="relative p-4 h-72">
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

                      <!-- Doughnut chart card -->
                      <div class="bg-white rounded-md dark:bg-darker" x-data="{ isOn: false }">
                        <!-- Card header -->
                        <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                          <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Sale</h4>
                          <div class="flex items-center">
                            <span class="text-sm text-blue-500 dark:text-light">
                              <a href="{{url('sale/report')}}">See All</a>
                            </span>
                            <button
                              class="relative focus:outline-none"
                              x-cloak
                              @click="isOn = !isOn; $parent.updateDoughnutChart(isOn)"
                            >
                              <div
                                class="w-12 h-6 transition rounded-full outline-none bg-primary-100 dark:bg-primary-darker"
                              ></div>
                              <div
                                class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform scale-110 rounded-full shadow-sm"
                                :class="{ 'translate-x-0  bg-white dark:bg-primary-100': !isOn, 'translate-x-6 bg-primary-light dark:bg-primary': isOn }"
                              ></div>
                            </button>
                          </div>
                        </div>
                        <!-- Chart -->
                        <div class="relative p-4 h-72">
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
                  </div>
            </div>
        </div>
    </div>
</x-app-layout>

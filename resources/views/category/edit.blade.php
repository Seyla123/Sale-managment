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
                    <form action="{{url('category/edit',[$category->CategoryID])}}" method="POST" enctype="multipart/form-data">
                        {{-- //<input type="hidden" name="product_id"  value="{{$product->product_id}}"> --}}
                      @csrf
                      @method('PUT')
                      <div class="grid grid-cols-2 gap-2">
                        <div class="mb-6">
                          <label for="Categoru Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category Name</label>
                          <input name="CategoryName" value="{{$category->CategoryName}}" placeholder="Category Name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="mb-6">
                            <label for="Update By" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Update By</label>
                            <input name="UpdatedBy" readonly value="{{$user->name}}" placeholder="Updated By" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>  
                        </div>
                      </div>
                      <div class="grid grid-cols-1 gap-1 mb-6">
                        <div class="mb-6">
                            <label for="Description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                            <textarea placeholder="Description"  rows="5" type="text" name="Description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$category->Description}}</textarea>
                        </div>

                      </div>
                      <br>
                      <div class="flex justify-between ">
                      
                      <div>
                        <a href="{{ url('category') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
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

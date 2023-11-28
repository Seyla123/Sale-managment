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
                    <form action="{{url('supplier/edit',[$supplier->SupplierID])}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      @method('PUT')
                      <div class="grid grid-cols-2 gap-2">
                        <div class="mb-6">
                          <label for="supplier Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">supplier Name</label>
                          <input value="{{$supplier->SupplierName}}" name="SupplierName" placeholder="Supplier Name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="mb-6">
                            <label for="Company Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Company Name</label>
                            <input value="{{$supplier->CompanyName}}" name="CompanyName" placeholder="Company Name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>  
                        </div>
                      </div>
                      <div class="grid grid-cols-3 gap-3 mb-6">
                              <div class="md-6">
                          <label for="Job Title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Job Title</label>
                          <input value="{{$supplier->JobTitle}}" type="text" placeholder="Job Title " name="JobTitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="md-6">
                          <label for="Phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                          <input value="{{$supplier->Phone}}" type="text" placeholder="Phone Number" name="Phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="md-6">
                          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                          <input value="{{$supplier->email}}" type="text" placeholder="Email " name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>

                      </div>
                      <div class="grid grid-cols-1 gap-1 mb-6">
                        <div class="mb-6">
                            <label for="Address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <textarea placeholder="Address"  rows="5" type="text" name="Address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{$supplier->Address}}</textarea>
                        </div>
                </div>
                      <br>
                      <div class="flex justify-between ">
                      
                      <div>
                        <a href="{{ url('supplier') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
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

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
                    <form action="{{url('user/create')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                      
                      <div class="grid grid-cols-2 gap-2">
                        <div class="mb-6">
                          <label for=" Name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Name</label>
                          <input name="name" placeholder="User Name" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                        <div class="mb-6">
                            <label for="Email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input name="email"   placeholder="email" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>  
                        </div>
                      </div>
                      <div class="grid grid-cols-2 gap-2 mb-6">
                        <div class="mb-6">
                            <label for="Password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input name="password"   placeholder="Password" type="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>  
                        </div>
                        <div class="mb-6">
                            <label for="Role" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                            <input name="role"   placeholder="Role" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>  
                        </div>
                      </div>
                      <br>
                      <div class="flex justify-between ">
                      
                      <div>
                        <a href="{{ url('user') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
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
</x-app-layout>

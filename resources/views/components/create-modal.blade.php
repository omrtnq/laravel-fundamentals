<div x-show='createModalOpen' class="relative z-10" role="dialog" aria-modal="true">
    <!--
      Background backdrop, show/hide based on modal state.
  
      Entering: "ease-out duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
  
    <div class="fixed inset-0 z-10 overflow-y-auto">
      <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <!--
          Modal panel, show/hide based on modal state.
  
          Entering: "ease-out duration-300"
            From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            To: "opacity-100 translate-y-0 sm:scale-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100 translate-y-0 sm:scale-100"
            To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        -->
        <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:flex sm:items-start">
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title">Create Student Information</h3>
  
                {{-- FORM START --}}
                <div class="block p-6 rounded-lg bg-white max-w-md">
                  <form action="/add/student" method="POST">
                    @csrf
  
                    <div class="grid grid-cols-2 gap-4">
                      {{-- FIRSTNAME --}}
                      <div class="form-group mb-6">
                        <label for="first_name">First Name</label>
                        <input required type="text" class="form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                          transition
                          ease-in-out
                          mt-1
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="first_name" name="first_name" autocomplete="off" value="{{old('first_name')}}"
                           >
                           
                      </div>
                      {{-- LASTNAME --}}
                      <div class="form-group mb-6">
                        <label for="last_name">Last Name</label>
                        <input required type="text" class="form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                          transition
                          ease-in-out
                          mt-1
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="last_name" name="last_name"
                          value="{{old('last_name')}}"
                           >
                      </div>
                    </div>
  
                    {{-- AGE --}}
                    <div class="grid grid-cols-12 gap-4">
                      <div class="form-group mb-6 col-span-3">
                        <label for="age">Age</label>
                        <input required type="number" class="form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
                          text-gray-700
                          bg-white bg-clip-padding
                          border border-solid border-gray-300
                          rounded
                          transition
                          ease-in-out
                          mt-1
                          focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="age"name="age"
                          value="{{old('age')}}"
                          >
                      </div>
                      {{-- Gender --}}
                      <div class="form-group mb-6 col-span-9">
                        <label for="gender">Gender</label>
                        <select name='gender' class="form-select appearance-none
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding bg-no-repeat
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        mt-1
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" >  
                        <option value="Male" {{old('gender') == "Male" ? 'selected' :''}} >Male</option>
                        <option value="Female" {{old('gender') == "Female" ? 'selected' :''}} >Female</option>
                        </select>
                      </div>
                    </div>
                    
                    <div class="form-group mb-6">
                      <label for="email">Email</label>
                      <input required type="email" class="form-control block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        mt-1
                        focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" id="email" name="email"
                        value="{{old('email')}}"
                        >
                    </div>
  
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
            
                      <button type="submit" class="inline-flex w-full justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 sm:ml-3 sm:w-auto sm:text-sm">Add</button>
          
                      
                    <button @click='createModalOpen = !createModalOpen' type="button" class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">Cancel</button>
                  </div>
          
                  </form>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
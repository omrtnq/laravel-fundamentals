@include('partials.header')
<div class=" absolute h-screen w-screen z-0 grid grid-flow-col grid-rows-2 grid-cols-3 gap-4 overflow-hidden">
  <div class="transform scale-110 -rotate-6 bg-gradient-to-br from-purple-500 to-violet-600 border-2 rounded-md">    
  </div>
  <div class="col-start-3 transform scale-75 rotate-6 translate-x-2 translate-y-15 bg-gradient-to-br from-blue-400 to-indigo-500 border-2 rounded-md">   
  </div>

  <div class="transform translate-y-24 translate-x-32  -rotate-12 bg-gradient-to-br from-green-400 to-cyan-500 border-2 rounded-md">
  </div>
  <div class="row-start-1 col-start-2 col-span-2 scale-90 transform translate-x-36 translate-y-4 bg-gradient-to-br from-pink-500 to-rose-500 border-2 rounded-md">
    
  </div>
</div>

<div class="py-40 z-10 relative">
  <header class="max-w-lg mx-auto max mt-auto">
    <a href="#">
      <h1 class="text-4xl font-bold  text-center">Admin Login</h1>
    </a>
  </header>
  
  <main class="max-w-lg mx-auto p-8 my-10 rounded-lg border-2 shadow-lg bg-gray-50">
    <section>
      <h3 class="font-bold text-2xl text-center">{{ $welcomeTitle }}</h3>
      <p class="text-gray-600 text-md pt-4"> Sign in to your account</p>
    </section>
    <section class="my-8">
  
      <form >
        <div class="mb-6">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Your email</label>
          <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-500 focus:border-violet-500 block w-full p-2.5 " placeholder="example@email.com" required>
        </div>
        <div class="mb-6">
          <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Your password</label>
          <input type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-violet-500 focus:border-violet-500 block w-full p-2.5 " required>
        </div>
  
        <div class="flex items-start mb-6">
          <div class="flex items-center h-5">
            <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required>
          </div>
          <label for="terms" class="ml-2 text-sm font-medium text-gray-900 ">I agree with the <a href="#" class="text-violet-600 hover:underline">terms and conditions</a></label>
        </div>
        <button type="submit" class="text-white bg-violet-700 hover:bg-violet-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login</button>
      </form>
      
    </section>
  </main>
</div>
  

  @include('partials.footer')
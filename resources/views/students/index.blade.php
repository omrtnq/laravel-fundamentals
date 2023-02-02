@include('partials.header')
<x-navbar />

<header class="max-w-lg mx-auto my-8">
  <a href="#">
    <h1 class="text-4xl font-bold  text-center">Student List</h1>
  </a>
</header>


<section class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3  gap-4 lg:gap-8 w-4/5 mx-auto">

  <div x-data='{createModalOpen: false}' class="border-2 border-slate-200 bg-green-500 w-16 h-16 rounded-full fixed bottom-16 right-16 z-1 flex justify-center items-center hover:bg-gray-100 hover:border-green-600 hover:cursor-pointer  hover:duration-300 transition ease-in group">
    <button @click="createModalOpen = !createModalOpen">
    <i class="fa-solid fa-user-plus text-2xl text-gray-100 group-hover:text-green-500 "></i>
    </button>
    <x-create-modal />

  </div>
  

  @foreach ($data as $item)
    <div x-data='{deleteModalOpen: false, editModalOpen :false}' class="flex rounded-lg shadow-lg bg-white min-w-sm justify-items-center items-center h-40 border-2">
      {{-- DIV FOR PROFILE IMAGE --}}
      <div class="pl-4"> 
        @if ($item->gender === 'Male')
        <img src="https://cdn-icons-png.flaticon.com/512/201/201818.png" class="w-28 h-28 rounded-full" alt="">
        <img src="picture.svg" alt="">     
        @else  
        <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" class="w-28 h-28 rounded-full" alt="">
        @endif
      </div>
      {{-- DIV FOR STUDENT INFO --}}
      <div class="w-4/5 px-4">
        <h5 class="text-gray-900 text-2xl leading-tight font-medium ">{{ $item->first_name }} {{ $item->last_name }}</h5>
        <p class="text-gray-700 text-sm">{{ $item->email }}</p>

        <div class="flex items-center justify-between">
          <p class="text-gray-700 text-xs block h-4">{{ $item->gender }} | {{ $item->age }} years old  </p>
        
          <div>
            <button @click='editModalOpen = !editModalOpen'><i class="fa-regular fa-pen-to-square text-blue-600 text-lg self-end h-4 mr-2"></i></button>

            <button @click='deleteModalOpen = !deleteModalOpen' ><i class="fa-solid fa-trash-can text-lg text-rose-600 self-end h-4 mr-2 "></i></button>

            

          </div>
        </div>
        
      </div>
      <x-edit-modal :student="$item" />
      <x-delete-modal :student="$item" />
    </div>

  
  @endforeach
</section>
<div class="mx-auto max-w-lg pt-6 p-4">
  {{$data->onEachSide(1)->links()}}
</div>


@include('partials.footer')
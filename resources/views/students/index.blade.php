@include('partials.header')

<x-navbar />

<header class="max-w-lg mx-auto my-8">
  <a href="#">
    <h1 class="text-4xl font-bold  text-center">Student List</h1>
  </a>
</header>

<section class="grid grid-cols-1 lg:grid-cols-2  gap-4 lg:gap-8 w-4/5 mx-auto">
  @foreach ($data as $item)
  <div class="justify-center items-center">
    <div class="flex px-4 rounded-lg shadow-lg gap-2 bg-white min-w-sm">
      {{-- DIV FOR PROFILE IMAGE --}}
      <div class="m-4"> 
        @if ($item->gender === 'Male')
        <img src="https://cdn-icons-png.flaticon.com/512/201/201818.png" class="w-32 rounded-full" alt="">
        <img src="picture.svg" alt="">     
        @else  
        <img src="https://cdn-icons-png.flaticon.com/512/6997/6997662.png" class="w-32 rounded-full" alt="">
        @endif
      </div>
      {{-- DIV FOR STUDENT INFO --}}
      <div class="my-auto">
        <h5 class="text-gray-900 text-2xl leading-tight font-medium ">{{ $item->first_name }} {{ $item->last_name }}</h5>
        <p class="text-gray-700 text-sm">{{ $item->email }}</p>
        <p class="text-gray-700 text-xs mt-2">{{ $item->gender }} | {{ $item->age }} years old </p>
      </div>
    </div>
  </div>
  @endforeach
</section>

@include('partials.footer')
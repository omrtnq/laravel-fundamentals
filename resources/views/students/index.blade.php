<!DOCTYPE html>
<html lang="en" class="dark">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Students</title>
  @vite('resources/css/app.css')
</head>
<body class="p-4">
  <ul class="text-center grid grid-cols-2 md:grid-cols-4 xl:grid-cols-6 gap-y-4">

    @foreach ($data as $item)
    <li class="py-4 bg-gray-600 border-8  border-gray-600 rounded-lg w-4/5 mx-auto">
      <ul class="text-white">        
        <li>{{ $item->first_name }} {{ $item->last_name }} </li>
        <li>Age: {{ $item->age }}</li>
        <li >Gender: {{ $item->gender }}</li>   
      </ul>
    </li>
    @endforeach
    {{-- @foreach ($data as $item)

    <li class="py-4 border-8 border-green-400 w-3/5 my-4 mx-auto">
      <ul>
        <li>{{ $item->gender }}: {{ $item->gender_count }}</li>
     
      </ul>
    </li>
    @endforeach     --}}
  </ul>
  
</body>
</html>


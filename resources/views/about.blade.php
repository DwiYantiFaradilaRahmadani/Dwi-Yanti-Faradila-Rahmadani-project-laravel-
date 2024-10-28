<!DOCTYPE html>
<html>
    
    <head>
        <title>Hello</title>
        @vite('resources/css/app.css')
    </head>
    <body>
    <h1 class="text-3xl  font-bold  text-amber-600  bg-yellow-100 text-center p-4">
    Hello, im {{ $name}}!!!
  </h1>
  <p class= "text-3xl  font-bold  text-amber-600  bg-yellow-100 text-center p-4">
    I live in {{$name}}!!
</p>
<p class= "text-3xl  font-bold  text-amber-600  bg-yellow-100 text-center p-4">
    contact {{$email}}!!
</p>
        
    </body>
</html>
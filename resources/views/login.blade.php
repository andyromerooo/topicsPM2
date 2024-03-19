<x-layout>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
   <h1>Log In</h1>
   <form action="/login" method="POST">
      @csrf
      <div>
          <x-input title="Email " type="text" nombre="email"/>
          @error('email')
             <p>{{$message}}</p>
          @enderror
      </div>

      <div>
          <x-input title="Password" type="password" nombre="password"/>
         @error('password')
         <p>{{$message}}</p>
         @enderror
      </div>
     <button type="submit" class="text-xl">Log in</button>
   <form>
   </x-layout>

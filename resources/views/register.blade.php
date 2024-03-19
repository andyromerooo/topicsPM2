<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
   <form action="/signup" method="post">
      @csrf
       <h1>Register </h1>
       <div>
          <label for="">Name</label>
          <input type="text" name="name">
          @error('name')
              <p> {{$message}}</p>
          @enderror
       </div>
       <div>
          <label for="">Email</label>
          <input type="text" name='Email'>
          @error('email')
              <p> {{$message}}</p>
          @enderror
       </div>

       <div>
          <label for="">Password</label>
          <input type="pasword" name="password">
          @error('password')
          <p> {{$message}}</p>
           @enderror
       </div>
       <div>
          <label for="">Birthday</label>
          <input type="date" name="birthday">
          @error('Birthday')
              <p> {{$message}}</p>
          @enderror
       </div>

       <button type="submit">send</button>
   </form>
</div>

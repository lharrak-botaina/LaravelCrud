<link rel="stylesheet" href="style.css">


<div class="wrapper">
    <div class="logo">
        <img src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png" alt="">
    </div>
    <div class="text-center mt-4 name">
        Twitter
    </div>
    <form action="{{route('hello')}}" method="post" class="p-3 mt-3">
        @csrf
        @forelse ($person as $value)

        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="name" value="{{$value->name}}" id="userName" placeholder="Username">
        </div>
      
      <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="email" value="{{$value->email}}" id="userName" placeholder="Email">
        </div>
        <input type="hidden"value="{{$value->id}}" name="id" >
      
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="message" value="{{$value->message}}" id="userName" placeholder="Message">
        </div>

        <button type="submit" value="ajouter" class="btn mt-3">ajouter</button>
        @empty
                                    
        @endforelse
    </form>
   
</div>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
<div class="wrapper">
   
    <form action="ajouter" method="POST" class="p-3 mt-3">
        @csrf
        <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="name" id="userName" placeholder="Username">
        </div>
      
      <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="email" id="userName" placeholder="Email">
        </div>
      
      <div class="form-field d-flex align-items-center">
            <span class="far fa-user"></span>
            <input type="text" name="message" id="userName" placeholder="Message">
        </div>


      
        <button type="submit" value="ajouter" class="btn mt-3">ajouter</button>
    </form>
    
</div>
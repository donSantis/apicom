<nav class="navbar navbar-expand-xl navbar-dark bg-dark sticky-top" style="height: 100px;" aria-label="Sixth navbar example">
    <div class="container-fluid">
        <a class="navbar-brand text-uppercase fs-1" href="#" style=" padding-left: 20px;">Ecommerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample06"
                aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse align-middle" id="navbarsExample06">
            <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                
                <li>
                    <form style="height: 50px; padding-top: 15px;padding-left: 100px;">
                        <div class="input-group h-100">
                        <span class="input-group-text" id="basic-addon1">
                           <i class="bi bi-search"></i>
                         </span>
                            <input class="form-control h-100 text-xl" type="text" placeholder="Buscar" aria-label="Search">
                        </div>
                    </form>
                </li>
            </ul>

        </div>

       <div class="dropdown end-0 align-middle" style="padding-right: 20px;">
            <a class="nav-link dropdown-toggle end-0 fs-1 " href="#" id="dropdown06" data-bs-toggle="dropdown" 
                       aria-expanded="false" >Usuario</a>

                       <ul class="dropdown-menu dropdown-menu-end  dropdown-menu-dark dropdown-menu-lg-start" aria-labelledby="dropdown06">
                        <li><a  class="dropdown-item text-xl p-4" href="#">Login</a></li>
                        <li><a  class="dropdown-item text-xl p-4" href="#">Register</a></li>
                    </ul>
                    <ul class="dropdown-menu dropdown-menu-end  dropdown-menu-dark dropdown-menu-lg-start" aria-labelledby="dropdown06">
                        <li><a class="dropdown-item text-xl" href="#">Perfil</a></li>
                        <li><a class="dropdown-item text-xl" href="#">Salir</a></li>
                    </ul>

                    
       </div>

    </div>
</nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Tenth navbar example">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="font-size: 22px;margin: 15px;">Inicio</a>
                </li>

                @foreach ($categories as $categories)
                <div class="btn-group">
                <li class="nav-item" style="font-size: 22px;margin: 15px;">

                    

                    
                      <a class="nav-link dropdown-toggle" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">{{ $categories->title }}</a>

                      <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-lg" aria-labelledby="dropdownMenuButton">
                        <li><a style="font-size: 20px;" class="dropdown-item p-4" href="#">Menu item</a></li>
                        <li><a style="font-size: 20px;" class="dropdown-item p-4" href="#">Menu item</a></li>
                        <li><a style="font-size: 20px;" class="dropdown-item p-4" href="#">Menu item</a></li>
                      </ul>

                </li>
                </div>
                @endforeach
              
            </ul>
        </div>
    </div>
</nav>

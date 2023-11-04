<style>
    header{
        box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.11);
    }
    body{
        background-color: white;
    }
    .me-auto{
       margin-right: 80px !important; 
       margin-left: auto;
    }
    .nav-item{
        margin: 0px 10px;
    }
    
</style>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="<?php echo asset('/imagenes/compostela_logo.png') ?>">
                    <img src="<?php echo asset('/imagenes/compostela_nombre.png') ?>">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!--<li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Lorem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lorem</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lorem</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
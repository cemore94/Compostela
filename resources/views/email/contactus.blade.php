<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/counter.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/counter.css') }}" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Overpass:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Open+Sans&family=Overpass:wght@300&family=Roboto:wght@100&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
    </head>
    <body class="antialiased">
        @include('includes.header') 
        <div class="container" style="display: flex; justify-content: center; align-items: center;">
            <div class="col-12 col-sm-6 mt-4" style="">
                <form action="{{route('email.store')}}">
                    @csrf
                    <div class="">
                        <h1>Información de contacto</h1>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="entidad" value="empresa" id="radioEmpresa" checked>
                                <label class="form-check-label" for="radioEmpresa">
                                    Empresa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="entidad" value="persona" id="radioPersona">
                                <label class="form-check-label" for="radioPersona">
                                    Persona
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" >
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" >
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" aria-describedby="emailHelp">
                            <!--<div id="emailHelp" class="form-text">Introduce cualquier correo electrónico (privado o corporativo)</div>-->
                        </div>
                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" id="telefono" >
                        </div>
                    </div>

                    <div class="">
                        <h1>¿Cómo podemos ayudarte?</h1>
                        <div class="mb-3">
                            <label>Por favor, indícanos en qué estás interesado y qué tipo de información adicional necesitas:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="0" name="ayuda" id="pConstruccionConjunta">
                                <label class="form-check-label" for="pConstruccionConjunta">
                                    Proyectos de construcción conjunta
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="1" name="ayuda" id="pInmobiliariosConjuntos">
                                <label class="form-check-label" for="pInmobiliariosConjuntos">
                                    Proyectos inmobiliarios conjuntos
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="2" name="ayuda" id="infoGeneral">
                                <label class="form-check-label" for="infoGeneral">
                                    Información general sobre la inmobiliaria
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="3" name="ayuda" id="otros">
                                <label class="form-check-label" for="otros" style="display: block;">
                                    <div class="row">
                                        <div class="col-auto" style="padding-left: unset">
                                            Otro
                                        </div>
                                        <div class="col">
                                            <textarea style="width: 100%;" class="form-control" name="otroMotivo" ></textarea>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <h1>Comentarios Adicionales</h1>
                        <div class="mb-3">
                            <div class="">  
                                <label class="form-check-label" for="">
                                    ¿Tienes algún comentario adicional o pregunta específica que te gustaría plantear a nuestro equipo comercial?
                                </label>
                                <textarea class="form-check-input" style="width: 100%; height: 50px;" placeholder="Comenta aqui" value="" name="comentario" id=""></textarea>
                                
                            </div>
                        </div>
                    </div>

                    <div class="">
                        <h1>Política de privacidad</h1>
                        <div class="mb-3">
                            <label>Consentimiento para el almacenamiento de datos: Al enviar este formulario, usted acepta que la inmobiliaria almacenará y procesará la información proporcionada para responder a sus consultas.</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="si" name="privacidad" id="aceptar">
                                <label class="form-check-label" for="aceptar">
                                    Sí
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="no" name="privacidad" id="cancelar">
                                <label class="form-check-label" for="cancelar">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div> 
    </body>
    @include('includes.footer')
</html>


<main class="text-center mt-2">
    <h2 id="sobremi">{{__("Sobre mí")}}</h2>
    <p class="lead">{{__("Soy Leonardo Sales de Salta, Argentina. Inicié en el mundo de la programación hace un par de años cuando pude desarrollar un script que vuelve accesible a lectores de pantalla el sintetizador Serum. Este logro me impulsó a profundizar más en la temática del desarrollo de Software, así que empecé a capacitarme realizando varios cursos. Actualmente con lo que más cómodo me siento programando es JavaScript (React, Node) y PHP (Laravel).")}}</p>
    <h2>{{__("Proyectos")}}</h2>
    <div class="container">
        <div class="row">
            <div class="col-6 text-center">
                <h3 id="proyecto1">Sodati (Front)</h3>
                <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Info
                </button>
                  <ul class="dropdown-menu">
                    <li>
                        <x-sodati-front-info/>
                    </li>
                  </ul>
                <figure>
                    <a target="_blank" href="https://leote2001.github.io/sodati-front">{{__("Visitar (abre en una nueva ventana)")}}
                    <img class="img-fluid" src="/img/sodati-front.jpeg" alt="Sodati (Front)">
                    </a>
                </figure>
            </div>
            <div class="col-6 text-center">
                <h3 id="proyecto2">Sodati (Back)</h3>
                <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Info
                </button>
                  <ul class="dropdown-menu">
                    <li>
                        <x-sodati-back-info/>
                    </li>
                  </ul>
                <figure>
                    <a target="_blank" href="https://leote2001.github.io/Sodati-api">{{__("Visitar (abre en una nueva ventana)")}}
                    <img class="img-fluid" src="/img/sodati-api.jpeg" alt="Sodati (Back)">
                    </a>
                </figure>
            </div>
            <div class="col-6 text-center">
                <h3 id="proyecto3">Perritos</h3>
                <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Info
                </button>
                  <ul class="dropdown-menu">
                    <li>
                        <x-perritos/>
                    </li>
                  </ul>
                <figure>
                    <a target="_blank" href="https://leote2001.github.io/Perritos">{{__("Visitar (abre en una nueva ventana)")}}
                    <img class="img-fluid" src="/img/perritos.jpeg" alt="Perritos">
                    </a>
                </figure>
            </div>
            <div class="col-6 text-center">
                <h3 id="proyecto4">Ahorcado</h3>
                <button class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Info
                </button>
                  <ul class="dropdown-menu">
                    <li>
                        <x-ahorcado/>
                    </li>
                  </ul>
                <figure>
                    <a target="_blank" href="https://leote2001.github.io/Ahorcado">{{__("Visitar (abre en una nueva ventana)")}}
                    <img class="img-fluid" src="/img/ahorcado.jpeg" alt="Ahorcado">
                    </a>
                </figure>
            </div>
        </div>
    </div>
    <h2 id="contacto">{{__("Contacto")}}</h2>
    <p>{{__("Podés contactarme a través de")}} <a target="_blank" href="https://wa.link/8b0cuj">WhatsApp</a>, {{__("enviarme un")}} <a target="_blank" href="mailto:tifloleo@gmail.com">email</a> {{__("o utilizar el formulario de contacto de abajo.")}}</p>
    <h3>{{__("Formulario de contacto")}}</h3>
    <x-contact-form :num1="$num1" :num2="$num2"/>
    @if (session("success"))
<div role="alert" class="alert alert-success">{{session("success")}}</div>
    @endif
</main>
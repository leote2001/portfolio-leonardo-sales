<form action="{{route("contact-form")}}" method="post">
    @csrf
    <div class="form-text">{{__("Todos los campos son requeridos.")}}</div>
    <div class="mb-3">
        <label for="nombre" class="form-label">{{__("Nombre")}}</label>
        <input value="{{old("nombre")}}" type="text" class="form-control" id="nombre" name="nombre">
        @error("nombre")
<div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input value="{{old("email")}}" type="email" class="form-control" id="email" name="email">
        @error("email")
<div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="asunto" class="form-label">{{__("Asunto")}}</label>
        <input value="{{old("asunto")}}" type="text" class="form-control" id="asunto" name="asunto">
        @error("asunto")
<div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="mensaje" class="form-label">{{__("Mensaje")}}</label>
        <textarea placeholder="{{__("Escribe un mensaje")}}" class="form-control" id="mensaje" name="mensaje" rows="3">{{old("mensaje")}}</textarea>
        @error("mensaje")
<div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>
    <div class="mb-3">
<label class="form-label" for="suma">{{__("Cuánto es")}} {{$num1}} + {{$num2}}?</label>
<input aria-describedby="sumaHelp" class="form-control" type="number" id="suma" name="suma" autocomplete="off">
<div class="form-text" id="sumaHelp">{{__("Responde para verificar que no eres un robot")}}</div>
@error("suma")
<div class="alert alert-danger">{{$message}}</div>
@enderror
    </div>
    <button type="submit" class="btn btn-primary">{{__("Enviar")}}</button>
    <input name="num1" value="{{$num1}}" type="hidden" autocomplete="off">
    <input name="num2" value="{{$num2}}" type="hidden" autocomplete="off">
</form>
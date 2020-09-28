@extends ('plantilla')

@section('seccion')
    <!--Estructura de control-->
    <h1> Este es mi equipo de trabajo </h1>
    @foreach($equipo as $persona)
    <a href="{{route('nosotros', $persona)}}" class="h4 text-danger">{{$persona}}</a><br>
    @endforeach

    @if(!empty($nombre))<!-- En caso de que en la url haya un nombre, escribe el siguiente texto, si no, no escribe nada-->
   <!-- <p>La variable existe</p>-->

   @switch ($nombre)
   @case($nombre=='Chuerk')
   <h3 class="mt-5"> El nombre de la persona es: {{$nombre}}</h3> <br>
   <p> {{$nombre}}, Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim delectus quo voluptas cupiditate aspernatur! Nulla id voluptatum minima quia commodi velit, laborum aliquam rem repudiandae fugiat quidem quo, minus autem!</p>
    @break

    @case($nombre=='Fiona')
   <h3 class="mt-5"> El nombre de la persona es: {{$nombre}}</h3> <br>
   <p> {{$nombre}}, Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim delectus quo voluptas cupiditate aspernatur! Nulla id voluptatum minima quia commodi velit, laborum aliquam rem repudiandae fugiat quidem quo, minus autem!</p>
    @break

    @case($nombre=='Burro')
   <h3 class="mt-5"> El nombre de la persona es: {{$nombre}}</h3> <br>
   <p> {{$nombre}}, Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim delectus quo voluptas cupiditate aspernatur! Nulla id voluptatum minima quia commodi velit, laborum aliquam rem repudiandae fugiat quidem quo, minus autem!</p>
    @break
   @endswitch



    @endif

@endsection
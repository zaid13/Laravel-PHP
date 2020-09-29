<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="/css/main.css" rel="stylesheet">

    
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">

                <div class="title m-b-md">
                    Pizza List
                </div>
                <div>
                <p>
                
                {{ $key1 ?? '' }} -
                {{$key2 ?? ''}}  &^&

                    {{$key3 ?? ''}}

                @if($key3 ?? '' == 100)
                    <p>
                    this is equal to 100
                    </p>
                @elseif($key3 ?? '' == 200)
                <p>
                    this is equal to 200
                    </p>


                @else
                <p>
                    this is NOT equal
                    </p>



               @endif

@unless($key3 ?? '' != 200)

                <p>
                    this is  200
                    </p>

@endunless


                @php
                $name_var = 'zaid saeed ';

                echo($name_var ?? '');
                echo($key1  ?? '');
                @endphp

@for($i =0 ; $i< 5 ; $i++)

<p>
                    this value  is {{ $i}}
                    </p>


@endfor


@foreach( $variable ?? [] as $vars)


<p>
                    this value  is {{ $vars}}   <BR> 1ST  PRAM   = 
                    
                    {{$pram1 ?? 'parameter not passed'}} 
                    
                    <BR> 2ND PRAM   =  {{$pram2??'SECOND PARAMETER NOT FOUND'}}
                     </p>



@endforeach




                </p>
           
           
        </div>
    </body>
</html>
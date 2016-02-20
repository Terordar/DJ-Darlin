@extends('Frontend.app')

@section('title', 'Partenaires')

@section('content')
    <div class="clients-area center wow fadeInDown">
        <h4 style="font-size: 150%">Tout comme nous, faites confiance à nos partenaires privilégiés.<br> </h4>
        <h4 style="font-size: 150%">Nous profitons de cette page pour les mettre à la « une » et pour les remercier de la confiance qu’ils nous accordent.</h4>
    </div>
    <div class="row">

        @foreach($listPartenaires as $index =>$partenaire)

            <div class="col-md-4 wow fadeInDown">
                <div class="clients-comments text-center">
                    <img src="{{$partenaire["img"]}}" alt="{{$partenaire["alt"]}}">
                    <h3>{{$partenaire["description"]}}<br/>
                        <a href="{{$partenaire["url"]}}" target="_blank"><strong>Site</strong></a></h3>
                </div>
            </div>

            @if(($index+1)%3 === 0)
                </div>
                <div class="row">
            @endif

        @endforeach
    </div><!--/.container-->
@endsection
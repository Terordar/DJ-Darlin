@extends('Frontend.app')

@section('title', 'Locations')

@section('css')
    <style>
        .titreBarre{
            height: 75px;
        }

        .red{
            background-color: #e74c3c;
        }

        .blue{
            background-color: #3498db;
        }

        .green{
            background-color: #27ae60;
        }

        .red-black{
            background-color: #c0392b;
        }

        .yellow{
            background-color: #f39c12;
        }

        .mauve{
            background-color: #8e44ad;
        }

        .green-light{
            background-color: #2ecc71;
        }

        .blue-black{
            background-color: #2980b9;
        }

        .titreBarre h2{
            color: #ecf0f1;
            vertical-align: middle;
            line-height: 75px;
            text-align: center;
        }
    </style>
@endsection

@section('content')
<section id="locations">
    <div class="container">
        <div class="wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
            <div class="center" style="padding-bottom: 0px;">
            <h2 class="">TARIF DU MATÉRIEL EN LOCATION 2016 – PRIX TVAC</h2>
            <p class="lead">Cette liste de prix remplace et annule les précédentes. Nous nous réservons le droit de modifier ce tarif sans préavis.
                Les prix s’entendent prise et remise du matériel en nos locaux.
            </p>
            </div>

            @foreach($listLocation as $location)
            <div class="titreBarre {{ $location["color"] }}" style="visibility: visible; animation-name: fadeInDown;">
                <h2>{{ $location["titre"] }}</h2>
            </div>
                <br>
            <div class="row">
                @foreach($location["items"] as $key => $value)
                <div class=" @if(!isset($location['one_line'])) col-md-10 @else col-md-12 @endif">{!! $key !!}</div>
                @if(!isset($location['one_line']))
                <div class="col-md-2 text-right">{{ $value }}
                    @if(!isset($location['no_euro'])) € @endif</div>
                @endif
                @endforeach
            </div>
            @endforeach

        </div>
    </div>
</section>
@endsection
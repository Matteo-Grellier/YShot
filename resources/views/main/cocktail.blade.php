@extends('layouts.app')

@section('title')
    <title>YShot</title>

@section('content')
    <div class="drink-content">
        @foreach($cocktails as $cocktail)
        <div class="cocktail-element">
            <img src="img/cocktail.png" alt="" width="200px">
            <div class="divider"></div>
            <div class="cocktail-details">
                <div class="cocktail-details-name-glass">
                    <div>
                        <h4 class="subtitle">Nom</h4>
                        <h2>{{$cocktail->name}}</h2>
                    </div>
                    <div>
                        <h4 class="subtitle">Type de verre</h4>
                        <div class="glass-type">
                            <img src={{ asset('../storage/app/public/' . $cocktail->glassType->image_path) }} width="50px">
                            <h2>{{$cocktail->glassType->name}}</h2>
                        </div>
                    </div>
                </div>
                <div class="cocktail-ingredient">
                    <h4 class="subtitle">Ingrédients</h4>
                    @foreach($cocktailsSirops as $cocktailSirop)
                        @if($cocktailSirop->cocktails->id == $cocktail->id)
                            <h3>{{$cocktailSirop->quantity}} cL de {{$cocktailSirop->sirops->name}}</h3>
                        @endif
                    @endforeach
                    @foreach($cocktailsFruits as $cocktailFruit)
                        @if($cocktailFruit->cocktails->id == $cocktail->id)
                            <h3>{{$cocktailFruit->quantity}} {{$cocktailFruit->fruits->name}}(s)</h3>
                            <img src={{ asset('../storage/app/public/' . $cocktailFruit->fruits->file_path) }} width="100px">
                        @endif
                    @endforeach
                    @foreach($cocktailsAlcools as $cocktailAlcool)
                        @if($cocktailAlcool->cocktails->id == $cocktail->id)
                            <h3>{{$cocktailAlcool->quantity}} cL de {{$cocktailAlcool->alcools->name}}</h3>
                        @endif
                    @endforeach
                    @foreach($cocktailsSofts as $cocktailSoft)
                        @if($cocktailSoft->cocktails->id == $cocktail->id)
                            <h3>{{$cocktailSoft->quantity}} cL de {{$cocktailSoft->softs->name}}</h3>
                        @endif
                    @endforeach
                </div>            
            </div>
        </div>
        @endforeach
    </div>
    <script src="js/details.js"></script>
@endsection
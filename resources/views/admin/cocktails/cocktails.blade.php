<table class="cocktails-list-table">
    <thead>
        <tr>
            <th>NOM DU COCKTAIL</th>
            <th>TYPE DE VERRE</th>
            <th>LISTE D'ALCOOLS</th>
            <th>LISTE DE SOFTS</th>
            <th>LISTE DE FRUITS</th>
            <th>LISTE DE SIROPS</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        @foreach($cocktails as $cocktail)
        <tr>
            <td>
                <div class="content-cocktail-name">
                    <h3>{{$cocktail->name}}</h3>
                </div>
                <form action="{{route("admin.update_cocktail", $cocktail->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="text" placeholder="Nouveau nom" name="name"/>
                    <input type="hidden" name="glasses_types_id" value="{{$cocktail->glassType->id}}"/>
                    <button type="submit"><img src="{{asset("./img/check-mark-red-saumon.png")}}" alt="check" height="20px"></button>
                </form>
            </td>
            <td>
                <form action="{{route("admin.update_cocktail", $cocktail->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <select name="glasses_types_id">
                        @foreach($glassesTypes as $glass) 
                            @if($glass->id == $cocktail->glassType->id)
                            <option value={{ $glass->id }} selected>{{ $glass->name }}</option>
                            @else
                            <option value={{ $glass->id }}>{{ $glass->name }}</option>
                            @endif
                        @endforeach
                    </select>
                    <input type="hidden" name="name" value="{{$cocktail->name}}">
                    <button type="submit"><img src="{{asset("./img/check-mark-red-saumon.png")}}" alt="check" height="20px"></button>
                </form>
            </td>
            <td>
                <div class="content-cocktail-ingredients content-cocktail-alcools">
                    @foreach($cocktailsAlcools as $cocktailAlcool)
                        @if($cocktailAlcool->cocktails->id == $cocktail->id)
                            <div class="cocktail-ingredient cocktail-alcool-element">
                                <h3>{{$cocktailAlcool->quantity}} cL de {{$cocktailAlcool->alcools->name}}</h3>
                                <form action="{{route("admin.delete_cocktail_alcool")}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="cocktail_alcool_id" value="{{ $cocktailAlcool->id }}"/>
                                    <button type="submit" name="delete">X</button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>
                <form action="{{route("admin.create_cocktail_alcool")}}" method="post">
                    @csrf
                    <input type="number" class="nbr-input" name="quantity"/>
                    <input type="hidden" name="cocktail_id" value="{{$cocktail->id}}"/>
                    <p> cL de </p>
                    <select name="alcools_id">
                        @foreach($alcoolsNames as $alcool) 
                            <option value={{ $alcool->id }}>{{ $alcool->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit"><img src="{{asset("./img/check-mark-red-saumon.png")}}" alt="check" height="20px"></button>
                </form>
            </td>
            <td>
                <div class="content-cocktail-ingredients content-cocktail-softs">
                    @foreach($cocktailsSofts as $cocktailSoft)
                        @if($cocktailSoft->cocktails->id == $cocktail->id)
                            <div class="cocktail-ingredient cocktail-softs-element">
                                <h3>{{$cocktailSoft->quantity}} cL de {{$cocktailSoft->softs->name}}</h3>
                                <form action="{{route("admin.delete_cocktail_soft")}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="cocktail_soft_id" value="{{ $cocktailSoft->id }}"/>
                                    <button type="submit" name="delete">X</button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>
                <form action="{{route("admin.create_cocktail_soft")}}" method="post">
                    @csrf
                    <input type="number" class="nbr-input" name="quantity"/>
                    <input type="hidden" name="cocktail_id" value="{{$cocktail->id}}"/>
                    <p> cL de </p>
                    <select name="softs_id">
                        @foreach($softsList as $soft) 
                            <option value={{ $soft->id }}>{{ $soft->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit"><img src="{{asset("./img/check-mark-red-saumon.png")}}" alt="check" height="20px"></button>
                </form>                
            </td>
            <td>
                <div class="content-cocktail-ingredients content-cocktail-fruits">
                    @foreach($cocktailsFruits as $cocktailFruit)
                        @if($cocktailFruit->cocktails->id == $cocktail->id)
                            <div class="cocktail-ingredient cocktail-fruits-element">
                                <h3>{{$cocktailFruit->quantity}} {{$cocktailFruit->fruits->name}}(s)</h3>
                                <form action="{{route("admin.delete_cocktail_fruit")}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="cocktail_fruit_id" value="{{ $cocktailFruit->id }}"/>
                                    <button type="submit" name="delete">X</button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>
                <form action="{{route("admin.create_cocktail_fruit")}}" method="post">
                    @csrf
                    <input type="number" class="nbr-input" name="quantity"/>
                    <input type="hidden" name="cocktail_id" value="{{$cocktail->id}}"/>
                    <select name="fruits_id">
                        @foreach($fruitsList as $fruit) 
                            <option value={{ $fruit->id }}>{{ $fruit->name }}</option>
                        @endforeach
                    </select>
                    <p>(s)</p>
                    <button type="submit"><img src="{{asset("./img/check-mark-red-saumon.png")}}" alt="check" height="20px"></button>
                </form>                
            </td>
            <td>
                <div class="content-cocktail-ingredients content-cocktail-sirops">
                    @foreach($cocktailsSirops as $cocktailSirop)
                        @if($cocktailSirop->cocktails->id == $cocktail->id)
                            <div class="cocktail-ingredient cocktail-sirops-element">
                                <h3>{{$cocktailSirop->quantity}} cL de {{$cocktailSirop->sirops->name}}</h3>
                                <form action="{{route("admin.delete_cocktail_sirop")}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="cocktail_sirop_id" value="{{ $cocktailSirop->id }}"/>
                                    <button type="submit" name="delete">X</button>
                                </form>
                            </div>
                        @endif
                    @endforeach
                </div>
                <form action="{{route("admin.create_cocktail_sirop")}}" method="post">
                    @csrf
                    <input type="number" class="nbr-input" name="quantity"/>
                    <input type="hidden" name="cocktail_id" value="{{$cocktail->id}}"/>
                    <p> cL de </p>
                    <select name="sirops_id">
                        @foreach($siropsList as $sirop) 
                            <option value={{ $sirop->id }}>{{ $sirop->name }}</option>
                        @endforeach
                    </select>
                    <button type="submit"><img src="{{asset("./img/check-mark-red-saumon.png")}}" alt="check" height="20px"></button>
                </form>                
            </td>
            <td>
                <form action="{{route("admin.delete_cocktail")}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="cocktail_id" value="{{ $cocktail->id }}"/>
                    <button type="submit"><img src="{{asset("./img/trash-red.png")}}" alt="bin" height="20px"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="form-create-cocktail">
    <form action="{{ route('admin.create_cocktail') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Nouveau nom"/>
        <select name="glassType" id="">
            @foreach($glassesTypes as $glass) 
                <option value={{ $glass->id }}>{{ $glass->name }}</option>
            @endforeach
        </select>
        <button type="submit" id="new-cocktail-btn">Nouveau cocktail +</button>
    </form>
</div>
@foreach($promoCodes as $promoCode)
    <div> {{$promoCode['label']}} </div>
    <div>{{$promoCode['type']}}</div>
    <div>{{$promoCode['value']}} €</div>

@endforeach

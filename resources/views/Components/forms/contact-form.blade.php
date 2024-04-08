<div>
<div>
@if (session()->has('text'))
	<p>{{ session('text') }}</p>
@endif
<form method="POST" url ="{{route('send.mail')}}" >
    @csrf
    <div>

        <label for="name" >Nom Complet</label>

        <input type="text" id="name" name="name" placeholder="Votre nom complet" >
        
    </div>

    <div>

        <label for="email" >Adresse email</label>

        <input type="email" id="email" name="email"  placeholder="Votre adresse email" >

    </div>

    <div>

        <label for="msg">Message</label>

        <textarea id="msg" name="msg" rows="4" placeholder="Votre message ici" ></textarea>

    </div>

    <button type="submit" >Envoyer le message</button>

</form>

</div>
</div>

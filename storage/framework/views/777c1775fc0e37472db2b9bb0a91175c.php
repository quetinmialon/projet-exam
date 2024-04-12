
<div>
<?php if(session()->has('text')): ?>
	<p><?php echo e(session('text')); ?></p>
<?php endif; ?>
<form method="POST" url ="<?php echo e(route('send.mail')); ?>" >
    <?php echo csrf_field(); ?>
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

<?php /**PATH C:\laragon\www\projet-exam\resources\views/components/forms/contact-form.blade.php ENDPATH**/ ?>
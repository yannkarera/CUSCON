
<section class="contact">

<form action="/contact/save" method="POST">
    
    
    <h1>CONTACT US</h1>
    <label for="firstname"></label>
        <input type="text" name="firstname" placeholder="Firstname" value="first" required>
    
    
    <label for="lastname"></label>
    <input type="text" name="lastname" placeholder="Lastname" value="Last name"  required>

    <label for="email"></label>
    <input type="email" name="email" placeholder="email"  value="email@email.com" required>

    <label for="telephone"></label>
    <input type="text" name="telephone" placeholder="téléphone">

    <label for="message"></label>
    <textarea name="message" cols="30" rows="10" placeholder="Message/Suggestions">Mon message</textarea>


    <div>
    <button class="controllers">Envoyer</button>
</div>
</form>

</section>
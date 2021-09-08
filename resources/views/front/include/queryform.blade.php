<form action="{{route('front.query')}}" method="post">
    @csrf
    <input type="text" class="form-control" name="name" id="name" placeholder="Votre Nom" required/>
    <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required/>
    <input type="text" class="form-control" name="phone" id="telephone" placeholder="Téléphone" required/>
{{--    <input type="text" class="form-control ac" name="quantity" placeholder="Combien de climatiseurs souhaitez-vous ?" required/>--}}
    <input type="hidden" name="price" value="" class="offerprice">
    <div class="values"></div>
    <select class="form-control serviceselect" name="service" id="">
        <option>Sélectionnez le service</option>
        <option value="INSTALLATION">INSTALLATION</option>
        <option value="ENTRETIEN">ENTRETIEN</option>
        <option value="MAINTENANCE / DEPANNAGE / DIAGNOSTICS">MAINTENANCE / DEPANNAGE / DIAGNOSTICS</option>
    </select>
    <input style="display: none" type="text" name="installed[]" class="form-control installed" placeholder="Dans quel pièce souhaitez-vous l’installer">
    <textarea class="form-control" name="message"  id="quote" placeholder="Détails du devis" rows="2" required></textarea>
    <button type="submit" class="btn btn-primary btn-black btn-block">Soumettre la requête</button>
    <!--Alert Message-->
    <div id="pop-quote-result" class="mt-xs">
    </div>
</form>

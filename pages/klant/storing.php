<div class="container p-3 border">
  <div class="row mt-3">
    <h2>U kunt hier een storing melden en een monteur afspraak inplannen. Zodra de afspraak bevestigd is, ontvangt u weer een bericht. </h2>
  </div>

  <div class="row mt-5">
    <div class="col p-3 bg-light border">
      <h3>Uw gegevens</h3>
      <p>
        Klantnummr: 9596 <br />
        Bedrijfsnaam: Groesman International B.V. <br />
        Adres: Breitnerlaan 7
        1098LE Amsterdam
        Nederland <br />
        Telefoonnummer: 020 1112222 <br />
        E-mail: it@Groesmanint.nl <br />
      </p>
    </div>

  </div>

  <div class="row w-75 mt-5 p-2">
    <form>
      <div class="form-group row">
        <label class="col-4 col-form-label" for="model">Machine model*</label>
        <div class="col-8">
          <select id="model" name="model" class="custom-select w-50" required="required" >
            <option default>Kies een van uw apparaten</option>
            <option value="ricoh">Ricoh MP C3504</option>
            <option value="canon">Canon IR 1530</option>
            <option value="ho">HP 4200 N</option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="serial" class="col-4 col-form-label">Serienummer*</label>
        <div class="col-8">
          <select id="serial" name="serial" class="custom-select w-50" required="required">
          <option value="">Serienummer</option>
            <option value="S123456789">S123456789</option>
            <option value="W987654321">W987654321</option>
            <option value="x147852369">X147852369</option>
          </select>
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="teller" class="col-4 col-form-label">Machine tellerstand</label>
        <div class="col-8">
          <input id="teller" name="teller" type="number" class="form-control w-50">
        </div>
      </div>
      <div class="form-group row">
        <label for="textarea" class="col-4 col-form-label">Storing omschrijving*</label>
        <div class="col-8">
          <textarea id="textarea" name="textarea" cols="40" rows="5" class="form-control"></textarea>
        </div>
      </div>
      <div class="form-group row">
        <label for="datum" class="col-4 col-form-label">Afspraak datum</label>
        <div class="col-8">
          <input id="datum" name="datum" type="date" class="form-control mt-2 w-50" aria-describedby="datumHelpBlock">
          <span id="datumHelpBlock" class="form-text text-muted">Kies een gewenste datum</span>
        </div>
      </div>
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" id="submit" type="submit" class="btn btn-primary m-3" onclick="run">Verzend</button>
        </div>
      </div>
    </form>
  </div>
</div>

<script>

document.getElementById('submit').onclick = (e)=>{
    e.preventDefault();
    alert("Nog niet geprogrameerd.")
  }
</script>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- select2 -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

  <!-- select2-bootstrap4-theme -->
  <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> <!-- for live demo page -->
  <link href="select2-bootstrap4.css" rel="stylesheet"> <!-- for local development env -->


</head>
<body>
<div class="wrapper">
<div class="container">
  <h3>Select University</h3>
  <form>
    <div class="form-group">
      <label>Example of multiple select</label>
      <select multiple placeholder="Choose University" data-allow-clear="1">
      <option>Universiteti i Tiranës</option>  
      <option>Universiteti Politeknik i Tiranës</option>  
      <option>Universiteti Bujqësor i Tiranës</option>  
      <option>Universiteti i Elbasanit "Aleksandër Xhuvani"</option>  
      <option>Universiteti "Luigj Gurakuqi", Shkodër</option>  
      <option>Universiteti "Eqrem Çabej", Gjirokastër</option>  
      <option>Universiteti "Fan S. Noli", Korçë</option>  
      <option>Universiteti "Ismail Qemali", Vlorë</option>  
      <option>Universiteti "Aleksandër Moisiu", Durrës</option>  
      <option>Universiteti i Arteve</option>  
      <option>Universiteti i Sporteve të Tiranës</option>  
      <option>Universiteti i Mjekësisë, Tiranë</option>  
      <option>"Universiteti i New York-ut në Tiranë"</option>  
      <option>Universiteti "Luarasi"</option>  
      <option>Universiteti Privat "Albanian University"</option>  
      <option>Universiteti Katolik "Zoja e Këshillit të Mirë"</option>  
      <option>Universiteti "Barleti"</option>  
      <option>Universiteti Europian i Tiranës</option>  
      <option>Universiteti "Aldent"</option>  
      <option>Universiteti Polis</option>  
      <option>Universiteti "EPOKA"</option>  
      <option>Universiteti "Mesdhetar i Shqipërisë"</option>  
      <option>Universiteti "Metropolitan Tirana"</option>  
      <option>Universiteti Western Balkans</option>  
      <option>Shkolla e Lartë "Nehemia"</option>  
      <option>Akademia e Studimeve Albanologjike</option>  
      <option>Akademia e Forcave të Armatosura</option>  
      <option>Akademia e Sigurisë</option>  
      <option>Akademia e Filmit dhe Multimedias "Marubi"</option>  
      <option>Akademia "Ivodent"</option>  
      <option>Kolegji Universitar "Qiriazi"</option>  
      <option>Kolegji Universitar "WISDOM"</option>  
      <option>Kolegji Universitar "Pavarësia Vlorë"</option>  
      <option>Kolegji Universitar "LOGOS"</option>  
      <option>Tirana Business University College</option>  
      <option>Kolegji Universitar "Bedër"</option>  
      <option>Kolegji Universitar "I Biznesit"</option>  
      <option>Kolegji Universitar "REALD"</option>  
      <option>Kolegji Universitar "Instituti Kanadez i Teknologjisë"</option>  
      <option>Kolegji Profesional i Tiranës</option>  
      <option>Tirana Esthetics & Style School</option>  
      <option>Kolegji Profesional i Lartë Gjerman i Teknologjisë</option>  



      </select>
    </div>
</form>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


<script>
  $(function () {
  $('select').each(function () {
    $(this).select2({
      theme: 'bootstrap4',
      width: 'style',
      placeholder: $(this).attr('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
    });
  });
});
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');</style> 
    <style>@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');</style> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style/Formule.scss">
    <title>Formule</title>
</head>
<body>
    
  <section>
  
    <div class="title">
      <h1>Ajout Un Produit</h1>
    </div>
  
    <form id="inputarea" action="inc/Formul.php" method="POST">
      <div id="in1" class="inputcont">
        <label for="Produit"  <i class="fa fa-edit"></i> <span style="font-family: 'Poppins', sans-serif;">  Produit</span></label>
        <input type="text" id="co1" name="Produit" placeholder="Produit">
        <i class="fa fa-check-circle"></i>
        <i class="fa fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div id="in2" class="inputcont">
        <label for="Description"  <i class="fa fa-edit"></i> <span style="font-family: 'Poppins', sans-serif;">  Description</span></label>
        <input type="text" id="co2" name="Description" placeholder="Description">
        <i class="fa fa-check-circle"></i>
        <i class="fa fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div id="in1" class="inputcont">
        <label for="Prix"  <i class="fa fa-edit"></i> <span style="font-family: 'Poppins', sans-serif;">  Prix</span></label>
        <input type="text" id="co3" name="Prix" placeholder="Prix">
        <i class="fa fa-check-circle"></i>
        <i class="fa fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div id="in2" class="inputcont">
        <label for="Stock"  <i class="fa fa-edit"></i><span style="font-family: 'Poppins', sans-serif;">  Stock</span></label>
        <input type="text" id="co4" name="Stock" placeholder="Stock">
        <i class="fa fa-check-circle"></i>
        <i class="fa fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div id="in1" class="inputcont">
        <label for="Catégorie" <i class="fa fa-edit"></i> <span style="font-family: 'Poppins', sans-serif;">  Catégorie</span></label>
        <input type="text" id="co5" name="Categorie" placeholder="Catégorie">
        <i class="fa fa-check-circle"></i>
        <i class="fa fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
      <div id="in1" class="inputcont">
        <label for="StockCretique" <i class="fa fa-edit"></i> <span style="font-family: 'Poppins', sans-serif;">  StockCrétique</span></label>
        <input type="text" id="co5" name="StockCretique" placeholder="StockCretique">
        <i class="fa fa-check-circle"></i>
        <i class="fa fa-exclamation-circle"></i>
        <small>Error message</small>
      </div>
  
      <a href="#"><h1 style="text-align: center; margin-top: 30px; color: #117FA2;">Upload Image</h1></a>
      <div class="buttonarea">
      <input type="submit" name="Ajout" class="button" value="Ajout" />
     

      <button id="add_back" class="button" onclick="document.location='index.php'">Back</button>

        
      </div>
     
 
      </form>
  </section>


  
  <script>
    const form = document.getElementById('inputarea');
    const Produit = document.getElementById('co1');
    const Description = document.getElementById('co2');
    const Prix = document.getElementById('co3');
    const Stock = document.getElementById('co4');
    const Catégorie = document.getElementById('co5');

    document.getElementById('add_back').addEventListener('click',e => {
        
     
        
       e.preventDefault();
    });
    form.addEventListener('submit', e => {
        
     
        
        checkInputs();
    });
    
    function checkInputs() {
        // trim to remove the whitespaces
        const ProduitValue = Produit.value.trim();
        const DescriptionValue = Description.value.trim();
        const PrixValue = Prix.value.trim();
        const StockValue = Stock.value.trim();
        const CatégorieValue = Catégorie.value.trim();
        
        

        
        if(ProduitValue === '') {
            setErrorFor(Produit, 'Produit cannot be blank');
        } else {
            setSuccessFor(Produit);
        }
        
        if(DescriptionValue === '') {
            setErrorFor(Description, 'Description cannot be blank');
        } else {
            setSuccessFor(Description);
        }

        if(PrixValue === '') {
            setErrorFor(Prix, 'Prix cannot be blank');
        } else {
            setSuccessFor(Prix);
        }

        if(StockValue === '') {
            setErrorFor(Stock, 'Stock cannot be blank');
        } else {
            setSuccessFor(Stock);
        }

        if(CatégorieValue === '') {
            setErrorFor(Catégorie, 'Catégorie cannot be blank');
        } else {
            setSuccessFor(Catégorie);
        }


        
        
 
    }
    
    function setErrorFor(input, message) {
        const inputcont = input.parentElement;
        const small = inputcont.querySelector('small');
        inputcont.className = 'inputcont error';
        small.innerText = message;
    }
    
    function setSuccessFor(input) {
        const inputcont = input.parentElement;
        inputcont.className = 'inputcont success';
    }
        

    

    </script>
</body>
</html>
<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarUser.inc.php' ?>

<input type="file" id="imageInput" multiple>
<button onclick="displayImages()">Afficher les images</button>

<div id="imageContainer"></div>

<script>
  function displayImages() {
  const input = document.getElementById('imageInput');
  const container = document.getElementById('imageContainer');
  
  // Récupération des fichiers sélectionnés
  const files = input.files;
  
  // Parcours des fichiers et affichage des images
  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    
    // Vérification que le fichier est une image
    if (!file.type.startsWith('image/')) {
      continue;
    }
    
    // Création d'un élément image
    const img = document.createElement('img');
    img.src = URL.createObjectURL(file);
    
    // Affichage de l'image dans le conteneur
    container.appendChild(img);
  }
}


const tableau = {nom: "Jean", age: 30, ville: "Paris"};

for (const [key, value] of Object.entries(tableau)) {
  console.log(`${key} : ${value}`);
}
</script>
<?php include_once './views/inc/footer.inc.php' ?>
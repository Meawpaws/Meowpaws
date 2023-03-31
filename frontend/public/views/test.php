<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarUser.inc.php' ?>
<div class="reviews">
    <div class="commentReview">
        <form>
            <input type="file" id="file-input" multiple style="display : none;">
            <div class="inputContact imageInput">
                <button type="button" id="file-button" class="imageFile">Add Images</button>
                <p id ="p_file_image" class="p_file_image"></p>
            </div>
        </form>
    </div>
</div>
<script>
var fileInput = document.getElementById('file-input');
var fileButton = document.getElementById('file-button');
var p = document.getElementById('p_file_image');

fileButton.addEventListener('click', function() {
  fileInput.click();
});

fileInput.addEventListener('change', function() {
  var numFiles = fileInput.files.length;
  var buttonText = numFiles + ' fichier(s) sélectionné(s)';
  p.innerHTML = buttonText;
});
</script>
<?php include_once './views/inc/footer.inc.php' ?>
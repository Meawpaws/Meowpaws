<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

<div class="imagesProductEditBg">
    <div class="imagesProductEdit">
        <div class="grid-ImageItemEdit opacitynone"></div>
        <div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit">
			<img alt="image1" id="image1">
			<div class="inputHiddenClick deleteImages"  id="updateImage1">
				</div>
				<i class="fa fa-trash deleteImagesI" id="trash1"></i>
        </div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit">
			<img alt="image2" id="image2">
			<div class="inputHiddenClick deleteImages" id="updateImage2">
				</div>
				<i class="fa fa-trash deleteImagesI" id="trash2"></i>
        </div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit imagesProductEditPrincipal imagePrincipal">
			<img alt="imagePrincipal"  id="imagePrincipal">
			<div class="inputHiddenClick imagePrincipal" id="updateImagePrincipal"></div>
        </div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
        <div class="grid-ImageItemEdit opacitynone"></div>
        <div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit">
			<img alt="image3" id="image3">
			<div class="inputHiddenClick deleteImages" id="updateImage3">
				</div>
				<i class="fa fa-trash deleteImagesI" id="trash3"></i>
        </div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit">
			<img alt="image4" id="image4">
			<div class="inputHiddenClick deleteImages" id="updateImage4">
				</div>
				<i class="fa fa-trash deleteImagesI" id="trash4"></i>
        </div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
    </div>
</div>

<form  class="opacitynone" id="formUpdateIP" style ="position:absolute;z-index:0;top: -123%;">
				<input type="file" name="file" accept="image/*" id="newImageIP">
				<input type="submit" id="saveImageIP">
			</form>

<form  class="opacitynone" id="formUpdateI1" style ="position:absolute;z-index:0;top: -123%;">
				<input type="file" name="file" accept="image/*" id="newImageI1">
				<input type="submit" id="saveImageI1">
			</form>

<form  class="opacitynone" id="formUpdateI2" style ="position:absolute;z-index:0;top: -123%;">
				<input type="file" name="file" accept="image/*" id="newImageI2">
				<input type="submit" id="saveImageI2">
			</form>

<form  class="opacitynone" id="formUpdateI3" style ="position:absolute;z-index:0;top: -123%;">
				<input type="file" name="file" accept="image/*" id="newImageI3">
				<input type="submit" id="saveImageI3">
			</form>

<form  class="opacitynone" id="formUpdateI4" style ="position:absolute;z-index:0;top: -123%;">
				<input type="file" name="file" accept="image/*" id="newImageI4">
				<input type="submit" id="saveImageI4">
			</form>
<?php include_once './views/inc/footer.inc.php' ?>
<script src="<?= URLROOT ?>layout/js/editItemImage.js"></script>
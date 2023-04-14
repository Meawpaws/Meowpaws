<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

<div class="imagesProductEditBg">
    <div class="imagesProductEdit">
        <div class="grid-ImageItemEdit opacitynone"></div>
        <div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit">
			<img alt="image1" id="image1">
			<div class="inputHiddenClick deleteImages"  id="updateImage1">
				<i class="fa fa-trash" id="trash1"></i>
			</div>
        </div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit">
			<img alt="image2" id="image2">
			<div class="inputHiddenClick deleteImages" id="updateImage2">
				<i class="fa fa-trash" id="trash2"></i>
			</div>
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
				<i class="fa fa-trash" id="trash3"></i>
			</div>
        </div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit">
			<img alt="image4" id="image4">
			<div class="inputHiddenClick deleteImages" id="updateImage4">
				<i class="fa fa-trash" id="trash4"></i>
			</div>
        </div>
		<div class="grid-ImageItemEdit opacitynone"></div>
		<div class="grid-ImageItemEdit opacitynone"></div>
    </div>
</div>

<form  class="opacitynone" id="formUpdate" style ="position:absolute;z-index:0;top: -123%;">
				<input type="file" name="file" accept="image/*" id="newImage">
				<input type="submit" id="saveImage">
			</form>
<?php include_once './views/inc/footer.inc.php' ?>
<script src="<?= URLROOT ?>layout/js/editItemImage.js"></script>
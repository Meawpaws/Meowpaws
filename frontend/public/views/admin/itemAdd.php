<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>

<link rel="stylesheet" href="<?=URLROOT?>layout/css/addForm.css">

<form class="addItemForm" id="addItem">
    <div class="addItemDiv">
        <label for="name" class="addItemLabel">Name</label>
        <input type="text" class="addItemInput" name="name" id="name" required>
    </div>
    <div class="addItemDiv">
        <label for="price" class="addItemLabel">Price</label>
        <input type="number" class="addItemInput" name="price" id="price" required>
    </div>
    <div class="addItemDiv">
        <label for="description" class="addItemLabel">Description</label>
        <textarea class="addItemInput addItemTextarea" name="description" id="description" required></textarea>
    </div>
    <div class="addItemDiv">
        <label for="categorySelect" class="addItemLabel">Category</label>
        <select name="category" class="addItemInput addItemSelect" id="categorySelect" required>
            <option value="" selected>Category</option>
        </select>
    </div>
    <div class="addItemDiv">
        <label for="imagePrincipal" class="addItemLabel addItemLabelImage">Image Principal</label>
        <input type="file" class="addItemInput addItemImage" name="imagePrincipal" id="imagePrincipal" accept="image/*" required>
    </div>
    <div class="addItemDiv">
        <label for="imageSeconder" class="addItemLabel addItemLabelImage">Images Seconders <span class="addItemSpan">Max 4 Images</span></label>
        <input type="file" class="addItemInput addItemImage" name="imageSeconder" id="imageSeconder" accept="image/*" multiple onchange="checkFiles(this)">
    </div>
    <div class="addItemDiv">
        <input type="submit" class="addItemInput addItemSubmit" value="Save">
    </div>
</form>

<?php include_once './views/inc/footer.inc.php' ?>
<script src='<?= URLROOT ?>layout/js/addItem.js'></script>
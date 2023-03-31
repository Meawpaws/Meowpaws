<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarUser.inc.php' ?>
<div class="reviews">
    <div class="commentReview">
        <span class ="userReview">
            <img src = "<?= URLROOT ?>layout/image/profile/avatar.png" class="imageReview">
            <span class = "nameUserReview">marouane</span>
        </span>
        <form class = "form" method = "post">
            <label class = "labelContact">Your Review</label>
            <textarea class = "textareaContact" Name="message"></textarea>
            <label class = "labelContact">Your Images</label>
            <input type="file" id="file-input" multiple style="display : none;">
            <div class="inputContact imageInput">
                <button type="button" id="file-button" class="imageFile">Add Images</button>
                <p id ="p_file_image" class="p_file_image"></p>
            </div>
            <div class ="submit">
                <input type="submit" value = "SEND" class = "btnAll">
            </div>   
        </form>
    </div>
</div>
<script src="<?= URLROOT ?>layout/js/review.js"></script>
<?php include_once './views/inc/footer.inc.php' ?>
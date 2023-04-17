<?php include_once './views/inc/header.inc.php' ?>
<?php include_once './views/inc/navbarAdmin.inc.php' ?>
<style>
    .latest {
	margin-top: 30px;
}

.latest .toggle-info {
	color: #999;
	cursor: pointer
}

.latest .toggle-info:hover {
	color: #444;
}

.latest-users {
	margin-bottom: 0;
}

.latest-users li {
	padding: 10px;
	overflow: hidden;
}

.latest-users li:nth-child(odd) {
	background-color: #EEE;
}

.latest-users .btn-success,
.latest-users .btn-info {
	padding: 2px 8px;
}

.latest-users .btn-info {
	margin-right: 5px;
}

.latest .comment-box {
	margin: 5px 0 10px;
}

.latest .comment-box .member-n,
.latest .comment-box .member-c {
	float: left;
}

.latest .comment-box .member-n {
	width: 80px;
	text-align: center;
	margin-right: 20px;
	position: relative;
	top: 10px;
}

.latest .comment-box .member-c {
    width: calc(100% - 100px);
    background-color: #EFEFEF;
    padding: 10px;
    position: relative;
}

.latest .comment-box .member-c:before {
	content: "";
	display: block;
	position: absolute;
	left: -28px;
	top: 5px;
	width: 0;
	height: 0;
	border-style: solid;
	border-color: transparent #EFEFEF transparent transparent;
	border-width: 15px;
}
</style>
<div class="latest">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-users"></i>
                        Latest 6 Registerd Users
                        <span class="toggle-info pull-right">
                            <i class="fa fa-plus fa-lg"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled latest-users">
                            <li>
                                fghk,jhghjk
                                <a href="members.php?do=Edit&userid=2">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                fghk,jhghjk
                                <a href="members.php?do=Edit&userid=2">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                fghk,jhghjk
                                <a href="members.php?do=Edit&userid=2">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                fghk,jhghjk
                                <a href="members.php?do=Edit&userid=2">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                fghk,jhghjk
                                <a href="members.php?do=Edit&userid=2">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                            <li>
                                fghk,jhghjk
                                <a href="members.php?do=Edit&userid=2">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-tag"></i> Latest 4 Items
                        <span class="toggle-info pull-right">
                            <i class="fa fa-plus fa-lg"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled latest-users">
                            <li>
                                vbn,bvn,n
                                <a href="items.php?do=Edit&itemid=' . $item['Item_ID'] . '">
                                    <span class="btn btn-success pull-right">
                                        <i class="fa fa-edit"></i> Edit
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Latest Comments -->
        <div class="row">
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-comments-o"></i>
                        Latest 6 Comments
                        <span class="toggle-info pull-right">
                            <i class="fa fa-plus fa-lg"></i>
                        </span>
                    </div>
                    <div class="panel-body">
                        <div class="comment-box">
                            <span class="member-n">
                                <a href="members.php?do=Edit&userid=' . $comment['user_id'] . '">
                                    ' . $comment['Member'] . '</a>
                            </span>
                            <p class="member-c">' . $comment['comment'] . '</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Latest Comments -->
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  "use strict";

  // Dashboard
  var toggleInfos = document.querySelectorAll(".toggle-info");
  for (var i = 0; i < toggleInfos.length; i++) {
    toggleInfos[i].addEventListener("click", function() {
      this.classList.toggle("selected");
      var panelBody = this.parentNode.nextElementSibling;
    if (this.classList.contains("selected")) {
          panelBody.setAttribute('style','display:none')
        this.innerHTML = '<i class="fa fa-minus fa-lg"></i>';
      } else {
        panelBody.setAttribute('style','display:block')
        this.innerHTML = '<i class="fa fa-plus fa-lg"></i>';
      }
    });
  }
});

</script>

<?php include_once './views/inc/footer.inc.php' ?>
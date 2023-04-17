document.addEventListener("DOMContentLoaded", function() {
    "use strict";
  
    // Dashboard
    var toggleInfos = document.querySelectorAll(".toggle-info");
    for (var i = 0; i < toggleInfos.length; i++) {
      toggleInfos[i].addEventListener("click", function() {
        this.classList.toggle("selected");
        var panelGlobal = this.closest(".col-sm-6.box_shadow_latest");
        var panelBody = this.parentNode.nextElementSibling;
        if (this.classList.contains("selected")) {
          panelBody.style.display = "none";
          panelGlobal.style.height = "24px";
          this.innerHTML = '<i class="fa fa-minus fa-lg"></i>';
        } else {
          panelBody.style.display = "block";
          panelGlobal.style.height = "auto";
          this.innerHTML = '<i class="fa fa-plus fa-lg"></i>';
        }
      });
    }
  });
  
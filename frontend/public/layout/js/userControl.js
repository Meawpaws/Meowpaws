var URLROOT = `http://localhost/Meowpaws/`;

var userTbody = document.getElementById("userTbody");

  // vérifier si id_user est indéfini ou nul
  if (!id_user || id_user === "null" || id_user === "undefined") {
    location.replace(`${URLROOT}admin`);
  } else {
    
    fetch("http://localhost/meowpaws/backend/Admins/Users", {
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      }
    })
      .then((res) => res.json())
      .then((data) => {
        if (data.message == "Users Info") {
          console.log(data);
        } else {
          location.replace(`${URLROOT}admin/users`);
        }
      });
  }


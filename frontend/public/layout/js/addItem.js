// const categorySelect = document.getElementById('categorySelect')

// fetch(`http://localhost/meowpaws/backend/Admins/getCategories`, {
//   method: "GET",
//   headers: {
//     "Content-Type": "application/json"
//   }
// })
//   .then((res) => res.json())
//   .then((data) => {
//     if (data.message == 'Categories Isset') {
//       var categories = data.result
//       for (let i = 0; i < categories.length; i++) {
//         const id_c = categories[i].id_c
//         const cname = categories[i].cname
//         var option = document.createElement("option");
//         option.value = id_c;
//         option.text = cname;
//         categorySelect.appendChild(option);
//       }
//     }
//   })

//   function clickInInput(input){
//     const inputFile = document.getElementById(`inputImage${input}`)
//     console.log(inputFile);
//     inputFile.click()
//   }
  
//   const addUser = document.getElementById('addUser')

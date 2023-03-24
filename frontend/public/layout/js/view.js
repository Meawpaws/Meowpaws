const idKeyValue = window.location.search
const idParam = new URLSearchParams(idKeyValue)
const id = idParam.get('id')

let pId = document.querySelector('#id')
pId.innerHTML=id
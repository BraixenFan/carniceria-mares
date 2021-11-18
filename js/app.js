const menu = document.querySelector("#meat-showcase");

var request = new XMLHttpRequest();
request.open("GET", "package.json", false);
request.send(null)
const Package = JSON.parse(request.responseText);

console.log(Package);
console.log(menu);

for (var i = 0; i < Package.carnes.length; i++) {
  var newDiv = document.createElement('div');
  var newName = document.createElement('p');
  var newDetails = document.createElement('p');
  var newPrice = document.createElement('p');

  newDiv.className = "meat";
  newDiv.setAttribute("style", "background-image: linear-gradient(to right bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.6)), url('" + Package.carnes[i].Imagen + "')");

  newName.textContent = Package.carnes[i].Nombre;
  newName.className = "meat-name";
  newDiv.appendChild(newName);

  newDetails.textContent = Package.carnes[i].Detalles;
  newDetails.className = "meat-details";
  newDiv.appendChild(newDetails);

  newPrice.textContent = Package.carnes[i].Precio;
  newPrice.className = "meat-price";
  newDiv.appendChild(newPrice);

  menu.appendChild(newDiv);
}

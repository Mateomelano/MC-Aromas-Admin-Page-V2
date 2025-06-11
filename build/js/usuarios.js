document.addEventListener("DOMContentLoaded", () => {
  fetch("src/php/obtener_usuarios.php")
    .then(response => response.json())
    .then(data => {
      const tbody = document.querySelector("#tablaUsuarios tbody");
      data.forEach(usuario => {
        const fila = document.createElement("tr");
        fila.innerHTML = `
          <td>${usuario.id}</td>
          <td>${usuario.nombre}</td>
          <td>${usuario.mail}</td>
        `;
        tbody.appendChild(fila);
      });
    })
    .catch(error => console.error("Error cargando usuarios:", error));
});

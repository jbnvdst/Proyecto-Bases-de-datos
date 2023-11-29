function buscarDatos() {
    // Aquí puedes agregar la lógica para realizar la búsqueda en la base de datos
    // Puedes usar AJAX o Fetch para enviar la solicitud al backend y obtener los resultados

    // Ejemplo de cómo mostrar resultados en el frontend (esto debe ser adaptado según tu lógica)
    const resultados = [
        { id: 1, nombre: 'Ejemplo 1', descripcion: 'Descripción del ejemplo 1' },
        { id: 2, nombre: 'Ejemplo 2', descripcion: 'Descripción del ejemplo 2' },
    ];

    const resultsContainer = document.getElementById('search-results');
    resultsContainer.innerHTML = '';

    resultados.forEach(result => {
        const resultDiv = document.createElement('div');
        resultDiv.innerHTML = `<p>ID: ${result.id}</p><p>Nombre: ${result.nombre}</p><p>Descripción: ${result.descripcion}</p>`;
        resultsContainer.appendChild(resultDiv);
    });
}

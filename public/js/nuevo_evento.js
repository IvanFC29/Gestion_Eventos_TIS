function validarFechaFin() {
    const fechaInicio = document.getElementById('fechaInicio');
    const fechaFin = document.getElementById('fechaFin');

    // Agregar un event listener para el cambio de la fecha de inicio
    fechaInicio.addEventListener('change', function() {
        // Obtener el valor de la fecha de inicio
        const fechaInicioValor = new Date(fechaInicio.value);
        // Establecer la fecha mínima de fecha de culminación para ser un día después de fecha de inicio
        const fechaMinimaCulminacion = new Date(fechaInicioValor);
        fechaMinimaCulminacion.setDate(fechaMinimaCulminacion.getDate() + 1);
        // Establecer la fecha mínima en el campo de fecha de culminación
        fechaFin.min = fechaMinimaCulminacion.toISOString().split('T')[0];
    });
}


// Llamar a las funciónes
document.addEventListener('DOMContentLoaded', function() {
    validarFechaFin();
});

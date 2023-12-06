// Declaramos el objeto fabric.Canvas
const canvas = new fabric.Canvas('canvas');

// Variable para la imagen de fondo
let backgroundImage;

// Cargar imagen de fondo al inicio
const img = new Image();
img.onload = function() {
    backgroundImage = new fabric.Image(img, {
        left: 0,
        top: 0,
        width: canvas.width,
        height: canvas.height,
        selectable: false, // La imagen de fondo no es seleccionable
    });
    canvas.add(backgroundImage);
};
img.src = imageUrl;

// Funciones para agregar texto
document.getElementById('addText').addEventListener('click', () => {
    const text = new fabric.Textbox('Texto de ejemplo', {
        left: 100,
        top: 100,
        fontSize: 20,
        fontFamily: 'Arial',
    });
    canvas.add(text);
});

// Función para agregar imagen
document.getElementById('addImage').addEventListener('click', () => {
    document.getElementById('imageInput').click();
});

// Maneja el cambio en el input de tipo file
document.getElementById('imageInput').addEventListener('change', handleImage);

function handleImage(e) {
    const file = e.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function (event) {
            fabric.Image.fromURL(event.target.result, function (img) {
                img.set({ left: 100, top: 100 });
                canvas.add(img);
            });
        };
        reader.readAsDataURL(file);
    }
}

// Maneja el cambio en el color seleccionado
document.getElementById('colorPicker').addEventListener('input', function() {
    canvas.backgroundColor = this.value;
    canvas.renderAll();
});

// Maneja el clic en el botón de guardar
document.getElementById('saveButton').addEventListener('click', function() {
    const dataURL = canvas.toDataURL({ format: 'png', quality: 0.8 });
    const a = document.createElement('a');
    a.href = dataURL;
    a.download = 'canvas.png';
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
});

document.getElementById('guardarCanvas').addEventListener('click', function() {
    const dataURL = canvas.toDataURL('image/png');

    // Enviar la URL al servidor
    $.ajax({
        type: "POST",
        url: "/guardar-imagen",
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            imageUrl: dataURL
        },
        success: function(response) {
            alert("Afiche guardado exitosamente");
            console.log("URL de la imagen guardada exitosamente");
        },
        error: function(error) {
            console.error("Error al guardar la URL de la imagen:", error);
        }
    });
    
});

// Declaramos el objeto fabric.Canvas
const canvas = new fabric.Canvas('canvas');

// Funciones para agregar texto, imagenes
document.getElementById('addText').addEventListener('click', () => {
    const text = new fabric.Textbox('Texto de ejemplo', {
        left: 100,
        top: 100,
        fontSize: 20,
        fontFamily: 'Arial',
    });
    canvas.add(text);
});

document.getElementById('addImage').addEventListener('click', () => {
    // Muestra el input de tipo file para seleccionar una imagen
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
        canvas.setActiveObject(canvas.item(canvas.getObjects().length - 1));
        reader.readAsDataURL(file);
    }
}

// Maneja el cambio en el color seleccionado
document.getElementById('colorPicker').addEventListener('input', function() {
    canvas.backgroundColor = this.value;
    canvas.renderAll();
});

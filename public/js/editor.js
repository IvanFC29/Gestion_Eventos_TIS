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
    fabric.Image.fromURL('tu-imagen.jpg', (img) => {
        img.scaleToWidth(200);
        img.scaleToHeight(200);
        canvas.add(img);
    });
});

document.getElementById('changeSize').addEventListener('click', () => {
    const activeObject = canvas.getActiveObject();
    if (activeObject) {
        activeObject.scaleToWidth(200);
        activeObject.scaleToHeight(100);
    }
});


// Obtén el lienzo y el contexto
/*const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');

// Variables para controlar las acciones
let isAddingText = false;
let isAddingImage = false;
let isChangingSize = false;

// Manejadores de eventos
document.getElementById('addText').addEventListener('click', () => {
    isAddingText = true;
});

document.getElementById('addImage').addEventListener('click', () => {
    isAddingImage = true;
});

document.getElementById('changeSize').addEventListener('click', () => {
    isChangingSize = true;
});

canvas.addEventListener('click', (e) => {
    if (isAddingText) {
        const text = prompt('Introduce el texto:');
        if (text) {
            ctx.font = '16px ' + document.getElementById('fontFamily').value;
            ctx.fillText(text, e.clientX - canvas.getBoundingClientRect().left, e.clientY - canvas.getBoundingClientRect().top);
        }
        isAddingText = false;
    }

    if (isAddingImage) {
        // Código para cargar y mostrar una imagen en el lienzo
        // Puedes usar el método ctx.drawImage() para esto.
        isAddingImage = false;
    }

    if (isChangingSize) {
        // Código para cambiar el tamaño de elementos en el lienzo
        isChangingSize = false;
    }
});*/

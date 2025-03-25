$(function () {
    setTimeout(() => {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            navText: ["<", ">"],
            responsive: {
                0: { items: 1 },
                600: { items: 1 },
                1000: { items: 1 }
            }
        });
    }, 500); // Délai de 500ms pour s'assurer que tout est bien chargé
});

// profil
function previewImage(event) {
    const preview = document.getElementById('preview');
    const fileInput = document.getElementById('imageInput');
    const saveButton = document.getElementById('saveButton');
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            saveButton.style.display = 'block'; // Affiche le bouton "Enregistrer"
        };
        
        reader.readAsDataURL(file);
    } else {
        saveButton.style.display = 'none'; // Cache le bouton si aucun fichier n'est sélectionné
    }
}

document.addEventListener('DOMContentLoaded', function () {
    let cropper;
    const imageInput = document.getElementById('imageInput');
    const imageCropper = document.getElementById('imageCropper');
    const cropButton = document.getElementById('cropButton');
    const uploadForm = document.getElementById('uploadForm');
    const croppedImageData = document.getElementById('croppedImageData');

    imageInput.addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                imageCropper.src = e.target.result;

                // Détruit le cropper s'il existe déjà
                if (cropper) {
                    cropper.destroy();
                }

                // Initialise Cropper.js
                cropper = new Cropper(imageCropper, {
                    aspectRatio: 1, // Carré (peut être changé selon le besoin)
                    viewMode: 1,
                    minCropBoxWidth: 400,  // Taille minimale du recadrage
                    minCropBoxHeight: 300,
                    autoCropArea: 1,
                    responsive: true,
                    movable: true, // Permet de déplacer l'image
                    zoomable: true, // Permet de zoomer
                    scalable: true, // Permet de redimensionner
                    
                });
            };
            reader.readAsDataURL(file);
        }
    });

    // Bouton pour rogner et envoyer l'image
    cropButton.addEventListener('click', function () {
        if (cropper) {
            // Convertir l'image croppée en base64
            const croppedCanvas = cropper.getCroppedCanvas();
            croppedImageData.value = croppedCanvas.toDataURL('image/jpeg'); // Convertir en base64
            uploadForm.submit(); // Envoyer le formulaire
        }
    });
});
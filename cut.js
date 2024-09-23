const hotspot1 = document.querySelector('.hotspot-1');
const hotspot2 = document.querySelector('.hotspot-2');
const interactiveImage = document.querySelector('.interactive-image');

// Function to change the image
function changeImageOnHover(hotspot, newImage) {
    hotspot.addEventListener('mouseenter', () => {
        interactiveImage.src = newImage;
        interactiveImage.style.opacity = '1'; // Ensures the image fades back in
    });

    hotspot.addEventListener('mouseleave', () => {
        interactiveImage.src = 'http://localhost/wp-content/themes/360-partygirl/media/INTERACTIVO.png'; // Replace with the original image path
        interactiveImage.style.opacity = '1';
    });
}

// Apply the function to each hotspot
changeImageOnHover(hotspot1, 'http://localhost/wp-content/themes/360-partygirl/media/lentesgif1.gif');
changeImageOnHover(hotspot2, 'http://localhost/wp-content/themes/360-partygirl/media/baggif1.gif');

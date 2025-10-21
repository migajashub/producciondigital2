const botones_slider = document.querySelectorAll(".btn");
const currentImage = document.getElementById("current_image");
const nextImage = document.getElementById("next_image");
const welcome_linea1 = document.getElementById("welcome_linea1");
const welcome_linea2 = document.getElementById("welcome_linea2");

// Preload all images
const imageUrls = Array.from(botones_slider).map(btn => btn.getAttribute("data-img"));
const preloadedImages = [];

imageUrls.forEach((url, index) => {
    const img = new Image();
    img.src = url;
    preloadedImages[index] = img;
});

let isTransitioning = false;

botones_slider.forEach((btn, index) => {
    btn.addEventListener("click", () => {
        if (isTransitioning) return;
        
        const nuevaImg = btn.getAttribute("data-img");
        const nuevoTexto1 = btn.getAttribute("data-texto1");
        const nuevoTexto2 = btn.getAttribute("data-texto2");

        // Check if it's the same image
        if (currentImage.src.includes(nuevaImg)) return;

        isTransitioning = true;

        // Set the next image source
        nextImage.src = nuevaImg;
        
        // Start crossfade transition
        nextImage.style.opacity = '0';
        nextImage.style.display = 'block';
        
        // Force a reflow to ensure the image is loaded
        nextImage.offsetHeight;
        
        // Start the crossfade
        requestAnimationFrame(() => {
            nextImage.style.opacity = '1';
            currentImage.style.opacity = '0';
        });

        // After transition, swap the images
        setTimeout(() => {
            currentImage.src = nuevaImg;
            currentImage.style.opacity = '1';
            nextImage.style.opacity = '0';
            
            setTimeout(() => {
                nextImage.style.display = 'none';
                isTransitioning = false;
            }, 50);
        }, 500);

        // Update text and button state
        welcome_linea1.textContent = nuevoTexto1;
        welcome_linea2.textContent = nuevoTexto2;
        
        botones_slider.forEach(b => b.classList.remove("active"));
        btn.classList.add("active");
    });
});

//galería
const items = document.querySelectorAll('.gallery-item');
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.querySelector('.lightbox-img');
const closeBtn = document.querySelector('.close');

const titleEl = document.getElementById('lightbox-title');
const artistEl = document.getElementById('lightbox-artist');
const yearEl = document.getElementById('lightbox-year');
const descEl = document.getElementById('lightbox-desc');

items.forEach(item => {
  item.addEventListener('click', () => {
    const img = item.querySelector('img');
    lightboxImg.src = img.getAttribute('data-large');
    titleEl.textContent = item.dataset.title;
    artistEl.textContent = "Autor: " + item.dataset.artist;
    yearEl.textContent = "Año: " + item.dataset.year;
    descEl.textContent = item.dataset.desc;

    lightbox.style.display = 'flex';
  });
});

closeBtn.addEventListener('click', () => {
  lightbox.style.display = 'none';
});

window.addEventListener('click', (e) => {
  if (e.target === lightbox) lightbox.style.display = 'none';
});


const filterBtn = document.getElementById('filter-btn');
const filterPanel = document.getElementById('filter-panel');
const closePanel = document.getElementById('close-panel');
const main = document.getElementById('main');
const header = document.getElementById('header');


const applyFilters = document.getElementById('apply-filters');
const artistFilter = document.getElementById('artist-filter');
const yearFilter = document.getElementById('year-filter');

// abrir panel
filterBtn.addEventListener('click', () => {
  filterPanel.classList.add('active');
  main.classList.add('shifted');
  header.classList.add('shifted');
});

// cerrar panel
closePanel.addEventListener('click', () => {
  filterPanel.classList.remove('active');
  main.classList.remove('shifted');
  header.classList.remove('shifted');
});

// aplicar filtros
applyFilters.addEventListener('click', () => {
  const selectedArtist = artistFilter.value;
  const selectedYear = yearFilter.value;

    document.querySelectorAll('.gallery-item').forEach(item => {
      const matchArtist = (selectedArtist === 'all' || item.dataset.artist === selectedArtist);
      const matchYear = (selectedYear === 'all' || item.dataset.year === selectedYear);

      if (matchArtist && matchYear) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });

  // cerrar panel después de aplicar
  filterPanel.classList.remove('active');
  main.classList.remove('shifted');
  header.classList.remove('shifted');
});


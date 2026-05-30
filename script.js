// Virtual Gallery - A-Frame 3D Experience

// Gallery artwork data
const artworkData = [
    {
        id: 'artwork1',
        title: 'Red Horizon',
        artist: 'Artist One',
        description: 'A stunning abstract representation of sunset over mountains.',
        year: 2023
    },
    {
        id: 'artwork2',
        title: 'Ocean Dreams',
        artist: 'Artist Two',
        description: 'Ethereal waves captured in vibrant turquoise tones.',
        year: 2023
    },
    {
        id: 'artwork3',
        title: 'Sky Bridge',
        artist: 'Artist Three',
        description: 'A modern interpretation of connection and harmony.',
        year: 2024
    },
    {
        id: 'artwork4',
        title: 'Coral Reef',
        artist: 'Artist Four',
        description: 'Vibrant marine life in a coral ecosystem.',
        year: 2024
    },
    {
        id: 'artwork5',
        title: 'Emerald Garden',
        artist: 'Artist Five',
        description: 'Lush vegetation and natural beauty in harmonious composition.',
        year: 2023
    },
    {
        id: 'artwork6',
        title: 'Golden Hour',
        artist: 'Artist Six',
        description: 'Warm golden light embracing the landscape.',
        year: 2024
    }
];

// Initialize gallery
document.addEventListener('DOMContentLoaded', () => {
    initializeGallery();
});

function initializeGallery() {
    console.log('Virtual Gallery Initialized');
    
    // Get all gallery items
    const galleryItems = document.querySelectorAll('.gallery-item');
    
    // Add click listeners to gallery items
    galleryItems.forEach((item, index) => {
        item.addEventListener('click', (e) => {
            e.stopPropagation();
            const artworkId = item.getAttribute('src').substring(1); // Remove # from src
            showArtworkDetails(artworkId);
        });
    });
    
    // Add keyboard controls
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeDetailModal();
        }
    });
}

function showArtworkDetails(artworkId) {
    const artwork = artworkData.find(art => art.id === artworkId);
    
    if (!artwork) return;
    
    const detailModal = document.getElementById('detail-modal') || createDetailModal();
    
    detailModal.innerHTML = `
        <h3>${artwork.title}</h3>
        <p><strong>Artist:</strong> ${artwork.artist}</p>
        <p><strong>Year:</strong> ${artwork.year}</p>
        <p><strong>Description:</strong> ${artwork.description}</p>
        <button class="close-btn" onclick="closeDetailModal()">Close</button>
    `;
    
    detailModal.classList.add('active');
}

function closeDetailModal() {
    const detailModal = document.getElementById('detail-modal');
    if (detailModal) {
        detailModal.classList.remove('active');
    }
}

function createDetailModal() {
    const modal = document.createElement('div');
    modal.id = 'detail-modal';
    document.body.appendChild(modal);
    return modal;
}

// Handle scene loaded
document.querySelector('a-scene').addEventListener('loaded', () => {
    console.log('A-Frame scene loaded successfully');
});

// Optional: Add analytics or logging
window.addEventListener('beforeunload', () => {
    console.log('Gallery session ended');
});

# Virtual Gallery - A-Frame 3D Experience

A stunning 3D virtual art gallery built with **A-Frame**, **JavaScript**, and **PHP**. Walk through an immersive gallery space, view artwork in 3D, and interact with pieces from your browser.

## 🎨 Features

- **3D Gallery Environment**: Explore a fully rendered 3D gallery space
- **Interactive Artwork**: Click on artworks to view details
- **VR Ready**: Compatible with VR headsets for immersive experience
- **Responsive Design**: Works on desktop, mobile, and VR devices
- **Backend Integration**: PHP API for dynamic artwork data
- **Navigation**: WASD controls and mouse look around
- **HUD Interface**: On-screen information and controls

## 🚀 Getting Started

### Prerequisites

- Web browser with WebGL support (Chrome, Firefox, Edge, Safari)
- PHP 7.0+ (for backend API)
- Local server (Apache, Nginx, or PHP built-in server)

### Installation

1. Clone this repository:
   ```bash
   git clone https://github.com/inventartit/virtualgallery.git
   cd virtualgallery
   ```

2. Start a local PHP server:
   ```bash
   php -S localhost:8000
   ```

3. Open your browser:
   ```
   http://localhost:8000
   ```

## 🎮 Controls

- **W/A/S/D**: Move through the gallery
- **Mouse**: Look around and navigate
- **Click**: Interact with artwork for details
- **ESC**: Close artwork details

## 📁 Project Structure

```
virtualgallery/
├── index.html          # Main A-Frame scene
├── style.css           # Styling and animations
├── script.js           # Frontend JavaScript
├── api.php             # Backend API endpoints
├── config.php          # Configuration settings
├── .gitignore          # Git ignore rules
└── README.md           # This file
```

## 🔧 API Endpoints

### GET /api.php?path=/artworks
Retrieve list of all artworks

```json
{
  "success": true,
  "data": [...],
  "count": 6
}
```

### GET /api.php?path=/artwork&id=artwork1
Retrieve details for specific artwork

### GET /api.php?path=/gallery
Retrieve gallery information

## 🎯 Customization

### Adding Artwork

Edit the `artworkData` array in `script.js`:

```javascript
const artworkData = [
    {
        id: 'artwork1',
        title: 'Your Artwork Title',
        artist: 'Artist Name',
        description: 'Artwork description',
        year: 2024
    }
];
```

### Modifying Gallery Layout

Edit the `index.html` file to adjust:
- Wall positions and dimensions
- Lighting and colors
- Artwork placement
- Environment settings

### Styling

Customize colors and animations in `style.css`

## 🌐 Browser Compatibility

- Chrome/Chromium: ✅ Full support
- Firefox: ✅ Full support
- Safari: ✅ Full support
- Edge: ✅ Full support
- Mobile browsers: ✅ With touch controls
- VR headsets: ✅ With VR support

## 📚 Technologies Used

- **A-Frame**: Mozilla's WebGL framework for 3D/VR
- **JavaScript**: Client-side interactivity
- **PHP**: Server-side API
- **CSS3**: Styling and animations
- **HTML5**: Semantic markup

## 🔗 Resources

- [A-Frame Documentation](https://aframe.io/docs/)
- [A-Frame Inspector](https://aframe.io/docs/0.9.0/introduction/visual-inspector-and-dev-tools.html)
- [WebGL Information](https://www.khronos.org/webgl/)

## 📝 License

MIT License - Feel free to use this project for personal and commercial purposes.

## 🤝 Contributing

Contributions are welcome! Feel free to submit issues and enhancement requests.

## 📧 Support

For questions or support, please open an issue on GitHub.

---

**Happy Exploring! 🎭✨**

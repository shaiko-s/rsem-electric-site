import './bootstrap';

// Import Fonts
import '../sass/_fonts.sass';

// Import variables
// import '../sass/_variables.sass';

//import '../css/reset.css'; // CSS Reset, but maybe not needed because of Tailwind
import '../sass/app.sass';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import './bootstrap';
import '../css/app.css';

// Preline init setelah DOM siap
document.addEventListener('DOMContentLoaded', () => {
    window.HSStaticMethods.autoInit();
});

// Preline re-init setelah navigasi Livewire
document.addEventListener('livewire:navigated', () => {
    window.HSStaticMethods.autoInit();
});

document.addEventListener('livewire:load', () => {
    window.HSStaticMethods.autoInit();
});

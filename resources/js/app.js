import './bootstrap'; // Laravel bootstrap file (Axios, Echo etc.)
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

document.addEventListener('DOMContentLoaded', function () {
  const hiddenSections = document.querySelectorAll('.hidden');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('show');
      }
    });
  }, {
    threshold: 0.02 // Adjust as needed
  });

  hiddenSections.forEach(section => {
    observer.observe(section);
  });
});

document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');
    const firstMenu = document.getElementById('first-menu');
    const secondMenu = document.getElementById('second-menu');
    const menuNav = document.getElementById('menu-nav');

    const menuOpenButton = document.getElementById('menu-open');
    const menuCloseButton = document.getElementById('menu-close');
  
    // Fonction pour ouvrir le menu
    const openMenu = () => {

      header.classList.add('bg-[#050A3A]');

      firstMenu.classList.remove('flex');
      firstMenu.classList.add('hidden');

      secondMenu.classList.remove('hidden')
      secondMenu.classList.add('flex')

      menuNav.classList.remove('hidden')
      menuNav.classList.add('flex')
    };
  
    // Fonction pour fermer le menu
    const closeMenu = () => {

      header.classList.remove('bg-[#050A3A]')

      firstMenu.classList.add('flex');
      firstMenu.classList.remove('hidden');

      secondMenu.classList.add('hidden')
      secondMenu.classList.remove('flex')

      menuNav.classList.add('hidden')
      menuNav.classList.remove('flex')
    };
  
    if (menuOpenButton) {
      menuOpenButton.addEventListener('click', openMenu);
    }
  
    if (menuCloseButton) {
      menuCloseButton.addEventListener('click', closeMenu);
    }
  
    document.addEventListener('click', function (event) {
      const isClickInsideMenu = event.target.closest('.toggle-container');
      const isClickOnToggle = event.target.closest('.menu-toggle');
  
      if (!isClickInsideMenu && !isClickOnToggle) {
        closeMenu();
      }
    });
  });
  
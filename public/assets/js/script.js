document.addEventListener('DOMContentLoaded', function () {
  // Enable dropdown on hover for desktop devices
  if (window.innerWidth > 991) {
    var dropdowns = document.querySelectorAll('.navbar .dropdown');
    dropdowns.forEach(function (dropdown) {
      dropdown.addEventListener('mouseenter', function () {
        var toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
        if (toggle) {
          var dropdownInstance = bootstrap.Dropdown.getOrCreateInstance(toggle);
          dropdownInstance.show();
        }
      });
      dropdown.addEventListener('mouseleave', function () {
        var toggle = dropdown.querySelector('[data-bs-toggle="dropdown"]');
        if (toggle) {
          var dropdownInstance = bootstrap.Dropdown.getOrCreateInstance(toggle);
          dropdownInstance.hide();
        }
      });
    });
  }

  // Custom script to enable nested dropdowns on mobile devices for Bootstrap 5
  var dropdownSubmenus = document.querySelectorAll('.dropdown-submenu > a');

  dropdownSubmenus.forEach(function (submenuToggle) {
    submenuToggle.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();

      var submenu = submenuToggle.nextElementSibling;
      if (submenu) {
        if (submenu.classList.contains('show')) {
          submenu.classList.remove('show');
        } else {
          // Close any open submenus
          var openSubmenus = submenu.parentElement.parentElement.querySelectorAll('.dropdown-menu.show');
          openSubmenus.forEach(function (openSubmenu) {
            openSubmenu.classList.remove('show');
          });
          submenu.classList.add('show');
        }
      }
    });
  });

  // Fix for main Services dropdown toggle on mobile devices
  var servicesDropdownToggle = document.getElementById('servicesDropdown');
  if (servicesDropdownToggle) {
    ['click', 'touchstart'].forEach(function(eventType) {
      servicesDropdownToggle.addEventListener(eventType, function (e) {
        if (window.innerWidth <= 991) {
          e.preventDefault();
          e.stopPropagation();
          var dropdownMenu = servicesDropdownToggle.nextElementSibling;
          if (dropdownMenu) {
            if (dropdownMenu.classList.contains('show')) {
              dropdownMenu.classList.remove('show');
            } else {
              dropdownMenu.classList.add('show');
            }
          }
        }
      });
    });
  }

  // Close all submenus when parent dropdown is hidden
  var dropdowns = document.querySelectorAll('.dropdown');
  dropdowns.forEach(function (dropdown) {
    dropdown.addEventListener('hidden.bs.dropdown', function () {
      var submenus = dropdown.querySelectorAll('.dropdown-menu.show');
      submenus.forEach(function (submenu) {
        submenu.classList.remove('show');
      });
    });
  });
});

const burgerMenu = document.querySelector('.burger-menu');
const frontNav = document.querySelector('.front-nav');

burgerMenu.addEventListener('click', () => {
  frontNav.classList.toggle('nav-open');
});

function loginPage() {
  window.location.href = '/login';
}
function registerPage() {
  window.location.href = '/register';
}

function loadContent(page) {
  $.ajax({
    url: './front/' + page,
    method: 'GET',
    success: function (response) {
      $('.content-body').html(response);
    },
    error: function () {
      $('.content-body').html('<p>Error loading page.</p>')
    }
  });
}
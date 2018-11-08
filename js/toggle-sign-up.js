const toggle = document.querySelector('.toggle-signup');
const sidebar = document.querySelector('.sidebar-signup');


toggle.addEventListener('click', () => {
  toggle.classList.toggle('active');
  sidebar.classList.toggle('active');
})

// Menu mobile
const toggle = document.querySelector('.nav-toggle')
const menu = document.getElementById('mobile-menu')
if (toggle && menu) {
  toggle.addEventListener('click', () => {
    const open = menu.hidden
    menu.hidden = !open
    toggle.setAttribute('aria-expanded', String(open))
  })
  menu.querySelectorAll('a').forEach((link) =>
    link.addEventListener('click', () => {
      menu.hidden = true
      toggle.setAttribute('aria-expanded', 'false')
    }),
  )
}

// Année du pied de page
const year = document.getElementById('currentYear')
if (year) year.textContent = new Date().getFullYear()

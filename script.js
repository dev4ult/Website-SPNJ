if (localStorage.getItem('darkMode') === null) {
  localStorage.setItem('darkMode', 'false');
}

changeStatus();

function toogleDarkmode() {
  const themeChanger = document.getElementsByClassName('theme-button')[0];

  if (themeChanger.innerHTML == 'Dark' || localStorage.getItem('darkMode') == false) {
    themeChanger.innerHTML = 'Light';
    localStorage.setItem('darkMode', 'true');
    setTheme();
  } else {
    themeChanger.innerHTML = 'Dark';
    localStorage.setItem('darkMode', 'false');
    unsetTheme();
  }
}

function changeStatus() {
  const themeButton = document.querySelector('.theme-button');

  if (localStorage.getItem('darkMode') === 'true') {
    setTheme();
    themeButton.innerHTML = 'Light';
  } else {
    unsetTheme();
  }
}

function setTheme() {
  if (document.body.className == 'division-page') {
    document.body.className = 'division-page casual-dark';
  } else {
    document.body.className = 'fancy-dark';
  }
}

function unsetTheme() {
  if (document.body.className == 'division-page casual-dark' || document.body.className == 'division-page') {
    document.body.className = 'division-page';
  } else {
    document.body.className = '';
  }
}

const radios = document.querySelectorAll('input[name="konfirmasi"]');
const textareaPengalaman = document.querySelector('textarea#pengalaman');

for (const radio of radios) {
  radio.addEventListener('change', (_) => {
    if (radio.id == 'yes') {
      textareaPengalaman.style.display = 'block';
    } else {
      textareaPengalaman.style.display = 'none';
    }
  });
}

if(document.querySelector('.closed-notification')) {
  const closedNotification = document.querySelector('.closed-notification');
  closedNotification.addEventListener('mouseenter', function(){
    closedNotification.classList.add('open');
  })
  closedNotification.addEventListener('mouseleave', function(){
    closedNotification.classList.remove('open');
  })
}

if(document.querySelector('.mappoint')) {
  const allMapPoints = document.querySelectorAll('.mappoint-icon');
  const allInfoBoxes = document.querySelectorAll('.mappoint');
  const allCloseIcons = document.querySelectorAll('.mappoint-close');
  let cursorInBox = false;

  const closeInfoBoxes = () => {
    allMapPoints.forEach(point => {
      point.parentElement.querySelector('.mappoint-inside').classList.remove('showing');
    })
  }

  allInfoBoxes.forEach(box => {
    box.addEventListener('mouseenter', function() {
        cursorInBox = true;
    })
    box.addEventListener('mouseleave', function() {
      cursorInBox = false;
      closeInfoBoxes();
    })
  })

  allCloseIcons.forEach(icon => {
    icon.addEventListener('click', closeInfoBoxes);
  })

  allMapPoints.forEach(point => {
    point.addEventListener('mouseenter', function(){
      const info = point.parentElement.querySelector('.mappoint-inside');
      closeInfoBoxes();
      info.classList.add('showing');
    })
    point.addEventListener('mouseleave', function(event) {
      if(!cursorInBox) {
        closeInfoBoxes();
      }
    });
  })
}

if(document.querySelector('.switch-maps-button')) {
  const toggle = document.querySelector('.switch-maps-button .toggle');
  const lever = document.querySelector('.toggle-lever');
  const gpMap = document.querySelector('.hover-map');
  const fachMap = document.querySelector('.hover-map.fach');
  const activateGp = document.querySelector('.activate-gp');
  const activateSpecialists = document.querySelector('.activate-specialists');
  let toggled = false;
  toggle.addEventListener('click', function() {
    if(!toggled) {
      lever.classList.add('toggled');
      fachMap.classList.add('active');
      gpMap.classList.remove('active');
      toggled = true;
    } else {
      lever.classList.remove('toggled');
      fachMap.classList.remove('active');
      gpMap.classList.add('active');
      toggled = false;
    }
  })
  activateGp.addEventListener('click', function() {
    lever.classList.remove('toggled');
    fachMap.classList.remove('active');
    gpMap.classList.add('active');
    toggled = false;
  })
  activateSpecialists.addEventListener('click', function() {
    lever.classList.add('toggled');
    fachMap.classList.add('active');
    gpMap.classList.remove('active');
    toggled = true;
  })
}




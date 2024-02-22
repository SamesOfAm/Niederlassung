const mapHandler = (wrapper) => {
  const wrapperElement = wrapper;
  const hoverMap = wrapperElement.querySelector('.hover-map');
  const mapCoords = [hoverMap.getBoundingClientRect().x,hoverMap.getBoundingClientRect().y];
  const scrollTarget = window.pageYOffset + mapCoords[1];
  const popup = wrapperElement.querySelector('.popup');
  const allPaths = wrapperElement.querySelectorAll('path');
  const allPopupContents = wrapperElement.querySelectorAll('.popup-content');
  const zipSearch = wrapperElement.querySelector('.zip-search input');
  const zipSearchList = wrapperElement.querySelector('.zip-search ul');
  const zipSearchListElements = wrapperElement.querySelectorAll('.zip-search ul li');
  const zipSearchListElementLinks = wrapperElement.querySelectorAll('.zip-search ul li a');
  const closePopup = wrapperElement.querySelector('.close-popup');
  let enteredPopup = false;
  let darkPaths = false;

  const showPopup = (area,boxX,boxY) => {
    popup.style.top = boxY + 'px';
    popup.style.left = boxX + 'px';
    popup.classList.add('shown');
    area.classList.add('shown');
  }

  const hidePopup = () => {
    popup.classList.remove('shown');
    allPopupContents.forEach(content => {
      content.classList.remove('shown');
    })
  }

  popup.addEventListener('mouseenter', function() {
    enteredPopup = true;
  })

  popup.addEventListener('mouseleave', function() {
    if(!darkPaths) {
      enteredPopup = false;
      hidePopup();
    }
  })

  allPaths.forEach(path => {
    const popupContent = wrapperElement.getElementById('popup-'+path.getAttribute('id')) || wrapperElement.getElementById('popup-'+path.getAttribute('serif:id')) || null;
    if(popupContent) {
      const numberPositions = popupContent.getAttribute('data-positions');
      if(numberPositions >= 10) {
        path.style.fill = 'rgb(90, 121, 24)';
      }
      else if(numberPositions >= 5) {
        path.style.fill = 'rgb(117, 165, 16)';
      }
      else if(numberPositions >= 2) {
        path.style.fill = 'rgb(128, 180, 19)';
      }
      path.addEventListener('mouseenter', function(event) {
        hidePopup();
        setTimeout(function() {
          const parentWidth = event.target.parentElement.getBoundingClientRect().width;
          const parentXOffset =  event.target.parentElement.getBoundingClientRect().x;
          let xCoord;
          if(event.target.getBoundingClientRect().x <= ((parentWidth / 2) - parentXOffset)) {
            xCoord = event.target.getBoundingClientRect().x + event.target.getBoundingClientRect().width / 2;
          } else {
            xCoord = (event.target.getBoundingClientRect().x + event.target.getBoundingClientRect().width /2) - 200;
          }
          const yCoord = event.target.getBoundingClientRect().y + event.target.getBoundingClientRect().height / 2;
          popupContent && showPopup(popupContent,xCoord,yCoord);
        },15)
      });
      path.addEventListener('mouseleave', function() {
        setTimeout(function() {
          if(!enteredPopup) {
            hidePopup();
          }
        },10)
      });
    }
  });

  document.body.addEventListener('click', function(event) {
    if(event.target !== zipSearch) {
      zipSearchList.style.display = "none";
      zipSearch.classList.remove('dropdown-open');
    }
  });

  zipSearchListElementLinks.forEach(link => {
    link.addEventListener('click', function(event) {
      const areaName = link.innerHTML;
      const parsedName = areaName.replace(/ |\/|,/g, '-');
      event.preventDefault();
      allPopupContents.forEach(content => {
        if(content.id.includes(parsedName)) {
          allPaths.forEach(path => {
            path.classList.remove('dark');
            const name = path.getAttribute('serif:id') || path.getAttribute('id');
            if(name === areaName) {
              popup.style.position = "absolute";
              darkPaths = true;
              hidePopup();
              window.scrollTo({
                top: scrollTarget + 100,
                left: 0,
                behavior: 'smooth'
              });
              // popup.style.transform = 'translateY(-150px)';
              setTimeout(function(){
                path.classList.add('inactive');
                const pathTop = path.getBoundingClientRect().y;
                const pathLeft = Math.round(path.getBoundingClientRect().x);
                const pathHeight = path.getBoundingClientRect().height;
                const pathWidth = path.getBoundingClientRect().width;
                const parentWidth = path.parentElement.getBoundingClientRect().width;
                const parentXOffset =  path.parentElement.getBoundingClientRect().x;
                let xCoord;
                if(pathLeft <= ((parentWidth / 2) + parentXOffset)) {
                  xCoord = pathLeft + pathWidth;
                } else {
                  xCoord = pathLeft - 280;
                }
                const yCoord = pathTop + pathHeight;
                showPopup(content, xCoord,yCoord);
                closePopup.classList.add('active');
              },300)
              } else {
                path.classList.add('dark');
              }
          })
        }
      })
    })
  })

  document.addEventListener('keyup', function(event) {
    if(event.key === 'Escape') {
      zipSearchList.style.display = 'none';
      zipSearch.classList.remove('dropdown-open');
    }
  })

  zipSearch.addEventListener('input', function() {
    zipSearchList.style.display = 'block';
    zipSearch.classList.add('dropdown-open');
    zipSearchListElements.forEach(element => {
      element.classList.remove('remaining');
      element.classList.remove('filtered-out');
      const parsedInputValue = zipSearch.value.toLowerCase();
      const areaName = element.innerHTML.toLowerCase();
      if(!areaName.includes(parsedInputValue)) {
        element.classList.remove('remaining');
        element.classList.add('filtered-out');
      } else {
        element.classList.add('remaining');
      }
    })
  })

  zipSearch.addEventListener('click', function() {
    zipSearchList.style.display = 'block';
    zipSearch.classList.add('dropdown-open');
  })

  const zipSearchSubmitHandler = () => {
    const allRemainingElements = document.querySelectorAll('.remaining');
    if(allRemainingElements.length === 1) {
      document.querySelector('.remaining').querySelector('a').click();
    }
}

  zipSearch.closest('form').addEventListener('submit', function(event) {
    event.preventDefault();
    zipSearchSubmitHandler();
  })

  closePopup.addEventListener('click', function() {
    closePopup.classList.remove('active');
    hidePopup();
    allPaths.forEach(path => {
      path.classList.remove('dark');
      path.classList.remove('inactive');
    })
    darkPaths = false;
    popup.style.position = "fixed";
  })
}

const allMapWrappers = document.querySelectorAll('.map-wrapper');
allMapWrappers.forEach(wrapper => {
  mapHandler(wrapper);
})


if(document.querySelector('.closed-notification')) {
  const closedNotification = document.querySelector('.closed-notification');
  closedNotification.addEventListener('mouseenter', function(){
    closedNotification.classList.add('open');
  })
  closedNotification.addEventListener('mouseleave', function(){
    closedNotification.classList.remove('open');
  })
}

if(document.querySelector('.switch-maps-button')) {
  const toggle = document.querySelector('.switch-maps-button .toggle');
  const lever = document.querySelector('.toggle-lever');
  const gpMap = document.querySelector('.hover-map');
  const fachMap = document.querySelector('.hover-map.fach');
  const activateGp = document.querySelector('.activate-gp');
  const activateSpecialists = document.querySelector('.activate-specialists');
  const zipSearchGp = document.querySelector('.search-gp');
  const zipSearchFach = document.querySelector('.search-fach');
  let toggled = false;
  activateGp.style.fontWeight = 'bold';
  const showSpecialists = () => {
    lever.classList.add('toggled');
    fachMap.classList.add('active');
    gpMap.classList.remove('active');
    zipSearchGp.classList.remove('active');
    zipSearchFach.classList.add('active');
    activateSpecialists.style.fontWeight = 'bold';
    activateGp.style.fontWeight = 'normal';
    toggled = true;
  }
  const showGps = () => {
    lever.classList.remove('toggled');
    fachMap.classList.remove('active');
    gpMap.classList.add('active');
    zipSearchGp.classList.add('active');
    zipSearchFach.classList.remove('active');
    activateGp.style.fontWeight = 'bold';
    activateSpecialists.style.fontWeight = 'normal';
    toggled = false;
  }

  toggle.addEventListener('click', function() {
    if(!toggled) {
      showSpecialists();
    } else {
      showGps();
    }
  })
  activateGp.addEventListener('click', function() {
    showGps();
  })
  activateSpecialists.addEventListener('click', function() {
    showSpecialists();
  })
}




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



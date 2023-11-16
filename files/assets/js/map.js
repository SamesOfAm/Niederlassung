if(document.querySelector('.mappoint')) {
  const allMapPoints = document.querySelectorAll('.mappoint-icon');
  const allCloseIcons = document.querySelectorAll('.mappoint-close');

  const closeInfoBoxes = () => {
    allMapPoints.forEach(point => {
      point.parentElement.querySelector('.mappoint-inside').classList.remove('showing');
    })
  }

  allCloseIcons.forEach(icon => {
    icon.addEventListener('click', closeInfoBoxes);
  })

  allMapPoints.forEach(point => {
    point.addEventListener('click', function(){
      const info = point.parentElement.querySelector('.mappoint-inside');
      console.log(info);
      closeInfoBoxes();
      info.classList.add('showing');
    })
  })
}



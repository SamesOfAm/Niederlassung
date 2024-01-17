if(document.querySelector('.event-filter')) {
  const allEvents = document.querySelectorAll('.event');
  const allFilters = document.querySelectorAll('.filter-category li');
  const resetButton = document.querySelector('.reset-filter a');

  const startFilter = (category,keyword) => {
    allEvents.forEach(event => {
      fadeOut(event, 250);
      if(event.querySelector(category) && event.querySelector(category).innerHTML.includes(keyword)) {
        fadeOutAndIn(event, 250);
      }
    })
  }


  allFilters.forEach(filter => {
    filter.addEventListener('click', function() {

      allFilters.forEach(filter => {
        filter.classList.remove('active');
      });
      filter.classList.add('active');

      switch(filter.dataset.filter) {
        case 'students':
            startFilter('.target-group','Medizinstudierende');
          break;
        case 'contract':
          startFilter('.target-group','Vertragsärzte');
          break;
        case 'staff':
          startFilter('.target-group','Praxispersonal');
          break;
        case 'future':
          startFilter('h2 a','Doctors Future');
          break;
        case 'operation':
          startFilter('h2 a','Operation Karriere');
          break;
        case 'championship':
          startFilter('h2 a','Medimeisterschaften');
          break;
        case 'ball':
          startFilter('h2 a','Klinikerball');
          break;
        case 'leipzig':
          startFilter('.location','Leipzig');
          break;
        case 'berlin':
          startFilter('.location','Berlin');
          break;
        case 'jena':
          startFilter('.location','Jena');
          break;
        case 'frankfurt':
          startFilter('.location','Frankfurt');
          break;
        default:
      }
    })
  })

  const resetFilter = () => {
    allEvents.forEach(event => {
      // event.style.display = "flex";
      fadeOutAndIn(event, 250);
    })
    allFilters.forEach(filter => {
      filter.classList.remove('active');
    })
  }

  resetButton.addEventListener('click', function(event) {
    event.preventDefault();
    resetFilter();
  })
}

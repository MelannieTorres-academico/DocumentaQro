var search = instantsearch({
  // Replace with your own values
  appId: 'X253FTY2KE',
  apiKey: '74ff9a6e947f62c825298ffee01a228b', // search only API key, no ADMIN key
  indexName: 'datasheets',
  urlSync: true
});

search.addWidget(
  instantsearch.widgets.searchBox({
    container: '#search-input',
    placeholder: 'Buscar por título, país o año'
  })
);

search.addWidget(
  instantsearch.widgets.hits({
    container: '#hits',
    hitsPerPage: 10,
    templates: {
      item: getTemplate('hit'),
      empty: getTemplate('no-results')
    }
  })
);


search.addWidget(
  instantsearch.widgets.stats({
    container: '#stats'
  })
);



search.addWidget(
  instantsearch.widgets.pagination({
    container: '#pagination'
  })
);

// Filter on status
search.addWidget(
  instantsearch.widgets.refinementList({
    container: '#status',
    attributeName: 'status',

    limit: 4,

    sortBy: ['isRefined', 'count:desc', 'name:asc'],
    operator: 'or',
    templates: {
      header: '<h5>Status</h5>'
    }
  })
);

// Filter on the price
search.addWidget(
  instantsearch.widgets.rangeSlider({
    container: '#costo',
    attributeName: 'costo',
    templates: {
      header: '<h5>Precio</h5><tr>'
    }
  })
);

// filter duracion
search.addWidget(
  instantsearch.widgets.rangeSlider({
    container: '#duracion',
    attributeName: 'duracion',
    templates: {
      header: '<h5>Duración</h5><tr>'
    }
  })
);

search.addWidget(
  instantsearch.widgets.refinementList({
    container: '#subtitulos',
    attributeName: 'subtitulos',

    limit: 2,
    sortBy: ['isRefined', 'count:desc', 'name:asc'],
    operator: 'or',
    templates: {
      header: '<h5>Subtitulos</h5><tr>'
    }
  })
);

search.addWidget(
  instantsearch.widgets.refinementList({
    container: '#programa',
    attributeName: 'programa',
    limit: 10,
    sortBy: ['isRefined', 'count:desc', 'name:asc'],
    operator: 'or',
    templates: {
      header: '<h5>Programa</h5>'
    }
  })
);

search.start();

function getTemplate(templateName) {
  return document.getElementById(templateName + '-template').innerHTML;
}




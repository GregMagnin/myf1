// Récupération des données XML
let driverButton = document.getElementById('driverRankButton')
let constructorButton = document.getElementById('constructorRankButton')

const requestOptions = {
	method: 'GET',
	redirect: 'follow'
  };


  let tableDriver;
  let tableConstructor;
  
  driverButton.addEventListener('click', (event) => {
	fetch("http://ergast.com/api/f1/2023/driverStandings", requestOptions)
	  .then(response => response.text())
	  .then(data => {
		// Analyse du XML et extraction des informations souhaitées
		const parser = new DOMParser();
		const xmlDoc = parser.parseFromString(data, 'text/xml');
		const drivers = xmlDoc.getElementsByTagName('DriverStanding');
		const tableDriverData = [];
		for (let i = 0; i < drivers.length; i++) {
		  const position = drivers[i].getAttribute('position');
		  const name = drivers[i].getElementsByTagName('GivenName')[0].textContent + ' ' + drivers[i].getElementsByTagName('FamilyName')[0].textContent;
		  const team = drivers[i].getElementsByTagName('Constructor')[0].getElementsByTagName('Name')[0].textContent;
		  const points = drivers[i].getAttribute('points');
		  tableDriverData.push([position, name, team, points]);
		}
  
		// Génération du tableau HTML
		tableDriver = document.createElement('table');
		const headerRow = document.createElement('tr');
		const headers = ['Position', 'Pilote', 'Écurie', 'Points'];
		for (let i = 0; i < headers.length; i++) {
		  const headerCell = document.createElement('th');
		  headerCell.textContent = headers[i];
		  headerRow.appendChild(headerCell);
		}
		tableDriver.appendChild(headerRow);
		for (let i = 0; i < tableDriverData.length; i++) {
		  const row = document.createElement('tr');
		  for (let j = 0; j < tableDriverData[i].length; j++) {
			const cell = document.createElement('td');
			cell.textContent = tableDriverData[i][j];
			row.appendChild(cell);
		  }
		  tableDriver.appendChild(row);
		}
  
		// Ajout du tableau HTML à la page
		const rankingElement = document.getElementById('ranking');
		if (tableConstructor) {
		  rankingElement.removeChild(tableConstructor);
		}
		rankingElement.appendChild(tableDriver);
	  })
	  .catch(error => console.error(error));
  });

  constructorButton.addEventListener('click', (event) => {
	fetch("http://ergast.com/api/f1/current/constructorStandings", requestOptions)
	.then(response => response.text())
	.then(data => {
	  const parser = new DOMParser();
	  const xmlDoc = parser.parseFromString(data, 'text/xml');
	  const constructors = xmlDoc.getElementsByTagName('ConstructorStanding');
	  const tableConstructorData = [];
	  
	  for (let i = 0; i < constructors.length; i++) {
		const position = constructors[i].getAttribute('position');
		const team = constructors[i].getElementsByTagName('Constructor')[0].getElementsByTagName('Name')[0].textContent;
		const points = constructors[i].getAttribute('points');
		const wins = constructors[i].getAttribute('wins');
		tableConstructorData.push([position, team, points, wins]);
	  }
	  
	  tableConstructor = document.createElement('table');
	  const headerRow = document.createElement('tr');
	  const headers = ['Position', 'Constructeur', 'Points', 'Victoires'];
	  
	  for (let i = 0; i < headers.length; i++) {
		const headerCell = document.createElement('th');
		headerCell.textContent = headers[i];
		headerRow.appendChild(headerCell);
	  }
	  
	  tableConstructor.appendChild(headerRow);
	  
	  for (let i = 0; i < tableConstructorData.length; i++) {
		const row = document.createElement('tr');
		
		for (let j = 0; j < tableConstructorData[i].length; j++) {
		  const cell = document.createElement('td');
		  cell.textContent = tableConstructorData[i][j];
		  
		  if (j === 1) {
			cell.style.fontWeight = 'bold';
		  }
		  
		  row.appendChild(cell);
		}
		
		tableConstructor.appendChild(row);
	  }
	  const rankingElement = document.getElementById('ranking');
	  if (tableDriver) {
		rankingElement.removeChild(tableDriver);
	  }
	  rankingElement.appendChild(tableConstructor);
	})
	.catch(error => console.error(error));
  });
		


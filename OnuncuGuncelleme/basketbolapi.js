const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'free-nba.p.rapidapi.com',
		'X-RapidAPI-Key': '2f7383e249mshac7c6174b93956fp1577bejsn4b5f188eaa8d'
	}
};

fetch('https://free-nba.p.rapidapi.com/players?page=0&per_page=25&search=Michael%20Jordan', options)
	.then(response => response.json())
	.then(response => {
  document.getElementById('isim').innerHTML=(response.data[0].first_name);
  document.getElementById('soyisim').innerHTML=(response.data[0].last_name);
  document.getElementById('takim').innerHTML=(response.data[0].team.full_name);
  document.getElementById('konferans').innerHTML=(response.data[0].team.conference);
  document.getElementById('division').innerHTML=(response.data[0].team.division);
  document.getElementById('takiminsehri').innerHTML=(response.data[0].team.city);
})
	.catch(err => console.error(err));
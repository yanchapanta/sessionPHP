;((c, d) => {
	c.log('click')
	let searchIconMenu = d.getElementById('searchIconMenu')
	let btnBuscarClick = d.getElementById('btnBuscarClick')
	btnBuscarClick.addEventListener('click', (e) => {
		console.log('has hecho clixck')
		searchIconMenu.classList.toggle('is-active')
	})

	// d.addEventListener('click', (e) => {
	// 	if (!e.target.matches('.menu a')) return false;
	// 	searchIconMenu.classList.remove('is-active');

	// });
})(console, document)

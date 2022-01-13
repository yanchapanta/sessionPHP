;((c, d) => {
	c.log('click')
	let searchIconMenu = d.getElementById('searchIconMenu')
	let btnBuscarClick = d.getElementById('btnBuscarClick')
	btnBuscarClick.addEventListener('click', (e) => {
		searchIconMenu.classList.toggle('is-active')
	})
})(console, document)
;((c, d) => {
	let galleryImageCaja = d.querySelector('.gallery-image-caja') //click
	let gIC = d.querySelector('.gallery-image-caja .mostrar')

	var hijos = document.querySelectorAll(
		'.gallery-image-grid > .gallery-image-caja'
	)
	for (unHijo of hijos) {
		unHijo.addEventListener('click', function (evt) {
			let hijo = evt.target
			console.log('Se hizo click en', hijo)
			console.log('Se hizo click en', hijo.id)
			let idU = hijo.id
			console.log('tIPO: ', typeof hijo.id)
			let hijoUnico = document.getElementById(idU)
			c.log('', hijoUnico)
			// c.log(
			// 	'Hijo unicoo',
			// 	hijoUnico.setAttribute('class', 'gallery-image-caja hhhh')
			// )
			hijoUnico.classList.toggle('hhhh')

			galleryImageCaja.addEventListener('click', (e) => {
				c.log('downloas')
				c.log(gIC)
			})
		})
	}
})(console, document)

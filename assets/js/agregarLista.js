function agregaFrutal(){
	const ul = document.getElementById('lista');
	const texto = 'Helado Frutal $36.00';
	const li = document.createElement('li');
	const p = document.createElement('p');
	p.textContent = texto;
	li.className += "list-group-item";
	li.appendChild(p);
	ul.appendChild(li);
}

function agregaMarino(){
	const ul = document.getElementById('lista');
	const texto = 'Helado Marino $25.00';
	const li = document.createElement('li');
	const p = document.createElement('p');
	p.textContent = texto;
	li.className += "list-group-item";
	li.appendChild(p);
	ul.appendChild(li);
}

function agregaFamiliar(){
	const ul = document.getElementById('lista');
	const texto = 'Helado Familiar $30.00';
	const li = document.createElement('li');
	const p = document.createElement('p');
	p.textContent = texto;
	li.className += "list-group-item";
	li.appendChild(p);
	ul.appendChild(li);
}

function agregaOreo(){
	const ul = document.getElementById('lista');
	const texto = 'Helado Oreo $25.00';
	const li = document.createElement('li');
	const p = document.createElement('p');
	p.textContent = texto;
	li.className += "list-group-item";
	li.appendChild(p);
	ul.appendChild(li);
}
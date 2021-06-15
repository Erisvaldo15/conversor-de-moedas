const converter = document.getElementById('converter');

function calcular () {

    const moeda = document.getElementById('moeda').value;
    const valor = document.getElementById('valor').value;
    const painel = document.getElementById('pnl');

    if(moeda !== '' && valor !== '') {

        let euro = 6.15;
        let dolar = 5.7;

        if (moeda == 'euro') {

        result = euro*valor;

        painel.innerHTML = `<div class="resultado"> ${result.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})} </div>`;

        }

        else if (moeda == 'dolar') {

        result = dolar*valor;

        painel.innerHTML = `<div class="resultado"> ${result.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})} </div>`;
        }
    }

    else {
        painel.innerHTML = `<div id="notvalue"> Preencha todos os campos! </div>`;
    } 
}

 function resetar () {

    document.getElementById('valor').value = '';

 }

converter.addEventListener('click', calcular);
limpar.addEventListener('click', resetar);

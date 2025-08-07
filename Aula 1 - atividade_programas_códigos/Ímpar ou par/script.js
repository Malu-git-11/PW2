function verificar() {
    const numero = document.getElementById('numero').value;
    const resultado = document.getElementById('resultado');

    if (numero === '') {
      resultado.textContent = 'Digite  um número.';
      return;
    }

    const n = parseInt(numero);

    if (isNaN(n)) {
      resultado.textContent = 'Valor inválido!';
    } else if (n % 2 === 0) {
      resultado.textContent = `O número ${n} é PAR.`;
    } else {
      resultado.textContent = `O número ${n} é ÍMPAR.`;
    }
  }
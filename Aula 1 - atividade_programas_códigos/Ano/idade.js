function calcularIdade() {
    const inputAno = document.getElementById("anoNascimento");
    const resultado = document.getElementById("resultado");
    const ano = parseInt(inputAno.value);

    if (isNaN(ano) || ano < 1900 || ano > new Date().getFullYear()) {
      resultado.textContent = "Por favor, insira um ano válido.";
      resultado.style.color = "red";
      return;
    }

    const anoAtual = new Date().getFullYear();
    const idade = anoAtual - ano;

    resultado.style.color = "#333";
    resultado.textContent = `Você tem aproximadamente ${idade} anos.`;
  }
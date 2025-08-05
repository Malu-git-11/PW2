function displayWelcomeMessage() {
    const userName = prompt("Por favor, insira seu nome:"); 
    const welcomeMessage = 
    document.getElementById("welcome-message");
    if (userName) {
    welcomeMessage.textContent = `Bem-vindo(a), ${userName}! 
    Esperamos que aproveite sua visita.`; 
    } else {
    welcomeMessage.textContent = `Bem-vindo(a)! Esperamos que 
    aproveite sua visita.`; 
    } 
    } window.onload = displayWelcomeMessage
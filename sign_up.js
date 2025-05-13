window.addEventListener("DOMContentLoaded", () => {
    const params = new URLSearchParams(window.location.search);
    const messageBox = document.getElementById("messageBox");

    if (!messageBox){
        return;
    }

    if (params.has('error')) {
        messageBox.textContent = params.get('error');
        messageBox.classList.remove('hidden');
        messageBox.classList.add('error');
    } else if (params.has('success')) {
        messageBox.textContent = params.get('success');
        messageBox.classList.remove('hidden');
        messageBox.classList.add('success');
    }

    if (!messageBox.classList.contains("hidden")) {
        setTimeout(() => {
            messageBox.style.display = "none";
        }, 5000); 
    }
});

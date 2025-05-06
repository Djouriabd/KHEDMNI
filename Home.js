document.getElementById("subscribe-btn").addEventListener("click", function() {
    let emailInput = document.getElementById("subscribe-email");
    let email = emailInput.value.trim();
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (email === "") {
        alert("Please enter your email!");
    } else if (!emailPattern.test(email)) {
        alert("Please enter a valid email address!");
    } else {
        alert("Subscription successful!");
        emailInput.value = "";
    }
});

document.getElementById("search-btn").addEventListener("click", function() {
    let jobInput = document.getElementById("job-title").value.trim();
    let locationInput = document.getElementById("job-location").value.trim();

    if (jobInput === "" || locationInput === "") {
        alert("Please enter both job title and location!");
    } else {
        alert(Searching for "${jobInput}" in "${locationInput}"...);
    }
});

document.getElementById("apply-btn").addEventListener("click", function() {
    alert("Application submitted successfully!");
});
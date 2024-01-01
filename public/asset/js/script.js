// Update last access time with real-time seconds
function updateLastAccess() {
    var lastAccessElement = document.getElementById("last-access-time");
    var now = new Date();
    var formattedDate = now.toLocaleString("en-US", {
        day: "numeric",
        month: "short",
        year: "numeric",
        hour: "numeric",
        minute: "numeric",
        second: "numeric",
        hour12: true,
    });
    lastAccessElement.textContent = formattedDate;
}

// Update every second
setInterval(updateLastAccess, 1000);

// Initial update
updateLastAccess();

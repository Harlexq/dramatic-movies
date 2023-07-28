function UsernameUpdate() {
    hideAllTabs();
    document.getElementById("updateUsername").style.display = "block";
}

function PictureUpdate() {
    hideAllTabs();
    document.getElementById("updateProfilePicture").style.display = "block";
}

function EmailUpdate() {
    hideAllTabs();
    document.getElementById("updateEmail").style.display = "block";
}

function PasswordUpdate() {
    hideAllTabs();
    document.getElementById("updatePassword").style.display = "block";
}

function SocialUpdate() {
    hideAllTabs();
    document.getElementById("updateSocial").style.display = "block";
}

function hideAllTabs() {
    var tabs = document.querySelectorAll(".profile-page-intr");
    tabs.forEach(tab => {
        tab.style.display = "none";
    });
}
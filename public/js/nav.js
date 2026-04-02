// MOBILE MENU
document.getElementById('menuBtn').addEventListener('click', () => {
    document.getElementById('mobileMenu').classList.toggle('hidden');
});

// PROFILE DROPDOWN
const profileBtn = document.getElementById('profileBtn');
const profileMenu = document.getElementById('profileMenu');

profileBtn.addEventListener('click', () => {
    profileMenu.classList.toggle('hidden');
});

// CLOSE WHEN CLICK OUTSIDE
window.addEventListener('click', (e) => {
    if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
        profileMenu.classList.add('hidden');
    }
});
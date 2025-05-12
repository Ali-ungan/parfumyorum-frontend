const modals = {
    login: document.getElementById('loginModal'),
    register: document.getElementById('registerModal'),
    password: document.getElementById('passwordEmail'),
};

const profileBtn = document.getElementById('profileBtn');
const mobileProfileBtn = document.getElementById('mobileProfileBtn');
const menuToggle = document.getElementById('menuToggle');
const mobileMenu = document.getElementById('mobileMenu');

function show(modal) {
    modal.classList.remove('opacity-0', 'invisible', 'pointer-events-none');
    const inner = modal.querySelector('[data-modal-inner]');
    requestAnimationFrame(() => {
        inner.classList.remove('scale-95', 'opacity-0');
        inner.classList.add('scale-100', 'opacity-100');
    });
}

function hide(modal) {
    const inner = modal.querySelector('[data-modal-inner]');
    inner.classList.remove('scale-100', 'opacity-100');
    inner.classList.add('scale-95', 'opacity-0');
    setTimeout(() => {
        modal.classList.add('opacity-0', 'invisible', 'pointer-events-none');
    }, 150);
}

profileBtn?.addEventListener('click', () => show(modals.login));
mobileProfileBtn?.addEventListener('click', () => {
    show(modals.login);
    mobileMenu?.classList.add('hidden');
});

document.getElementById('forgotPassword')?.addEventListener('click', () => {
    hide(modals.login);
    setTimeout(() => show(modals.password), 150);
});

document.getElementById('openRegister')?.addEventListener('click', () => {
    hide(modals.login);
    setTimeout(() => show(modals.register), 150);
});

document.querySelectorAll('.openLogin').forEach(btn =>
    btn.addEventListener('click', () => {
        hide(modals.password);
        hide(modals.register);
        setTimeout(() => show(modals.login), 150);
    })
);

Object.values(modals).forEach(modal => {
    modal.addEventListener('click', e => {
        if (e.target === modal) hide(modal);
    });
});

menuToggle?.addEventListener('click', () => {
    mobileMenu?.classList.toggle('hidden');
});

mobileMenu?.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => mobileMenu?.classList.add('hidden'));
});


document.querySelectorAll(".rating").forEach(function (el) {
    const rating = parseFloat(el.dataset.star) || 0;
    const rounded = Math.round(rating * 10) / 10;
    const fullStars = Math.floor(rounded);
    const hasHalf = rounded - fullStars >= 0.25 && rounded - fullStars < 0.75;
    const totalStars = 5;

    const wrapper = document.createElement("div");
    wrapper.className = "stars";

    for (let i = 0; i < totalStars; i++) {
        const svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        svg.setAttribute("viewBox", "0 0 24 24");

        const path = document.createElementNS("http://www.w3.org/2000/svg", "path");
        path.setAttribute("d", "M12 .587l3.668 7.431 8.2 1.151-5.934 5.787 1.4 8.174L12 18.896l-7.334 3.834 1.4-8.174L.132 9.169l8.2-1.151z");

        if (i < fullStars) {
            svg.classList.add("filled");
        } else if (i === fullStars && hasHalf) {
            svg.innerHTML = `
                    <defs>
                        <linearGradient id="half-gradient" x1="0" x2="100%" y1="0" y2="0">
                            <stop offset="50%" stop-color="#facc15"/>
                            <stop offset="50%" stop-color="#d1d5db"/>
                        </linearGradient>
                    </defs>
                    <path d="M12 .587l3.668 7.431 8.2 1.151-5.934 5.787 1.4 8.174L12 18.896l-7.334 3.834 1.4-8.174L.132 9.169l8.2-1.151z" fill="url(#half-gradient)"/>
                `;
        }

        svg.appendChild(path);
        wrapper.appendChild(svg);
    }

    el.innerHTML = "";
    el.appendChild(wrapper);

    const score = document.createElement("span");
    score.textContent = `(${rounded.toFixed(1)})`;
    el.appendChild(score);
});

const banner = document.getElementById('cookie-banner');
const acceptBtn = document.getElementById('cookie-accept');
const rejectBtn = document.getElementById('cookie-reject');

const consent = localStorage.getItem('cookie_consent');

if (consent !== 'accepted') {
    banner.style.display = 'block';
}

acceptBtn.addEventListener('click', () => {
    localStorage.setItem('cookie_consent', 'accepted');
    banner.style.display = 'none';
});

rejectBtn.addEventListener('click', () => {
    localStorage.removeItem('cookie_consent');
    banner.style.display = 'none';
});
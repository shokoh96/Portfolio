/* ============
  Mobile Menu
============= */
const menuBtn = document.getElementById("menuBtn");
const mobileMenu = document.getElementById("mobileMenu");

// モバイルメニューを展開
function openMenu() {
    mobileMenu.classList.add("is-open");
    mobileMenu.setAttribute("aria-hidden", "false");
    menuBtn.setAttribute("aria-expanded", "true");
    document.body.classList.add("no-scroll")
}

// モバイルメニューを閉じる
function closeMenu() {
    mobileMenu.classList.remove("is-open");
    mobileMenu.setAttribute("aria-hidden", "true");
    menuBtn.setAttribute("aria-expanded", "false");
    document.body.classList.remove("no-scroll");
}

// メニューボタンクリックで開閉を切り替え
menuBtn?.addEventListener("click", () => {
    const isOpen = mobileMenu.classList.contains("is-open");
    isOpen ? closeMenu() : openMenu();
});

// data-close クリックでメニューを閉じる
mobileMenu?.addEventListener("click", (e) => {
    const target = e.target;
    if (target?.dataset?.close == "true") closeMenu();
});

/* ============
  ScrollSpy
============= */
const navLinks = Array.from(document.querySelectorAll(".side-nav__link"));

// 監視するセクション取得
const sections = ["top", "works", "service", "flow", "about", "contact"]
    .map(id => document.getElementById(id))
    .filter(Boolean);

// 右ナビの active 切り替え
const io = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (!entry.isIntersecting) return;
        const id = entry.target.id;
        navLinks.forEach(a => {
            a.classList.toggle("is-active", a.getAttribute("href") === `#${id}`);
        });
    });
}, { rootMargin: "-40% 0px -55% 0px", threshold: 0.01 });

sections.forEach(s => io.observe(s));

/* ============
  Fade
============= */
// 画面内に入ったらフェードイン
const fadeObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add("in-view");
            fadeObserver.unobserve(entry.target);
        }
    });
}, { rootMargin: "-10% 0px" });

document.querySelectorAll(".js-fade").forEach(el => {
    fadeObserver.observe(el);
});

/* ============
  Form
============= */
// formタグに class を付与
document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('#mw_wp_form_mw-wp-form-6 form');
    if (form) form.classList.add('contact__form');
});

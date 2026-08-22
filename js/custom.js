(function () {
    'use strict';

    function initHeaderSearch() {
        var panel = document.getElementById('headerSearch');
        var openBtn = document.getElementById('searchToggle');
        var closeBtn = document.getElementById('searchClose');
        var input = document.getElementById('site-search');
        if (!panel || !openBtn) return;

        function openSearch() {
            panel.classList.add('is-open');
            setTimeout(function () {
                if (input) input.focus();
            }, 50);
        }

        function closeSearch() {
            panel.classList.remove('is-open');
        }

        openBtn.addEventListener('click', openSearch);
        if (closeBtn) closeBtn.addEventListener('click', closeSearch);
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeSearch();
        });
    }

    function initProductSlider() {
        var items = Array.prototype.slice.call(document.querySelectorAll('.slider-item'));
        if (!items.length) return;

        var cats = Array.prototype.slice.call(document.querySelectorAll('#sliderCats a'));
        var catItems = Array.prototype.slice.call(document.querySelectorAll('#sliderCats li'));
        var title = document.getElementById('sliderTitle');
        var prevBtn = document.querySelector('.slider-arrow-prev');
        var nextBtn = document.querySelector('.slider-arrow-next');
        var viewport = document.getElementById('flangeSlider');
        var total = items.length;
        var active = document.querySelector('.slider-item.is-active');
        var current = active ? parseInt(active.getAttribute('data-index'), 10) || 0 : 0;
        var names = cats.map(function (link) {
            return link.textContent.trim();
        });

        function wrap(i) {
            return (i + total) % total;
        }

        function render(index) {
            current = wrap(index);
            items.forEach(function (item, i) {
                item.className = 'slider-item';
                var offset = i - current;
                if (offset > total / 2) offset -= total;
                if (offset < -total / 2) offset += total;
                if (offset === 0) item.classList.add('is-active');
                else if (offset === -1) item.classList.add('is-prev');
                else if (offset === 1) item.classList.add('is-next');
                else if (offset === -2) item.classList.add('is-prev-2');
                else if (offset === 2) item.classList.add('is-next-2');
                else item.classList.add('is-far');
            });
            catItems.forEach(function (li, i) {
                li.classList.toggle('is-active', i === current);
            });
            if (title && names[current]) title.textContent = names[current];
        }

        if (prevBtn) prevBtn.addEventListener('click', function () { render(current - 1); });
        if (nextBtn) nextBtn.addEventListener('click', function () { render(current + 1); });
        cats.forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                render(parseInt(link.getAttribute('data-index'), 10));
            });
        });

        var startX = 0;
        if (viewport) {
            viewport.addEventListener('touchstart', function (e) {
                startX = e.changedTouches[0].clientX;
            }, { passive: true });
            viewport.addEventListener('touchend', function (e) {
                var dx = e.changedTouches[0].clientX - startX;
                if (Math.abs(dx) > 40) render(current + (dx < 0 ? 1 : -1));
            }, { passive: true });
        }

        render(current);
    }

    function initTabSlider(rootId) {
        var root = document.getElementById(rootId);
        if (!root) return;

        var tabs = Array.prototype.slice.call(root.querySelectorAll('[role="tablist"] [role="tab"]'));
        var slides = Array.prototype.slice.call(root.querySelectorAll('[role="tabpanel"]'));
        var dots = Array.prototype.slice.call(root.querySelectorAll('.lpw-brands-dots button, .flange-types-dots button'));
        var track = root.querySelector('.lpw-brands-track, .flange-types-track');
        var viewport = root.querySelector('.lpw-brands-viewport, .flange-types-viewport');
        var index = 0;
        var timer = null;
        var delay = 5500;
        var startX = 0;
        var deltaX = 0;
        var dragging = false;

        function goTo(next, user) {
            if (!slides.length || !track) return;
            index = (next + slides.length) % slides.length;
            track.style.transform = 'translateX(-' + (index * 100) + '%)';

            tabs.forEach(function (tab, i) {
                var on = i === index;
                tab.classList.toggle('is-active', on);
                tab.setAttribute('aria-selected', on ? 'true' : 'false');
                tab.tabIndex = on ? 0 : -1;
            });
            slides.forEach(function (slide, i) {
                var on = i === index;
                slide.classList.toggle('is-active', on);
                slide.setAttribute('aria-hidden', on ? 'false' : 'true');
            });
            dots.forEach(function (dot, i) {
                var on = i === index;
                dot.classList.toggle('is-active', on);
                if (on) dot.setAttribute('aria-current', 'true');
                else dot.removeAttribute('aria-current');
            });

            if (user && tabs[index]) {
                var list = tabs[index].parentElement;
                var target = tabs[index].offsetLeft - 24;
                if (list.scrollTo) list.scrollTo({ left: Math.max(0, target), behavior: 'smooth' });
            }
            if (user) restart();
        }

        function next() {
            goTo(index + 1, false);
        }

        function start() {
            stop();
            timer = setInterval(next, delay);
        }

        function stop() {
            if (timer) {
                clearInterval(timer);
                timer = null;
            }
        }

        function restart() {
            stop();
            start();
        }

        tabs.forEach(function (tab, i) {
            tab.addEventListener('click', function () { goTo(i, true); });
        });
        dots.forEach(function (dot, i) {
            dot.addEventListener('click', function () { goTo(i, true); });
        });

        root.addEventListener('mouseenter', stop);
        root.addEventListener('mouseleave', start);

        if (viewport) {
            viewport.addEventListener('pointerdown', function (e) {
                if (e.target.closest('a, button')) return;
                dragging = true;
                startX = e.clientX;
                deltaX = 0;
                track.style.transition = 'none';
                stop();
            });
        }

        window.addEventListener('pointermove', function (e) {
            if (!dragging) return;
            deltaX = e.clientX - startX;
            track.style.transform = 'translateX(calc(' + (-index * 100) + '% + ' + deltaX + 'px))';
        });
        window.addEventListener('pointerup', function () {
            if (!dragging) return;
            dragging = false;
            track.style.transition = '';
            if (Math.abs(deltaX) > 60) {
                goTo(index + (deltaX < 0 ? 1 : -1), true);
            } else {
                goTo(index, true);
            }
        });

        goTo(0, false);
        start();
    }

    document.addEventListener('DOMContentLoaded', function () {
        initHeaderSearch();
        initProductSlider();
        initTabSlider('lpw-brands');
        initTabSlider('flange-types');
        initMobileNav();
        initCookieConsent();
    });

    function initCookieConsent() {
        var banner = document.getElementById('cookieConsent');
        if (!banner) return;

        var STORAGE_KEY = 'wf_cookie_consent';
        var COOKIE_NAME = 'wf_cookie_consent';
        var TTL_MS = 24 * 60 * 60 * 1000;

        function readCookie(name) {
            var match = document.cookie.match(new RegExp('(?:^|; )' + name.replace(/([.$?*|{}()[\]\\/+^])/g, '\\$1') + '=([^;]*)'));
            return match ? decodeURIComponent(match[1]) : '';
        }

        function writeCookie(name, value, maxAgeSeconds) {
            document.cookie = name + '=' + encodeURIComponent(value) + '; path=/; max-age=' + maxAgeSeconds + '; SameSite=Lax';
        }

        function getConsent() {
            try {
                var raw = localStorage.getItem(STORAGE_KEY);
                if (raw) {
                    var data = JSON.parse(raw);
                    if (data && data.choice && data.ts && (Date.now() - data.ts) < TTL_MS) {
                        return data.choice;
                    }
                    localStorage.removeItem(STORAGE_KEY);
                }
            } catch (e) {
                /* ignore storage errors */
            }

            var cookieChoice = readCookie(COOKIE_NAME);
            if (cookieChoice === 'accepted' || cookieChoice === 'declined') {
                return cookieChoice;
            }
            return null;
        }

        function setConsent(choice) {
            try {
                localStorage.setItem(STORAGE_KEY, JSON.stringify({
                    choice: choice,
                    ts: Date.now()
                }));
            } catch (e) {
                /* ignore storage errors */
            }
            writeCookie(COOKIE_NAME, choice, 86400);
            hideBanner();
        }

        function hideBanner() {
            banner.hidden = true;
            banner.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('cookie-banner-visible');
        }

        function showBanner() {
            banner.hidden = false;
            banner.removeAttribute('aria-hidden');
            document.body.classList.add('cookie-banner-visible');
        }

        if (getConsent()) {
            hideBanner();
            return;
        }

        showBanner();

        var acceptBtn = document.getElementById('cookieAccept');
        var cancelBtn = document.getElementById('cookieCancel');
        if (acceptBtn) {
            acceptBtn.addEventListener('click', function () {
                setConsent('accepted');
            });
        }
        if (cancelBtn) {
            cancelBtn.addEventListener('click', function () {
                setConsent('declined');
            });
        }
    }

    function initMobileNav() {
        var nav = document.getElementById('mainNav');
        var toggle = document.getElementById('navToggle');
        var closeBtn = document.getElementById('navClose');
        var backdrop = document.getElementById('navBackdrop');
        if (!nav || !toggle) return;

        var mq = window.matchMedia('(max-width: 991.98px)');

        function isMobile() {
            return mq.matches;
        }

        function closeAccordions() {
            nav.querySelectorAll('.dropdown.is-open').forEach(function (item) {
                item.classList.remove('is-open');
                var link = item.querySelector(':scope > .nav-link');
                if (link) link.setAttribute('aria-expanded', 'false');
            });
        }

        function closeNav() {
            document.body.classList.remove('nav-open');
            toggle.setAttribute('aria-expanded', 'false');
            if (backdrop) backdrop.hidden = true;
            closeAccordions();
        }

        function openNav() {
            document.body.classList.add('nav-open');
            toggle.setAttribute('aria-expanded', 'true');
            if (backdrop) backdrop.hidden = false;
        }

        toggle.addEventListener('click', function () {
            if (!isMobile()) return;
            if (document.body.classList.contains('nav-open')) closeNav();
            else openNav();
        });

        if (closeBtn) closeBtn.addEventListener('click', closeNav);
        if (backdrop) backdrop.addEventListener('click', closeNav);

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') closeNav();
        });

        nav.querySelectorAll('.dropdown > .nav-link').forEach(function (link) {
            link.addEventListener('click', function (e) {
                if (!isMobile()) return;
                e.preventDefault();
                var item = link.parentElement;
                var wasOpen = item.classList.contains('is-open');
                closeAccordions();
                if (!wasOpen) {
                    item.classList.add('is-open');
                    link.setAttribute('aria-expanded', 'true');
                }
            });
        });

        if (mq.addEventListener) {
            mq.addEventListener('change', function () {
                if (!isMobile()) closeNav();
            });
        }
    }
})();

<?php
$headerNav = [
    ['label' => 'About', 'items' => [
        ['Introduction', 'introduction'], ['Objectives', 'objective'], ['Activities', 'activities'],
        ['Action Plan', 'action-plan'], ['SMEs in India', 'about-msme-in-india'],
        ['Scope in Indian SMEs', 'scope-in-SMEs'], ['Challenges to SMEs', 'challenges-to-sme-sector'],
    ]],
    ['label' => 'Team', 'href' => 'people'],
    ['label' => 'Services', 'items' => [
        ['Indian SMEs', 'services-india'], ['Overseas SMEs', 'services-overseas'],
    ]],
    ['label' => 'Membership', 'href' => 'membership'],
    ['label' => 'Events', 'items' => [
        ['Forthcoming Events', 'event'], ['Supported Exhibitions', 'support'],
        ['Enquiry for Stall Booking', 'stall_booking'], ['Past Events', 'past-event'],
        ['Live Webinar', 'live'], ['Past Webinars', 'past-webinars'],
    ]],
    ['label' => 'Initiatives', 'items' => [
        ['Initiatives', 'index#initiatives'], ['Divisions', 'index#Divisions'],
        ['International Divisions', 'International-Divisions'], ['National SME Manufacturing Mission', 'NSMM'],
        ['Invest in Indian SMEs', 'Invest_in_Indian_SMEs'], ['SME Export Promotion Facilitation Centre', 'SEPFC'],
        ['SME Electronic Products Export Promotion Council', 'SME_ELECTRONIC'],
        ['India SME Leadership Council', 'sme-leadership-council'], ['Entrepreneurship Development Council', 'EDC'],
        ['Entrepreneurial Leadership Dialogue', 'ELD'], ['SME Connect Magazine', 'sme-connect-magazine'],
        ['CFO and Financial Advisory Council for SMEs', 'CFO_&_FINANCIAL_ADVISORY_COUNCIL'],
    ]],
    ['label' => 'Awards', 'items' => [
        ['About Awards', 'awards'],
        ['Apply Now', 'https://indiasmeawards.com/sme-awards/awards-nomination.php', true],
    ]],
    ['label' => 'Gallery', 'items' => [['Photos', 'gallery'], ['Videos', 'videos']]],
];
?>

<style>
/* Keep desktop as the default; collapse only on an actual mobile viewport. */
#header { z-index: 9999 !important; overflow: visible !important; }
#header .header-main, #header .header-main-inner { overflow: visible !important; }
#header .header-top-inner { justify-content: space-between; }
#header .desktop-utility, #header .desktop-social { display: flex; }
#header .whatsapp-mobile-label { display: none; }
#header .whatsapp-desktop-label { display: inline; }
#header-menu-toggle { display: none; }
#header .drawer-header, #header .mobile-nav-extra, #header-menu-backdrop { display: none; }
#primary-header-nav { position: static; display: block; max-height: none; overflow: visible; background: transparent; box-shadow: none; }
#primary-header-nav > ul { flex-direction: row; align-items: center; gap: 4px; }
#primary-header-nav .header-nav-item { border: 0; }
#primary-header-nav .header-submenu-toggle { width: auto; padding: 20px 16px; font-size: 16px; }
#primary-header-nav .header-main-link { padding: 20px 16px; font-size: 16px; }
#primary-header-nav .header-submenu { position: absolute; left: 0; top: 100%; z-index: 9999; min-width: 256px; overflow: hidden !important; border: 1px solid #e2e8f0 !important; border-radius: 8px; background: #fff !important; background-color: #fff !important; padding: 6px 0 !important; isolation: isolate; box-shadow: 0 18px 38px rgba(15,23,42,.2); }
#primary-header-nav .header-submenu li { position: static !important; display: block !important; float: none !important; width: 100% !important; height: auto !important; margin: 0 !important; padding: 0 !important; border-bottom: 1px solid #eef2f7 !important; background: #fff !important; background-color: #fff !important; }
#primary-header-nav .header-submenu li:last-child { border-bottom: 0 !important; }
#primary-header-nav .header-submenu li a { position: static !important; display: block !important; width: 100% !important; height: auto !important; padding: 10px 20px !important; color: #334155 !important; font-size: 14px !important; line-height: 20px !important; text-align: left !important; text-indent: 0 !important; opacity: 1 !important; visibility: visible !important; }
#primary-header-nav .header-submenu li a:hover { background: #f0f9ff !important; color: #0877bd !important; }
#primary-header-nav .header-nav-item:hover > .header-submenu,
#primary-header-nav .header-nav-item.submenu-open > .header-submenu { display: block; }

@media (max-width: 767px) {
    #header .header-top-inner { justify-content: space-between; }
    #header .header-actions { flex: 1; justify-content: flex-start; gap: 8px; }
    #header .desktop-utility, #header .desktop-social { display: none; }
    #header .desktop-subscribe { display: none; }
    #header .whatsapp-mobile-label { display: inline; }
    #header .whatsapp-desktop-label { display: none; }
    #header-menu-toggle { display: inline-flex; }
    #header .header-main { background: url('images/header-bg.jpg') center/cover no-repeat; }
    #header .header-main-inner { min-height: 142px; justify-content: center; padding: 8px 0 14px; }
    #header .header-logo-link { width: min(330px, calc(100vw - 32px)); padding: 8px 14px 10px; border-radius: 0 0 5px 5px; background: #fff; box-shadow: inset 0 3px 3px rgba(0,0,0,.22), 0 12px 12px -10px rgba(0,0,0,.55); }
    #header .header-logo-link img { width: 100% !important; }
    #primary-header-nav { position: fixed !important; right: 0 !important; left: auto !important; top: 0 !important; bottom: 0 !important; z-index: 100; display: block; width: min(86vw, 350px); max-height: none; overflow-x: hidden; overflow-y: auto; border-radius: 0; background: #fff !important; box-shadow: -14px 0 35px rgba(0,0,0,.24); visibility: hidden; transform: translate3d(100%,0,0); transition: transform .3s ease, visibility .3s ease; }
    #primary-header-nav.mobile-menu-open { visibility: visible; transform: translate3d(0,0,0); }
    #header .drawer-header { position: sticky; top: 0; z-index: 2; display: flex; align-items: center; justify-content: space-between; padding: 13px 16px; background: linear-gradient(135deg, #0b5f7d 0%, #1e88e5 100%); color: #fff; font-size: 17px; font-weight: 700; }
    #header .drawer-close { display: inline-flex; width: 34px; height: 34px; align-items: center; justify-content: center; border-radius: 50%; background: rgba(255,255,255,.15); color: #fff; }
    #primary-header-nav > ul { flex-direction: column; align-items: stretch; gap: 0; }
    #primary-header-nav .header-nav-item { border-bottom: 1px solid #f1f5f9; }
    #primary-header-nav .header-submenu-toggle { width: 100%; padding: 12px 16px; font-size: 14px; }
    #primary-header-nav .header-main-link { padding: 12px 16px; font-size: 14px; }
    #primary-header-nav .header-submenu { position: static; min-width: 0; border: 0 !important; border-radius: 0; padding: 0 !important; background: #f8fafc !important; box-shadow: inset 4px 0 0 #1689c4; }
    #primary-header-nav .header-submenu li { border-bottom: 1px solid #e2e8f0 !important; background: #f8fafc !important; }
    #primary-header-nav .header-submenu li a { padding: 11px 22px 11px 28px !important; color: #334155 !important; }
    #primary-header-nav .header-nav-item:hover > .header-submenu { display: none; }
    #primary-header-nav .header-nav-item.submenu-open > .header-submenu { display: block; }
    #header .mobile-nav-extra { display: block; }
    #header .mobile-subscribe { display: block; margin: 8px 16px 12px; border-radius: 7px; background: #dc2626; padding: 10px 16px; color: #fff !important; text-align: center; font-weight: 700; }
    #header .mobile-social-icons { display: flex; align-items: center; justify-content: center; gap: 18px; padding: 4px 16px 22px; }
    #header .mobile-social-icons a { color: #0b5f7d !important; font-size: 19px; }
    #header-menu-backdrop { position: fixed; inset: 0; z-index: 90; display: block; border: 0; background: rgba(15,23,42,.5); opacity: 0; visibility: hidden; transition: opacity .3s ease, visibility .3s ease; }
    #header-menu-backdrop.menu-backdrop-open { opacity: 1; visibility: visible; }
}
</style>

<header id="header" class="relative z-50 !float-none !w-full !bg-white !bg-none font-sans shadow-sm">
    <!-- Desktop utility links are hidden on mobile as requested. -->
    <div class="!bg-[linear-gradient(135deg,#0b5f7d_0%,#1e88e5_100%)] text-white">
        <div class="header-top-inner mx-auto flex min-h-9 w-full max-w-[1420px] items-center px-4 py-1 sm:px-6 lg:px-8">
            <nav aria-label="Utility navigation" class="desktop-utility items-center text-sm font-semibold">
                <a href="https://www.smechamberofindia.com/" class="border-r border-white/50 px-4 !text-white hover:!text-yellow-300">Home</a>
                <a href="contact-us" class="border-r border-white/50 px-4 !text-white hover:!text-yellow-300">Contact</a>
                <a href="Disclaimer" class="px-4 !text-white hover:!text-yellow-300">Disclaimer</a>
            </nav>

            <div class="header-actions flex flex-wrap items-center justify-center gap-x-3 gap-y-1 text-xs font-semibold sm:text-sm">
                <a href="press_release" class="inline-flex items-center gap-1.5 !text-white hover:!text-yellow-300">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    <span>Press Release</span>
                </a>
                <a href="https://wa.me/918291879068?text=Hi, Please Join me to SME Chamber Whatsapp Group." target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 !text-white hover:!text-yellow-300">
                    <i class="fa fa-whatsapp text-base" aria-hidden="true"></i>
                    <span class="whatsapp-mobile-label">Join</span>
                    <span class="whatsapp-desktop-label">Join WhatsApp Group</span>
                </a>

                <div class="desktop-social items-center gap-2" aria-label="Social media links">
                    <a href="https://www.facebook.com/smechamber/" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="!text-white hover:!text-yellow-300"><i class="fa fa-facebook-square"></i></a>
                    <a href="https://www.linkedin.com/company/sme-chamber-of-india" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="!text-white hover:!text-yellow-300"><i class="fa fa-linkedin-square"></i></a>
                    <a href="https://twitter.com/smechamber" target="_blank" rel="noopener noreferrer" aria-label="X" class="font-bold !text-white hover:!text-yellow-300">X</a>
                    <a href="https://www.youtube.com/channel/UCviAxNg24ssgZTmkVQ6V6Bg" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="!text-white hover:!text-yellow-300"><i class="fa fa-youtube-play"></i></a>
                </div>

                <a href="new-newsletter/subscribe-newsletter.php" class="desktop-subscribe rounded !bg-red-600 px-2.5 py-1 !text-white shadow-sm hover:!bg-red-700 hover:!text-white">Subscribe</a>
            </div>

            <button id="header-menu-toggle" type="button" class="h-9 w-9 shrink-0 items-center justify-center rounded-md !bg-white/15 !text-white" aria-controls="primary-header-nav" aria-expanded="false">
                <span class="sr-only">Open navigation menu</span>
                <i class="fa fa-bars text-lg" aria-hidden="true"></i>
            </button>
        </div>
    </div>

    <div class="header-main mx-auto w-full max-w-[1420px] px-4 sm:px-6 lg:px-8">
        <div class="header-main-inner flex min-h-28 items-center justify-between gap-5 py-3 lg:min-h-[118px] lg:py-0">
            <a href="https://www.smechamberofindia.com/" class="header-logo-link block shrink-0" aria-label="SME Chamber of India home">
                <img src="images/SME_LOGO.svg" alt="SME Chamber of India" class="h-auto w-[190px] object-contain sm:w-[220px] lg:w-[230px]">
            </a>

            <nav id="primary-header-nav" aria-label="Main navigation">
                <div class="drawer-header">
                    <span>Menu</span>
                    <button id="drawer-close" type="button" class="drawer-close" aria-label="Close navigation menu"><i class="fa fa-times" aria-hidden="true"></i></button>
                </div>
                <ul class="!m-0 flex !list-none flex-col !p-0 lg:flex-row lg:items-center lg:gap-1">
                    <?php foreach ($headerNav as $navItem): ?>
                        <li class="header-nav-item group relative border-b border-slate-100 last:border-0 lg:border-0">
                            <?php if (!empty($navItem['items'])): ?>
                                <button type="button" class="header-submenu-toggle flex w-full items-center justify-between gap-2 !bg-transparent px-4 py-3 text-left text-sm font-semibold !text-[#25257f] hover:!text-[#0877bd] lg:w-auto lg:px-4 lg:py-5 lg:text-base" aria-expanded="false">
                                    <span><?= htmlspecialchars($navItem['label']) ?></span>
                                    <i class="fa fa-angle-down text-xs transition-transform" aria-hidden="true"></i>
                                </button>
                                <ul class="header-submenu !m-0 hidden !list-none !p-0 lg:absolute lg:left-0 lg:top-full lg:z-50 lg:min-w-64 lg:rounded-lg lg:bg-white lg:py-2 lg:shadow-xl lg:group-hover:block" style="background-color:#fff;">
                                    <?php foreach ($navItem['items'] as $subItem): ?>
                                        <li style="background-color:#fff;">
                                            <a href="<?= htmlspecialchars($subItem[1]) ?>" <?= !empty($subItem[2]) ? 'target="_blank" rel="noopener noreferrer"' : '' ?> class="block px-6 py-2.5 text-sm !text-slate-700 hover:!bg-sky-50 hover:!text-[#0877bd] lg:px-5">
                                                <?= htmlspecialchars($subItem[0]) ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <a href="<?= htmlspecialchars($navItem['href']) ?>" class="header-main-link block font-semibold !text-[#25257f] hover:!text-[#0877bd]">
                                    <?= htmlspecialchars($navItem['label']) ?>
                                </a>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                    <li class="p-3 lg:ml-4 lg:p-0">
                        <a href="index#joinus" class="block rounded-xl !bg-yellow-400 px-7 py-3 text-center text-sm font-bold !text-slate-950 transition hover:!bg-yellow-300 hover:!text-slate-950 lg:px-8 lg:py-4 lg:text-base">Join Us</a>
                    </li>
                    <li class="mobile-nav-extra">
                        <a href="new-newsletter/subscribe-newsletter.php" class="mobile-subscribe">Subscribe</a>
                        <div class="mobile-social-icons" aria-label="Social media links">
                            <a href="https://www.facebook.com/smechamber/" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa fa-facebook-square"></i></a>
                            <a href="https://www.linkedin.com/company/sme-chamber-of-india" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="fa fa-linkedin-square"></i></a>
                            <a href="https://twitter.com/smechamber" target="_blank" rel="noopener noreferrer" aria-label="X" class="font-bold">X</a>
                            <a href="https://www.youtube.com/channel/UCviAxNg24ssgZTmkVQ6V6Bg" target="_blank" rel="noopener noreferrer" aria-label="YouTube"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <button id="header-menu-backdrop" type="button" aria-label="Close navigation menu"></button>
</header>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('header-menu-toggle');
    const nav = document.getElementById('primary-header-nav');
    const closeButton = document.getElementById('drawer-close');
    const backdrop = document.getElementById('header-menu-backdrop');

    function setMobileMenu(open) {
        if (!nav || !toggle) return;
        nav.classList.toggle('mobile-menu-open', open);
        if (backdrop) backdrop.classList.toggle('menu-backdrop-open', open);
        toggle.setAttribute('aria-expanded', String(open));
        document.body.style.overflow = open ? 'hidden' : '';
        const icon = toggle.querySelector('i');
        if (icon) icon.className = 'fa fa-bars text-lg';
    }

    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            setMobileMenu(!nav.classList.contains('mobile-menu-open'));
        });
    }
    if (closeButton) closeButton.addEventListener('click', function () { setMobileMenu(false); });
    if (backdrop) backdrop.addEventListener('click', function () { setMobileMenu(false); });

    function closeSubmenu(item) {
        if (!item) return;
        item.classList.remove('submenu-open');
        const submenu = item.querySelector(':scope > .header-submenu');
        const submenuToggle = item.querySelector(':scope > .header-submenu-toggle');
        if (submenu) {
            submenu.style.display = 'none';
            submenu.style.position = '';
            submenu.style.top = '';
            submenu.style.left = '';
            submenu.style.width = '';
            submenu.style.maxHeight = '';
            submenu.style.overflowY = '';
        }
        if (submenuToggle) {
            submenuToggle.setAttribute('aria-expanded', 'false');
            const icon = submenuToggle.querySelector('i');
            if (icon) icon.classList.remove('rotate-180');
        }
    }

    document.querySelectorAll('.header-submenu-toggle').forEach(function (submenuToggle) {
        submenuToggle.addEventListener('click', function () {
            const item = submenuToggle.closest('.header-nav-item');
            const submenu = item.querySelector(':scope > .header-submenu');
            const wasOpen = item.classList.contains('submenu-open');

            document.querySelectorAll('.header-nav-item.submenu-open').forEach(function (openItem) {
                closeSubmenu(openItem);
            });

            if (wasOpen || !submenu) return;
            item.classList.add('submenu-open');
            submenuToggle.setAttribute('aria-expanded', 'true');
            const icon = submenuToggle.querySelector('i');
            if (icon) icon.classList.add('rotate-180');

            submenu.style.display = 'block';
            submenu.style.backgroundColor = '#fff';
            submenu.style.zIndex = '100000';

            if (window.innerWidth >= 768) {
                const rect = submenuToggle.getBoundingClientRect();
                const menuWidth = 300;
                submenu.style.position = 'fixed';
                submenu.style.top = Math.round(rect.bottom) + 'px';
                submenu.style.left = Math.max(12, Math.min(rect.left, window.innerWidth - menuWidth - 12)) + 'px';
                submenu.style.width = menuWidth + 'px';
                submenu.style.maxHeight = Math.max(220, window.innerHeight - rect.bottom - 16) + 'px';
                submenu.style.overflowY = 'auto';
            } else {
                submenu.style.position = 'static';
                submenu.style.width = '100%';
                submenu.style.maxHeight = 'none';
                submenu.style.overflowY = 'visible';
            }
        });
    });

    document.addEventListener('click', function (event) {
        if (event.target.closest('.header-nav-item')) return;
        document.querySelectorAll('.header-nav-item.submenu-open').forEach(function (item) {
            closeSubmenu(item);
        });
    });

    window.addEventListener('resize', function () {
        if (window.innerWidth >= 768 && nav) {
            setMobileMenu(false);
            document.querySelectorAll('.header-nav-item.submenu-open').forEach(function (item) {
                closeSubmenu(item);
            });
        }
    });
});
</script>

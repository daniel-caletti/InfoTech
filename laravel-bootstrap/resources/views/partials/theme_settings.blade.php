<div class="offcanvas offcanvas-end bg-white" data-bs-scroll="true" data-bs-backdrop="true" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
    <div class="offcanvas-header bg-body-bg py-3 px-4">
        <h5 class="offcanvas-title fs-18" id="offcanvasScrollingLabel">Theme Settings</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-4">
        <div class="mb-4 pb-2">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">RTL / LTR</h4>
            <div class="settings-btn rtl-btn">
                <label id="switch" class="switch">
                    <input type="checkbox" onchange="toggleTheme()" id="slider">
                    <span class="slider round"></span>
                </label>
            </div>
        </div>
        <div class="mb-4 pb-2">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Container Style Fluid / Boxed</h4>
            <button class="boxed-style settings-btn fluid-boxed-btn" id="boxed-style">
                Click To <span class="fluid">Fluid</span> <span class="boxed">Boxed</span>
            </button>
        </div>
        <div class="mb-4 pb-2">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Sidebar Light / Dark</h4>
            <button class="sidebar-light-dark settings-btn sidebar-dark-btn" id="sidebar-light-dark">
                Click To <span class="dark1">Dark</span> <span class="light1">Light</span>
            </button>
        </div>
        <div class="mb-4 pb-2">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Header Light / Dark</h4>
            <button class="header-light-dark settings-btn header-dark-btn" id="header-light-dark">
                Click To <span class="dark2">Dark</span> <span class="light2">Light</span>
            </button>
        </div>
        <div class="mb-4 pb-2">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Only Footer Light / Dark</h4>
            <button class="footer-light-dark settings-btn footer-dark-btn" id="footer-light-dark">
                Click To <span class="dark3">Dark</span> <span class="light3">Light</span>
            </button>
        </div>
        <div class="mb-4 pb-2">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style Radius / Square</h4>
            <button class="card-radius-square settings-btn card-style-btn" id="card-radius-square">
                Click To <span class="square">Square</span> <span class="radius">Radius</span>
            </button>
        </div>
        <div class="mb-4 pb-2">
            <h4 class="fs-15 fw-semibold border-bottom pb-2 mb-3">Card Style BG White / Gray</h4>
            <button class="card-bg settings-btn card-bg-style-btn" id="card-bg">
                Click To <span class="white">White</span> <span class="gray">Gray</span>
            </button>
        </div>
    </div>
</div>
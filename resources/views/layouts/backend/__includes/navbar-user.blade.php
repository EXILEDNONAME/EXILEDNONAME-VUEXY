<li class="nav-item navbar-dropdown dropdown-user dropdown">
  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
    <div class="avatar avatar-online">
      <img src="{{ env('APP_URL') }}/assets/backend/img/avatars/1.png" alt class="h-auto rounded-circle" />
    </div>
  </a>
  <ul class="dropdown-menu dropdown-menu-end">
    <li>
      <a class="dropdown-item" href="pages-account-settings-account.html">
        <div class="d-flex">
          <div class="flex-shrink-0 me-3">
            <div class="avatar avatar-online">
              <img src="{{ env('APP_URL') }}/assets/backend/img/avatars/1.png" alt class="h-auto rounded-circle" />
            </div>
          </div>
          <div class="flex-grow-1">
            <span class="fw-medium d-block">John Doe</span>
            <small class="text-muted">Admin</small>
          </div>
        </div>
      </a>
    </li>
    <li>
      <div class="dropdown-divider"></div>
    </li>
    <li>
      <a class="dropdown-item" href="pages-profile-user.html">
        <i class="ti ti-user-check me-2 ti-sm"></i>
        <span class="align-middle">My Profile</span>
      </a>
    </li>
    <li>
      <a class="dropdown-item" href="pages-account-settings-account.html">
        <i class="ti ti-settings me-2 ti-sm"></i>
        <span class="align-middle">Settings</span>
      </a>
    </li>
    <li>
      <a class="dropdown-item" href="pages-account-settings-billing.html">
        <span class="d-flex align-items-center align-middle">
          <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>
          <span class="flex-grow-1 align-middle">Billing</span>
          <span class="flex-shrink-0 badge badge-center rounded-pill bg-label-danger w-px-20 h-px-20"
            >2</span
            >
          </span>
        </a>
      </li>
      <li>
        <div class="dropdown-divider"></div>
      </li>
      <li>
        <a class="dropdown-item" href="pages-faq.html">
          <i class="ti ti-help me-2 ti-sm"></i>
          <span class="align-middle">FAQ</span>
        </a>
      </li>
      <li>
        <a class="dropdown-item" href="pages-pricing.html">
          <i class="ti ti-currency-dollar me-2 ti-sm"></i>
          <span class="align-middle">Pricing</span>
        </a>
      </li>
      <li>
        <div class="dropdown-divider"></div>
      </li>
      <li>
        <a class="dropdown-item" href="auth-login-cover.html" target="_blank">
          <i class="ti ti-logout me-2 ti-sm"></i>
          <span class="align-middle">Log Out</span>
        </a>
      </li>
    </ul>
  </li>

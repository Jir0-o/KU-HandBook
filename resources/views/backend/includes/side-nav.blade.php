<aside id="layout-menu" class="layout-menu menu-vertical menu side-dark-menu">
    <div class="app-brand">
        <a href="{{route('dashboard')}}" class="app-brand-link pt-3">
            <img height="122px" width="90px" id="system_logo" src="">
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text"></span>
        </li>
        <li class="menu-item">
            <a href="{{route('dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home"></i>
                <div data-i18n="Dashboard">Dashboard</div>
            </a>
        </li>
        @if (Auth::user()->can('Can Access Program'))
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Programs</span>
        </li>
        <!-- Pages -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-rocket"></i>
                <div data-i18n="Dashboards">Program</div>
            </a>
            <ul class="menu-sub">
                @if (Auth::user()->can('Can Access Program List'))
                <li class="menu-item">
                    <a href="{{route('Program-list')}}" class="menu-link">
                        <div data-i18n="Analytics">Program List</div>
                    </a>
                </li>
                @endif
                @if (Auth::user()->can('Can Access Add Program'))
                <li class="menu-item">
                    <a href="{{route('program-add')}}" class="menu-link">
                        <div data-i18n="Analytics">Add Program</div>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif
        <!-- Pages End -->
        @if (Auth::user()->can('Can Access Course'))
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-graduation"></i>
                <div data-i18n="Dashboards">Course</div>
            </a>
            <ul class="menu-sub">
                @if (Auth::user()->can('Can Access Course List'))
                <li class="menu-item">
                    <a href="{{route('course-list')}}" class="menu-link">
                        <div data-i18n="Analytics">Course List</div>
                    </a>
                </li>
                @endif
                @if (Auth::user()->can('Can Access Add Course'))
                <li class="menu-item">
                    <a href="{{route('course')}}" class="menu-link">
                        <div data-i18n="Analytics">Add Course</div>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
        </li>

        @if (Auth::user()->can('Can Access Settings'))
        <!-- Settings -->
        <li class="menu-item">
            <a href="{{route('settings')}}" class="menu-link">
                <i class="menu-icon bx bx-cog"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
        </li>
        @endif
        <li class="menu-item">
            <a class="menu-link" href="javascript:void(0);" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                <p class="align-middle"><i class="bx bx-power-off me-2"></i> Log Out</p>

            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
        <!-- Settings End -->
    </ul>
</aside>
<!-- / Menu -->


<script>
$(document).ready(function() {
    // Get the system logo from the database
    function getSystem() {
        $.ajax({
            url: "{{ route('settings.show') }}",
            type: "GET",
            success: function(response) {
                $('#system_logo').attr('src', '/global_assets/system_images/' + response.data[0]
                    .logo);
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch system settings:', error);
            }

        });

    }
    getSystem();
});
</script>
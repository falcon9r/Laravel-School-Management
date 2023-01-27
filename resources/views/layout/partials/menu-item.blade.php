<li class="nav-item">
    @if (is_string($item))
        <div class="row navbar-vertical-label-wrapper mt-3 mb-2">
            <div class="col-auto navbar-vertical-label">{{ $item }}</div>
            <div class="col ps-0">
                <hr class="mb-0 navbar-vertical-divider"/>
            </div>
        </div>
    @else
        <a class="nav-link {{ isset($item['submenu']) ? 'dropdown-indicator' : '' }}" href="{{ $item['href'] }}" role="button" aria-expanded="false" {!! $item['link_attribute'] !!}>
            <div class="d-flex align-items-center">
                <span class="nav-link-icon">
                    <span class="fas fa-{{ $item['icon'] }}
                        {{ isset($item['icon_color']) ? 'text-' . $item['icon_color'] : '' }}"></span>
                </span>
                <span class="nav-link-text ps-1">{{ $item['text'] }}</span>
            </div>
        </a>
        @if (isset($item['submenu']))
            <ul class="nav collapse false {{ $item['submenu_class'] }}" id="{{ $item['submenu_collapse'] }}">
                @each('layout.partials.menu-item', $item['submenu'], 'item')
            </ul>
        @endif
    @endif
</li>

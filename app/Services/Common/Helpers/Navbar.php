<?php

namespace App\Services\Common\Helpers;

use Illuminate\Contracts\Routing\UrlGenerator;

class Navbar
{
    protected ?array $menu = null;
    protected array $filters;
    protected UrlGenerator $urlGenerator;
    protected int $submenuCollapse = 0;

    public function __construct(array $filters) {
        $this->filters = $filters;
    }

    public function menu(): array
    {
        if (!$this->menu) {
            $this->menu = $this->buildMenu($this->filters['menu']);
        }

        return $this->menu;
    }

    protected function buildMenu(array $filters): array
    {
        $menu = [];

        foreach ($filters as $filter) {
            if (is_string($filter)) {
                $menu[] = $filter;
                continue;
            }

            $href = '#';

            if ($filter['route'] ?? null) {
                $href = route($filter['route']);
            }
            else if ($filter['url'] ?? null) {
                $href = $filter['url'];
            }

            $item = [
                'text' => $filter['text'],
                'href' => $href,
                'icon' => $filter['icon'],
                'link_attribute' => ''
            ];

            if ($filter['submenu'] ?? null) {
                $item['submenu'] = $this->buildMenu($filter['submenu']);
                $item['href'] = '#collapse' . ++$this->submenuCollapse;
                $item['submenu_collapse'] = 'collapse' . $this->submenuCollapse;
                $item['submenu_class'] = '';
                $item['link_attribute'] = 'data-bs-toggle="collapse" aria-controls="collapse' . $this->submenuCollapse . '"';
            }

            $menu[] = $item;
        }

        return $menu;
    }
}

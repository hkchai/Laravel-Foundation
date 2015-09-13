<?php

namespace LaravelFoundation\Pagination;

use Illuminate\Contracts\Pagination\Paginator as PaginatorContract;

class SimpleFoundationFivePresenter extends FoundationFivePresenter
{
    /**
     * Create a simple Foundation 5 presenter.
     *
     * @param  \Illuminate\Contracts\Pagination\Paginator  $paginator
     * @return void
     */
    public function __construct(PaginatorContract $paginator)
    {
        $this->paginator = $paginator;
    }

    /**
     * Determine if the underlying paginator being presented has pages to show.
     *
     * @return bool
     */
    public function hasPages()
    {
        return $this->paginator->hasPages() && count($this->paginator->items()) > 0;
    }

    /**
     * Convert the URL window into Bootstrap HTML.
     *
     * @return string
     */
    public function render()
    {
        if ($this->hasPages()) {
            return sprintf(
                '<ul class="pagination">%s %s</ul>',
                $this->getPreviousButton(),
                $this->getNextButton()
            );
        }

        return '';
    }
}

<?php /** @noinspection PhpFieldAssignmentTypeMismatchInspection */

namespace App\View\Components;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Troop;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public Collection $categories;
    public Collection $tags;
    public Collection $troops;
    public Collection $featuredPosts;

    public function __construct()
    {
        $this->troops = Troop::get(['id', 'name']);

        $this->categories = Category::get(['id', 'name']);

        $this->tags = Tag::get(['id', 'name']);

        $this->featuredPosts = Post::featuredPosts()->take(4);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}

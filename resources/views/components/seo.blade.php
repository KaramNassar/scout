@props(['post' => null, 'page' => null, 'troop' => null])
@php
    $title = __('Syrian Syriac Scout');
    $description = __('hero-description');

    if (isset($page) ) {
        $title = $page->title;
        $description = strip_tags(substr($page->content, 0, 155)) . '...';
    } elseif (isset($post)) {
        $title = $post->title;
        $description = strip_tags(substr($post->body, 0, 155)) . '...';

    } elseif (isset($troop)) {
        $title = $troop->name;
        $description = strip_tags(substr($troop->description, 0, 155)) . '...';
    }

@endphp

<title>{{ $title }}</title>

<meta name="description" content="{{ $description }}"/>
<meta property="og:title" content="{{ $title }}"/>
<meta property="og:description" content="{{ $description }}"/>
<meta name="robots" content="index, follow"/>

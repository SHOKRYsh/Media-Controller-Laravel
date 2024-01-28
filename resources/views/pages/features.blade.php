@extends('Layouts.app')


@section('content')
    <h1>{{ $title }}</h1>

    @if (count($features) > 0)
        <ul class="list-group">
            @foreach ($features as $f)
                <li class="list-group-item" style="text-align: center">{{ $f }}</li>
            @endforeach
        </ul>
    @endif
    <p class="lead">
        Welcome to our Media and Post Editing page! Here, we'll showcase some of the features and tools we offer for
        uploading media, creating posts, and editing content.

        Upload Media:
        Our platform makes it easy to upload various types of media, including images, videos, and audio files. You can
        upload media directly from your device or import from popular cloud storage services like Google Drive or Dropbox.
        We also offer tools for resizing and optimizing your media for optimal performance.

        Create Posts:
        Our intuitive post creation tools make it easy to craft engaging content that captures your audience's attention.
        You can add text, images, videos, and other media to your posts, and customize the layout and formatting to suit
        your needs. You can also schedule posts in advance, so you can keep your social media accounts active even when
        you're not available.

        Edit Content:
        Our content editing tools allow you to make changes to your posts and media after they've been published. You can
        edit text, add or remove media, and adjust formatting as needed. We also offer tools for monitoring and managing
        comments, so you can engage with your audience and moderate discussions effectively.

        Overall, our platform provides a comprehensive set of tools and features for managing your media and creating
        engaging content. Whether you're a blogger, social media influencer, or business owner, our tools can help you
        create content that connects with your audience and drives results.
    </p>

@endsection

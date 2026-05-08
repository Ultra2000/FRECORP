<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class PageController extends Controller
{
    public function home()
    {
        $latestPosts = Post::published()->latest('published_at')->limit(3)->get();
        return view('pages.home', compact('latestPosts'));
    }

    public function demo()            { return view('pages.demo'); }
    public function roadmap()         { return view('pages.roadmap'); }
    public function mentionsLegales() { return view('pages.mentions-legales'); }
    public function cgu()             { return view('pages.cgu'); }
    public function cgv()             { return view('pages.cgv'); }
    public function confidentialite() { return view('pages.confidentialite'); }
    public function rgpd()            { return view('pages.rgpd'); }

    public function sitemap()
    {
        $sitemap = Sitemap::create()
            ->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('weekly'))
            ->add(Url::create('/blog')->setPriority(0.9)->setChangeFrequency('daily'))
            ->add(Url::create('/demo')->setPriority(0.7))
            ->add(Url::create('/roadmap')->setPriority(0.5))
            ->add(Url::create('/mentions-legales')->setPriority(0.3))
            ->add(Url::create('/cgu')->setPriority(0.3))
            ->add(Url::create('/cgv')->setPriority(0.3))
            ->add(Url::create('/confidentialite')->setPriority(0.3))
            ->add(Url::create('/rgpd')->setPriority(0.3));

        Post::published()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(
                Url::create(route('blog.show', $post))
                    ->setLastModificationDate($post->updated_at)
                    ->setPriority(0.8)
                    ->setChangeFrequency('monthly')
            );
        });

        return response($sitemap->render(), 200, ['Content-Type' => 'application/xml']);
    }
}

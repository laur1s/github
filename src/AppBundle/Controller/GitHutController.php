<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class GitHutController extends Controller
{
    /**
     * @Route("/",name="githut")
     */
    public function indexAction(Request $request)
    {
        return $this->render(':githut:index.html.twig', [
            'avatar_url' => "https://avatars.githubusercontent.com/u/7099082?v=3",
            'name' => "Laurynas",
            'login' => "laur1s",
            'details' => [
                'company' => 'whatever',
                'location' => 'who cares',
                'joined' => '2016_01_01',

            ],
            'blog' => 'blog.com',
            'social_data' => [
                'public repos' => 11,
                'followers' => 1,
                'following' => 2,
            ],
            'repo_count' => 100,
            'most_stars' => 50,
            'repos' => [
                [
                    'url' => 'https://codereviewvideos.com',
                    'name' => 'Code Review Videos',
                    'description' => 'some repo description',
                    'stargazers_count' => '999',
                ],
                [
                    'url' => 'http://bbc.co.uk',
                    'name' => 'The BBC',
                    'description' => 'not a real repo',
                    'stargazers_count' => '666',
                ],
                [
                    'url' => 'http://google.co.uk',
                    'name' => 'Google',
                    'description' => 'another fake repo description',
                    'stargazers_count' => '333',
                ],
                ],
            ]);
    }

    /**
     * @Route("/profile/", name="profile")
     */
    /**public function profileAction(Request $request)
     *
     * {
     * return $this->render(':githut:profile.html.twig', [
     * 'avatar_url' => "https://avatars.githubusercontent.com/u/7099082?v=3",
     * 'name' => "Laurynas",
     * 'login' => "laur1s",
     * 'details' => [
     * 'company' => 'whatever',
     * 'location' => 'who cares',
     * 'joined' => '2016_01_01',
     *
     * ],
     * 'blog' => 'blog.com',
     * 'social_data'=>[
     * 'public repos'=>11,
     * 'followers'=>1,
     * 'following'=>2,
     * ],
     * ]);
     *
     * }**/
}

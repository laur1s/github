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

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\PlaylistRepository;
use App\Repository\PlaylistSubscriptionRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Http\Attribute\IsGranted;


class ListController extends AbstractController
{
    #[IsGranted('ROLE_USER')]
    #[Route('/lists', name: 'list_index')]
    public function index(
        PlaylistSubscriptionRepository $playlistSubscriptionRepository,
        PlaylistRepository $playlistRepo,
        Request $request,
    ): Response
    {
        $Playlists = $playlistRepo->findAll();
        $subscribedPlaylists = $playlistSubscriptionRepository->findAll();

        $playlistID = $request->query->get('playlist', null);
        $playlistID ?
            $selectedPlaylist = $playlistRepo->find($playlistID)
        :
            $selectedPlaylist = null;

        return $this->render('movie/lists.html.twig', [
            'myPlaylists' => $Playlists,
            'subscribedPlaylists' => $subscribedPlaylists,
            'selectedPlaylist' => $selectedPlaylist,
        ]);
    }
}

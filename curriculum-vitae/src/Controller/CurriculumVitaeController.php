<?php

namespace App\Controller;

use App\Entity\Cms;
use App\Entity\Community;
use App\Entity\Designer;
use App\Entity\Developer;
use App\Entity\Free;
use App\Entity\Manager;
use App\Entity\Skill;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CurriculumVitaeController extends AbstractController
{
    /**
     * @Route("/curriculum/vitae", name="curriculum_vitae")
     */
    public function index()
    {
        return $this->render('curriculum_vitae/index.html.twig', [
            'controller_name' => 'CurriculumVitaeController',
        ]);
    }

    /**
     * @Route("/", name="curriculumvitae")
     */
    public function home()
    {
        $repo = $this->getDoctrine()->getRepository(Skill::class);
        $skill = $repo->findAll();

        return $this->render('curriculum_vitae/home.html.twig', [

            'skill' => $skill,
        ]);
    }

    /**
     * @Route("/skills", name="qualification")
     */
    public function skill()
    {
        $repoDev = $this->getDoctrine()->getRepository(Developer::class);
        $dev = $repoDev->findAll();

        $repoDes = $this->getDoctrine()->getRepository(Designer::class);
        $des = $repoDes->findAll();

        $repoCom = $this->getDoctrine()->getRepository(Community::class);
        $Com = $repoCom->findAll();

        $repoCms = $this->getDoctrine()->getRepository(Cms::class);
        $Cms = $repoCms->findAll();

        $repoMan= $this->getDoctrine()->getRepository(Manager::class);
        $Man = $repoMan->findAll();

        $repoFree= $this->getDoctrine()->getRepository(Free::class);
        $Free = $repoFree->findAll();

        return $this->render('curriculum_vitae/qualification.html.twig', [

            'developer' => $dev,
            'designer' => $des,
            'community'=>$Com,
            'cms'=>$Cms,
            'manager'=>$Man,
            'free'=>$Free

        ]);
    }

    /**
     * @Route("/certificats")
     */
    public function none()
    {
        return $this->redirect('/skills');

    }
}


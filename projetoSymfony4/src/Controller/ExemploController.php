<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 16/06/2019
 * Time: 14:05
 */

namespace App\Controller;

use App\Entity\TABSymfony;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExemploController extends Controller{
    /**
     * @return Response
     * @Route("rota-index")
     */
    public function index(){
        return new Response(
            "<html>
                <body>
                    <h3>Exemplo de Controller</h3>
                </body>
            </html>"
        );
    }

    /**
     * @return Response
     * @Route("rota-twig")
     */
    public function paginaTwig(){
        return $this->render("exemplo/exemplo.html.twig",[
            "Parametro" => "passando parametros pela view"
        ]);
    }


    /**
     * @return Response
     * @Route("rota-banco")
     */
    public function tabSymfony(){
        $symfony = $this->getDoctrine()->getManager();

        $sym = new TABSymfony();
        $sym->setExCampo1("texto para campo 1")->setExCampo2("texto para campo 2");

        $symfony->persist($sym);
        $symfony->flush();

        return new Response("Campo preenchido com o texto: ". $sym->getExCampo1()." salvo com sucesso !!!");
    }
}
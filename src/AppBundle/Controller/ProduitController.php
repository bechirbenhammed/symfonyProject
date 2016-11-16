<?php
namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations as Rest;

class ProduitController extends FOSRestController {

    /**
     * @ApiDoc(
     *  section="Produit services",
     *  resource = true,
     *  description = "Returned ok",
     *  statusCodes = {
     *     200 = "Returned when successful",
     *     404 = "Not Found"
     *   }
     * )
     * @Rest\Get("/produits")
     */
    public function getAction() {
        return "ok";
    }
}
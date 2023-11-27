<?php

namespace app\controllers;

use app\core\Controller;
use app\models\dao\LancamentoDao;


class HomeController extends Controller
{
   public function index()
   {
      $senhaAut = $_SESSION['Fox_senha'];
      $emailAut = $_SESSION['Fox_email'];
      if ($emailAut == null && $senhaAut == null) {
         header("location: " . URL_BASE );
      }      
      $dados["view"]       = "home";
      $this->load("template", $dados);
   }
}

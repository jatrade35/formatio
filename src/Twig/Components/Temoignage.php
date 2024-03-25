<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Temoignage
{
  public String $testimonialContent = "J'aime la vie et FORMATIO me permet de demeurer alerte et de continuer à apprendre notamment par une meilleure maîtrise des technologies";
  public String $imageOne = "images/quote-user1-210x210.jpg";
  public String $testimonialAuthor = "Pierre Wolfshagen";
  public String $testimonialPosition = "Formateur";
}

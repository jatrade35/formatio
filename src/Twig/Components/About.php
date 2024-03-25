<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class About
{
  public int $benevols = 70;
  public int $membres = 247;
  public int $formations = 10589;
}

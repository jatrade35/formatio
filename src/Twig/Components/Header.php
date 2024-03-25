<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
final class Header
{
  public String $titleone;
  public String $titletwo;
  public String $routePath;
}

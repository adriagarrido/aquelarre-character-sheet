<?php

declare(strict_types=1);

namespace Adria\AquelarreDraft;

class Character
{
    private Character\Name $name;
    private Character\Kingdom $kingdom;
    private Character\Ethnicity $ethnicity;

    public function __construct(
        Character\Name $a_name,
        Character\Kingdom $a_kingdom,
        Character\Ethnicity $an_ethnicity
    ) {
        $this->name = $a_name;
        $this->kingdom = $a_kingdom;
        $this->ethnicity = $an_ethnicity;
    }
}

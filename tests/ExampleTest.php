<?php

use Tiagoliveirati\KickoffPhpProjects\Exemplo;

it('should show Examplo text', function () {
    $expect = new Exemplo();

    expect($expect->exemplo())->toBe("Exemplo");
});

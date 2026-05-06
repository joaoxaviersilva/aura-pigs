<?php

test('home page is available', function () {
    $this->get('/')
        ->assertOk()
        ->assertSee('Aura Pigs');
});

test('operation page is available', function () {
    $this->get('/operacao')
        ->assertOk()
        ->assertSee('Rotina clara para cada fase da criacao');
});

test('care page is available', function () {
    $this->get('/cuidados')
        ->assertOk()
        ->assertSee('Manejo limpo, silencioso e observavel');
});

test('fallback route returns a styled not found page', function () {
    $this->get('/rota-inexistente')
        ->assertNotFound()
        ->assertSee('Pagina nao encontrada');
});

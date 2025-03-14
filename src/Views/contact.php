<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'header.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'navbar.php';
?>

<main>
    <section class="banner-3 d-flex flex-column justify-content-center text-center">
        <div class="banners-title bg-body-secondary py-5">
            <h2 class="fw-bold font-title">Entre em contato!</h2>
        </div>
    </section>

    <section class="py-4 container">
        <div class="row">
            <div class="col-10 col-xl-8 mx-auto">
                <div class="border border-2 rounded p-3">
                    <form id="contato">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nome" placeholder="Nome">
                            <label for="nome">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control" id="telefone" placeholder="Telefone">
                            <label for="telefone">Telefone</label>
                        </div>
                        <select class="form-select mb-3" aria-label="Default select example">
                            <option selected>Preferência de contato</option>
                            <option value="1">Email</option>
                            <option value="2">WhatsApp</option>
                            <option value="3">Ligação</option>
                        </select>
                        <div class="px-1">
                            <label for="nivel-satisfacao" class="form-label">Nível de satisfação:</label>
                            <input type="range" class="form-range input-range" id="nivel-satisfacao">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Deseja receber novidades e promoções por email?
                            </label>
                        </div>
                        <button type="button" class="btn btn-default w-100 fw-bold p-2">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . 'footer.php';
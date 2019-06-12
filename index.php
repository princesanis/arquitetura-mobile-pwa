<!doctype html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PWA GYM</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- iOS meta tags and icons -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Gym - Prince">
    <link rel="apple-touch-icon" href="images/icons/152.png">    

    <meta name="description" content="Pequena descrição para resolver o notificação de SEO da auditoria">
    <meta name="theme-color" content="#fb6b55" />
    
</head>

<body>

    <div class="container">
        <div class="card">
            <div class="bar"></div>
            <div class="header">
                <div class="details">
                    <h3>Prince Sanis</h3>
                    <span>BH-MG, Brasil</span>
                </div>
            </div>
            <div class="card-container">
                <div class="profile-card">
                    <div class="profile-card__image">
                        <img src="images/logo.jpg" alt="" />
                    </div>
                    <div class="profile-details">
                        <div class="numbers">
                            <div class="follower">
                                <div>1.2K</div>
                                <div>Seguidores</div>
                            </div>
                            <div class="travels">
                                <div>5</div>
                                <div>Academias</div>
                            </div>
                        </div>
                        <button id="butInstall" hidden>Instalar</button>
                        <button id="butPush" hidden>Notification</button>
                    </div>
                </div>
                <label class="pinned-trip__label">Academias em Destaque</label>
                <div class="pinned-trip">
                    <div class="pinned-trip__photographs">
                        <span class="pinned-trip__description">Unidade Buritis</span>
                        <div class="pinned-trip__itenary">
                            <span><i class="fa fa-map-pin"></i> 4</span><span>KM</span>
                            <!-- <span>56 <i class="fa fa-camera-retro"></i></span> -->
                        </div>
                        <div class="pinned-trip__moredetails">ver detalhes</div>
                    </div>
                    <div class="pinned-trip__map">
                        <img src="images/gym01.jpg" alt="some image" />
                    </div>
                </div>                
                <label class="pinned-trip__label">Lista de Academias</label>
                <div class="planned-trips">
                    <div class="planned-trips__card card_empty">
                        <div class="planned-trip__description">
                            <span><i class="fa fa-frown"></i>&nbsp;Nenhuma academia</span>
                        </div>

                    </div>
                    <div class="planned-trips__card card_loading">
                        <div class="planned-trip__image">
                            <img src="images/loading-1.gif" alt="some image" />
                        </div>
                        <div class="planned-trip__description">
                            <span>Aguardando planos...</span>
                        </div>

                    </div>

                    <div id="card_content">



                    </div>

                </div>
                <div class="planned-trips">
                    <div class="planned-trips__card">
                        <div class="planned-trip__description">
                            <span style="font-size:12px; word-break: break-all;" id="endpoint_push">Aguardando endpoint
                                de notificação</span>
                        </div>

                    </div>
                </div>

                <div class="planned-trips">
                    <div class="planned-trips__card">
                        <div class="planned-trip__description">
                            <button id="butSend" class="btn btn-block btn-primary">Enviar em Background</button>
                            <span style="font-size:12px; word-break: break-all;" id="send_msg">...</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- Interações da Aplicação -->
    <script src="app.js"></script>

    <script>
        let swRegistration = null;

        if ('serviceWorker' in navigator) {

            window.addEventListener('load', () => {

                navigator.serviceWorker.register('service-worker.js')
                    .then((reg) => {

                        console.log("Service worker registrado com sucesso!");

                        swRegistration = reg;
                        initialiseUI();
                    });

            });
        }
    </script>
</body>

</html>
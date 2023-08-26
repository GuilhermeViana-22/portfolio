<section class="formulario" id="form">
    <h2 class="mt-3 text-white">Formulário</h2>
    <p class="subtitle ">Preenche com detalhes sobre sua ideia de projeto</p>
    <br>
    <div class="row mt-3" style="margin-top:25px ;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 mt-4">
            <div class="text-center">
                <img style="margin-top: 20% !important" class="floating-element"
                     src="{{ asset('site/img/rocket.png') }}" alt="Card image cap" loading="lazy">
                <p class="white-text texto-apresentacao">Você tem uma ideia empolgante que está ansioso para transformar em realidade?
                    Nosso formulário de especificação de projeto é o primeiro passo para tornar isso possível.
                    Compartilhe os detalhes iniciais e permita-nos entender melhor o que você deseja alcançar.</p>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 mt-4">
            <div class="card-body">
                <p class="white-text p-4 texto-apresentacao">Ao preencher o formulário, você está abrindo as portas para uma colaboração
                    que pode revolucionar sua visão. Nossa equipe de especialistas está pronta para mergulhar no seu
                    projeto, entender cada aspecto e oferecer insights valiosos.</p>
                <p class="white-text p-4 texto-apresentacao">Lembre-se, as maiores conquistas começam com um simples passo. Preencha o
                    formulário com as palavras-chave do seu projeto e em breve entraremos em contato. Juntos, vamos
                    transformar ideias em conquistas tangíveis.</p>

                <form>
                    <div class="row p-4">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nome"></label><input type="text" class="form-control  custom-input=" name="nome" id="nome"
                                                                 placeholder="Nome completo">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">

                                <label for="email"></label><input type="email" class="form-control" name="email"
                                                                  id="email" placeholder="Seu melhor e-mail">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="assunto"></label><input type="text" class="form-control" name="subject"
                                                                    id="assunto"
                                                                    placeholder="Assunto que deseja tratar">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descricao"></label><textarea class="form-control" id="descricao"
                                                                         name="message" cols="30" rows="6"
                                                                         placeholder="Diga em poucas palavras por qual tipo de serviço você está buscando"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <br>
                                <br>
                                <button id="buttonSendEmail" type="submit" class="btnSend" data-toggle="modal"
                                        data-target="#exampleModal"><i class="fas fa-paper-plane"></i>
                                    Enviar <i class="fas fa-paper-plane"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#1d0f3f" fill-opacity="1"
          d="M0,64L48,85.3C96,107,192,149,288,144C384,139,480,85,576,85.3C672,85,768,139,864,133.3C960,128,1056,64,1152,37.3C1248,11,1344,21,1392,26.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
</svg>



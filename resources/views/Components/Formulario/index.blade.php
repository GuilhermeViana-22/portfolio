<style>
    /* Estilo para o toast alert */
    .toast-container {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1050;
    }
</style>
<section class="formulario" id="form">
    <h2 class="mt-3 text-white">Formulário</h2>
    <p class="subtitle ">Aqui você pode me dar mais detalhes sobre sua ideia de projeto</p>
    <br>
    <div class="row mt-3" style="margin-top:25px ;">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 mt-4">
            <div class="card-body">
                <p class="white-text p-4 texto-apresentacao">Ao preencher o formulário, você está abrindo as portas para uma colaboração
                    que pode revolucionar sua visão. Eu e minha equipe de especialistas está pronta para mergulhar no seu
                    projeto, entender cada aspecto e oferecer insights valiosos.</p>
                <p class="white-text p-4 texto-apresentacao">Lembre-se, as maiores conquistas começam com um simples passo. Preencha o
                    formulário com as palavras-chave do seu projeto e em breve entraremos em contato. Juntos, vamos
                    transformaremos ideias em conquistas tangíveis.</p>

                <div class="container mt-4">
                    @if(session('success'))
                        <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
                        <script>
                            document.addEventListener('DOMContentLoaded', function () {
                                Swal.fire({
                                    icon: 'success',
                                    title: 'E-mail enviado com sucesso!',
                                    showConfirmButton: false,
                                    timer: 3000 // Tempo em milissegundos (3 segundos)
                                });
                            });
                        </script>
                    @endif

                    <form method="POST" action="{{ route('send.email') }}">
                        @csrf
                        <div class="row p-4">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nome">Nome completo</label>
                                    <input type="text" class="form-control custom-input" name="nome" id="nome" placeholder="Nome completo">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="email">Seu melhor e-mail</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Seu melhor e-mail">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="assunto">Assunto que deseja tratar</label>
                                    <input type="text" class="form-control" name="subject" id="assunto" placeholder="Assunto que deseja tratar">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="descricao">Diga em poucas palavras por qual tipo de serviço você está buscando</label>
                                    <textarea class="form-control" id="descricao" name="message" cols="30" rows="6" placeholder="Diga em poucas palavras por qual tipo de serviço você está buscando"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button id="buttonSendEmail" type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#1d0f3f" fill-opacity="1"
          d="M0,64L48,85.3C96,107,192,149,288,144C384,139,480,85,576,85.3C672,85,768,139,864,133.3C960,128,1056,64,1152,37.3C1248,11,1344,21,1392,26.7L1440,32L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
</svg>
@section('scripts') {{-- Se estiver usando o Blade --}}
<script>
    @if(session('success'))
    document.addEventListener('DOMContentLoaded', function () {
        var toastEl = document.getElementById('toastAlert');
        var toast = new bootstrap.Toast(toastEl);
        toast.show();

        // Rolar a página até o topo onde está o toast alert
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    @endif
</script>
@endsection


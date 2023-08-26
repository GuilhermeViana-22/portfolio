
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3 class="title-description">Serviços</h3>
                    <ul class="content">
                        <li><a href="#">Estudo de caso</a></li>
                        <li><a href="#">Mapemento</a></li>
                        <li><a href="#">Modelagem de banco de dados</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Desenvolvimento</a></li>
                        <li><a href="#">Hospedagem</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3 class="title-description">Sobre</h3>
                    <ul class="content">

                        <li><a href="https://www.instagram.com/gui_viana_19/">Guilherme Augusto</a></li>
                        <li><a href="https://www.linkedin.com/in/guilherme-augusto-557689122/">Conecte-se</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3 class="title-description">Empresa Atual</h3>
                    <p class="content">Atualmente estou como desenvolvedor Full Stack na Superintendência da Polícia
                        Tecnico Científica de São Paulo.</p>
                </div>
                <div class="redes">
                    <li><a href="https://github.com/GuilhermeViana-22"><img  src="{{ asset('site/contatos/github.svg') }}" height="60" alt="https://github.com/GuilhermeViana-22" target="_blank"></a></li>
                    <li><a href="https://www.linkedin.com/in/guilherme-augusto-557689122/"><img src="{{ asset('site/contatos/linkedin.svg') }}" height="60" alt="https://www.linkedin.com/in/guilherme-augusto-557689122/"  target="_blank"></a></li>
                    <li><a href="https://www.instagram.com/gui_viana_19/"><img src="{{ asset('site/contatos/instagram.svg') }}" height="60" alt="https://www.instagram.com/gui_viana_19/"  target="_blank"></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=5511954509504"><img src="{{ asset('site/contatos/whatapp.svg') }}"height="60" alt="whatapp"  target="_blank"></a></li>
                </div>
            </div>
            <p class="copyright">Todos os direitos reservados © Guilherme Viana Desenvolvedor Full Stack <span id="ano"></span> </p>
        </div>
    </footer>

<script>
    $(function() {
        $('.form').submit(function() {
            $.ajax({
                url: 'forms/enviar.php',
                type: 'POST',
                data: $('.form').serialize(),
                success: function(data) {

                    Swal.fire(
                        'Boaaaaa!',
                        'Seus dados foram enviados, logo em breve entrarei em contato. MUITO OBRIGADO!',
                        'success'
                    )
                },
                error: function(data) {
                    Swal.fire(
                        'Oops!',
                        'Seus dados não foram enviados, tente novamente!',
                        'error'
                    )
                }
            });
            return false;

        });


    });
</script>

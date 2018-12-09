<section class="fe-perfil-section-contato" id="contato">
    <div>
        <h2 class="fe-letra-quadrada fe-letra-media">Contato</h2>
        <!-- mensagem -->
        <div class="col-md-6">
            <div class="card fe-card-contato">
                <form id="fe-perfil-enviar-mensagem" action="" method="" novalidate="">
                    <div class="card-header">
                        <h4 class="card-title fe-letra-quadrada">Mensagem<i class="ti-email text-info pull-right"></i></h4>
                    </div>
                    <div class="card-content">
                        <div class="form-group">
                            <label class="control-label">
                                Seu nome <star>*</star>
                            </label>
                            <input class="form-control" name="nome-visitante" type="text" required="true" autocomplete="on">
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                Seu e-mail <star>*</star>
                            </label>
                            <input class="form-control" name="email-visitante" type="text" required="true" email="true" autocomplete="on">
                        </div>
                        <div class="form-group">
                            <label class="control-label">
                                Mensagem <star>*</star>
                            </label>
                            <textarea class="form-control" name="mensagem-visitante" required="true" autocomplete="off" rows="4"></textarea>
                        </div>
                        <div class="category"><star>*</star> Campos obrigatórios</div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info btn-fill pull-right btn-rotate btn-enviar-mensagem">
                            <span class="btn-label fe-btn-carregando fe-hide">
                                <i class="fas fa-sync fa-spin"></i>&nbsp;
                            </span>
                            Enviar mensagem
                        </button>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
        <!-- mapa -->
        <div class="col-md-6">
            <div class="card fe-card-mapa">
                <div class="card-header">
                    <h4 class="card-title text-info fe-letra-quadrada">Local<i class="fa fa-map-marked-alt text-success pull-right"></i></h4>
                </div>
                <div class="card-content">
                    <div id="map" class="fe-mapa"></div>
                </div>
            </div>
        </div>
    </div>
</section>
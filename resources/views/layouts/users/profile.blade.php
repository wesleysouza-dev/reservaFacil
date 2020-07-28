@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.css">
@endpush
@section('content')
    <div class="row">
        <div class="col-xl-4">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-3">
                                <h5 class="text-primary">Bem vindo ao seu perfil</h5>
                                <p>Gerencia seus dados</p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="avatar-md profile-user-wid mb-4">
                                <img src="{{ asset($image_profile) }}" alt="" class="img-thumbnail rounded-circle">
                            </div>
                            <h5 class="font-size-15 text-truncate display_name">{{ Auth::user()->name }}</h5>
                            <p class="text-muted mb-0 text-truncate">Conta verificada 
                                <span class="badge badge-pill badge-success ">
                                    <i class="mdi mdi-check"></i>
                                </span></p>
                        </div>

                        <div class="col-sm-8">
                            <div class="pt-4">

                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="font-size-15">
                                            {{ date('d/m/Y \à\s H:i:s', strtotime(Auth::user()->created_at)) }}     
                                        </h5>
                                        <p class="text-muted mb-0">Data de cadastro</p>
                                    </div>
                                    {{-- <div class="col-6">
                                        <h5 class="font-size-15">04-04-2020 / 08:00</h5>
                                        <p class="text-muted mb-0">Última atualização</p>
                                    </div> --}}
                                </div>
                                <div class="mt-4">
                                    <a href="#" class="btn btn-danger waves-effect waves-light btn-sm">
                                        Excluir minha conta <i class="mdi mdi-trash-can-outline ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Seus dados</h4>

                    <p class="text-muted mb-4">Mantenha seus dados sempre atualizados.</p>
                    <div class="table-responsive">
                        <table class="table table-nowrap mb-0">
                            <tbody>
                                <tr>
                                    <th scope="row">Nome :</th>
                                    <td class="display_name">{{ Auth::user()->name }}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Telefone :</th>
                                    <td class="display_phone">
                                        <input class="mask_phone p-0 m-0" value="{{ Auth::user()->phone }}"/ style="border: none;background:#fff!important" disabled></td>
                                </tr>
                                <tr>
                                    <th scope="row">E-mail :</th>
                                    <td class="display_email">{{ Auth::user()->email }}</td>
                                </tr>

                                <tr>
                                    <th scope="row">Senha :</th>
                                    <td>*********</td>
                                </tr>
                                {{-- <tr>
                                    <th scope="row">Location :</th>
                                    <td>California, United States</td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
        </div>







        <div class="col-xl-8">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Reservas Pendentes</p>
                                    <h4 class="mb-0">1</h4>
                                </div>

                                <div class="mini-stat-icon avatar-sm rounded-circle bg-warning align-self-center">
                                    <span class="avatar-title">
                                        <i class="bx bx-help-circle font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Reservas Realizadas</p>
                                    <h4 class="mb-0">12</h4>
                                </div>

                                <div class="avatar-sm rounded-circle bg-success align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-check-circle font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mini-stats-wid">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <p class="text-muted font-weight-medium">Reservas Canceladas</p>
                                    <h4 class="mb-0">3</h4>
                                </div>

                                <div class="avatar-sm rounded-circle bg-danger align-self-center mini-stat-icon">
                                    <span class="avatar-title rounded-circle bg-primary">
                                        <i class="bx bx-block font-size-24"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4 float-sm-left">Gerencie seus dados de acesso</h4>                    
                    <div class="clearfix"></div>
                    <p class="text-muted mb-1">Campos com asteriscos <span class="color-red">(*)</span> são obrigatórios.</p>
                    <p class="text-muted mb-4">Caso não queira alterar a senha, deixe-a vazia.</p>
                    
                    <form class="needs-validation" id="form" novalidate="" autocomplete="off" method="POST" role="presentation" enctype="multipart/form-data" action="{{route("users.index")}}/{{ Auth::user()->id }}">
                        <div class="row">
                            {{ method_field('PUT') }} 
                            @csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom01">Nome e Sobrenome<span class="color-red">*</span></label>
                                    <input type="text" name="name" class="form-control input_display_name" id="validationCustom01" placeholder="Nome e Sobrenome" value="{{ Auth::user()->name }}" required="">
                                    <div class="valid-feedback">
                                       
                                    </div>
                                    <div class="invalid-feedback">
                                        Informe um nome e sobrenome.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom02">E-mail<span class="color-red">*</span></label>
                                    <input type="email" name="email" class="form-control input_display_email" id="validationCustom02" placeholder="" value="{{ Auth::user()->email }}" required="" readonly onfocus="this.removeAttribute('readonly');">
                                    <div class="valid-feedback">
                                       
                                    </div>
                                    <div class="invalid-feedback">
                                        Informe um e-mail válido.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom03">Telefone</label>
                                    <input type="text" name="phone" class="form-control input-mask input_display_phone" id="validationCustom03" placeholder="Somente números" value="{{ Auth::user()->phone }}" />
                                    {{-- <div class="valid-feedback">
                                        Muito bom, campo ok.
                                    </div> --}}
                                    <div class="invalid-feedback">
                                        Informe um telefone válido.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="validationCustom04">Senha</label>
                                    <input type="password" minlength="6" name="password" class="form-control" id="validationCustom04" placeholder="" readonly onfocus="this.removeAttribute('readonly');">
                                    <div class="valid-feedback">
                                       
                                    </div>
                                    <div class="invalid-feedback">
                                        Insira uma senha que contenha no mínimo 6 caracteres.
                                    </div>
                                </div>
                            </div>

                            <div class="col-11">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" accept="image/png, image/jpeg, image/gif">
                                    <label class="custom-file-label" for="customFile">Selecione uma foto</label>
                                </div>
                            </div>

                            <div class="col-1">
                                <div class="form-group">
                                    <img src="{{ asset($image_profile) }}" class="img-thumbnail rounded-circle img-preview" alt="" width="60" style="margin-top: -14px;">                                    
                                </div>
                            </div>
                           
                        </div>
                        
                        <button class="btn btn-primary mt-1" type="submit" id="btn-send">
                            Atualizar perfil
                            <i class="bx bx-save"></i>                            
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <!-- MODAL UPLOAD CROP -->
    <div class="modal" id="modal-crop" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Recorte sua foto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div id="img-resize"></div>
            </div>
            <div class="modal-footer">
              <button type="button" id="recortar" class="btn btn-primary">Recortar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>


    @push('scripts')
    <script src="{{ asset('assets/libs/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-validation.init.js') }}"></script>
     
 
    <script src="{{ asset('assets/libs/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/form-element.init.js') }}"></script>
    <script src="{{ asset('assets/js/pages/jquery.maskedinput.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.4/croppie.min.js"></script>
    
    <script>
        $(function(){
            //mascaras
            $('input[name="phone"], .mask_phone').focusout(function(){
                let phone, element;
                element = $(this);
                element.unmask();
                phone = element.val().replace(/\D/g, '');
                if(phone.length > 10) {
                    element.mask("(99) 99999-999?9");
                } else {
                    element.mask("(99) 9999-9999?9");
                }
            }).trigger('focusout');

            el = document.getElementById('img-resize');
            var croppie = null;
            
            
            $.base64ImageToBlob = function(str) {
                // extract content type and base64 payload from original string
                var pos = str.indexOf(';base64,');
                var type = str.substring(5, pos);
                var b64 = str.substr(pos + 8);
            
                // decode base64
                var imageContent = atob(b64);
            
                // create an ArrayBuffer and a view (as unsigned 8-bit)
                var buffer = new ArrayBuffer(imageContent.length);
                var view = new Uint8Array(buffer);
            
                // fill the view, using the decoded base64
                for (var n = 0; n < imageContent.length; n++) {
                view[n] = imageContent.charCodeAt(n);
                }
            
                // convert ArrayBuffer to Blob
                var blob = new Blob([buffer], { type: type });
            
                return blob;
            }

            $.getImage = function(input, croppie) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {  
                        croppie.bind({
                            url: e.target.result,
                        });
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }


            //preenche miniatura ao selecionar a foto no input file
            $(document).on('change','input[type="file"]', function(e) {
                
                if (this.files && this.files[0]) {
                    
                    $('#modal-crop').modal('show')

                    croppie = new Croppie(el, {
                            viewport: {
                                width: 200,
                                height: 200,
                                type: 'square'
                            },
                            boundary: {
                                width: 300,
                                height: 300
                            },
                            enableOrientation: true,
                            enforceBoundary: true,
                        });
                    $.getImage(event.target, croppie); 
                     
                }
               
                
            })

            //apos clicar em recortar
            $("#recortar").on("click", function() {
                croppie.result('base64').then(function(base64) {
                
                    $('#modal-crop').modal('hide')

                    var formData = new FormData();

                    uploadProfile = 'undefined';
                    
                    formData.append("image_profile", $.base64ImageToBlob(base64));                     
                    uploadProfile = $.base64ImageToBlob(base64);                 
                    $(".img-preview").attr("src","https://www.histoline.com/sites/default/files/loader.gif");
                    $(".img-preview").attr("src", base64); 
                    
                    namebase64 = base64;

                });
            });


            //ação botão salvar
            $('#form').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                
                if (typeof namebase64 !== 'undefined') {
                    if (uploadProfile !== 'undefined') {
                        formData.append("image_profile", $.base64ImageToBlob(namebase64));
                    }
                }
                sendForm(formData)
            })


            //ajax para salvar dados
            function sendForm(formData) {
               
                el = $('#btn-send')
                const ajax = $.ajax({
                            url: '{{route("users.index")}}/'+id_user,
                            dataType: 'json',
                            async:true,
                            type:'post',
                            processData: false,
                            contentType: false,
                            data: formData,
                        beforeSend: function( xhr ) {
                            preloaderButton(el)
                        }
                        })
                        .done(function( data ) {
                            if (data['status'] == true) {
                                toastr["success"]("Dados atualizados com sucesso")
                                let updateData = ['display_name','display_phone','display_email']
                                for (update of updateData) {
                                    let element = $('.input_'+update).val()
                                    $('.'+update).text(element)
                                }
                                let thumb = $('#form .img-thumbnail').attr('src')
                                $('.profile-user-wid .img-thumbnail').attr('src',thumb)
                            } else {
                                toastr["error"]("Houve um erro ao salvar. Tente novamente mais tarde!")
                            }                            
                        })
                        .always(function(){
                            preloaderButtonClose(el)   
                            
                        })
                        .fail(function(jqXHR, textStatus){
                            toastr["error"]("Houve um erro ao salvar:" + textStatus)
                            console.log("Request failed: " + textStatus)
                        });
                return ajax;
            }
 
            
        }) 
    </script>
    @endpush
@endsection

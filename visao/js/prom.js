$('#btn-prom').click(function() {
            $('#mdi').removeClass('mdi mdi-cart-plus mdi-24px')
            $('#mdi').addClass('mdi mdi-check mdi-24px')
            Swal.fire({
                icon: 'success',
                title: 'sucesso',
                text: 'Produto adicionado ao carrinho com sucesso',
                showConfirmButton: false,
                timer: 1500
            })

            $('#info1').click(function() {
                $('.modal-title').empty()
                $('.modal-body').empty()

                let body = `
    <div class="row">
        <div class="col-md-6 col-12 text-center">
            <img src="imagens/Leite.jpg" width="400" height="400"><br>
            <div class="col-md-10 col-6 ml-3">
                <a href="" class="btn btn-outline-success btn-block btn-sm btn-center"><i class="mdi mdi-cart-plus mdi-36px"></i></a>
            </div>


        </div>
        <div class="col-md-6 col-12 ">
            <h3 class="text-info"><strong> <u>Sobre o Produto:</u> </strong></h3><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro vel, qui nam voluptates commodi, error sequi eligendi dignissimos reprehenderit blanditiis explicabo non vitae quibusdam facilis quae repellendus pariatur ut in? Voluptatum est
                et totam, culpa corporis blanditiis similique nihil. Asperiores velit voluptatum, praesentium quo veniam quas, eius nostrum odio quasi iusto repellat eaque natus libero impedit rem dignissimos quaerat. Sint? Ut doloribus pariatur voluptatibus
                praesentium tempora sapiente labore magnam, quia laudantium tempore unde? Porro, asperiores tempore commodi dignissimos ipsa neque iste esse ad ex ut nesciunt sint illo excepturi! Fugiat. Necessitatibus voluptatibus officia ipsum, unde
                consectetur architecto excepturi molestiae illum veniam fugit. Vero reprehenderit ullam dignissimos aspernatur eum, ipsa expedita ab nihil! Doloribus magnam repellat quis pariatur fugit commodi beatae? Commodi aut repellendus consectetur
                cumque, minus cum! Neque quam alias asperiores dicta consequuntur commodi perferendis autem voluptas. Distinctio voluptatum sit iusto doloribus! Voluptatem ipsum corrupti, delectus quam deleniti voluptate vitae.</p>
        </div>

    </div>
    `

                $('.modal-title').append('Informações do Produto Selecionado')
                $('.modal-body').append(body)

                $('#modalBunitinhu').modal('show')

            }) $('#info2').click(function() {
                $('.modal-title').empty()
                $('.modal-body').empty()

                let body = `
    <div class="row">
        <div class="col-md-6 col-12 text-center">
        <img src="imagens/leite_condensado.png" width="400" height="400"><br>
            <div class="col-md-10 col-6 ml-3">
                <a href="" class="btn btn-outline-success btn-block btn-sm btn-center"><i class="mdi mdi-cart-plus mdi-36px"></i></a>
            </div>


        </div>
        <div class="col-md-6 col-12 ">
            <h3 class="text-info"><strong> <u>Sobre o Produto:</u> </strong></h3><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro vel, qui nam voluptates commodi, error sequi eligendi dignissimos reprehenderit blanditiis explicabo non vitae quibusdam facilis quae repellendus pariatur ut in? Voluptatum est
                et totam, culpa corporis blanditiis similique nihil. Asperiores velit voluptatum, praesentium quo veniam quas, eius nostrum odio quasi iusto repellat eaque natus libero impedit rem dignissimos quaerat. Sint? Ut doloribus pariatur voluptatibus
                praesentium tempora sapiente labore magnam, quia laudantium tempore unde? Porro, asperiores tempore commodi dignissimos ipsa neque iste esse ad ex ut nesciunt sint illo excepturi! Fugiat. Necessitatibus voluptatibus officia ipsum, unde
                consectetur architecto excepturi molestiae illum veniam fugit. Vero reprehenderit ullam dignissimos aspernatur eum, ipsa expedita ab nihil! Doloribus magnam repellat quis pariatur fugit commodi beatae? Commodi aut repellendus consectetur
                cumque, minus cum! Neque quam alias asperiores dicta consequuntur commodi perferendis autem voluptas. Distinctio voluptatum sit iusto doloribus! Voluptatem ipsum corrupti, delectus quam deleniti voluptate vitae.</p>
        </div>

    </div>

    
    
    `

                $('.modal-title').append('Informações do Produto Selecionado')
                $('.modal-body').append(body)

                $('#modalBunitinhu').modal('show')
            })

            $('#info3').click(function() {
                $('.modal-title').empty()
                $('.modal-body').empty()

                let body = `
    <div class="row">
        <div class="col-md-6 col-12 text-center">
        <img src="imagens/sucrilhos.png" width="400" height="400"><br>
            <div class="col-md-10 col-6 ml-3">
                <a href="" class="btn btn-outline-success btn-block btn-sm btn-center"><i class="mdi mdi-cart-plus mdi-36px"></i></a>
            </div>


        </div>
        <div class="col-md-6 col-12 ">
            <h3 class="text-info"><strong> <u>Sobre o Produto:</u> </strong></h3><br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro vel, qui nam voluptates commodi, error sequi eligendi dignissimos reprehenderit blanditiis explicabo non vitae quibusdam facilis quae repellendus pariatur ut in? Voluptatum est
                et totam, culpa corporis blanditiis similique nihil. Asperiores velit voluptatum, praesentium quo veniam quas, eius nostrum odio quasi iusto repellat eaque natus libero impedit rem dignissimos quaerat. Sint? Ut doloribus pariatur voluptatibus
                praesentium tempora sapiente labore magnam, quia laudantium tempore unde? Porro, asperiores tempore commodi dignissimos ipsa neque iste esse ad ex ut nesciunt sint illo excepturi! Fugiat. Necessitatibus voluptatibus officia ipsum, unde
                consectetur architecto excepturi molestiae illum veniam fugit. Vero reprehenderit ullam dignissimos aspernatur eum, ipsa expedita ab nihil! Doloribus magnam repellat quis pariatur fugit commodi beatae? Commodi aut repellendus consectetur
                cumque, minus cum! Neque quam alias asperiores dicta consequuntur commodi perferendis autem voluptas. Distinctio voluptatum sit iusto doloribus! Voluptatem ipsum corrupti, delectus quam deleniti voluptate vitae.</p>
        </div>

    </div>

    
    
    `

                $('.modal-title').append('Informações do Produto Selecionado')
                $('.modal-body').append(body)

                $('#modalBunitinhu').modal('show')
            })
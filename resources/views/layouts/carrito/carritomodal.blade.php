<!-- Modal -->
<div class="modal fade modal-right" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">




      <div class="modal-header sticky-top bg-dark">
        <h5 class="modal-title text-center" id="exampleModalLabel">Tu Carrito</h5>
         <i type="button" data-bs-dismiss="modal" class="fas fa-times"></i>
      </div>





      <div class="modal-body">

  
        <div ata-bs-spy="scroll" class="scrollspy-example h-20" >

                @if(session()->has('cart'))

                  @foreach ( Session::get('cart.product') as $key => $item )
                      
                      <tr>              

                          <input type="hidden" class="idid" name="id_product" id="id_product{{ $key+1 }}" value="{{ $item['id'] }}">    


                          <td> {{ $item['title'] }} </td>
                          <td> {{ $item['id'] }} </td>
                          <td> <ul style="list-style: none">
                                  <li>
                                    sku: {{ $item['sku']}}
                                  </li>
                                  <li>
                                    $ {{ $item['price']}}
                                  </li>

                                  <li>
                                    <div class="btn-group">



                                      <button type="button " class="btn btn-default col-2 menos" id="menos">
                                        <i class="fas fa-minus"></i>
                                      </button>

                                      <input class="number cant_vent col-2 text-center"  id="cantidad_en_carrito" name="cantidad_en_carrito" placeholder="" value="{{ $item['cantidad_en_carrito'] }}">
                                      
                                      <button type="button" class="btn btn-default col-2 mas" id="mas{{ $item['id'] }}">
                                        <i class="fas fa-plus"></i>
                                      </button>


                                    </div>
                                  </li>


                               </ul> 
                          </td>

                      </tr>  
                  @endforeach             


                @else
                      <tr>                    
                          <td>No existe carrito</td>
                      </tr> 
                @endif             
     
  

         </div>

      </div>


      <div class="d-grid gap-2 col-12 mx-auto sticky-bottom bg-dark footer-buttons-modal-cart">
        <button type="button" class="verde btn-lg rounded col-12 mb-3 mt-3 btn-pay" data-bs-dismiss="modal"><strong class="text-uppercase color-blanco">Pagar</strong></button>
       
      </div>


    </div>
  </div>
</div>

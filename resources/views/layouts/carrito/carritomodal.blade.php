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

                 
                      <tr>                    
                          <td>{{$item->title}}</td>
                          <td>asd</td>
                      </tr>  
                            

                @else
                      <tr>                    
                          <td>No existe carrito</td>
                      </tr> 
                @endif             
     
  

         </div>

      </div>


      <div class="d-grid gap-2 col-12 mx-auto sticky-bottom bg-dark footer-buttons-modal-cart">
        <button type="button" class="verde btn-lg rounded col-12 mb-3 mt-3 btn-pay" data-bs-dismiss="modal"><strong class="text-uppercase color-blanco">Pagar</strong></button>
        <button type="button" class="palido btn-lg rounded col-12 mb-3 btn-cart"><strong class="text-uppercase">Ver Carrito</strong></button>
      </div>


    </div>
  </div>
</div>

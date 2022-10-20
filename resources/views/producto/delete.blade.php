<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$producto->intId}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="{{route('producto.destroy',$producto->intId)}}" method="POST">
          @csrf
          {{method_field('DELETE')}}
  
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminación de registros</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ¿Deseas eliminar al comprador {{$producto->vchNombre}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cerrar</button>
          <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
        </div>
      </div>
      </form>
    </div>
  </div>
  
<!-- Modal Create -->
        <div class="modal fade" id="delete{{ $key->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('delete.category') }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" namae="id" value="{{ $key->id }}">
                    <p>Yakin ingin menghapus data {{ $key->category }} ?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit"  class="btn btn-danger">Delete</button>
            </div>
          </div>
          </form>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
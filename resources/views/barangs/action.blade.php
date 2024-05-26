<div class="d-flex justify-content-center">
    <a href="{{ route('barangs.show', ['barang' => $barang->id]) }}" class="btn btn-primary btn-sm me-2">Show</a>
    <a href="{{ route('barangs.edit', ['barang' => $barang->id]) }}" class="btn btn-warning btn-sm me-2">Edit</a>
    <form action="{{ route('barangs.destroy', ['barang' => $barang->id]) }}" method="POST">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-danger btn-sm me-2" onclick="return confirm('Data akan dihapus, apakah Anda yakin?');">Delete</button>
    </form>
</div>

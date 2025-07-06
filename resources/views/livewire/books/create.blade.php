<flux:modal name="create-books" class="w-[900px] max-h-[80vh] overflow-y-auto custom-scrollbar">
    <form wire:submit.prevent="store" enctype="multipart/form-data">
        <div class="modal-header border-bottom">
            <h5 class="modal-title block text-sm font-medium text-gray-700">Tambah Buku</h5>
        </div>

        <div class="modal-body">
            <div class="mb-3">
                <label class="form-label block text-sm font-medium text-gray-700">Nama Buku</label>
                <input type="text" class="form-control" wire:model.defer="name_book" placeholder="Misal: Laskar Pelangi">
            </div>

            <div class="mb-3">
                <label class="form-label block text-sm font-medium text-gray-700">Penulis</label>
                <input type="text" class="form-control" wire:model.defer="author" placeholder="Misal: Andrea Hirata">
            </div>

            <div class="mb-3">
                <label class="form-label block text-sm font-medium text-gray-700">Penerbit</label>
                <input type="text" class="form-control" wire:model.defer="publisher" placeholder="Misal: Bentang Pustaka">
            </div>

            <div class="mb-3">
                <label class="form-label block text-sm font-medium text-gray-700">Tanggal Terbit</label>
                <input type="date" class="form-control" wire:model.defer="publication_date">
            </div>

            <div class="mb-3">
                <label class="form-label block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea class="form-control" wire:model.defer="description" rows="3" placeholder="Deskripsi singkat buku..."></textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">ISBN</label>
                <input type="text" class="form-control" wire:model.defer="isbn" placeholder="978-602-xxx">
            </div>

            <div class="mb-3">
                <label class="form-label block text-sm font-medium text-gray-700">Stok</label>
                <input type="number" class="form-control" wire:model.defer="stock" min="0">
            </div>

            <div class="mb-3">
                <label class="form-label block text-sm font-medium text-gray-700">Kategori ID</label>
                <select wire:model.defer="id_category" class="form-control">
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id_category }}">{{ $category->name_category }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label block text-sm font-medium text-gray-700">Foto Buku</label>
                <input type="file" class="form-control" wire:model="photo_book">
            </div>
        </div>

        <div class="modal-footer border-top">
            <button type="button" class="btn btn-secondary" @click="$dispatch('close')">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</flux:modal>

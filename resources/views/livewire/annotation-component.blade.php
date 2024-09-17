<div>
    <!-- Exibir mensagem de sucesso -->
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <!-- Formulário de Anotação -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Criar Anotação</h3>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="saveAnnotation">
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" wire:model="title">
                    @error('title') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <div class="form-group">
                    <label for="content">Conteúdo</label>
                    <textarea class="form-control" id="content" wire:model="content" rows="4"></textarea>
                    @error('content') <span class="text-danger">{{ $message }}</span> @enderror
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>

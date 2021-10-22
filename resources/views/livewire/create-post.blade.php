<div>
    <x-jet-danger-button wire:click="$set('open', true)">
        Ingresar data
    </x-jet-danger-button>

    <x-jet-dialog-modal wire:model="open">

        <x-slot name="title">
            Ingresar nuevos datos

        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-jet-label value="Ingrese el título"/>
                <x-jet-input type="text" class="w-full" wire:model.defer="title"/>


            </div>

            <div>

                <x-jet-label value="Ingrese el Contenido"/>
                <x-jet-input type="text" class="w-full" wire:model.defer="content"/>



                </div>




        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open', false)">
                Cancelar

            </x-jet-secondary-button>

            <x-jet-danger-button wire:click="save">
                Ingresar Datos
            </x-jet-danger-button>

        </x-slot>


    </x-jet-dialog-modal>

</div>

<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>

            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">    
                <form>
                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">

        
                        <div class="mb-4">
                            <label for="dates" class="block text-gray-700 text-sm font-bold mb-2">Fecha:</label>
                            <input type="date" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="dates" wire:model="dates">
                        </div>

                        <div class="mb-4">
                            <label for="bill_numbers" class="block text-gray-700 text-sm font-bold mb-2">Numero de factura:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="bill_numbers" wire:model="bill_numbers">
                        </div>

                        <div class="mb-4">
                            <label for="sellers" class="block text-gray-700 text-sm font-bold mb-2">Vendedor:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="sellers" wire:model="sellers">
                        </div>

                        <div class="mb-4">
                            <label for="payments_methods" class="block text-gray-700 text-sm font-bold mb-2">Forma de pago:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="payments_methods" wire:model="payments_methods">
                        </div>

                        <div class="mb-4">
                            <label for="observations" class="block text-gray-700 text-sm font-bold mb-2">Observaciones:</label>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="observations" wire:model="observations">
                        </div>

                        
                        <div class="mb-4">
                            <label for="discounts_total" class="block text-gray-700 text-sm font-bold mb-2">Descuento total:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="discounts_total" wire:model="discounts_total">
                        </div>

                        <div class="mb-4">
                            <label for="gross_totals" class="block text-gray-700 text-sm font-bold mb-2">Total bruto:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="gross_totals" wire:model="gross_totals">
                        </div>

                        <div class="mb-4">
                            <label for="taxes_total" class="block text-gray-700 text-sm font-bold mb-2">Total impuesto a cargo:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="taxes_total" wire:model="taxes_total">
                        </div>

                        <div class="mb-4">
                            <label for="net_total" class="block text-gray-700 text-sm font-bold mb-2">Total neto:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="net_total" wire:model="net_total">
                        </div>

                        <div class="mb-4">
                            <label for="values_total" class="block text-gray-700 text-sm font-bold mb-2">Valor total:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="values_total" wire:model="values_total">
                        </div>


                        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click.prevent="guardar()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">Guardar</button>
                            </span>

                            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                <button wire:click="cerrarModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-gray-200 text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">Cancelar</button>
                            </span>
                        </div>

                    </div>
                </form>    
            </div>


    </div>
</div>
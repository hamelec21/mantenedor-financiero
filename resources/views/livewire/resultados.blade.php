<div>
    <div class="bg-gray-100 flex items-center justify-center  font-sans overflow-hidden ">
        <div class="w-full lg:w-5/6">
            <div class="container">
                <div class="flex flex-cols-3 justify-between">
                          <!--card-->
                    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20 bg-sky-600">
                            <div>
                                <h2 class="text-gray-100 text-3xl font-semibold text-center">Ingresos</h2>
                                <p class="mt-2 text-gray-100 text-3xl font-bold">${{ number_format($ingresos) }}</p>
                            </div>
                    </div> 

                   
                    
                    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20 bg-red-700">
                            <div>
                            <h2 class="text-gray-100 text-3xl font-semibold text-center">Egresos</h2>
                                <p class="mt-2 text-gray-100 text-3xl font-bold">${{ number_format($egresos) }}</p>
                            </div>
                    </div>

                    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20 bg-green-600">
                            <div>
                            <h2 class="text-gray-100 text-3xl font-semibold text-center">Total Mes</h2>
                                <p class="mt-2 text-gray-100 text-3xl font-bold">${{ number_format($saldo) }}</p>
                            </div>
                    </div>
                    
                </div>
                   
            </div>
        </div>
    </div>

</div>

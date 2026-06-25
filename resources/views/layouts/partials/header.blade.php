<header class="sticky top-0 z-50 bg-white shadow-md">
    <nav class="flex items-center justify-between px-0 md:px-20 2xl:px-100 py-2 mx-auto">
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <img src="{{ asset('assets/images/logo.png') }}" class="h-12 md:h-16" alt="LOGO EQF">
        </a>

        <input type="checkbox" id="menu-toggle" class="hidden peer" />
        <label for="menu-toggle" class="sm:hidden p-2 cursor-pointer">
            <span class="block w-6 h-[2px] bg-eqfRed my-1"></span>
            <span class="block w-6 h-[2px] bg-eqfRed my-1"></span>
            <span class="block w-6 h-[2px] bg-eqfRed my-1"></span>
        </label>

        <div class="hidden sm:flex items-center gap-8 font-semibold peer-checked:flex flex-col sm:flex-row absolute sm:static top-full left-0 w-full sm:w-auto bg-white sm:bg-transparent p-4 sm:p-0 text-eqfBlue">
            <a href="{{ route('productos.index') }}" class="group relative py-1 hover:text-blue-700 transition-colors duration-200">
                Productos
                <span class="absolute left-0 bottom-0 h-[3px] w-0 bg-eqfRed transition-all duration-200 group-hover:w-full"></span>
            </a>
            <a href="{{ route('sucursals.index') }}" class="group relative py-1 hover:text-blue-700 transition-colors duration-200">
                Sucursales
                <span class="absolute left-0 bottom-0 h-[3px] w-0 bg-eqfRed transition-all duration-200 group-hover:w-full"></span>
            </a>
            <a href="#" class="bg-eqfRed text-white font-bold px-6 py-2 rounded-full whitespace-nowrap transition-transform duration-200 hover:bg-red-700 hover:-translate-y-[1px]">
                ¡Unete a EQF!
            </a>
        </div>
    </nav>
</header>

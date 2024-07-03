<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')
    <title>SIPD | EDB_GIS</title>
</head>
<body>

    <div class="sidebar group fixed transition-all left-0 top-0 h-screen max-h-screen w-[70px] bg-slate-700 z-50 flex flex-col hover:w-[225px]">
        <div class="w-full h-[70px] py-5 flex justify-center items-center gap-5 border-b-2 border-slate-600">
            <img class="w-[40px]" src="https://sipd-ri.kemendagri.go.id/edb_gis/9811238db640c10e7eadff0946126b396e122391/views/assets/logo/logo.png" alt="logo">
            <h1 class="text hidden text-white font-bold text-2xl group-hover:block">SIPD</h1>
        </div>
        <ul class="flex flex-col gap-7 py-5 overflow-y-auto no-scrollbar">
            <li class="px-5">
                <div class="text-white hidden text-nowrap font-bold cap group-hover:block">Menu Utama</div>
                <div class="text-white text-center small-cap group-hover:hidden">...</div>
            </li>
            <li class="px-5">
                <a href="">
                    <div class="text-white font-bold text-center icon group-hover:float-left">
                        <i class="fa-solid fa-chart-simple"></i>
                    </div>
                    <div class="text-white pl-3 hidden text-nowrap cap text-ellipsis overflow-hidden group-hover:block">Dashboard</div>
                </a>
            </li>
            <li class="px-5">
                <a href="">
                    <div class="text-white font-bold text-center icon group-hover:float-left">
                        <i class="fa-solid fa-folder"></i>
                    </div>
                    <div class="text-white pl-3 hidden text-nowrap cap text-ellipsis overflow-hidden group-hover:block">Rekap</div>
                </a>
            </li>
            <li class="px-5" onclick="activeList('p')" id="hidden-list">
                <a href="#" class="collappse group-hover:flex group-hover:items-center">
                    <div class="text-white font-bold text-center icon group-hover:float-left">
                        <i class="fa-solid fa-circle-info"></i>
                    </div>
                    <div class="text-white pl-3 hidden text-nowrap cap text-ellipsis overflow-hidden group-hover:block">Informasi Pembangunan</div>
                    <i class="fa-solid fa-chevron-left hidden cap text-white ml-2 arrow transition-all group-hover:block"></i>
                </a>
                <ul class="hidden flex-col gap-7 py-7 hidden-list">
                    <li class="">
                        <a href="">
                            <div class="text-white hidden text-nowrap cap px-7 group-hover:block">Tematik</div>
                            <div class="text-white text-center small-cap group-hover:hidden"><i class="fa-solid fa-tag"></i></div>
                        </a>
                    </li>
                    <li class="">
                        <a href="">
                            <div class="text-white hidden text-nowrap cap px-7 group-hover:block">Urusan Pemerintahan</div>
                            <div class="text-white text-center small-cap group-hover:hidden"><i class="fa-solid fa-tag"></i></div>
                        </a>
                    </li>
                    <li class="">
                        <a href="">
                            <div class="text-white hidden text-nowrap cap px-7 group-hover:block">Sumber Pendanaan</div>
                            <div class="text-white text-center small-cap group-hover:hidden"><i class="fa-solid fa-circle-dollar-to-slot"></i></div>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="border-t-2 border-slate-400"></li>
        </ul>
    </div>

    <div class="fixed top-0 left-0 w-screen h-[70px] flex bg-gradient-to-r from-blue-600 to-green-600 topbar after:absolute after:w-full after:top-0 after:left-0 after:bg-[url('http://edbgis.test/assets/images/pattern.png')] after:bg-contain after:h-full after:opacity-60">
        <div class="w-[70px] space"></div>
        <div class="flex justify-between items-center px-5">
            <a href="#" class="text-white absolute z-50" id="bars">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
    </div>

    <section class="ml-[70px] mt-[60px] p-5 transition-all">
        @yield('content')
    </section>



    <script>
        const bars = document.getElementById('bars')
        const hiddenList = document.getElementById('hidden-list')

        bars.onclick = ()=>{
            const bodyCuy = document.body

            if(bodyCuy.classList.contains('active-navbar')){
                bodyCuy.classList.remove('active-navbar')
            }else{
                bodyCuy.classList.add('active-navbar')
            }
        }


        function activeList(e){
            if(hiddenList.classList.contains('active-list')){
                hiddenList.classList.remove('active-list')
            }else{
                hiddenList.classList.add('active-list')
            }
        }
    </script>
</body>
</html>
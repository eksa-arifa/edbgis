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
    <div class="group">
        <div class="sidebar  sm:group-hover:w-[225px] transition-all w-screen sm:w-[70px] h-[70px] fixed top-0 left-0 z-50 bg-slate-700 p-5 sm:py-5 sm:px-0 flex justify-between sm:justify-center items-center gap-5 border-b-2 border-slate-600">
            <a href="#" class="text-white block sm:hidden" id="smoll-bar"> 
                <i class="fa-solid fa-bars"></i>
            </a>
            <div class="flex justify-center items-center w-full">
                <img class="w-[40px]" src="https://sipd-ri.kemendagri.go.id/edb_gis/9811238db640c10e7eadff0946126b396e122391/views/assets/logo/logo.png" alt="logo">
                <h1 class="text block sm:hidden text-white font-bold text-2xl sm:group-hover:block ml-2">SIPD</h1>
            </div>
            <div class="sm:hidden"></div>
        </div>
        <div class="sidebar smoll fixed transition-all -left-[225px] sm:left-0 top-[70px] h-screen max-h-screen w-[225px] sm:w-[70px] bg-slate-700 z-50 flex flex-col sm:group-hover:w-[225px]">
            <ul class="flex flex-col gap-7 py-5 overflow-y-auto no-scrollbar">
                <li class="px-5">
                    <div class="text-white block sm:hidden text-nowrap font-bold cap sm:group-hover:block">Menu Utama</div>
                    <div class="text-white hidden sm:block text-center small-cap sm:group-hover:hidden">...</div>
                </li>
                <li class="px-5">
                    <a href="">
                        <div class="text-white font-bold text-center icon float-left sm:float-none sm:group-hover:float-left">
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <div class="text-white pl-3 block sm:hidden text-nowrap cap text-ellipsis overflow-hidden sm:group-hover:block">Dashboard</div>
                    </a>
                </li>
                <li class="px-5">
                    <a href="">
                        <div class="text-white font-bold text-center icon sm:float-none float-left sm:group-hover:float-left">
                            <i class="fa-solid fa-folder"></i>
                        </div>
                        <div class="text-white pl-3 block sm:hidden text-nowrap cap text-ellipsis overflow-hidden sm:group-hover:block">Rekap</div>
                    </a>
                </li>
                <li class="px-5 hidden-list" id="hidden-list">
                    <a href="#" class="collappse flex items-center sm:block sm:group-hover:flex sm:group-hover:items-center">
                        <div class="text-white font-bold text-center icon sm:group-hover:float-left">
                            <i class="fa-solid fa-circle-info"></i>
                        </div>
                        <div class="text-white pl-3 block sm:hidden text-nowrap cap text-ellipsis overflow-hidden sm:group-hover:block">Informasi Pembangunan</div>
                        <i class="fa-solid fa-chevron-left block sm:hidden cap text-white ml-2 arrow transition-all sm:group-hover:block"></i>
                    </a>
                    <ul class="hidden flex-col gap-7 py-7 hidden-list">
                        <li class="">
                            <a href="">
                                <div class="text-white block sm:hidden text-nowrap cap px-7 sm:group-hover:block">Tematik</div>
                                <div class="text-white text-center hidden sm:block small-cap sm:group-hover:hidden"><i class="fa-solid fa-tag"></i></div>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <div class="text-white block sm:hidden text-nowrap cap px-7 sm:group-hover:block">Urusan Pemerintahan</div>
                                <div class="text-white text-center hidden sm:block small-cap sm:group-hover:hidden"><i class="fa-solid fa-tag"></i></div>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <div class="text-white  block sm:hidden text-nowrap cap px-7 sm:group-hover:block">Sumber Pendanaan</div>
                                <div class="text-white text-center hidden sm:block small-cap sm:group-hover:hidden"><i class="fa-solid fa-circle-dollar-to-slot"></i></div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="border-t-2 border-slate-400"></li>
                <li class="px-5">
                    <div class="text-white block sm:hidden text-nowrap font-bold cap sm:group-hover:block">Provinsi</div>
                    <div class="text-white hidden sm:block text-center small-cap sm:group-hover:hidden">...</div>
                </li>
                <li class="px-5 hidden-list" id="hidden-list">
                    <a href="#" class="collappse flex sm:block items-center justify-between sm:group-hover:flex sm:group-hover:items-center sm:group-hover:justify-between">
                        <div class="text-white text-center icon float-left sm:float-none sm:group-hover:float-left flex items-center sm:block sm:group-hover:flex sm:group-hover:items-center collapse-title">
                            <i class="fa-solid fa-location-pin"></i>
                            <div class="text-white pl-3 block sm:hidden text-nowrap cap text-ellipsis overflow-hidden sm:group-hover:block">Jawa Timur</div>
                        </div>
                        <i class="fa-solid fa-chevron-left block sm:hidden cap text-white ml-2 arrow transition-all sm:group-hover:block"></i>
                    </a>
                    <ul class="hidden flex-col gap-7 py-7 hidden-list">
                        <li class="">
                            <a href="">
                                <div class="text-white block sm:hidden text-nowrap cap px-7 sm:group-hover:block">Data Provinsi</div>
                                <div class="text-white hidden sm:block text-center small-cap sm:group-hover:hidden"><i class="fa-solid fa-tag"></i></div>
                            </a>
                        </li>
                        <li class="">
                            <a href="">
                                <div class="text-white block sm:hidden text-nowrap cap px-7 sm:group-hover:block">Data Per Kab/Kota</div>
                                <div class="text-white hidden sm:block text-center small-cap sm:group-hover:hidden"><i class="fa-solid fa-tag"></i></div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="fixed top-0 left-0 w-screen h-[70px] flex bg-gradient-to-r from-blue-600 to-green-600 topbar after:absolute after:w-full after:top-0 after:left-0 after:bg-[url('http://localhost:8000/assets/images/pattern.png')] after:bg-contain after:h-full after:opacity-60">
        <div class="w-[70px] space"></div>
        <div class="flex justify-between items-center px-5">
            <a href="#" class="text-white absolute z-50" id="bars">
                <i class="fa-solid fa-bars"></i>
            </a>
        </div>
    </div>

    <section class="sm:ml-[70px] mt-[70px] pt-[25px] px-[30px] transition-all">
        @yield('content')
    </section>



    <script>
        const bars = document.getElementById('bars')
        const smollBar = document.getElementById('smoll-bar')
        const hiddenList = document.querySelectorAll('.hidden-list')

        bars.onclick = ()=>{
            const bodyCuy = document.body

            if(bodyCuy.classList.contains('active-navbar')){
                bodyCuy.classList.remove('active-navbar')
            }else{
                bodyCuy.classList.add('active-navbar')
            }
        }

        smollBar.onclick = ()=>{
            const bodyCuy = document.body

            if(bodyCuy.classList.contains('active-small-device-sidebar')){
                bodyCuy.classList.remove('active-small-device-sidebar')
            }else{
                bodyCuy.classList.add('active-small-device-sidebar')
            }
        }


        for(let i = 0; i < hiddenList.length; i++){
            hiddenList[i].onclick = ()=>{
                if(hiddenList[i].classList.contains('active-list')){
                hiddenList[i].classList.remove('active-list')
            }else{
                hiddenList[i].classList.add('active-list')
            }
            }
        }
    </script>
</body>
</html>
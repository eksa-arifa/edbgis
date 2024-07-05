@extends('layouts.global')


@section('content')
    <div class="flex justify-between items-center self-center">
        <div class="">
            <h1 class="text-2xl ">Dashboard</h1>
        </div>
        <div class="h-auto w-auto ">
            <div class="">
                <select name="tahun" id="tahun" class="bg-red-600 rounded-full py-2 px-5 text-white font-semibold">
                    <option value="2025" class="bg-white text-black">Tahun 2025</option>
                    <option value="2024" class="bg-white text-black">Tahun 2024</option>
                    <option value="2023" class="bg-white text-black">Tahun 2023</option>
                    <option value="2022" class="bg-white text-black">Tahun 2022</option>
                    <option value="2021" class="bg-white text-black">Tahun 2021</option>
                    <option value="2020" class="bg-white text-black">Tahun 2020</option>
                </select>
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="text-lg w-full py-3 px-5 mb-4 bg-[#ccecfe] text-[#005283] border border-[#b8e4fe] rounded-sm">
            <div class=" ">Posisi Per-Provinsi Tahun: <b>2024</b></div>
        </div>
        <h1 class="text-xl mb-2">RKPD</h1>
        <div class="w-full grid grid-cols-3 gap-8 mb-8">
            <div>
                <div class="w-full border border-[red] p-5 text-[red] rounded-md flex justify-between">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-2xl text-black">4</h1>
                        <h1>Belum Input</h1>
                    </div>
                    <i class="fa-2xl fa-solid fa-chart-simple content-center"></i>
                </div>
            </div>
            <div>
                <div class="w-full border border-[green] p-5 text-[green] rounded-md flex justify-between">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-2xl text-black">0</h1>
                        <h1>Belum Input</h1>
                    </div>
                    <i class="fa-2xl fa-solid fa-chart-simple content-center"></i>
                </div>
            </div>            
            <div>
                <div class="w-full border border-[black] p-5 text-[black] rounded-md flex justify-between">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-2xl text-black">0</h1>
                        <h1>Belum Input</h1>
                    </div>
                    <i class="fa-2xl fa-solid fa-chart-simple content-center"></i>
                </div>
            </div>            
            <div>
                <div class="w-full border border-[orange] p-5 text-[orange] rounded-md flex justify-between">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-2xl text-black">0</h1>
                        <h1>Belum Input</h1>
                    </div>
                    <i class="fa-2xl fa-solid fa-chart-simple content-center"></i>
                </div>
            </div>            
            <div>
                <div class="w-full border border-[purple] p-5 text-[purple] rounded-md flex  justify-between">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-2xl text-black">0</h1>
                        <h1>Belum Input</h1>
                    </div>
                    <i class="fa-2xl fa-solid fa-chart-simple content-center"></i>
                </div>
            </div>            
            <div>
                <div class="w-full border border-[blue] p-5 text-[blue] rounded-md flex justify-between">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-2xl text-black">0</h1>
                        <h1>Belum Input</h1>
                    </div>
                    <i class="fa-2xl fa-solid fa-chart-simple content-center"></i>
                </div>
            </div>
        </div>
        <h1 class="text-xl mb-2">KUA dan PPAS</h1>
        <div class="w-full grid grid-cols-2 gap-8 mb-8">
            <div>
                <div class="flex flex-row content-center justify-between w-full border border-[red] p-5 text-[red] rounded-md">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-2xl text-black">0</h1>
                        <h1>Belum Input</h1>
                    </div>
                    <i class="fa-2xl fa-solid fa-chart-simple content-center"></i>
                </div>
            </div>            
            <div>
                <div class="flex flex-row content-center justify-between w-full border border-[red] p-5 text-[red] rounded-md">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-2xl text-black">0</h1>
                        <h1>Belum Input</h1>
                    </div>
                    <i class="fa-2xl fa-solid fa-chart-simple content-center"></i>
                </div>
            </div>
        </div>        
        <h1 class="text-xl mb-2">APBD</h1>
        <div class="w-full grid grid-cols-2 gap-8 mb-8">
            <div>
                <div class="flex flex-row content-center justify-between w-full border border-[red] p-5 text-[red] rounded-md">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-2xl text-black">0</h1>
                        <h1>Belum Input</h1>
                    </div>
                    <i class="fa-2xl fa-solid fa-chart-simple content-center"></i>
                </div>
            </div>            
            <div>
                <div class="flex flex-row content-center justify-between w-full border border-[red] p-5 text-[red] rounded-md">
                    <div class="flex flex-col justify-center">
                        <h1 class="text-2xl text-black">0</h1>
                        <h1>Belum Input</h1>
                    </div>
                    <i class="fa-2xl fa-solid fa-chart-simple content-center"></i>
                </div>
            </div>
        </div>
    </div>
@endsection